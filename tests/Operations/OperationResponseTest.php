<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Tests\Operations;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Prefabcortex\FedexShipApi\Client;
use Prefabcortex\FedexShipApi\ClientConfig;
use Prefabcortex\FedexShipApi\Exception\ApiException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentBadRequestException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentForbiddenException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentNotFoundException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentBadRequestException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentForbiddenException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentNotFoundException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsBadRequestException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsForbiddenException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsNotFoundException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\MalformedDataException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateBadRequestException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateForbiddenException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexShipApi\Http\JsonBody;
use Prefabcortex\FedexShipApi\Http\ValidationMode;
use Prefabcortex\FedexShipApi\Optional\None;
use Prefabcortex\FedexShipApi\Parameter\CancelShipmentHeaderParameters;
use Prefabcortex\FedexShipApi\Parameter\CreateShipmentHeaderParameters;
use Prefabcortex\FedexShipApi\Parameter\GetConfirmedShipmentAsyncResultsHeaderParameters;
use Prefabcortex\FedexShipApi\Parameter\ShipmentPackageValidateHeaderParameters;
use Prefabcortex\FedexShipApi\Tests\Fixture\CannedResponse;
use Prefabcortex\FedexShipApi\Tests\Fixture\ModelFixtures;
use Prefabcortex\FedexShipApi\Tests\Fixture\RecordingHttpClient;
use RuntimeException;

use function sprintf;

/**
 * Every response an operation reads, answered once through the method that reads it.
 *
 * A recorded client answers with the status and content type of one branch and a body built from
 * the model fixtures; the test checks that the model comes back, or the declared exception with the
 * response still readable. A status no response declares and a declared status under the wrong
 * content type are answered too.
 *
 * What this cannot show: that the service sends these documents. They come from the same
 * description the client came from, so this proves the package reads what it promises.
 */
final class OperationResponseTest extends TestCase
{
    private const string BASE_URL = 'https://response-test.invalid';

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads200(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildSHPCResponseVOShipShipment());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(200, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $result = $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 200, $error::class, $error->getMessage()),
            );
        }
        self::assertEquals(ModelFixtures::buildSHPCResponseVOShipShipment(), $result);
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads400(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(400, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CreateShipmentBadRequestException for its %d response',
                    'createShipment',
                    400,
                ),
            );
        } catch (CreateShipmentBadRequestException $exception) {
            self::assertSame(400, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO(), $exception->getErrorResponseVO());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 400, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads401(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO401());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(401, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CreateShipmentUnauthorizedException for its %d response',
                    'createShipment',
                    401,
                ),
            );
        } catch (CreateShipmentUnauthorizedException $exception) {
            self::assertSame(401, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO401(), $exception->getErrorResponseVO401());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 401, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads403(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO403());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(403, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf('%s did not throw CreateShipmentForbiddenException for its %d response', 'createShipment', 403),
            );
        } catch (CreateShipmentForbiddenException $exception) {
            self::assertSame(403, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO403(), $exception->getErrorResponseVO403());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 403, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads404(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO404());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(404, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf('%s did not throw CreateShipmentNotFoundException for its %d response', 'createShipment', 404),
            );
        } catch (CreateShipmentNotFoundException $exception) {
            self::assertSame(404, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO404(), $exception->getErrorResponseVO404());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 404, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads500(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO500());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(500, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CreateShipmentInternalServerErrorException for its %d response',
                    'createShipment',
                    500,
                ),
            );
        } catch (CreateShipmentInternalServerErrorException $exception) {
            self::assertSame(500, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO500(), $exception->getErrorResponseVO500());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 500, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentReads503(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO503());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(503, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CreateShipmentServiceUnavailableException for its %d response',
                    'createShipment',
                    503,
                ),
            );
        } catch (CreateShipmentServiceUnavailableException $exception) {
            self::assertSame(503, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO503(), $exception->getErrorResponseVO503());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 503, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentRejectsAnUndeclaredStatus(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                599,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedStatusCodeException for a %d response it cannot read',
                    'createShipment',
                    599,
                ),
            );
        } catch (UnexpectedStatusCodeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 599, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCreateShipmentRejectsAnUndeclaredContentType(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                200,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->createShipment(None::create(), new CreateShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedContentTypeException for a %d response it cannot read',
                    'createShipment',
                    200,
                ),
            );
        } catch (UnexpectedContentTypeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'createShipment', 200, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads200(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildSHPCResponseVOCancelShipment());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(200, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $result = $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 200, $error::class, $error->getMessage()),
            );
        }
        self::assertEquals(ModelFixtures::buildSHPCResponseVOCancelShipment(), $result);
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads400(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(400, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CancelShipmentBadRequestException for its %d response',
                    'cancelShipment',
                    400,
                ),
            );
        } catch (CancelShipmentBadRequestException $exception) {
            self::assertSame(400, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 400, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads401(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4012());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(401, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CancelShipmentUnauthorizedException for its %d response',
                    'cancelShipment',
                    401,
                ),
            );
        } catch (CancelShipmentUnauthorizedException $exception) {
            self::assertSame(401, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4012(), $exception->getErrorResponseVO401_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 401, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads403(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4032());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(403, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf('%s did not throw CancelShipmentForbiddenException for its %d response', 'cancelShipment', 403),
            );
        } catch (CancelShipmentForbiddenException $exception) {
            self::assertSame(403, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4032(), $exception->getErrorResponseVO403_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 403, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads404(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4042());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(404, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf('%s did not throw CancelShipmentNotFoundException for its %d response', 'cancelShipment', 404),
            );
        } catch (CancelShipmentNotFoundException $exception) {
            self::assertSame(404, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4042(), $exception->getErrorResponseVO404_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 404, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads500(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO5002());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(500, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CancelShipmentInternalServerErrorException for its %d response',
                    'cancelShipment',
                    500,
                ),
            );
        } catch (CancelShipmentInternalServerErrorException $exception) {
            self::assertSame(500, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO5002(), $exception->getErrorResponseVO500_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 500, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentReads503(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO5032());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(503, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw CancelShipmentServiceUnavailableException for its %d response',
                    'cancelShipment',
                    503,
                ),
            );
        } catch (CancelShipmentServiceUnavailableException $exception) {
            self::assertSame(503, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO5032(), $exception->getErrorResponseVO503_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 503, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentRejectsAnUndeclaredStatus(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                599,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedStatusCodeException for a %d response it cannot read',
                    'cancelShipment',
                    599,
                ),
            );
        } catch (UnexpectedStatusCodeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 599, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testCancelShipmentRejectsAnUndeclaredContentType(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                200,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->cancelShipment(None::create(), new CancelShipmentHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedContentTypeException for a %d response it cannot read',
                    'cancelShipment',
                    200,
                ),
            );
        } catch (UnexpectedContentTypeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'cancelShipment', 200, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads200(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildSHPCResponseVOGetOpenShipmentResults());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(200, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $result = $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    200,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
        self::assertEquals(ModelFixtures::buildSHPCResponseVOGetOpenShipmentResults(), $result);
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads400(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(400, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsBadRequestException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    400,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsBadRequestException $exception) {
            self::assertSame(400, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    400,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads401(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4012());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(401, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsUnauthorizedException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    401,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsUnauthorizedException $exception) {
            self::assertSame(401, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4012(), $exception->getErrorResponseVO401_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    401,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads403(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4032());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(403, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsForbiddenException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    403,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsForbiddenException $exception) {
            self::assertSame(403, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4032(), $exception->getErrorResponseVO403_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    403,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads404(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO4042());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(404, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsNotFoundException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    404,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsNotFoundException $exception) {
            self::assertSame(404, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO4042(), $exception->getErrorResponseVO404_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    404,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads500(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO5002());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(500, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsInternalServerErrorException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    500,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsInternalServerErrorException $exception) {
            self::assertSame(500, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO5002(), $exception->getErrorResponseVO500_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    500,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsReads503(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO5032());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(503, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw GetConfirmedShipmentAsyncResultsServiceUnavailableException for its %d response',
                    'getConfirmedShipmentAsyncResults',
                    503,
                ),
            );
        } catch (GetConfirmedShipmentAsyncResultsServiceUnavailableException $exception) {
            self::assertSame(503, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO5032(), $exception->getErrorResponseVO503_2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    503,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsRejectsAnUndeclaredStatus(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                599,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedStatusCodeException for a %d response it cannot read',
                    'getConfirmedShipmentAsyncResults',
                    599,
                ),
            );
        } catch (UnexpectedStatusCodeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    599,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testGetConfirmedShipmentAsyncResultsRejectsAnUndeclaredContentType(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                200,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->getConfirmedShipmentAsyncResults(
                None::create(),
                new GetConfirmedShipmentAsyncResultsHeaderParameters('smoke-test'),
            );
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedContentTypeException for a %d response it cannot read',
                    'getConfirmedShipmentAsyncResults',
                    200,
                ),
            );
        } catch (UnexpectedContentTypeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'getConfirmedShipmentAsyncResults',
                    200,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateReads200(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildSHPCResponseVOValidate());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(200, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $result = $client->shipmentPackageValidate(
                None::create(),
                new ShipmentPackageValidateHeaderParameters('smoke-test'),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    200,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
        self::assertEquals(ModelFixtures::buildSHPCResponseVOValidate(), $result);
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateReads400(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(400, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw ShipmentPackageValidateBadRequestException for its %d response',
                    'shipmentPackageValidate',
                    400,
                ),
            );
        } catch (ShipmentPackageValidateBadRequestException $exception) {
            self::assertSame(400, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    400,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateReads401(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(401, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw ShipmentPackageValidateUnauthorizedException for its %d response',
                    'shipmentPackageValidate',
                    401,
                ),
            );
        } catch (ShipmentPackageValidateUnauthorizedException $exception) {
            self::assertSame(401, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    401,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateReads403(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(403, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw ShipmentPackageValidateForbiddenException for its %d response',
                    'shipmentPackageValidate',
                    403,
                ),
            );
        } catch (ShipmentPackageValidateForbiddenException $exception) {
            self::assertSame(403, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    403,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateReads500(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO2());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(500, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw ShipmentPackageValidateInternalServerErrorException for its %d response',
                    'shipmentPackageValidate',
                    500,
                ),
            );
        } catch (ShipmentPackageValidateInternalServerErrorException $exception) {
            self::assertSame(500, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO2(), $exception->getErrorResponseVO2());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    500,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateRejectsAnUndeclaredStatus(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                599,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedStatusCodeException for a %d response it cannot read',
                    'shipmentPackageValidate',
                    599,
                ),
            );
        } catch (UnexpectedStatusCodeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    599,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testShipmentPackageValidateRejectsAnUndeclaredContentType(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                200,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->shipmentPackageValidate(None::create(), new ShipmentPackageValidateHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedContentTypeException for a %d response it cannot read',
                    'shipmentPackageValidate',
                    200,
                ),
            );
        } catch (UnexpectedContentTypeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf(
                    '%s answered %d with %s: %s',
                    'shipmentPackageValidate',
                    200,
                    $error::class,
                    $error->getMessage(),
                ),
            );
        }
    }
}

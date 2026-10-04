<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Examples\Operations;

use Prefabcortex\FedexShipApi\Client;
use Prefabcortex\FedexShipApi\Exception\ApiException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsBadRequestException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsForbiddenException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsNotFoundException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\GetConfirmedShipmentAsyncResultsUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\MalformedResponseException;
use Prefabcortex\FedexShipApi\Exception\ResponseValidationException;
use Prefabcortex\FedexShipApi\Exception\TransportException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexShipApi\Exception\UnsupportedValueException;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOGetOpenShipmentResults;
use Prefabcortex\FedexShipApi\Optional\Option;
use Prefabcortex\FedexShipApi\Parameter\GetConfirmedShipmentAsyncResultsHeaderParameters;

final class GetConfirmedShipmentAsyncResultsExample
{
    /**
     * This endpoint helps you to process confirmed shipments asynchronously (above 40 packages) and
     * produce results based on job id.
     *
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * Usage: pass a Client; this API declares no security scheme.
     *
     *   $client = Client::create($config);
     *   $headerParameters = new GetConfirmedShipmentAsyncResultsHeaderParameters($authorization);
     *   GetConfirmedShipmentAsyncResultsExample::getConfirmedShipmentAsyncResults($client, $requestBody, $headerParameters);
     *
     * @param Option<mixed> $requestBody
     *
     * @throws ApiException
     * @throws UnsupportedValueException
     * @throws TransportException
     * @throws ResponseValidationException
     * @throws MalformedResponseException
     * @throws GetConfirmedShipmentAsyncResultsBadRequestException
     * @throws GetConfirmedShipmentAsyncResultsUnauthorizedException
     * @throws GetConfirmedShipmentAsyncResultsForbiddenException
     * @throws GetConfirmedShipmentAsyncResultsNotFoundException
     * @throws GetConfirmedShipmentAsyncResultsInternalServerErrorException
     * @throws GetConfirmedShipmentAsyncResultsServiceUnavailableException
     * @throws UnexpectedContentTypeException
     * @throws UnexpectedStatusCodeException
     */
    public static function getConfirmedShipmentAsyncResults(
        Client $client,
        Option $requestBody,
        GetConfirmedShipmentAsyncResultsHeaderParameters $headerParameters,
    ): SHPCResponseVOGetOpenShipmentResults {
        return $client->getConfirmedShipmentAsyncResults(
            $requestBody,
            $headerParameters,
        );
    }
}

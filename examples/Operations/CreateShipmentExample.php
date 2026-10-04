<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Examples\Operations;

use Prefabcortex\FedexShipApi\Client;
use Prefabcortex\FedexShipApi\Exception\ApiException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentBadRequestException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentForbiddenException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentNotFoundException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\CreateShipmentUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\MalformedResponseException;
use Prefabcortex\FedexShipApi\Exception\ResponseValidationException;
use Prefabcortex\FedexShipApi\Exception\TransportException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexShipApi\Exception\UnsupportedValueException;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOShipShipment;
use Prefabcortex\FedexShipApi\Optional\Option;
use Prefabcortex\FedexShipApi\Parameter\CreateShipmentHeaderParameters;

final class CreateShipmentExample
{
    /**
     * This endpoint helps you to create shipment requests thereby validating all the shipping input
     * information and either generates the labels (if the responses is synchronous) or a job ID if
     * transaction is processed using asynchronous method.
     *
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * Usage: pass a Client; this API declares no security scheme.
     *
     *   $client = Client::create($config);
     *   $headerParameters = new CreateShipmentHeaderParameters($authorization);
     *   CreateShipmentExample::createShipment($client, $requestBody, $headerParameters);
     *
     * @param Option<mixed> $requestBody
     *
     * @throws ApiException
     * @throws UnsupportedValueException
     * @throws TransportException
     * @throws ResponseValidationException
     * @throws MalformedResponseException
     * @throws CreateShipmentBadRequestException
     * @throws CreateShipmentUnauthorizedException
     * @throws CreateShipmentForbiddenException
     * @throws CreateShipmentNotFoundException
     * @throws CreateShipmentInternalServerErrorException
     * @throws CreateShipmentServiceUnavailableException
     * @throws UnexpectedContentTypeException
     * @throws UnexpectedStatusCodeException
     */
    public static function createShipment(
        Client $client,
        Option $requestBody,
        CreateShipmentHeaderParameters $headerParameters,
    ): SHPCResponseVOShipShipment {
        return $client->createShipment(
            $requestBody,
            $headerParameters,
        );
    }
}

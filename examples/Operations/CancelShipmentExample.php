<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Examples\Operations;

use Prefabcortex\FedexShipApi\Client;
use Prefabcortex\FedexShipApi\Exception\ApiException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentBadRequestException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentForbiddenException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentNotFoundException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentServiceUnavailableException;
use Prefabcortex\FedexShipApi\Exception\CancelShipmentUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\MalformedResponseException;
use Prefabcortex\FedexShipApi\Exception\ResponseValidationException;
use Prefabcortex\FedexShipApi\Exception\TransportException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexShipApi\Exception\UnsupportedValueException;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOCancelShipment;
use Prefabcortex\FedexShipApi\Optional\Option;
use Prefabcortex\FedexShipApi\Parameter\CancelShipmentHeaderParameters;

final class CancelShipmentExample
{
    /**
     * Use this endpoint to cancel FedEx Express and Ground shipments that have not already been
     * tendered to FedEx. This request will cancel all packages within the shipment.
     *
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * Usage: pass a Client; this API declares no security scheme.
     *
     *   $client = Client::create($config);
     *   $headerParameters = new CancelShipmentHeaderParameters($authorization);
     *   CancelShipmentExample::cancelShipment($client, $requestBody, $headerParameters);
     *
     * @param Option<mixed> $requestBody
     *
     * @throws ApiException
     * @throws UnsupportedValueException
     * @throws TransportException
     * @throws ResponseValidationException
     * @throws MalformedResponseException
     * @throws CancelShipmentBadRequestException
     * @throws CancelShipmentUnauthorizedException
     * @throws CancelShipmentForbiddenException
     * @throws CancelShipmentNotFoundException
     * @throws CancelShipmentInternalServerErrorException
     * @throws CancelShipmentServiceUnavailableException
     * @throws UnexpectedContentTypeException
     * @throws UnexpectedStatusCodeException
     */
    public static function cancelShipment(
        Client $client,
        Option $requestBody,
        CancelShipmentHeaderParameters $headerParameters,
    ): SHPCResponseVOCancelShipment {
        return $client->cancelShipment(
            $requestBody,
            $headerParameters,
        );
    }
}

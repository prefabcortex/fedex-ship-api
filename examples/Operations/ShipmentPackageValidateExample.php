<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Examples\Operations;

use Prefabcortex\FedexShipApi\Client;
use Prefabcortex\FedexShipApi\Exception\ApiException;
use Prefabcortex\FedexShipApi\Exception\MalformedResponseException;
use Prefabcortex\FedexShipApi\Exception\ResponseValidationException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateBadRequestException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateForbiddenException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateInternalServerErrorException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateNotFoundException;
use Prefabcortex\FedexShipApi\Exception\ShipmentPackageValidateUnauthorizedException;
use Prefabcortex\FedexShipApi\Exception\TransportException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexShipApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexShipApi\Exception\UnsupportedValueException;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOValidate;
use Prefabcortex\FedexShipApi\Optional\Option;
use Prefabcortex\FedexShipApi\Parameter\ShipmentPackageValidateHeaderParameters;

final class ShipmentPackageValidateExample
{
    /**
     * Use this endpoint to verify the accuracy of a shipment request prior to actually submitting
     * shipment request. This allow businesses that receive shipping orders from end-user/customers
     * to verify the shipment information prior to submitting a create shipment request to FedEx and
     * printing a label. If for any reason the information needs to be edited or changed, it can be
     * done while the end-user is still available to confirm the changes.
     *
     * Note:<ul><li>This is shipment level validation hence supports validation for single piece
     * shipment only.</li><li>Shipment validation is supported for all Express and Ground - Domestic
     * as well as international shipments with all applicable special services. </li><li>Shipment
     * validation is supported for SmartPost and not for Freight LTL shipments.</li></ul>
     *
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * Usage: pass a Client; this API declares no security scheme.
     *
     *   $client = Client::create($config);
     *   $headerParameters = new ShipmentPackageValidateHeaderParameters($authorization);
     *   ShipmentPackageValidateExample::shipmentPackageValidate($client, $requestBody, $headerParameters);
     *
     * @param Option<mixed> $requestBody
     *
     * @throws ApiException
     * @throws UnsupportedValueException
     * @throws TransportException
     * @throws ResponseValidationException
     * @throws MalformedResponseException
     * @throws ShipmentPackageValidateBadRequestException
     * @throws ShipmentPackageValidateUnauthorizedException
     * @throws ShipmentPackageValidateForbiddenException
     * @throws ShipmentPackageValidateNotFoundException
     * @throws ShipmentPackageValidateInternalServerErrorException
     * @throws UnexpectedContentTypeException
     * @throws UnexpectedStatusCodeException
     */
    public static function shipmentPackageValidate(
        Client $client,
        Option $requestBody,
        ShipmentPackageValidateHeaderParameters $headerParameters,
    ): SHPCResponseVOValidate {
        return $client->shipmentPackageValidate(
            $requestBody,
            $headerParameters,
        );
    }
}

<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Tests\Fixture;

use DateTime;
use Prefabcortex\FedexShipApi\Model\AccountNumber;
use Prefabcortex\FedexShipApi\Model\AdditionalLabelsDetail;
use Prefabcortex\FedexShipApi\Model\AdditionalLabelsDetailType;
use Prefabcortex\FedexShipApi\Model\AdditionalMeasures;
use Prefabcortex\FedexShipApi\Model\Address;
use Prefabcortex\FedexShipApi\Model\Address1;
use Prefabcortex\FedexShipApi\Model\AdrLicenseDetail;
use Prefabcortex\FedexShipApi\Model\AlcoholDetail;
use Prefabcortex\FedexShipApi\Model\AlcoholDetailAlcoholRecipientType;
use Prefabcortex\FedexShipApi\Model\Alert;
use Prefabcortex\FedexShipApi\Model\Alert3P;
use Prefabcortex\FedexShipApi\Model\Alert3PP;
use Prefabcortex\FedexShipApi\Model\AlertAlertType;
use Prefabcortex\FedexShipApi\Model\AncillaryFeeAndTax;
use Prefabcortex\FedexShipApi\Model\AncillaryFeeAndTaxType;
use Prefabcortex\FedexShipApi\Model\BatteryDetail;
use Prefabcortex\FedexShipApi\Model\BillingDetails;
use Prefabcortex\FedexShipApi\Model\BinaryBarcode;
use Prefabcortex\FedexShipApi\Model\BrokerDetail;
use Prefabcortex\FedexShipApi\Model\BrokerDetailBroker;
use Prefabcortex\FedexShipApi\Model\BrokerDetailType;
use Prefabcortex\FedexShipApi\Model\CancelShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\CertificateOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetail;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetailAddress;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetailContact;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetailRole;
use Prefabcortex\FedexShipApi\Model\CODTransportationChargesDetail;
use Prefabcortex\FedexShipApi\Model\CODTransportationChargesDetailRateType;
use Prefabcortex\FedexShipApi\Model\CommercialInvoice;
use Prefabcortex\FedexShipApi\Model\CommercialInvoiceDetail;
use Prefabcortex\FedexShipApi\Model\CommercialInvoiceShipmentPurpose;
use Prefabcortex\FedexShipApi\Model\CommercialInvoiceTaxesOrMiscellaneousChargeType;
use Prefabcortex\FedexShipApi\Model\Commodity;
use Prefabcortex\FedexShipApi\Model\Commodity1;
use Prefabcortex\FedexShipApi\Model\Commodity1Purpose;
use Prefabcortex\FedexShipApi\Model\CommodityPurpose;
use Prefabcortex\FedexShipApi\Model\CompletedCreateShipmentDetail;
use Prefabcortex\FedexShipApi\Model\CompletedEtdDetail;
use Prefabcortex\FedexShipApi\Model\CompletedHazardousPackageDetail;
use Prefabcortex\FedexShipApi\Model\CompletedHazardousShipmentDetail;
use Prefabcortex\FedexShipApi\Model\CompletedHazardousSummaryDetail;
use Prefabcortex\FedexShipApi\Model\CompletedHoldAtLocationDetail;
use Prefabcortex\FedexShipApi\Model\CompletedPackageDetail;
use Prefabcortex\FedexShipApi\Model\CompletedShipmentDetail;
use Prefabcortex\FedexShipApi\Model\Contact;
use Prefabcortex\FedexShipApi\Model\Contact1;
use Prefabcortex\FedexShipApi\Model\Contact2;
use Prefabcortex\FedexShipApi\Model\ContactAndAddress;
use Prefabcortex\FedexShipApi\Model\ContactAndAddress1;
use Prefabcortex\FedexShipApi\Model\ContactAndAddressVerify;
use Prefabcortex\FedexShipApi\Model\ContactVerify;
use Prefabcortex\FedexShipApi\Model\ContentRecord;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRating;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetail;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailMinimumChargeType;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailPickupBaseChargeDescription;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailPricingCode;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailRateType;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailRatingBasis;
use Prefabcortex\FedexShipApi\Model\CreateShipmentRatingPickupRateDetailSpecialRatingAppliedItem;
use Prefabcortex\FedexShipApi\Model\CurrencyExchangeRate;
use Prefabcortex\FedexShipApi\Model\CustomerImageUsage;
use Prefabcortex\FedexShipApi\Model\CustomerImageUsageId;
use Prefabcortex\FedexShipApi\Model\CustomerImageUsageProvidedImageType;
use Prefabcortex\FedexShipApi\Model\CustomerImageUsageType;
use Prefabcortex\FedexShipApi\Model\CustomerReference;
use Prefabcortex\FedexShipApi\Model\CustomerReference1;
use Prefabcortex\FedexShipApi\Model\CustomerReference1CustomerReferenceType;
use Prefabcortex\FedexShipApi\Model\CustomerReferenceCustomerReferenceType;
use Prefabcortex\FedexShipApi\Model\CustomerSpecifiedLabelDetail;
use Prefabcortex\FedexShipApi\Model\CustomerSpecifiedLabelDetailMaskedDataItem;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail1;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail1FreightOnValue;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail1RegulatoryControlsItem;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetailFreightOnValue;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetailRegulatoryControlsItem;
use Prefabcortex\FedexShipApi\Model\CustomsDeclarationStatementDetail;
use Prefabcortex\FedexShipApi\Model\CustomsMoney;
use Prefabcortex\FedexShipApi\Model\CustomsOptionDetail;
use Prefabcortex\FedexShipApi\Model\CustomsOptionDetailType;
use Prefabcortex\FedexShipApi\Model\CXSError;
use Prefabcortex\FedexShipApi\Model\CXSError2;
use Prefabcortex\FedexShipApi\Model\CXSError401;
use Prefabcortex\FedexShipApi\Model\CXSError403;
use Prefabcortex\FedexShipApi\Model\CXSError404;
use Prefabcortex\FedexShipApi\Model\CXSError500;
use Prefabcortex\FedexShipApi\Model\CXSError503;
use Prefabcortex\FedexShipApi\Model\DangerousGoodsDetail;
use Prefabcortex\FedexShipApi\Model\DangerousGoodsDetailAccessibility;
use Prefabcortex\FedexShipApi\Model\DangerousGoodsDetailOptionsItem;
use Prefabcortex\FedexShipApi\Model\DangerousGoodsDetailRegulation;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetail;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipient;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientAddress;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientContact;
use Prefabcortex\FedexShipApi\Model\DestinationControlDetail;
use Prefabcortex\FedexShipApi\Model\DestinationControlDetailStatementTypes;
use Prefabcortex\FedexShipApi\Model\Dimensions;
use Prefabcortex\FedexShipApi\Model\DimensionsUnits;
use Prefabcortex\FedexShipApi\Model\DisclaimMessageSet;
use Prefabcortex\FedexShipApi\Model\DisclaimMessageSetDisclaimCode;
use Prefabcortex\FedexShipApi\Model\DocTabContent;
use Prefabcortex\FedexShipApi\Model\DocTabContentBarcoded;
use Prefabcortex\FedexShipApi\Model\DocTabContentBarcodedSymbology;
use Prefabcortex\FedexShipApi\Model\DocTabContentDocTabContentType;
use Prefabcortex\FedexShipApi\Model\DocTabContentZone001;
use Prefabcortex\FedexShipApi\Model\DocTabZoneSpecification;
use Prefabcortex\FedexShipApi\Model\DocTabZoneSpecificationJustification;
use Prefabcortex\FedexShipApi\Model\DocumentFormatOptionsRequested;
use Prefabcortex\FedexShipApi\Model\DocumentFormatOptionsRequestedOptionsItem;
use Prefabcortex\FedexShipApi\Model\DocumentGenerationDetail;
use Prefabcortex\FedexShipApi\Model\DocumentRequirementsDetail;
use Prefabcortex\FedexShipApi\Model\EdtCommodityTax;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1AppliedPreferentialTradeAgreement;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1TaxRatesItem;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1TaxType;
use Prefabcortex\FedexShipApi\Model\EmailLabelDetail;
use Prefabcortex\FedexShipApi\Model\EMailNotificationDetail;
use Prefabcortex\FedexShipApi\Model\EMailNotificationDetailAggregationType;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipient;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipientEmailNotificationRecipientType;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipientNotificationEventTypeItem;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipientNotificationFormatType;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipientNotificationType;
use Prefabcortex\FedexShipApi\Model\EmailOptionsRequested;
use Prefabcortex\FedexShipApi\Model\EmailOptionsRequestedOptionsItem;
use Prefabcortex\FedexShipApi\Model\EmailRecipient;
use Prefabcortex\FedexShipApi\Model\EmailRecipientRole;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO2;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO401;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO401_2;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO403;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO403_2;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO404;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO404_2;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO500;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO500_2;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO503;
use Prefabcortex\FedexShipApi\Model\ErrorResponseVO503_2;
use Prefabcortex\FedexShipApi\Model\ETDDetail;
use Prefabcortex\FedexShipApi\Model\ETDDetailRequestedDocumentTypesItem;
use Prefabcortex\FedexShipApi\Model\ExportDetail;
use Prefabcortex\FedexShipApi\Model\ExportDetailB13AFilingOption;
use Prefabcortex\FedexShipApi\Model\ExpressFreightDetail;
use Prefabcortex\FedexShipApi\Model\FullSchemaCancelShipment;
use Prefabcortex\FedexShipApi\Model\FullSchemaCancelShipmentDeletionControl;
use Prefabcortex\FedexShipApi\Model\FullSchemaGetConfirmedShipmentAsyncResults;
use Prefabcortex\FedexShipApi\Model\FullSchemaShip;
use Prefabcortex\FedexShipApi\Model\FullSchemaShipMergeLabelDocOption;
use Prefabcortex\FedexShipApi\Model\FullSchemaVerifyShipment;
use Prefabcortex\FedexShipApi\Model\GeneralAgencyAgreementDetail;
use Prefabcortex\FedexShipApi\Model\GetOpenShipmentResultsOutputVO;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityContent001;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityDescription01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityDescription01PackingGroup;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityInnerReceptacleDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityOptionDetail;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityOptionDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityOptionDetailLabelTextOption;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityPackingDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetail;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetail002;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetail002QuantityType;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetailQuantityType;
use Prefabcortex\FedexShipApi\Model\HoldAtLocationDetail;
use Prefabcortex\FedexShipApi\Model\HoldAtLocationDetailLocationType;
use Prefabcortex\FedexShipApi\Model\HomeDeliveryPremiumDetail;
use Prefabcortex\FedexShipApi\Model\HomeDeliveryPremiumDetailHomedeliveryPremiumType;
use Prefabcortex\FedexShipApi\Model\InternationalControlledExportDetail;
use Prefabcortex\FedexShipApi\Model\InternationalControlledExportDetailType;
use Prefabcortex\FedexShipApi\Model\InternationalTrafficInArmsRegulationsDetail;
use Prefabcortex\FedexShipApi\Model\JustContactAndAddress;
use Prefabcortex\FedexShipApi\Model\LABELRESPONSEOPTIONS;
use Prefabcortex\FedexShipApi\Model\LabelResponseVO;
use Prefabcortex\FedexShipApi\Model\LabelResponseVOContentType;
use Prefabcortex\FedexShipApi\Model\LabelSpecification;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationImageType;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationLabelFormatType;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationLabelOrder;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationLabelPrintingOrientation;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationLabelRotation;
use Prefabcortex\FedexShipApi\Model\LabelSpecificationLabelStockType;
use Prefabcortex\FedexShipApi\Model\LicenseOrPermitDetail;
use Prefabcortex\FedexShipApi\Model\MasterTrackingId;
use Prefabcortex\FedexShipApi\Model\Message;
use Prefabcortex\FedexShipApi\Model\MessageParameter;
use Prefabcortex\FedexShipApi\Model\Money;
use Prefabcortex\FedexShipApi\Model\Money1;
use Prefabcortex\FedexShipApi\Model\Money1Value;
use Prefabcortex\FedexShipApi\Model\NetExplosiveDetail;
use Prefabcortex\FedexShipApi\Model\Op900Detail;
use Prefabcortex\FedexShipApi\Model\OperationalInstructions;
use Prefabcortex\FedexShipApi\Model\PackageBarcodes;
use Prefabcortex\FedexShipApi\Model\PackageCODDetail;
use Prefabcortex\FedexShipApi\Model\PackageOperationalDetail;
use Prefabcortex\FedexShipApi\Model\PackageRateDetail;
use Prefabcortex\FedexShipApi\Model\PackageRating;
use Prefabcortex\FedexShipApi\Model\PackageSpecialServicesRequested;
use Prefabcortex\FedexShipApi\Model\PackageSpecialServicesRequestedSignatureOptionType;
use Prefabcortex\FedexShipApi\Model\Parameter;
use Prefabcortex\FedexShipApi\Model\Party1;
use Prefabcortex\FedexShipApi\Model\Party2;
use Prefabcortex\FedexShipApi\Model\Party3;
use Prefabcortex\FedexShipApi\Model\PartyAccountNumber;
use Prefabcortex\FedexShipApi\Model\PartyAccountNumber1;
use Prefabcortex\FedexShipApi\Model\PartyAddress;
use Prefabcortex\FedexShipApi\Model\PartyAddress1;
use Prefabcortex\FedexShipApi\Model\PartyAddress2;
use Prefabcortex\FedexShipApi\Model\PartyContact;
use Prefabcortex\FedexShipApi\Model\PartyContact1;
use Prefabcortex\FedexShipApi\Model\PartyContacts2;
use Prefabcortex\FedexShipApi\Model\Payment;
use Prefabcortex\FedexShipApi\Model\Payment1;
use Prefabcortex\FedexShipApi\Model\Payment1PaymentType;
use Prefabcortex\FedexShipApi\Model\PaymentPaymentType;
use Prefabcortex\FedexShipApi\Model\Payor;
use Prefabcortex\FedexShipApi\Model\Payor1;
use Prefabcortex\FedexShipApi\Model\PendingShipmentAccessDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentAccessorDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentDetailPendingShipmentType;
use Prefabcortex\FedexShipApi\Model\PendingShipmentProcessingOptionsRequested;
use Prefabcortex\FedexShipApi\Model\PendingShipmentProcessingOptionsRequestedOptionsItem;
use Prefabcortex\FedexShipApi\Model\PhoneNumber1;
use Prefabcortex\FedexShipApi\Model\PickupDetail;
use Prefabcortex\FedexShipApi\Model\PieceResponse;
use Prefabcortex\FedexShipApi\Model\PieceResponseServiceCategory;
use Prefabcortex\FedexShipApi\Model\PriorityAlertDetail;
use Prefabcortex\FedexShipApi\Model\ProductName;
use Prefabcortex\FedexShipApi\Model\RateDiscount;
use Prefabcortex\FedexShipApi\Model\RateDiscount2;
use Prefabcortex\FedexShipApi\Model\RateDiscount2RateDiscountType;
use Prefabcortex\FedexShipApi\Model\Rebate;
use Prefabcortex\FedexShipApi\Model\RebateRebateType;
use Prefabcortex\FedexShipApi\Model\RecipientCustomsId;
use Prefabcortex\FedexShipApi\Model\RecipientCustomsIdType;
use Prefabcortex\FedexShipApi\Model\RecipientsParty;
use Prefabcortex\FedexShipApi\Model\RecommendedDocumentSpecification;
use Prefabcortex\FedexShipApi\Model\RecommendedDocumentSpecificationTypesItem;
use Prefabcortex\FedexShipApi\Model\ReferenceMessageSet;
use Prefabcortex\FedexShipApi\Model\RegulatoryAdvisoryDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetailInfo;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetailProductIdType;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetailRegulationCode;
use Prefabcortex\FedexShipApi\Model\RegulatoryLabelContentDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryLabelContentDetailGenerationOptions;
use Prefabcortex\FedexShipApi\Model\RegulatoryLabelContentDetailType;
use Prefabcortex\FedexShipApi\Model\RegulatoryProhibition;
use Prefabcortex\FedexShipApi\Model\RegulatoryWaiver;
use Prefabcortex\FedexShipApi\Model\RequestedPackageLineItem;
use Prefabcortex\FedexShipApi\Model\RequestedShipment1;
use Prefabcortex\FedexShipApi\Model\RequestedShipment1PickupType;
use Prefabcortex\FedexShipApi\Model\RequestedShipment1RateRequestTypeItem;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerify;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerifyPickupType;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerifyRateRequestTypeItem;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerifyShipmentSpecialServices;
use Prefabcortex\FedexShipApi\Model\ResponsiblePartyParty;
use Prefabcortex\FedexShipApi\Model\RetrieveDateRange;
use Prefabcortex\FedexShipApi\Model\ReturnAssociationDetail;
use Prefabcortex\FedexShipApi\Model\ReturnEmailDetail;
use Prefabcortex\FedexShipApi\Model\ReturnEmailDetailAllowedSpecialServiceItem;
use Prefabcortex\FedexShipApi\Model\ReturnInstructionsDetail;
use Prefabcortex\FedexShipApi\Model\ReturnMerchandiseAuthorization;
use Prefabcortex\FedexShipApi\Model\ReturnShipmentDetail;
use Prefabcortex\FedexShipApi\Model\ReturnShipmentDetailReturnType;
use Prefabcortex\FedexShipApi\Model\ReturnShippingDocumentFormat;
use Prefabcortex\FedexShipApi\Model\ReturnShippingDocumentFormatDocType;
use Prefabcortex\FedexShipApi\Model\ReturnShippingDocumentFormatStockType;
use Prefabcortex\FedexShipApi\Model\ServiceDescription;
use Prefabcortex\FedexShipApi\Model\ShipEmailDispositionDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentAdvisoryDetails;
use Prefabcortex\FedexShipApi\Model\ShipmentCODDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentCODDetailCodCollectionType;
use Prefabcortex\FedexShipApi\Model\ShipmentCODDetailReturnReferenceIndicatorType;
use Prefabcortex\FedexShipApi\Model\ShipmentDryIceDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentDryIceDetail1;
use Prefabcortex\FedexShipApi\Model\ShipmentDryIceProcessingOptionsRequested;
use Prefabcortex\FedexShipApi\Model\ShipmentLegRateDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentOperationalDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentRateDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentRating;
use Prefabcortex\FedexShipApi\Model\ShipmentSpecialServicesRequested;
use Prefabcortex\FedexShipApi\Model\ShipperAccountNumber;
use Prefabcortex\FedexShipApi\Model\ShipperParty;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentDispositionDetail;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentDispositionDetailDispositionType;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailDetail;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailDetailGrouping;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailRecipient;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailRecipientRecipientType;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentFormat;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentFormatDocType;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentFormatStockType;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentSpecification;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentSpecificationShippingDocumentTypesItem;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEMailNotificationDetail;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEMailNotificationDetailAggregationType;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipient;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipientEmailNotificationRecipientType;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipientNotificationEventTypeItem;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipientNotificationFormatType;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipientNotificationType;
use Prefabcortex\FedexShipApi\Model\ShipShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOCancelShipment;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOGetOpenShipmentResults;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOShipShipment;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOValidate;
use Prefabcortex\FedexShipApi\Model\SignatureOptionDetail;
use Prefabcortex\FedexShipApi\Model\SmartPostInfoDetail;
use Prefabcortex\FedexShipApi\Model\SmartPostInfoDetailAncillaryEndorsement;
use Prefabcortex\FedexShipApi\Model\SmartPostInfoDetailIndicia;
use Prefabcortex\FedexShipApi\Model\SmartPostInfoDetailSpecialServices;
use Prefabcortex\FedexShipApi\Model\SoldToParty;
use Prefabcortex\FedexShipApi\Model\StandaloneBatteryDetails;
use Prefabcortex\FedexShipApi\Model\StandaloneBatteryDetailsBatteryMaterialType;
use Prefabcortex\FedexShipApi\Model\StringBarcode;
use Prefabcortex\FedexShipApi\Model\SuggestedCommodityDetail;
use Prefabcortex\FedexShipApi\Model\Surcharge;
use Prefabcortex\FedexShipApi\Model\Surcharge2;
use Prefabcortex\FedexShipApi\Model\Surcharge2Level;
use Prefabcortex\FedexShipApi\Model\Surcharge2SurchargeType;
use Prefabcortex\FedexShipApi\Model\Tax;
use Prefabcortex\FedexShipApi\Model\Tax2;
use Prefabcortex\FedexShipApi\Model\Tax2TaxType;
use Prefabcortex\FedexShipApi\Model\TaxpayerIdentification;
use Prefabcortex\FedexShipApi\Model\TaxpayerIdentificationTinType;
use Prefabcortex\FedexShipApi\Model\TrackingId;
use Prefabcortex\FedexShipApi\Model\TransactionCreateShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\TransactionDetailVO;
use Prefabcortex\FedexShipApi\Model\TransactionShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetail;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetail1;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetail1DocumentType;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetailDocumentType;
use Prefabcortex\FedexShipApi\Model\UsmcaCertificationOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaCertificationOfOriginDetailCertifierSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaCertificationOfOriginDetailImporterSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaCertificationOfOriginDetailProducerSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaCommercialInvoiceCertificationOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaCommercialInvoiceCertificationOfOriginDetailCertifierSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaCommercialInvoiceCertificationOfOriginDetailImporterSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaCommercialInvoiceCertificationOfOriginDetailProducerSpecification;
use Prefabcortex\FedexShipApi\Model\UsmcaDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaLowValueStatementDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaLowValueStatementDetailCustomsRole;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousCommodityContent;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousCommodityDescription;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousContainer;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetail;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetailFixedValue;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetailRateElementBasis;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetailRateLevelType;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetailRateType;
use Prefabcortex\FedexShipApi\Model\VariableHandlingCharges1;
use Prefabcortex\FedexShipApi\Model\VariationOptions;
use Prefabcortex\FedexShipApi\Model\VerifyShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\Version;
use Prefabcortex\FedexShipApi\Model\Weight;
use Prefabcortex\FedexShipApi\Model\Weight1;
use Prefabcortex\FedexShipApi\Model\Weight1Units;
use Prefabcortex\FedexShipApi\Model\Weight3;
use Prefabcortex\FedexShipApi\Model\Weight3Units;
use Prefabcortex\FedexShipApi\Model\Weight4;
use Prefabcortex\FedexShipApi\Model\Weight4Units;
use Prefabcortex\FedexShipApi\Model\WeightUnits;

final class ModelFixtures
{
    public static function buildFullSchemaShip(): FullSchemaShip
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $shipper = ShipperParty::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
        $address_1 = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact_1 = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $recipientsParty = RecipientsParty::builder(
            // address
            $address_1,
            // contact
            $contact_1,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
        $shippingChargesPayment = Payment::builder(PaymentPaymentType::SENDER)->build();
        $labelSpecification = LabelSpecification::builder(
            // labelStockType
            LabelSpecificationLabelStockType::PAPER_7X475,
            // imageType
            LabelSpecificationImageType::PDF,
        )
            ->setLabelFormatType(LabelSpecificationLabelFormatType::COMMON2D)
            ->setLabelOrder(LabelSpecificationLabelOrder::SHIPPING_LABEL_FIRST)
            ->setLabelRotation(LabelSpecificationLabelRotation::UPSIDE_DOWN)
            ->setLabelPrintingOrientation(LabelSpecificationLabelPrintingOrientation::TOP_EDGE_OF_TEXT_FIRST)
            ->setReturnedDispositionDetail('RETURNED')
            ->setResolution(300)
            ->build();
        $weight = Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSequenceNumber(0)
            ->setSubPackagingType('BUCKET')
            ->setGroupPackageCount(2)
            ->setItemDescriptionForClearance('description')
            ->setItemDescription('item description for the package')
            ->build();
        $requestedShipment = RequestedShipment1::builder(
            // shipper
            $shipper,
            // recipients
            [$recipientsParty],
            // pickupType
            RequestedShipment1PickupType::USE_SCHEDULED_PICKUP,
            // serviceType
            'PRIORITY_OVERNIGHT',
            // packagingType
            'YOUR_PACKAGING',
            // totalWeight
            20.6,
            // shippingChargesPayment
            $shippingChargesPayment,
            // labelSpecification
            $labelSpecification,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setShipDatestamp('2019-10-14')
            ->setRecipientLocationNumber('1234567')
            ->setBlockInsightVisibility(true)
            ->setRateRequestType([RequestedShipment1RateRequestTypeItem::LIST])
            ->setPreferredCurrency('USD')
            ->setTotalPackageCount(25)
            ->build();
        $accountNumber = ShipperAccountNumber::builder('REPLACE_ME')->build();

        return FullSchemaShip::builder(
            // requestedShipment
            $requestedShipment,
            // labelResponseOptions
            LABELRESPONSEOPTIONS::URL_ONLY,
            // accountNumber
            $accountNumber,
        )
            ->setMergeLabelDocOption(FullSchemaShipMergeLabelDocOption::LABELS_AND_DOCS)
            ->setOneLabelAtATime(true)
            ->build();
    }

    public static function buildRequestedShipment1(): RequestedShipment1
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $shipper = ShipperParty::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
        $address_1 = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact_1 = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $recipientsParty = RecipientsParty::builder(
            // address
            $address_1,
            // contact
            $contact_1,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
        $shippingChargesPayment = Payment::builder(PaymentPaymentType::SENDER)->build();
        $labelSpecification = LabelSpecification::builder(
            // labelStockType
            LabelSpecificationLabelStockType::PAPER_7X475,
            // imageType
            LabelSpecificationImageType::PDF,
        )
            ->setLabelFormatType(LabelSpecificationLabelFormatType::COMMON2D)
            ->setLabelOrder(LabelSpecificationLabelOrder::SHIPPING_LABEL_FIRST)
            ->setLabelRotation(LabelSpecificationLabelRotation::UPSIDE_DOWN)
            ->setLabelPrintingOrientation(LabelSpecificationLabelPrintingOrientation::TOP_EDGE_OF_TEXT_FIRST)
            ->setReturnedDispositionDetail('RETURNED')
            ->setResolution(300)
            ->build();
        $weight = Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSequenceNumber(0)
            ->setSubPackagingType('BUCKET')
            ->setGroupPackageCount(2)
            ->setItemDescriptionForClearance('description')
            ->setItemDescription('item description for the package')
            ->build();

        return RequestedShipment1::builder(
            // shipper
            $shipper,
            // recipients
            [$recipientsParty],
            // pickupType
            RequestedShipment1PickupType::USE_SCHEDULED_PICKUP,
            // serviceType
            'PRIORITY_OVERNIGHT',
            // packagingType
            'YOUR_PACKAGING',
            // totalWeight
            20.6,
            // shippingChargesPayment
            $shippingChargesPayment,
            // labelSpecification
            $labelSpecification,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setShipDatestamp('2019-10-14')
            ->setRecipientLocationNumber('1234567')
            ->setBlockInsightVisibility(true)
            ->setRateRequestType([RequestedShipment1RateRequestTypeItem::LIST])
            ->setPreferredCurrency('USD')
            ->setTotalPackageCount(25)
            ->build();
    }

    public static function buildVariationOptions(): VariationOptions
    {
        return VariationOptions::builder()
            ->setId('GLOBAL-SPOT-IDENTIFIER')
            ->setValues(['REPLACE_ME'])
            ->build();
    }

    public static function buildPickupDetail(): PickupDetail
    {
        return PickupDetail::builder()
            ->setReadyPickupDateTime(new DateTime('2024-01-01'))
            ->setLatestPickupDateTime(new DateTime('2024-01-01'))
            ->setCourierInstructions('Leave package at reception')
            ->build();
    }

    public static function buildMoney(): Money
    {
        return Money::builder()
            ->setAmount(12.45)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildCustomsMoney(): CustomsMoney
    {
        return CustomsMoney::builder()
            ->setAmount(0.0)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildShipperParty(): ShipperParty
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();

        return ShipperParty::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
    }

    public static function buildSoldToParty(): SoldToParty
    {
        return SoldToParty::builder()->build();
    }

    public static function buildPartyAddress(): PartyAddress
    {
        return PartyAddress::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildPartyAddress2(): PartyAddress2
    {
        return PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
    }

    public static function buildPartyContact(): PartyContact
    {
        return PartyContact::builder('1234567890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildTaxpayerIdentification(): TaxpayerIdentification
    {
        return TaxpayerIdentification::builder(
            // number
            '123567',
            // tinType
            TaxpayerIdentificationTinType::FEDERAL,
        )
            ->setUsage('usage')
            ->setEffectiveDate('2024-06-13')
            ->setExpirationDate('2024-06-13')
            ->build();
    }

    public static function buildRecipientsParty(): RecipientsParty
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();

        return RecipientsParty::builder(
            // address
            $address,
            // contact
            $contact,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
    }

    public static function buildPartyContacts2(): PartyContacts2
    {
        return PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildContactAndAddress1(): ContactAndAddress1
    {
        return ContactAndAddress1::builder()->build();
    }

    public static function buildContact2(): Contact2
    {
        return Contact2::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneNumber('1234567890')
            ->setPhoneExtension('91')
            ->setFaxNumber('956123')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildAddress1(): Address1
    {
        return Address1::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('38127')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildPayment(): Payment
    {
        return Payment::builder(PaymentPaymentType::SENDER)->build();
    }

    public static function buildPayor(): Payor
    {
        $accountNumber = PartyAccountNumber::builder()
            ->setValue('12XXXXX89')
            ->build();
        $responsibleParty = ResponsiblePartyParty::builder($accountNumber)->build();

        return Payor::builder($responsibleParty)->build();
    }

    public static function buildResponsiblePartyParty(): ResponsiblePartyParty
    {
        $accountNumber = PartyAccountNumber::builder()
            ->setValue('12XXXXX89')
            ->build();

        return ResponsiblePartyParty::builder($accountNumber)->build();
    }

    public static function buildPartyAccountNumber(): PartyAccountNumber
    {
        return PartyAccountNumber::builder()
            ->setValue('12XXXXX89')
            ->build();
    }

    public static function buildPartyAccountNumber1(): PartyAccountNumber1
    {
        return PartyAccountNumber1::builder()
            ->setValue('12XXXXX89')
            ->build();
    }

    public static function buildShipmentSpecialServicesRequested(): ShipmentSpecialServicesRequested
    {
        return ShipmentSpecialServicesRequested::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->build();
    }

    public static function buildETDDetail(): ETDDetail
    {
        return ETDDetail::builder()
            ->setRequestedDocumentTypes([ETDDetailRequestedDocumentTypesItem::CERTIFICATE_OF_ORIGIN])
            ->build();
    }

    public static function buildUploadDocumentReferenceDetail(): UploadDocumentReferenceDetail
    {
        return UploadDocumentReferenceDetail::builder()
            ->setDocumentType(UploadDocumentReferenceDetailDocumentType::PRO_FORMA_INVOICE)
            ->setDocumentReference('DocumentReference')
            ->setDescription('PRO FORMA INVOICE')
            ->setDocumentId('090927d680038c61')
            ->build();
    }

    public static function buildReturnShipmentDetail(): ReturnShipmentDetail
    {
        return ReturnShipmentDetail::builder(ReturnShipmentDetailReturnType::PRINT_RETURN_LABEL)->build();
    }

    public static function buildReturnEmailDetail(): ReturnEmailDetail
    {
        return ReturnEmailDetail::builder(
            // merchantPhoneNumber
            '19012635656',
            // allowedSpecialService
            [ReturnEmailDetailAllowedSpecialServiceItem::SATURDAY_DELIVERY],
        )->build();
    }

    public static function buildReturnMerchandiseAuthorization(): ReturnMerchandiseAuthorization
    {
        return ReturnMerchandiseAuthorization::builder()
            ->setReason('Wrong Size or Color')
            ->build();
    }

    public static function buildReturnAssociationDetail(): ReturnAssociationDetail
    {
        return ReturnAssociationDetail::builder('123456789')
            ->setShipDatestamp('2019-10-01')
            ->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetail(): DeliveryOnInvoiceAcceptanceDetail
    {
        return DeliveryOnInvoiceAcceptanceDetail::builder()->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipient(): DeliveryOnInvoiceAcceptanceDetailRecipient
    {
        $address = DeliveryOnInvoiceAcceptanceDetailRecipientAddress::builder(
            // streetLines
            ['REPLACE_ME'],
            // countryCode
            'US',
        )->build();
        $contact = DeliveryOnInvoiceAcceptanceDetailRecipientContact::builder(
            // companyName
            'Fedex',
            // personName
            'John Taylor',
            // phoneNumber
            '1234567890',
        )->build();

        return DeliveryOnInvoiceAcceptanceDetailRecipient::builder(
            // address
            $address,
            // contact
            $contact,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(): DeliveryOnInvoiceAcceptanceDetailRecipientAddress
    {
        return DeliveryOnInvoiceAcceptanceDetailRecipientAddress::builder(
            // streetLines
            ['REPLACE_ME'],
            // countryCode
            'US',
        )->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(): DeliveryOnInvoiceAcceptanceDetailRecipientContact
    {
        return DeliveryOnInvoiceAcceptanceDetailRecipientContact::builder(
            // companyName
            'Fedex',
            // personName
            'John Taylor',
            // phoneNumber
            '1234567890',
        )->build();
    }

    public static function buildInternationalTrafficInArmsRegulationsDetail(): InternationalTrafficInArmsRegulationsDetail
    {
        return InternationalTrafficInArmsRegulationsDetail::builder('9871234')->build();
    }

    public static function buildPendingShipmentDetail(): PendingShipmentDetail
    {
        $emailLabelDetail = EmailLabelDetail::builder()
            ->setMessage('your optional message')
            ->build();

        return PendingShipmentDetail::builder(
            // pendingShipmentType
            PendingShipmentDetailPendingShipmentType::EMAIL,
            // emailLabelDetail
            $emailLabelDetail,
        )
            ->setExpirationTimeStamp('2020-01-01')
            ->build();
    }

    public static function buildPendingShipmentProcessingOptionsRequested(): PendingShipmentProcessingOptionsRequested
    {
        return PendingShipmentProcessingOptionsRequested::builder()
            ->setOptions([PendingShipmentProcessingOptionsRequestedOptionsItem::ALLOW_MODIFICATIONS])
            ->build();
    }

    public static function buildRecommendedDocumentSpecification(): RecommendedDocumentSpecification
    {
        return RecommendedDocumentSpecification::builder([
            RecommendedDocumentSpecificationTypesItem::ANTIQUE_STATEMENT_EUROPEAN_UNION,
        ])->build();
    }

    public static function buildEmailLabelDetail(): EmailLabelDetail
    {
        return EmailLabelDetail::builder()
            ->setMessage('your optional message')
            ->build();
    }

    public static function buildEmailRecipient(): EmailRecipient
    {
        return EmailRecipient::builder(
            // emailAddress
            'nnnnneena@fedex.com',
            // role
            EmailRecipientRole::SHIPMENT_COMPLETOR,
        )
            ->setLocale('en_US')
            ->build();
    }

    public static function buildEmailOptionsRequested(): EmailOptionsRequested
    {
        return EmailOptionsRequested::builder()
            ->setOptions([EmailOptionsRequestedOptionsItem::PRODUCE_PAPERLESS_SHIPPING_FORMAT])
            ->build();
    }

    public static function buildUploadDocumentReferenceDetail1(): UploadDocumentReferenceDetail1
    {
        return UploadDocumentReferenceDetail1::builder()
            ->setDocumentType(UploadDocumentReferenceDetail1DocumentType::PRO_FORMA_INVOICE)
            ->setDocumentReference('DocumentReference')
            ->setDescription('PRO FORMA INVOICE')
            ->setDocumentId('090927d680038c61')
            ->build();
    }

    public static function buildHoldAtLocationDetail(): HoldAtLocationDetail
    {
        return HoldAtLocationDetail::builder('YBZA')
            ->setLocationType(HoldAtLocationDetailLocationType::FEDEX_ONSITE)
            ->build();
    }

    public static function buildContactAndAddress(): ContactAndAddress
    {
        return ContactAndAddress::builder()->build();
    }

    public static function buildContact1(): Contact1
    {
        return Contact1::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneNumber('1234567890')
            ->setPhoneExtension('91')
            ->setFaxNumber('956123')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildShipmentCODDetail(): ShipmentCODDetail
    {
        return ShipmentCODDetail::builder(ShipmentCODDetailCodCollectionType::CASH)
            ->setRemitToName('remitToName')
            ->setReturnReferenceIndicatorType(ShipmentCODDetailReturnReferenceIndicatorType::INVOICE)
            ->build();
    }

    public static function buildCODTransportationChargesDetail(): CODTransportationChargesDetail
    {
        return CODTransportationChargesDetail::builder()
            ->setRateType(CODTransportationChargesDetailRateType::ACCOUNT)
            ->build();
    }

    public static function buildParty1(): Party1
    {
        $contact = PartyContact::builder('1234567890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();

        return Party1::builder($contact)->build();
    }

    public static function buildShipmentDryIceDetail1(): ShipmentDryIceDetail1
    {
        return ShipmentDryIceDetail1::builder()
            ->setPackageCount(12)
            ->build();
    }

    public static function buildWeight1(): Weight1
    {
        return Weight1::builder()
            ->setUnits(Weight1Units::LB)
            ->setValue(68.25)
            ->build();
    }

    public static function buildInternationalControlledExportDetail(): InternationalControlledExportDetail
    {
        return InternationalControlledExportDetail::builder(
            InternationalControlledExportDetailType::WAREHOUSE_WITHDRAWAL,
        )
            ->setLicenseOrPermitExpirationDate('2019-12-03')
            ->setLicenseOrPermitNumber('11')
            ->setEntryNumber('125')
            ->setForeignTradeZoneCode('US')
            ->build();
    }

    public static function buildHomeDeliveryPremiumDetail(): HomeDeliveryPremiumDetail
    {
        return HomeDeliveryPremiumDetail::builder()
            ->setDeliveryDate('2019-06-26')
            ->setHomedeliveryPremiumType(HomeDeliveryPremiumDetailHomedeliveryPremiumType::APPOINTMENT)
            ->build();
    }

    public static function buildPhoneNumber1(): PhoneNumber1
    {
        return PhoneNumber1::builder()
            ->setAreaCode('901')
            ->setLocalNumber('3575012')
            ->setExtension('200')
            ->setPersonalIdentificationNumber('98712345')
            ->build();
    }

    public static function buildShipShipmentEMailNotificationDetail(): ShipShipmentEMailNotificationDetail
    {
        return ShipShipmentEMailNotificationDetail::builder()
            ->setAggregationType(ShipShipmentEMailNotificationDetailAggregationType::PER_PACKAGE)
            ->setPersonalMessage('your personal message here')
            ->build();
    }

    public static function buildShipShipmentEmailNotificationRecipient(): ShipShipmentEmailNotificationRecipient
    {
        return ShipShipmentEmailNotificationRecipient::builder(
            // emailNotificationRecipientType
            ShipShipmentEmailNotificationRecipientEmailNotificationRecipientType::SHIPPER,
            // emailAddress
            'jsmith3@aol.com',
        )
            ->setName('Joe Smith')
            ->setNotificationFormatType(ShipShipmentEmailNotificationRecipientNotificationFormatType::TEXT)
            ->setNotificationType(ShipShipmentEmailNotificationRecipientNotificationType::EMAIL)
            ->setLocale('en_US')
            ->setNotificationEventType([ShipShipmentEmailNotificationRecipientNotificationEventTypeItem::ON_DELIVERY])
            ->build();
    }

    public static function buildExpressFreightDetail(): ExpressFreightDetail
    {
        return ExpressFreightDetail::builder()
            ->setBookingConfirmationNumber(0)
            ->setShippersLoadAndCount(123)
            ->setPackingListEnclosed(true)
            ->build();
    }

    public static function buildVariableHandlingChargeDetail(): VariableHandlingChargeDetail
    {
        return VariableHandlingChargeDetail::builder()
            ->setRateType(VariableHandlingChargeDetailRateType::PREFERRED_CURRENCY)
            ->setPercentValue(12.45)
            ->setRateLevelType(VariableHandlingChargeDetailRateLevelType::INDIVIDUAL_PACKAGE_RATE)
            ->setRateElementBasis(VariableHandlingChargeDetailRateElementBasis::NET_CHARGE_EXCLUDING_TAXES)
            ->build();
    }

    public static function buildVariableHandlingChargeDetailFixedValue(): VariableHandlingChargeDetailFixedValue
    {
        return VariableHandlingChargeDetailFixedValue::builder(
            // amount
            0.0,
            // currency
            'REPLACE_ME',
        )->build();
    }

    public static function buildCustomsClearanceDetail(): CustomsClearanceDetail
    {
        $commercialInvoice = CommercialInvoice::builder()
            ->setOriginatorName('originator Name')
            ->setPaymentTerms('payment terms')
            ->setComments(['REPLACE_ME'])
            ->setTaxesOrMiscellaneousChargeType(CommercialInvoiceTaxesOrMiscellaneousChargeType::COMMISSIONS)
            ->setDeclarationStatement('declarationStatement')
            ->setTermsOfSale('FCA')
            ->setSpecialInstructions('specialInstructions"')
            ->setShipmentPurpose(CommercialInvoiceShipmentPurpose::REPAIR_AND_RETURN)
            ->build();
        $commodity = Commodity::builder('description')
            ->setNumberOfPieces(12)
            ->setQuantity(125)
            ->setQuantityUnits('Ea')
            ->setCountryOfManufacture('US')
            ->setCIMarksAndNumbers('87123')
            ->setHarmonizedCode('0613')
            ->setName('non-threaded rivets')
            ->setExportLicenseNumber('26456')
            ->setPartNumber('167')
            ->setPurpose(CommodityPurpose::BUSINESS)
            ->build();

        return CustomsClearanceDetail::builder(
            // commercialInvoice
            $commercialInvoice,
            // commodities
            [$commodity],
        )
            ->setRegulatoryControls([CustomsClearanceDetailRegulatoryControlsItem::FOOD_OR_PERISHABLE])
            ->setFreightOnValue(CustomsClearanceDetailFreightOnValue::OWN_RISK)
            ->setIsDocumentOnly(true)
            ->setGeneratedDocumentLocale('en_US')
            ->build();
    }

    public static function buildCustomsClearanceDetail1(): CustomsClearanceDetail1
    {
        $commercialInvoice = CommercialInvoice::builder()
            ->setOriginatorName('originator Name')
            ->setPaymentTerms('payment terms')
            ->setComments(['REPLACE_ME'])
            ->setTaxesOrMiscellaneousChargeType(CommercialInvoiceTaxesOrMiscellaneousChargeType::COMMISSIONS)
            ->setDeclarationStatement('declarationStatement')
            ->setTermsOfSale('FCA')
            ->setSpecialInstructions('specialInstructions"')
            ->setShipmentPurpose(CommercialInvoiceShipmentPurpose::REPAIR_AND_RETURN)
            ->build();
        $commodity1 = Commodity1::builder('description')
            ->setNumberOfPieces(12)
            ->setQuantity(125)
            ->setQuantityUnits('Ea')
            ->setCountryOfManufacture('US')
            ->setCIMarksAndNumbers('87123')
            ->setHarmonizedCode('0613')
            ->setName('non-threaded rivets')
            ->setExportLicenseNumber('26456')
            ->setPartNumber('167')
            ->setPurpose(Commodity1Purpose::BUSINESS)
            ->build();

        return CustomsClearanceDetail1::builder(
            // commercialInvoice
            $commercialInvoice,
            // commodities
            [$commodity1],
        )
            ->setRegulatoryControls([CustomsClearanceDetail1RegulatoryControlsItem::FOOD_OR_PERISHABLE])
            ->setFreightOnValue(CustomsClearanceDetail1FreightOnValue::OWN_RISK)
            ->setIsDocumentOnly(true)
            ->setGeneratedDocumentLocale('en_US')
            ->build();
    }

    public static function buildBrokerDetail(): BrokerDetail
    {
        return BrokerDetail::builder()
            ->setType(BrokerDetailType::IMPORT)
            ->build();
    }

    public static function buildBrokerDetailBroker(): BrokerDetailBroker
    {
        $address = PartyAddress::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
        $contact = PartyContact::builder('1234567890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();

        return BrokerDetailBroker::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
    }

    public static function buildCommercialInvoice(): CommercialInvoice
    {
        return CommercialInvoice::builder()
            ->setOriginatorName('originator Name')
            ->setPaymentTerms('payment terms')
            ->setComments(['REPLACE_ME'])
            ->setTaxesOrMiscellaneousChargeType(CommercialInvoiceTaxesOrMiscellaneousChargeType::COMMISSIONS)
            ->setDeclarationStatement('declarationStatement')
            ->setTermsOfSale('FCA')
            ->setSpecialInstructions('specialInstructions"')
            ->setShipmentPurpose(CommercialInvoiceShipmentPurpose::REPAIR_AND_RETURN)
            ->build();
    }

    public static function buildCustomerReference(): CustomerReference
    {
        return CustomerReference::builder()
            ->setCustomerReferenceType(CustomerReferenceCustomerReferenceType::DEPARTMENT_NUMBER)
            ->setValue('3686')
            ->build();
    }

    public static function buildShipEmailDispositionDetail(): ShipEmailDispositionDetail
    {
        return ShipEmailDispositionDetail::builder()
            ->setEmailAddress('neena@fedex.com')
            ->setType('EMAILED')
            ->setRecipientType('SHIPPER')
            ->build();
    }

    public static function buildPayment1(): Payment1
    {
        return Payment1::builder()
            ->setPaymentType(Payment1PaymentType::SENDER)
            ->build();
    }

    public static function buildPayor1(): Payor1
    {
        return Payor1::builder()->build();
    }

    public static function buildParty2(): Party2
    {
        return Party2::builder()->build();
    }

    public static function buildBillingDetails(): BillingDetails
    {
        return BillingDetails::builder()->build();
    }

    public static function buildCommodity(): Commodity
    {
        return Commodity::builder('description')
            ->setNumberOfPieces(12)
            ->setQuantity(125)
            ->setQuantityUnits('Ea')
            ->setCountryOfManufacture('US')
            ->setCIMarksAndNumbers('87123')
            ->setHarmonizedCode('0613')
            ->setName('non-threaded rivets')
            ->setExportLicenseNumber('26456')
            ->setPartNumber('167')
            ->setPurpose(CommodityPurpose::BUSINESS)
            ->build();
    }

    public static function buildCommodity1(): Commodity1
    {
        return Commodity1::builder('description')
            ->setNumberOfPieces(12)
            ->setQuantity(125)
            ->setQuantityUnits('Ea')
            ->setCountryOfManufacture('US')
            ->setCIMarksAndNumbers('87123')
            ->setHarmonizedCode('0613')
            ->setName('non-threaded rivets')
            ->setExportLicenseNumber('26456')
            ->setPartNumber('167')
            ->setPurpose(Commodity1Purpose::BUSINESS)
            ->build();
    }

    public static function buildRegulatoryDetail(): RegulatoryDetail
    {
        return RegulatoryDetail::builder(
            // regulationCode
            RegulatoryDetailRegulationCode::CPSC,
            // productId
            'AMZ-TOY-45821',
            // productIdType
            RegulatoryDetailProductIdType::SKU,
        )->build();
    }

    public static function buildRegulatoryDetailInfo(): RegulatoryDetailInfo
    {
        return RegulatoryDetailInfo::builder()
            ->setStandardManufacturerProductId('GTIN 00000006')
            ->setNonStandardManufacturerProductId('SH123456-L')
            ->setMerchantProductId('12345')
            ->build();
    }

    public static function buildDisclaimMessageSet(): DisclaimMessageSet
    {
        return DisclaimMessageSet::builder()
            ->setDisclaimCode(DisclaimMessageSetDisclaimCode::A)
            ->setIntendedUseCode('245.001')
            ->setIntendedUseDescription('REPLACE_ME')
            ->build();
    }

    public static function buildReferenceMessageSet(): ReferenceMessageSet
    {
        return ReferenceMessageSet::builder()
            ->setProductVersion('2026.01')
            ->setCertifierId('brightkids-imports-us')
            ->setRegistryProductId('CPSC-2026-001234')
            ->build();
    }

    public static function buildClearanceItemDetail(): ClearanceItemDetail
    {
        return ClearanceItemDetail::builder()
            ->setRole(ClearanceItemDetailRole::MANUFACTURER)
            ->setId('USGRE98BIR')
            ->build();
    }

    public static function buildClearanceItemDetailContact(): ClearanceItemDetailContact
    {
        return ClearanceItemDetailContact::builder()
            ->setCompanyName('THE GREENHOUSE')
            ->build();
    }

    public static function buildClearanceItemDetailAddress(): ClearanceItemDetailAddress
    {
        return ClearanceItemDetailAddress::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Birmingham')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('35209')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildAdditionalMeasures(): AdditionalMeasures
    {
        return AdditionalMeasures::builder()
            ->setQuantity(12.45)
            ->setUnits('KG')
            ->build();
    }

    public static function buildWeight(): Weight
    {
        return Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();
    }

    public static function buildWeight4(): Weight4
    {
        return Weight4::builder(
            // units
            Weight4Units::KG,
            // value
            68.25,
        )->build();
    }

    public static function buildWeight3(): Weight3
    {
        return Weight3::builder(
            // units
            Weight3Units::KG,
            // value
            68.25,
        )->build();
    }

    public static function buildUsmcaDetail(): UsmcaDetail
    {
        return UsmcaDetail::builder()->build();
    }

    public static function buildRecipientCustomsId(): RecipientCustomsId
    {
        return RecipientCustomsId::builder()
            ->setType(RecipientCustomsIdType::PASSPORT)
            ->setValue('123')
            ->build();
    }

    public static function buildCustomsOptionDetail(): CustomsOptionDetail
    {
        return CustomsOptionDetail::builder()
            ->setDescription('Description')
            ->setType(CustomsOptionDetailType::COURTESY_RETURN_LABEL)
            ->build();
    }

    public static function buildExportDetail(): ExportDetail
    {
        return ExportDetail::builder()
            ->setB13AFilingOption(ExportDetailB13AFilingOption::NOT_REQUIRED)
            ->setExportComplianceStatement('12345678901234567')
            ->setPermitNumber('12345')
            ->build();
    }

    public static function buildDestinationControlDetail(): DestinationControlDetail
    {
        return DestinationControlDetail::builder(DestinationControlDetailStatementTypes::DEPARTMENT_OF_COMMERCE)
            ->setEndUser('dest country user')
            ->setDestinationCountries(['REPLACE_ME'])
            ->build();
    }

    public static function buildCustomsDeclarationStatementDetail(): CustomsDeclarationStatementDetail
    {
        $usmcaLowValueStatementDetail = UsmcaLowValueStatementDetail::builder(
            UsmcaLowValueStatementDetailCustomsRole::EXPORTER,
        )
            ->setCountryOfOriginLowValueDocumentRequested(true)
            ->build();

        return CustomsDeclarationStatementDetail::builder($usmcaLowValueStatementDetail)->build();
    }

    public static function buildUsmcaLowValueStatementDetail(): UsmcaLowValueStatementDetail
    {
        return UsmcaLowValueStatementDetail::builder(UsmcaLowValueStatementDetailCustomsRole::EXPORTER)
            ->setCountryOfOriginLowValueDocumentRequested(true)
            ->build();
    }

    public static function buildSmartPostInfoDetail(): SmartPostInfoDetail
    {
        return SmartPostInfoDetail::builder(
            // hubId
            '5015',
            // indicia
            SmartPostInfoDetailIndicia::PRESORTED_STANDARD,
        )
            ->setAncillaryEndorsement(SmartPostInfoDetailAncillaryEndorsement::RETURN_SERVICE)
            ->setSpecialServices(SmartPostInfoDetailSpecialServices::USPS_DELIVERY_CONFIRMATION)
            ->build();
    }

    public static function buildLabelSpecification(): LabelSpecification
    {
        return LabelSpecification::builder(
            // labelStockType
            LabelSpecificationLabelStockType::PAPER_7X475,
            // imageType
            LabelSpecificationImageType::PDF,
        )
            ->setLabelFormatType(LabelSpecificationLabelFormatType::COMMON2D)
            ->setLabelOrder(LabelSpecificationLabelOrder::SHIPPING_LABEL_FIRST)
            ->setLabelRotation(LabelSpecificationLabelRotation::UPSIDE_DOWN)
            ->setLabelPrintingOrientation(LabelSpecificationLabelPrintingOrientation::TOP_EDGE_OF_TEXT_FIRST)
            ->setReturnedDispositionDetail('RETURNED')
            ->setResolution(300)
            ->build();
    }

    public static function buildCustomerSpecifiedLabelDetail(): CustomerSpecifiedLabelDetail
    {
        return CustomerSpecifiedLabelDetail::builder()
            ->setMaskedData([CustomerSpecifiedLabelDetailMaskedDataItem::CUSTOMS_VALUE])
            ->build();
    }

    public static function buildRegulatoryLabelContentDetail(): RegulatoryLabelContentDetail
    {
        return RegulatoryLabelContentDetail::builder()
            ->setGenerationOptions(RegulatoryLabelContentDetailGenerationOptions::CONTENT_ON_SHIPPING_LABEL_ONLY)
            ->setType(RegulatoryLabelContentDetailType::ALCOHOL_SHIPMENT_LABEL)
            ->build();
    }

    public static function buildAdditionalLabelsDetail(): AdditionalLabelsDetail
    {
        return AdditionalLabelsDetail::builder()
            ->setType(AdditionalLabelsDetailType::MANIFEST)
            ->setCount(1)
            ->build();
    }

    public static function buildDocTabContent(): DocTabContent
    {
        return DocTabContent::builder()
            ->setDocTabContentType(DocTabContentDocTabContentType::BARCODED)
            ->build();
    }

    public static function buildDocTabContentZone001(): DocTabContentZone001
    {
        return DocTabContentZone001::builder()->build();
    }

    public static function buildDocTabZoneSpecification(): DocTabZoneSpecification
    {
        return DocTabZoneSpecification::builder()
            ->setJustification(DocTabZoneSpecificationJustification::RIGHT)
            ->build();
    }

    public static function buildDocTabContentBarcoded(): DocTabContentBarcoded
    {
        return DocTabContentBarcoded::builder()
            ->setSymbology(DocTabContentBarcodedSymbology::UCC128)
            ->build();
    }

    public static function buildShippingDocumentSpecification(): ShippingDocumentSpecification
    {
        return ShippingDocumentSpecification::builder()
            ->setShippingDocumentTypes([ShippingDocumentSpecificationShippingDocumentTypesItem::CERTIFICATE_OF_ORIGIN])
            ->build();
    }

    public static function buildGeneralAgencyAgreementDetail(): GeneralAgencyAgreementDetail
    {
        return GeneralAgencyAgreementDetail::builder()->build();
    }

    public static function buildShippingDocumentFormat(): ShippingDocumentFormat
    {
        return ShippingDocumentFormat::builder()
            ->setProvideInstructions(true)
            ->setStockType(ShippingDocumentFormatStockType::PAPER_LETTER)
            ->setLocale('en_US')
            ->setDocType(ShippingDocumentFormatDocType::PDF)
            ->build();
    }

    public static function buildDocumentFormatOptionsRequested(): DocumentFormatOptionsRequested
    {
        return DocumentFormatOptionsRequested::builder()
            ->setOptions([DocumentFormatOptionsRequestedOptionsItem::SHIPPING_LABEL_FIRST])
            ->build();
    }

    public static function buildShippingDocumentDispositionDetail(): ShippingDocumentDispositionDetail
    {
        return ShippingDocumentDispositionDetail::builder()
            ->setDispositionType(ShippingDocumentDispositionDetailDispositionType::CONFIRMED)
            ->build();
    }

    public static function buildShippingDocumentEmailDetail(): ShippingDocumentEmailDetail
    {
        $shippingDocumentEmailRecipient = ShippingDocumentEmailRecipient::builder(
            ShippingDocumentEmailRecipientRecipientType::THIRD_PARTY,
        )
            ->setEmailAddress('email@fedex.com')
            ->build();

        return ShippingDocumentEmailDetail::builder([$shippingDocumentEmailRecipient])
            ->setLocale('en_US')
            ->setGrouping(ShippingDocumentEmailDetailGrouping::NONE)
            ->build();
    }

    public static function buildShippingDocumentEmailRecipient(): ShippingDocumentEmailRecipient
    {
        return ShippingDocumentEmailRecipient::builder(ShippingDocumentEmailRecipientRecipientType::THIRD_PARTY)
            ->setEmailAddress('email@fedex.com')
            ->build();
    }

    public static function buildReturnInstructionsDetail(): ReturnInstructionsDetail
    {
        return ReturnInstructionsDetail::builder()
            ->setCustomText('This is additional text printed on Return instr')
            ->build();
    }

    public static function buildReturnShippingDocumentFormat(): ReturnShippingDocumentFormat
    {
        return ReturnShippingDocumentFormat::builder()
            ->setProvideInstructions(true)
            ->setStockType(ReturnShippingDocumentFormatStockType::PAPER_LETTER)
            ->setLocale('en_US"')
            ->setDocType(ReturnShippingDocumentFormatDocType::PNG)
            ->build();
    }

    public static function buildOp900Detail(): Op900Detail
    {
        return Op900Detail::builder()
            ->setSignatureName('Signature Name')
            ->build();
    }

    public static function buildCustomerImageUsage(): CustomerImageUsage
    {
        return CustomerImageUsage::builder()
            ->setId(CustomerImageUsageId::IMAGE_5)
            ->setType(CustomerImageUsageType::SIGNATURE)
            ->setProvidedImageType(CustomerImageUsageProvidedImageType::SIGNATURE)
            ->build();
    }

    public static function buildUsmcaCertificationOfOriginDetail(): UsmcaCertificationOfOriginDetail
    {
        return UsmcaCertificationOfOriginDetail::builder()
            ->setCertifierSpecification(UsmcaCertificationOfOriginDetailCertifierSpecification::EXPORTER)
            ->setImporterSpecification(UsmcaCertificationOfOriginDetailImporterSpecification::UNKNOWN)
            ->setProducerSpecification(UsmcaCertificationOfOriginDetailProducerSpecification::SAME_AS_EXPORTER)
            ->setCertifierJobTitle('Manager')
            ->build();
    }

    public static function buildParty3(): Party3
    {
        return Party3::builder()->build();
    }

    public static function buildPartyAddress1(): PartyAddress1
    {
        return PartyAddress1::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setCountryCode('US')
            ->setResidential(false)
            ->setGeographicCoordinates('geographicCoordinates')
            ->build();
    }

    public static function buildPartyContact1(): PartyContact1
    {
        return PartyContact1::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setPhoneNumber('1234567890')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildRetrieveDateRange(): RetrieveDateRange
    {
        return RetrieveDateRange::builder()
            ->setBegins('22-01-2020')
            ->setEnds('2-01-2020')
            ->build();
    }

    public static function buildUsmcaCommercialInvoiceCertificationOfOriginDetail(): UsmcaCommercialInvoiceCertificationOfOriginDetail
    {
        return UsmcaCommercialInvoiceCertificationOfOriginDetail::builder()
            ->setCertifierSpecification(UsmcaCommercialInvoiceCertificationOfOriginDetailCertifierSpecification::EXPORTER)
            ->setImporterSpecification(UsmcaCommercialInvoiceCertificationOfOriginDetailImporterSpecification::UNKNOWN)
            ->setProducerSpecification(UsmcaCommercialInvoiceCertificationOfOriginDetailProducerSpecification::SAME_AS_EXPORTER)
            ->setCertifierJobTitle('Manager')
            ->build();
    }

    public static function buildCertificateOfOriginDetail(): CertificateOfOriginDetail
    {
        return CertificateOfOriginDetail::builder()->build();
    }

    public static function buildCommercialInvoiceDetail(): CommercialInvoiceDetail
    {
        return CommercialInvoiceDetail::builder()->build();
    }

    public static function buildMasterTrackingId(): MasterTrackingId
    {
        return MasterTrackingId::builder()
            ->setFormId('0201')
            ->setTrackingIdType('EXPRESS')
            ->setUspsApplicationId('92')
            ->setTrackingNumber('49092000070120032835')
            ->build();
    }

    public static function buildRequestedPackageLineItem(): RequestedPackageLineItem
    {
        $weight = Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();

        return RequestedPackageLineItem::builder($weight)
            ->setSequenceNumber(0)
            ->setSubPackagingType('BUCKET')
            ->setGroupPackageCount(2)
            ->setItemDescriptionForClearance('description')
            ->setItemDescription('item description for the package')
            ->build();
    }

    public static function buildCustomerReference1(): CustomerReference1
    {
        return CustomerReference1::builder()
            ->setCustomerReferenceType(CustomerReference1CustomerReferenceType::INVOICE_NUMBER)
            ->setValue('3686')
            ->build();
    }

    public static function buildDimensions(): Dimensions
    {
        return Dimensions::builder()
            ->setLength(3)
            ->setWidth(2)
            ->setHeight(1)
            ->setUnits(DimensionsUnits::CM)
            ->build();
    }

    public static function buildContentRecord(): ContentRecord
    {
        return ContentRecord::builder()
            ->setItemNumber('2876')
            ->setReceivedQuantity(256)
            ->setDescription('Description')
            ->setPartNumber('456')
            ->build();
    }

    public static function buildPackageSpecialServicesRequested(): PackageSpecialServicesRequested
    {
        return PackageSpecialServicesRequested::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->setSignatureOptionType(PackageSpecialServicesRequestedSignatureOptionType::ADULT)
            ->setPieceCountVerificationBoxCount(0)
            ->build();
    }

    public static function buildPriorityAlertDetail(): PriorityAlertDetail
    {
        return PriorityAlertDetail::builder()
            ->setEnhancementTypes(['REPLACE_ME'])
            ->setContent(['REPLACE_ME'])
            ->build();
    }

    public static function buildSignatureOptionDetail(): SignatureOptionDetail
    {
        return SignatureOptionDetail::builder()
            ->setSignatureReleaseNumber('23456')
            ->build();
    }

    public static function buildAlcoholDetail(): AlcoholDetail
    {
        return AlcoholDetail::builder()
            ->setAlcoholRecipientType(AlcoholDetailAlcoholRecipientType::LICENSEE)
            ->setShipperAgreementType('Retailer')
            ->build();
    }

    public static function buildDangerousGoodsDetail(): DangerousGoodsDetail
    {
        return DangerousGoodsDetail::builder()
            ->setCargoAircraftOnly(false)
            ->setRegulation(DangerousGoodsDetailRegulation::ADR)
            ->setAccessibility(DangerousGoodsDetailAccessibility::INACCESSIBLE)
            ->setOptions([DangerousGoodsDetailOptionsItem::HAZARDOUS_MATERIALS])
            ->build();
    }

    public static function buildPackageCODDetail(): PackageCODDetail
    {
        return PackageCODDetail::builder()->build();
    }

    public static function buildBatteryDetail(): BatteryDetail
    {
        return BatteryDetail::builder()->build();
    }

    public static function buildStandaloneBatteryDetails(): StandaloneBatteryDetails
    {
        return StandaloneBatteryDetails::builder()
            ->setBatteryMaterialType(StandaloneBatteryDetailsBatteryMaterialType::LITHIUM_METAL)
            ->build();
    }

    public static function buildShipperAccountNumber(): ShipperAccountNumber
    {
        return ShipperAccountNumber::builder('REPLACE_ME')->build();
    }

    public static function buildSHPCResponseVOShipShipment(): SHPCResponseVOShipShipment
    {
        return SHPCResponseVOShipShipment::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildShipShipmentOutputVO(): ShipShipmentOutputVO
    {
        return ShipShipmentOutputVO::builder()
            ->setJobId('abc123456')
            ->build();
    }

    public static function buildTransactionCreateShipmentOutputVO(): TransactionCreateShipmentOutputVO
    {
        return TransactionCreateShipmentOutputVO::builder()
            ->setServiceType('STANDARD_OVERNIGHT')
            ->setShipDatestamp('2010-03-04')
            ->setServiceCategory('EXPRESS')
            ->setServiceName('FedEx 2 Day Freight')
            ->setMasterTrackingNumber('794953535000')
            ->build();
    }

    public static function buildCompletedCreateShipmentDetail(): CompletedCreateShipmentDetail
    {
        return CompletedCreateShipmentDetail::builder()
            ->setCarrierCode('FDXE')
            ->setPackagingDescription('Customer Packaging')
            ->setUsDomestic(true)
            ->setExportComplianceStatement('12345678901234567')
            ->build();
    }

    public static function buildTransactionShipmentOutputVO(): TransactionShipmentOutputVO
    {
        return TransactionShipmentOutputVO::builder()
            ->setServiceType('STANDARD_OVERNIGHT')
            ->setShipDatestamp('2010-03-04')
            ->setServiceCategory('EXPRESS')
            ->setServiceName('FedEx 2 Day Freight')
            ->setMasterTrackingNumber('794953535000')
            ->build();
    }

    public static function buildLabelResponseVO(): LabelResponseVO
    {
        return LabelResponseVO::builder()
            ->setContentKey('content key')
            ->setCopiesToPrint(10)
            ->setContentType(LabelResponseVOContentType::COMMERCIAL_INVOICE)
            ->setTrackingNumber('794953535000')
            ->setDocType('PDF')
            ->setEncodedLabel('encoded label')
            ->setUrl('https://wwwdev.idev.fedex.com/document/v2/document/retrieve/SH,794810209259_SHIPPING_P/isLabel=true&autoPrint=false')
            ->build();
    }

    public static function buildAlert(): Alert
    {
        return Alert::builder()
            ->setCode('SHIPMENT.VALIDATION.SUCCESS')
            ->setAlertType(AlertAlertType::NOTE)
            ->setMessage('Shipment validated successfully. No errors found.')
            ->build();
    }

    public static function buildAlert3P(): Alert3P
    {
        return Alert3P::builder()
            ->setCode('RECIPIENTCONTACT.PHONENUMBER.INVALID')
            ->setMessage('Recipient’s phone number format is not matching with recipient\'s country code; hence, recipient will not receive Convenient Delivery Options. Moving forward, please provide valid mobile phone number.')
            ->build();
    }

    public static function buildAlert3PP(): Alert3PP
    {
        return Alert3PP::builder()
            ->setCode('RECIPIENTCONTACT.PHONENUMBER.NOTSUPPORTED')
            ->setMessage('Convenient Delivery Options will not be provided with recipient’s landline number. Moving forward, please provide valid mobile phone number.')
            ->build();
    }

    public static function buildPieceResponse(): PieceResponse
    {
        return PieceResponse::builder()
            ->setNetChargeAmount(21.45)
            ->setAcceptanceTrackingNumber('794953535000')
            ->setServiceCategory(PieceResponseServiceCategory::EXPRESS)
            ->setListCustomerTotalCharge('listCustomerTotalCharge')
            ->setDeliveryTimestamp('2012-09-23')
            ->setTrackingIdType('FEDEX')
            ->setAdditionalChargesDiscount(621.45)
            ->setListRateAmount(1.45)
            ->setBaseRateAmount(321.45)
            ->setPackageSequenceNumber(215)
            ->setNetDiscountAmount(121.45)
            ->setCodCollectionAmount(231.45)
            ->setMasterTrackingNumber('794953535000')
            ->setAcceptanceType('acceptanceType')
            ->setTrackingNumber('794953535000')
            ->build();
    }

    public static function buildTransactionDetailVO(): TransactionDetailVO
    {
        return TransactionDetailVO::builder()
            ->setTransactionDetails('transactionDetails')
            ->setTransactionId('12345')
            ->build();
    }

    public static function buildCompletedShipmentDetail(): CompletedShipmentDetail
    {
        return CompletedShipmentDetail::builder()
            ->setCarrierCode('FDXE')
            ->setPackagingDescription('Customer Packaging')
            ->setUsDomestic(true)
            ->setExportComplianceStatement('12345678901234567')
            ->build();
    }

    public static function buildCompletedPackageDetail(): CompletedPackageDetail
    {
        return CompletedPackageDetail::builder()
            ->setSequenceNumber(256)
            ->setSignatureOption('DIRECT')
            ->setGroupNumber(567)
            ->setOversizeClass('OVERSIZE_1, OVERSIZE_2, OVERSIZE_3')
            ->build();
    }

    public static function buildPackageOperationalDetail(): PackageOperationalDetail
    {
        return PackageOperationalDetail::builder()
            ->setAstraHandlingText('astraHandlingText')
            ->build();
    }

    public static function buildPackageBarcodes(): PackageBarcodes
    {
        return PackageBarcodes::builder()->build();
    }

    public static function buildBinaryBarcode(): BinaryBarcode
    {
        return BinaryBarcode::builder()
            ->setType('COMMON-2D')
            ->build();
    }

    public static function buildStringBarcode(): StringBarcode
    {
        return StringBarcode::builder()
            ->setType('ADDRESS')
            ->setValue('1010062512241535917900794953544894')
            ->build();
    }

    public static function buildOperationalInstructions(): OperationalInstructions
    {
        return OperationalInstructions::builder()
            ->setNumber(17)
            ->setContent('content')
            ->build();
    }

    public static function buildTrackingId(): TrackingId
    {
        return TrackingId::builder()
            ->setFormId('0201')
            ->setTrackingIdType('EXPRESS')
            ->setUspsApplicationId('92')
            ->setTrackingNumber('49092000070120032835')
            ->build();
    }

    public static function buildPackageRating(): PackageRating
    {
        return PackageRating::builder()
            ->setEffectiveNetDiscount(0.0)
            ->setActualRateType('PAYOR_ACCOUNT_PACKAGE')
            ->build();
    }

    public static function buildPackageRateDetail(): PackageRateDetail
    {
        return PackageRateDetail::builder()
            ->setRatedWeightMethod('DIM')
            ->setTotalFreightDiscounts(44.55)
            ->setTotalTaxes(3.45)
            ->setMinimumChargeType('CUSTOMER')
            ->setBaseCharge(45.67)
            ->setTotalRebates(4.56)
            ->setRateType('PAYOR_RETAIL_PACKAGE')
            ->setNetFreight(4.89)
            ->setTotalSurcharges(22.56)
            ->setNetFedExCharge(12.56)
            ->setNetCharge(121.56)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildSurcharge(): Surcharge
    {
        return Surcharge::builder()
            ->setAmount(0.0)
            ->setSurchargeType('APPOINTMENT_DELIVERY')
            ->setLevel('PACKAGE, or SHIPMENT')
            ->setDescription('description')
            ->build();
    }

    public static function buildCompletedHazardousPackageDetail(): CompletedHazardousPackageDetail
    {
        return CompletedHazardousPackageDetail::builder()
            ->setRegulation('IATA')
            ->setAccessibility('ACCESSIBLE')
            ->setLabelType('II_YELLOW')
            ->setCargoAircraftOnly(true)
            ->setReferenceId('123456')
            ->setRadioactiveTransportIndex(2.45)
            ->build();
    }

    public static function buildValidatedHazardousContainer(): ValidatedHazardousContainer
    {
        return ValidatedHazardousContainer::builder()
            ->setQValue(2.0)
            ->build();
    }

    public static function buildValidatedHazardousCommodityContent(): ValidatedHazardousCommodityContent
    {
        return ValidatedHazardousCommodityContent::builder()
            ->setMassPoints(2.0)
            ->build();
    }

    public static function buildHazardousCommodityQuantityDetail(): HazardousCommodityQuantityDetail
    {
        return HazardousCommodityQuantityDetail::builder(
            // quantityType
            HazardousCommodityQuantityDetailQuantityType::GROSS,
            // amount
            24.56,
        )
            ->setUnits('Kg')
            ->setValue(68.25)
            ->build();
    }

    public static function buildHazardousCommodityContent001(): HazardousCommodityContent001
    {
        return HazardousCommodityContent001::builder()->build();
    }

    public static function buildHazardousCommodityInnerReceptacleDetail01(): HazardousCommodityInnerReceptacleDetail01
    {
        return HazardousCommodityInnerReceptacleDetail01::builder()->build();
    }

    public static function buildHazardousCommodityQuantityDetail002(): HazardousCommodityQuantityDetail002
    {
        return HazardousCommodityQuantityDetail002::builder(
            // quantityType
            HazardousCommodityQuantityDetail002QuantityType::NET,
            // amount
            34.56,
        )
            ->setUnits('Kg')
            ->build();
    }

    public static function buildHazardousCommodityOptionDetail01(): HazardousCommodityOptionDetail01
    {
        return HazardousCommodityOptionDetail01::builder()
            ->setCustomerSuppliedLabelText('Customer Supplied Label Text.')
            ->build();
    }

    public static function buildHazardousCommodityDescription01(): HazardousCommodityDescription01
    {
        return HazardousCommodityDescription01::builder(
            // reportableQuantity
            true,
            // packingGroup
            HazardousCommodityDescription01PackingGroup::I,
        )
            ->setSequenceNumber(9812)
            ->setSubsidiaryClasses(['REPLACE_ME'])
            ->setLabelText('labelText')
            ->setTechnicalName('technicalName')
            ->setAuthorization('authorization')
            ->setPercentage(12.45)
            ->setId('123')
            ->setProperShippingName('properShippingName')
            ->setHazardClass('hazard Class')
            ->build();
    }

    public static function buildHazardousCommodityPackingDetail01(): HazardousCommodityPackingDetail01
    {
        return HazardousCommodityPackingDetail01::builder(true)
            ->setPackingInstructions('packing Instructions')
            ->build();
    }

    public static function buildValidatedHazardousCommodityDescription(): ValidatedHazardousCommodityDescription
    {
        return ValidatedHazardousCommodityDescription::builder()
            ->setSequenceNumber(876)
            ->setPackingInstructions('packingInstructions')
            ->setSubsidiaryClasses(['REPLACE_ME'])
            ->setLabelText('labelText')
            ->setTunnelRestrictionCode('UN2919')
            ->setSpecialProvisions('specialProvisions')
            ->setProperShippingNameAndDescription('properShippingNameAndDescription')
            ->setTechnicalName('technicalName')
            ->setSymbols('symbols')
            ->setAuthorization('authorization')
            ->setAttributes(['REPLACE_ME'])
            ->setId('1234')
            ->setPackingGroup('packingGroup')
            ->setProperShippingName('properShippingName')
            ->setHazardClass('hazardClass')
            ->build();
    }

    public static function buildNetExplosiveDetail(): NetExplosiveDetail
    {
        return NetExplosiveDetail::builder()
            ->setAmount(10.0)
            ->setUnits('units')
            ->setType('NET_EXPLOSIVE_WEIGHT')
            ->build();
    }

    public static function buildShipmentOperationalDetail(): ShipmentOperationalDetail
    {
        return ShipmentOperationalDetail::builder()
            ->setOriginServiceArea('A1')
            ->setServiceCode('010')
            ->setAirportId('DFW')
            ->setPostalCode('38010')
            ->setScac('scac')
            ->setDeliveryDay('TUE')
            ->setOriginLocationId('678')
            ->setCountryCode('US')
            ->setAstraDescription('SMART POST')
            ->setOriginLocationNumber(243)
            ->setDeliveryDate('2001-04-05')
            ->setDeliveryEligibilities(['REPLACE_ME'])
            ->setIneligibleForMoneyBackGuarantee(true)
            ->setMaximumTransitTime('SEVEN_DAYS')
            ->setDestinationLocationStateOrProvinceCode('GA')
            ->setAstraPlannedServiceLevel('TUE - 15 OCT 10:30A')
            ->setDestinationLocationId('DALA')
            ->setTransitTime('TWO_DAYS')
            ->setStateOrProvinceCode('GA')
            ->setDestinationLocationNumber(876)
            ->setPackagingCode('03')
            ->setCommitDate('2019-10-15')
            ->setPublishedDeliveryTime('10:30A')
            ->setUrsaSuffixCode('Ga')
            ->setUrsaPrefixCode('XH')
            ->setDestinationServiceArea('A1')
            ->setCommitDay('TUE')
            ->setCustomTransitTime('ONE_DAY')
            ->build();
    }

    public static function buildCompletedHoldAtLocationDetail(): CompletedHoldAtLocationDetail
    {
        return CompletedHoldAtLocationDetail::builder()
            ->setHoldingLocationType('FEDEX_STAFFED')
            ->build();
    }

    public static function buildJustContactAndAddress(): JustContactAndAddress
    {
        return JustContactAndAddress::builder()->build();
    }

    public static function buildAddress(): Address
    {
        return Address::builder()->build();
    }

    public static function buildContact(): Contact
    {
        return Contact::builder()
            ->setPersonName('John')
            ->build();
    }

    public static function buildCompletedEtdDetail(): CompletedEtdDetail
    {
        return CompletedEtdDetail::builder()
            ->setFolderId('0b0493e580dc1a1b')
            ->setType('COMMERCIAL_INVOICE')
            ->build();
    }

    public static function buildServiceDescription(): ServiceDescription
    {
        return ServiceDescription::builder()
            ->setServiceType('FEDEX_1_DAY_FREIGHT')
            ->setCode('80')
            ->setOperatingOrgCodes(['REPLACE_ME'])
            ->setAstraDescription('2 DAY FRT')
            ->setDescription('description')
            ->setServiceId('EP1000000027')
            ->setServiceCategory('freight')
            ->build();
    }

    public static function buildProductName(): ProductName
    {
        return ProductName::builder()
            ->setType('long')
            ->setEncoding('UTF-8')
            ->setValue('F-2')
            ->build();
    }

    public static function buildCompletedHazardousShipmentDetail(): CompletedHazardousShipmentDetail
    {
        return CompletedHazardousShipmentDetail::builder()->build();
    }

    public static function buildCompletedHazardousSummaryDetail(): CompletedHazardousSummaryDetail
    {
        return CompletedHazardousSummaryDetail::builder()
            ->setSmallQuantityExceptionPackageCount(10)
            ->build();
    }

    public static function buildAdrLicenseDetail(): AdrLicenseDetail
    {
        return AdrLicenseDetail::builder()->build();
    }

    public static function buildLicenseOrPermitDetail(): LicenseOrPermitDetail
    {
        return LicenseOrPermitDetail::builder()
            ->setNumber('12345')
            ->setEffectiveDate('2019-08-09')
            ->setExpirationDate('2019-04-09')
            ->build();
    }

    public static function buildShipmentDryIceDetail(): ShipmentDryIceDetail
    {
        return ShipmentDryIceDetail::builder(10)->build();
    }

    public static function buildShipmentDryIceProcessingOptionsRequested(): ShipmentDryIceProcessingOptionsRequested
    {
        return ShipmentDryIceProcessingOptionsRequested::builder()
            ->setOptions(['REPLACE_ME'])
            ->build();
    }

    public static function buildShipmentRating(): ShipmentRating
    {
        return ShipmentRating::builder()
            ->setActualRateType('PAYOR_LIST_SHIPMENT')
            ->build();
    }

    public static function buildCreateShipmentRating(): CreateShipmentRating
    {
        return CreateShipmentRating::builder()
            ->setActualRateType('PAYOR_LIST_SHIPMENT')
            ->build();
    }

    public static function buildCreateShipmentRatingPickupRateDetail(): CreateShipmentRatingPickupRateDetail
    {
        return CreateShipmentRatingPickupRateDetail::builder()
            ->setRateType(CreateShipmentRatingPickupRateDetailRateType::PAYOR_ACCOUNT_PACKAGE)
            ->setRateScale('*USER IMS20160104  LD067110')
            ->setRateZone('CA003O')
            ->setRatingBasis(CreateShipmentRatingPickupRateDetailRatingBasis::SHIPMENT_WEIGHT_BASED)
            ->setPricingCode(CreateShipmentRatingPickupRateDetailPricingCode::ACTUAL)
            ->setMinimumChargeType(CreateShipmentRatingPickupRateDetailMinimumChargeType::EARNED_DISCOUNT)
            ->setSpecialRatingApplied([CreateShipmentRatingPickupRateDetailSpecialRatingAppliedItem::FEDEX_ONE_RATE])
            ->setFuelSurchargePercent(121.0)
            ->setPickupBaseChargeDescription(CreateShipmentRatingPickupRateDetailPickupBaseChargeDescription::Pickup_Area_Surcharge)
            ->build();
    }

    public static function buildMoney1(): Money1
    {
        return Money1::builder(Money1Value::CUSTOMS_VALUE)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildEdtCommodityTax(): EdtCommodityTax
    {
        return EdtCommodityTax::builder()
            ->setHarmonizedCode('harmonizedCode')
            ->build();
    }

    public static function buildEdtTaxDetail1(): EdtTaxDetail1
    {
        return EdtTaxDetail1::builder()
            ->setTaxType(EdtTaxDetail1TaxType::ADDITIONAL_TAXES)
            ->setTaxcode('taxcode')
            ->setEffectiveDate('2019-12-06')
            ->setName('VAT')
            ->setDescription('Christmas')
            ->setFormula('VAT Payable = Output VAT – Input VAT')
            ->build();
    }

    public static function buildEdtTaxDetail1TaxRatesItem(): EdtTaxDetail1TaxRatesItem
    {
        return EdtTaxDetail1TaxRatesItem::builder()->build();
    }

    public static function buildEdtTaxDetail1AppliedPreferentialTradeAgreement(): EdtTaxDetail1AppliedPreferentialTradeAgreement
    {
        return EdtTaxDetail1AppliedPreferentialTradeAgreement::builder()
            ->setId('description')
            ->setName('description')
            ->setDescription('description')
            ->build();
    }

    public static function buildVariableHandlingCharges1(): VariableHandlingCharges1
    {
        return VariableHandlingCharges1::builder()->build();
    }

    public static function buildAncillaryFeeAndTax(): AncillaryFeeAndTax
    {
        return AncillaryFeeAndTax::builder()
            ->setType(AncillaryFeeAndTaxType::CLEARANCE_ENTRY_FEE)
            ->setDescription('description')
            ->build();
    }

    public static function buildRateDiscount2(): RateDiscount2
    {
        return RateDiscount2::builder()
            ->setRateDiscountType(RateDiscount2RateDiscountType::INCENTIVE)
            ->setDescription('description')
            ->setPercent(0.0)
            ->build();
    }

    public static function buildRebate(): Rebate
    {
        return Rebate::builder()
            ->setRebateType(RebateRebateType::EARNED)
            ->setDescription('description')
            ->setPercent(0.0)
            ->build();
    }

    public static function buildSurcharge2(): Surcharge2
    {
        return Surcharge2::builder()
            ->setSurchargeType(Surcharge2SurchargeType::COD)
            ->setLevel(Surcharge2Level::PACKAGE)
            ->setDescription('description')
            ->build();
    }

    public static function buildTax2(): Tax2
    {
        return Tax2::builder()
            ->setTaxType(Tax2TaxType::VAT)
            ->setDescription('description')
            ->build();
    }

    public static function buildShipmentRateDetail(): ShipmentRateDetail
    {
        return ShipmentRateDetail::builder()
            ->setRateZone('US001O')
            ->setRatedWeightMethod('ACTUAL')
            ->setTotalDutiesTaxesAndFees(24.56)
            ->setPricingCode('LTL_FREIGHT')
            ->setTotalFreightDiscounts(1.56)
            ->setTotalTaxes(3.45)
            ->setTotalDutiesAndTaxes(6.78)
            ->setTotalAncillaryFeesAndTaxes(5.67)
            ->setTotalRebates(1.98)
            ->setFuelSurchargePercent(4.56)
            ->setTotalNetFreight(9.56)
            ->setTotalNetFedExCharge(88.56)
            ->setDimDivisor(0)
            ->setRateType('RATED_ACCOUNT_SHIPMENT')
            ->setTotalSurcharges(9.880000000000001)
            ->setRateScale('00000')
            ->setTotalNetCharge(3.78)
            ->setTotalBaseCharge(234.56)
            ->setTotalNetChargeWithDutiesAndTaxes(222.56)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildTax(): Tax
    {
        return Tax::builder()
            ->setAmount(10.0)
            ->setLevel('level')
            ->setDescription('description')
            ->setType('type')
            ->build();
    }

    public static function buildCurrencyExchangeRate(): CurrencyExchangeRate
    {
        return CurrencyExchangeRate::builder()
            ->setRate(25.6)
            ->setFromCurrency('Rupee')
            ->setIntoCurrency('USD')
            ->build();
    }

    public static function buildShipmentLegRateDetail(): ShipmentLegRateDetail
    {
        return ShipmentLegRateDetail::builder()
            ->setRateZone('rateZone')
            ->setPricingCode('pricingCode')
            ->setTotalRebates(2.0)
            ->setFuelSurchargePercent(6.0)
            ->setDimDivisor(6)
            ->setRateType('PAYOR_RETAIL_PACKAGE')
            ->setLegDestinationLocationId('legDestinationLocationId')
            ->setDimDivisorType('dimDivisorType')
            ->setTotalBaseCharge(6.0)
            ->setRatedWeightMethod('ratedWeightMethod')
            ->setTotalFreightDiscounts(9.0)
            ->setTotalTaxes(12.6)
            ->setMinimumChargeType('minimumChargeType')
            ->setTotalDutiesAndTaxes(17.78)
            ->setTotalNetFreight(6.0)
            ->setTotalNetFedExCharge(3.2)
            ->setTotalSurcharges(5.0)
            ->setRateScale('6702')
            ->setTotalNetCharge(253.0)
            ->setTotalNetChargeWithDutiesAndTaxes(25.67)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildRateDiscount(): RateDiscount
    {
        return RateDiscount::builder()
            ->setAmount(8.9)
            ->setRateDiscountType('COUPON')
            ->setPercent(28.9)
            ->setDescription('description')
            ->build();
    }

    public static function buildDocumentRequirementsDetail(): DocumentRequirementsDetail
    {
        return DocumentRequirementsDetail::builder()
            ->setRequiredDocuments(['REPLACE_ME'])
            ->setProhibitedDocuments(['REPLACE_ME'])
            ->build();
    }

    public static function buildDocumentGenerationDetail(): DocumentGenerationDetail
    {
        return DocumentGenerationDetail::builder()->build();
    }

    public static function buildPendingShipmentAccessDetail(): PendingShipmentAccessDetail
    {
        return PendingShipmentAccessDetail::builder()->build();
    }

    public static function buildPendingShipmentAccessorDetail(): PendingShipmentAccessorDetail
    {
        return PendingShipmentAccessorDetail::builder()
            ->setPassword('password')
            ->setRole('role')
            ->setEmailLabelUrl('emailLabelUrl')
            ->setUserId('userId')
            ->build();
    }

    public static function buildShipmentAdvisoryDetails(): ShipmentAdvisoryDetails
    {
        return ShipmentAdvisoryDetails::builder()->build();
    }

    public static function buildRegulatoryAdvisoryDetail(): RegulatoryAdvisoryDetail
    {
        return RegulatoryAdvisoryDetail::builder()->build();
    }

    public static function buildSuggestedCommodityDetail(): SuggestedCommodityDetail
    {
        return SuggestedCommodityDetail::builder()
            ->setDescription('description')
            ->setHarmonizedCode('harmonized Code')
            ->build();
    }

    public static function buildRegulatoryProhibition(): RegulatoryProhibition
    {
        return RegulatoryProhibition::builder()
            ->setDerivedHarmonizedCode('01')
            ->setCommodityIndex(12)
            ->setSource('source')
            ->setCategories(['REPLACE_ME'])
            ->setType('type')
            ->setStatus('status')
            ->build();
    }

    public static function buildMessage(): Message
    {
        return Message::builder()
            ->setCode('code')
            ->setText('Text')
            ->setLocalizedText('localizedText')
            ->build();
    }

    public static function buildMessageParameter(): MessageParameter
    {
        return MessageParameter::builder()
            ->setId('message ID')
            ->setValue('Message value')
            ->build();
    }

    public static function buildRegulatoryWaiver(): RegulatoryWaiver
    {
        return RegulatoryWaiver::builder()
            ->setDescription('description')
            ->setId('id')
            ->build();
    }

    public static function buildErrorResponseVO(): ErrorResponseVO
    {
        return ErrorResponseVO::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCXSError(): CXSError
    {
        return CXSError::builder()->build();
    }

    public static function buildParameter(): Parameter
    {
        return Parameter::builder()->build();
    }

    public static function buildErrorResponseVO401(): ErrorResponseVO401
    {
        return ErrorResponseVO401::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError401(): CXSError401
    {
        return CXSError401::builder()->build();
    }

    public static function buildErrorResponseVO403(): ErrorResponseVO403
    {
        return ErrorResponseVO403::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError403(): CXSError403
    {
        return CXSError403::builder()->build();
    }

    public static function buildErrorResponseVO404(): ErrorResponseVO404
    {
        return ErrorResponseVO404::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError404(): CXSError404
    {
        return CXSError404::builder()->build();
    }

    public static function buildErrorResponseVO500(): ErrorResponseVO500
    {
        return ErrorResponseVO500::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCXSError500(): CXSError500
    {
        return CXSError500::builder()->build();
    }

    public static function buildErrorResponseVO503(): ErrorResponseVO503
    {
        return ErrorResponseVO503::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError503(): CXSError503
    {
        return CXSError503::builder()->build();
    }

    public static function buildFullSchemaCancelShipment(): FullSchemaCancelShipment
    {
        $accountNumber = ShipperAccountNumber::builder('REPLACE_ME')->build();

        return FullSchemaCancelShipment::builder(
            // accountNumber
            $accountNumber,
            // trackingNumber
            '794953555571',
        )
            ->setEmailShipment(true)
            ->setSenderCountryCode('US')
            ->setDeletionControl(FullSchemaCancelShipmentDeletionControl::DELETE_ALL_PACKAGES)
            ->build();
    }

    public static function buildSHPCResponseVOCancelShipment(): SHPCResponseVOCancelShipment
    {
        return SHPCResponseVOCancelShipment::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCancelShipmentOutputVO(): CancelShipmentOutputVO
    {
        return CancelShipmentOutputVO::builder()
            ->setCancelledShipment(true)
            ->setCancelledHistory(true)
            ->setMessage('Shipment is successfully cancelled')
            ->build();
    }

    public static function buildErrorResponseVO2(): ErrorResponseVO2
    {
        return ErrorResponseVO2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCXSError2(): CXSError2
    {
        return CXSError2::builder()->build();
    }

    public static function buildErrorResponseVO4012(): ErrorResponseVO401_2
    {
        return ErrorResponseVO401_2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildErrorResponseVO4032(): ErrorResponseVO403_2
    {
        return ErrorResponseVO403_2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildErrorResponseVO4042(): ErrorResponseVO404_2
    {
        return ErrorResponseVO404_2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildErrorResponseVO5002(): ErrorResponseVO500_2
    {
        return ErrorResponseVO500_2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildErrorResponseVO5032(): ErrorResponseVO503_2
    {
        return ErrorResponseVO503_2::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildFullSchemaGetConfirmedShipmentAsyncResults(): FullSchemaGetConfirmedShipmentAsyncResults
    {
        $accountNumber = AccountNumber::builder()
            ->setValue('12XXXXX89')
            ->build();

        return FullSchemaGetConfirmedShipmentAsyncResults::builder(
            // accountNumber
            $accountNumber,
            // jobId
            '89sxxxxx233ae24ff31xxxxx',
        )->build();
    }

    public static function buildAccountNumber(): AccountNumber
    {
        return AccountNumber::builder()
            ->setValue('12XXXXX89')
            ->build();
    }

    public static function buildSHPCResponseVOGetOpenShipmentResults(): SHPCResponseVOGetOpenShipmentResults
    {
        return SHPCResponseVOGetOpenShipmentResults::builder()
            ->setTransactionId('624xxxxx-b709-470c-8c39-4b55112xxxxx')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildGetOpenShipmentResultsOutputVO(): GetOpenShipmentResultsOutputVO
    {
        return GetOpenShipmentResultsOutputVO::builder()->build();
    }

    public static function buildFullSchemaVerifyShipment(): FullSchemaVerifyShipment
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $shipper = ShipperParty::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
        $address_1 = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact_1 = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $recipientsParty = RecipientsParty::builder(
            // address
            $address_1,
            // contact
            $contact_1,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
        $shippingChargesPayment = Payment::builder(PaymentPaymentType::SENDER)->build();
        $labelSpecification = LabelSpecification::builder(
            // labelStockType
            LabelSpecificationLabelStockType::PAPER_7X475,
            // imageType
            LabelSpecificationImageType::PDF,
        )
            ->setLabelFormatType(LabelSpecificationLabelFormatType::COMMON2D)
            ->setLabelOrder(LabelSpecificationLabelOrder::SHIPPING_LABEL_FIRST)
            ->setLabelRotation(LabelSpecificationLabelRotation::UPSIDE_DOWN)
            ->setLabelPrintingOrientation(LabelSpecificationLabelPrintingOrientation::TOP_EDGE_OF_TEXT_FIRST)
            ->setReturnedDispositionDetail('RETURNED')
            ->setResolution(300)
            ->build();
        $weight = Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSequenceNumber(0)
            ->setSubPackagingType('BUCKET')
            ->setGroupPackageCount(2)
            ->setItemDescriptionForClearance('description')
            ->setItemDescription('item description for the package')
            ->build();
        $requestedShipment = RequestedShipmentVerify::builder(
            // pickupType
            RequestedShipmentVerifyPickupType::USE_SCHEDULED_PICKUP,
            // serviceType
            'PRIORITY_OVERNIGHT',
            // packagingType
            'YOUR_PACKAGING',
            // totalWeight
            20,
            // shipper
            $shipper,
            // recipients
            [$recipientsParty],
            // shippingChargesPayment
            $shippingChargesPayment,
            // labelSpecification
            $labelSpecification,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setShipDatestamp('2019-10-14')
            ->setBlockInsightVisibility(true)
            ->setRateRequestType([RequestedShipmentVerifyRateRequestTypeItem::LIST])
            ->setPreferredCurrency('USD')
            ->build();

        return FullSchemaVerifyShipment::builder($requestedShipment)->build();
    }

    public static function buildRequestedShipmentVerify(): RequestedShipmentVerify
    {
        $address = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $shipper = ShipperParty::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
        $address_1 = PartyAddress2::builder(
            // streetLines
            ['REPLACE_ME'],
            // city
            'Beverly Hills',
            // countryCode
            'US',
        )
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setResidential(false)
            ->build();
        $contact_1 = PartyContacts2::builder('918xxxxx890')
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneExtension('91')
            ->setCompanyName('Fedex')
            ->build();
        $recipientsParty = RecipientsParty::builder(
            // address
            $address_1,
            // contact
            $contact_1,
        )
            ->setDeliveryInstructions('Instruction 1')
            ->build();
        $shippingChargesPayment = Payment::builder(PaymentPaymentType::SENDER)->build();
        $labelSpecification = LabelSpecification::builder(
            // labelStockType
            LabelSpecificationLabelStockType::PAPER_7X475,
            // imageType
            LabelSpecificationImageType::PDF,
        )
            ->setLabelFormatType(LabelSpecificationLabelFormatType::COMMON2D)
            ->setLabelOrder(LabelSpecificationLabelOrder::SHIPPING_LABEL_FIRST)
            ->setLabelRotation(LabelSpecificationLabelRotation::UPSIDE_DOWN)
            ->setLabelPrintingOrientation(LabelSpecificationLabelPrintingOrientation::TOP_EDGE_OF_TEXT_FIRST)
            ->setReturnedDispositionDetail('RETURNED')
            ->setResolution(300)
            ->build();
        $weight = Weight::builder(
            // units
            WeightUnits::KG,
            // value
            68.25,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSequenceNumber(0)
            ->setSubPackagingType('BUCKET')
            ->setGroupPackageCount(2)
            ->setItemDescriptionForClearance('description')
            ->setItemDescription('item description for the package')
            ->build();

        return RequestedShipmentVerify::builder(
            // pickupType
            RequestedShipmentVerifyPickupType::USE_SCHEDULED_PICKUP,
            // serviceType
            'PRIORITY_OVERNIGHT',
            // packagingType
            'YOUR_PACKAGING',
            // totalWeight
            20,
            // shipper
            $shipper,
            // recipients
            [$recipientsParty],
            // shippingChargesPayment
            $shippingChargesPayment,
            // labelSpecification
            $labelSpecification,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setShipDatestamp('2019-10-14')
            ->setBlockInsightVisibility(true)
            ->setRateRequestType([RequestedShipmentVerifyRateRequestTypeItem::LIST])
            ->setPreferredCurrency('USD')
            ->build();
    }

    public static function buildContactAndAddressVerify(): ContactAndAddressVerify
    {
        return ContactAndAddressVerify::builder()->build();
    }

    public static function buildContactVerify(): ContactVerify
    {
        return ContactVerify::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneNumber('1234567890')
            ->setPhoneExtension('91')
            ->setFaxNumber('956123')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildEMailNotificationDetail(): EMailNotificationDetail
    {
        return EMailNotificationDetail::builder()
            ->setAggregationType(EMailNotificationDetailAggregationType::PER_PACKAGE)
            ->setPersonalMessage('your personal message here')
            ->build();
    }

    public static function buildEmailNotificationRecipient(): EmailNotificationRecipient
    {
        return EmailNotificationRecipient::builder(EmailNotificationRecipientEmailNotificationRecipientType::SHIPPER)
            ->setName('Joe Smith')
            ->setEmailAddress('jsmith3@aol.com')
            ->setNotificationFormatType(EmailNotificationRecipientNotificationFormatType::TEXT)
            ->setNotificationType(EmailNotificationRecipientNotificationType::EMAIL)
            ->setLocale('en_US')
            ->setNotificationEventType([EmailNotificationRecipientNotificationEventTypeItem::ON_DELIVERY])
            ->build();
    }

    public static function buildSHPCResponseVOValidate(): SHPCResponseVOValidate
    {
        return SHPCResponseVOValidate::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildVerifyShipmentOutputVO(): VerifyShipmentOutputVO
    {
        return VerifyShipmentOutputVO::builder()->build();
    }

    public static function buildRequestedShipmentVerifyShipmentSpecialServices(): RequestedShipmentVerifyShipmentSpecialServices
    {
        return RequestedShipmentVerifyShipmentSpecialServices::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->build();
    }

    public static function buildHazardousCommodityOptionDetail(): HazardousCommodityOptionDetail
    {
        return HazardousCommodityOptionDetail::builder()
            ->setLabelTextOption(HazardousCommodityOptionDetailLabelTextOption::STANDARD)
            ->setCustomerSuppliedLabelText('Customer Supplied Label Text')
            ->build();
    }

    public static function buildVersion(): Version
    {
        return Version::builder()
            ->setMajor(0)
            ->setMinor(0)
            ->setPatch(0)
            ->build();
    }
}

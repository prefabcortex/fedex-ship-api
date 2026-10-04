<?php

declare(strict_types=1);

namespace Prefabcortex\FedexShipApi\Tests\Fixture;

use Prefabcortex\FedexShipApi\Model\AccountNumber;
use Prefabcortex\FedexShipApi\Model\AdditionalLabelsDetail;
use Prefabcortex\FedexShipApi\Model\AdditionalMeasures;
use Prefabcortex\FedexShipApi\Model\Address;
use Prefabcortex\FedexShipApi\Model\Address1;
use Prefabcortex\FedexShipApi\Model\AdrLicenseDetail;
use Prefabcortex\FedexShipApi\Model\AlcoholDetail;
use Prefabcortex\FedexShipApi\Model\Alert;
use Prefabcortex\FedexShipApi\Model\Alert3P;
use Prefabcortex\FedexShipApi\Model\Alert3PP;
use Prefabcortex\FedexShipApi\Model\AncillaryFeeAndTax;
use Prefabcortex\FedexShipApi\Model\BatteryDetail;
use Prefabcortex\FedexShipApi\Model\BillingDetails;
use Prefabcortex\FedexShipApi\Model\BinaryBarcode;
use Prefabcortex\FedexShipApi\Model\BrokerDetail;
use Prefabcortex\FedexShipApi\Model\BrokerDetailBroker;
use Prefabcortex\FedexShipApi\Model\CancelShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\CertificateOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetail;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetailAddress;
use Prefabcortex\FedexShipApi\Model\ClearanceItemDetailContact;
use Prefabcortex\FedexShipApi\Model\CODTransportationChargesDetail;
use Prefabcortex\FedexShipApi\Model\CommercialInvoice;
use Prefabcortex\FedexShipApi\Model\CommercialInvoiceDetail;
use Prefabcortex\FedexShipApi\Model\Commodity;
use Prefabcortex\FedexShipApi\Model\Commodity1;
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
use Prefabcortex\FedexShipApi\Model\CurrencyExchangeRate;
use Prefabcortex\FedexShipApi\Model\CustomerImageUsage;
use Prefabcortex\FedexShipApi\Model\CustomerReference;
use Prefabcortex\FedexShipApi\Model\CustomerReference1;
use Prefabcortex\FedexShipApi\Model\CustomerSpecifiedLabelDetail;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail;
use Prefabcortex\FedexShipApi\Model\CustomsClearanceDetail1;
use Prefabcortex\FedexShipApi\Model\CustomsDeclarationStatementDetail;
use Prefabcortex\FedexShipApi\Model\CustomsMoney;
use Prefabcortex\FedexShipApi\Model\CustomsOptionDetail;
use Prefabcortex\FedexShipApi\Model\CXSError;
use Prefabcortex\FedexShipApi\Model\CXSError2;
use Prefabcortex\FedexShipApi\Model\CXSError401;
use Prefabcortex\FedexShipApi\Model\CXSError403;
use Prefabcortex\FedexShipApi\Model\CXSError404;
use Prefabcortex\FedexShipApi\Model\CXSError500;
use Prefabcortex\FedexShipApi\Model\CXSError503;
use Prefabcortex\FedexShipApi\Model\DangerousGoodsDetail;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetail;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipient;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientAddress;
use Prefabcortex\FedexShipApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientContact;
use Prefabcortex\FedexShipApi\Model\DestinationControlDetail;
use Prefabcortex\FedexShipApi\Model\Dimensions;
use Prefabcortex\FedexShipApi\Model\DisclaimMessageSet;
use Prefabcortex\FedexShipApi\Model\DocTabContent;
use Prefabcortex\FedexShipApi\Model\DocTabContentBarcoded;
use Prefabcortex\FedexShipApi\Model\DocTabContentZone001;
use Prefabcortex\FedexShipApi\Model\DocTabZoneSpecification;
use Prefabcortex\FedexShipApi\Model\DocumentFormatOptionsRequested;
use Prefabcortex\FedexShipApi\Model\DocumentGenerationDetail;
use Prefabcortex\FedexShipApi\Model\DocumentRequirementsDetail;
use Prefabcortex\FedexShipApi\Model\EdtCommodityTax;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1AppliedPreferentialTradeAgreement;
use Prefabcortex\FedexShipApi\Model\EdtTaxDetail1TaxRatesItem;
use Prefabcortex\FedexShipApi\Model\EmailLabelDetail;
use Prefabcortex\FedexShipApi\Model\EMailNotificationDetail;
use Prefabcortex\FedexShipApi\Model\EmailNotificationRecipient;
use Prefabcortex\FedexShipApi\Model\EmailOptionsRequested;
use Prefabcortex\FedexShipApi\Model\EmailRecipient;
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
use Prefabcortex\FedexShipApi\Model\ExportDetail;
use Prefabcortex\FedexShipApi\Model\ExpressFreightDetail;
use Prefabcortex\FedexShipApi\Model\FullSchemaCancelShipment;
use Prefabcortex\FedexShipApi\Model\FullSchemaGetConfirmedShipmentAsyncResults;
use Prefabcortex\FedexShipApi\Model\FullSchemaShip;
use Prefabcortex\FedexShipApi\Model\FullSchemaVerifyShipment;
use Prefabcortex\FedexShipApi\Model\GeneralAgencyAgreementDetail;
use Prefabcortex\FedexShipApi\Model\GetOpenShipmentResultsOutputVO;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityContent001;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityDescription01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityInnerReceptacleDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityOptionDetail;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityOptionDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityPackingDetail01;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetail;
use Prefabcortex\FedexShipApi\Model\HazardousCommodityQuantityDetail002;
use Prefabcortex\FedexShipApi\Model\HoldAtLocationDetail;
use Prefabcortex\FedexShipApi\Model\HomeDeliveryPremiumDetail;
use Prefabcortex\FedexShipApi\Model\InternationalControlledExportDetail;
use Prefabcortex\FedexShipApi\Model\InternationalTrafficInArmsRegulationsDetail;
use Prefabcortex\FedexShipApi\Model\JustContactAndAddress;
use Prefabcortex\FedexShipApi\Model\LabelResponseVO;
use Prefabcortex\FedexShipApi\Model\LabelSpecification;
use Prefabcortex\FedexShipApi\Model\LicenseOrPermitDetail;
use Prefabcortex\FedexShipApi\Model\MasterTrackingId;
use Prefabcortex\FedexShipApi\Model\Message;
use Prefabcortex\FedexShipApi\Model\MessageParameter;
use Prefabcortex\FedexShipApi\Model\Money;
use Prefabcortex\FedexShipApi\Model\Money1;
use Prefabcortex\FedexShipApi\Model\NetExplosiveDetail;
use Prefabcortex\FedexShipApi\Model\Op900Detail;
use Prefabcortex\FedexShipApi\Model\OperationalInstructions;
use Prefabcortex\FedexShipApi\Model\PackageBarcodes;
use Prefabcortex\FedexShipApi\Model\PackageCODDetail;
use Prefabcortex\FedexShipApi\Model\PackageOperationalDetail;
use Prefabcortex\FedexShipApi\Model\PackageRateDetail;
use Prefabcortex\FedexShipApi\Model\PackageRating;
use Prefabcortex\FedexShipApi\Model\PackageSpecialServicesRequested;
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
use Prefabcortex\FedexShipApi\Model\Payor;
use Prefabcortex\FedexShipApi\Model\Payor1;
use Prefabcortex\FedexShipApi\Model\PendingShipmentAccessDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentAccessorDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentDetail;
use Prefabcortex\FedexShipApi\Model\PendingShipmentProcessingOptionsRequested;
use Prefabcortex\FedexShipApi\Model\PhoneNumber1;
use Prefabcortex\FedexShipApi\Model\PickupDetail;
use Prefabcortex\FedexShipApi\Model\PieceResponse;
use Prefabcortex\FedexShipApi\Model\PriorityAlertDetail;
use Prefabcortex\FedexShipApi\Model\ProductName;
use Prefabcortex\FedexShipApi\Model\RateDiscount;
use Prefabcortex\FedexShipApi\Model\RateDiscount2;
use Prefabcortex\FedexShipApi\Model\Rebate;
use Prefabcortex\FedexShipApi\Model\RecipientCustomsId;
use Prefabcortex\FedexShipApi\Model\RecipientsParty;
use Prefabcortex\FedexShipApi\Model\RecommendedDocumentSpecification;
use Prefabcortex\FedexShipApi\Model\ReferenceMessageSet;
use Prefabcortex\FedexShipApi\Model\RegulatoryAdvisoryDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryDetailInfo;
use Prefabcortex\FedexShipApi\Model\RegulatoryLabelContentDetail;
use Prefabcortex\FedexShipApi\Model\RegulatoryProhibition;
use Prefabcortex\FedexShipApi\Model\RegulatoryWaiver;
use Prefabcortex\FedexShipApi\Model\RequestedPackageLineItem;
use Prefabcortex\FedexShipApi\Model\RequestedShipment1;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerify;
use Prefabcortex\FedexShipApi\Model\RequestedShipmentVerifyShipmentSpecialServices;
use Prefabcortex\FedexShipApi\Model\ResponsiblePartyParty;
use Prefabcortex\FedexShipApi\Model\RetrieveDateRange;
use Prefabcortex\FedexShipApi\Model\ReturnAssociationDetail;
use Prefabcortex\FedexShipApi\Model\ReturnEmailDetail;
use Prefabcortex\FedexShipApi\Model\ReturnInstructionsDetail;
use Prefabcortex\FedexShipApi\Model\ReturnMerchandiseAuthorization;
use Prefabcortex\FedexShipApi\Model\ReturnShipmentDetail;
use Prefabcortex\FedexShipApi\Model\ReturnShippingDocumentFormat;
use Prefabcortex\FedexShipApi\Model\SelfNormalizingModel;
use Prefabcortex\FedexShipApi\Model\ServiceDescription;
use Prefabcortex\FedexShipApi\Model\ShipEmailDispositionDetail;
use Prefabcortex\FedexShipApi\Model\ShipmentAdvisoryDetails;
use Prefabcortex\FedexShipApi\Model\ShipmentCODDetail;
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
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailDetail;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentEmailRecipient;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentFormat;
use Prefabcortex\FedexShipApi\Model\ShippingDocumentSpecification;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEMailNotificationDetail;
use Prefabcortex\FedexShipApi\Model\ShipShipmentEmailNotificationRecipient;
use Prefabcortex\FedexShipApi\Model\ShipShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOCancelShipment;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOGetOpenShipmentResults;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOShipShipment;
use Prefabcortex\FedexShipApi\Model\SHPCResponseVOValidate;
use Prefabcortex\FedexShipApi\Model\SignatureOptionDetail;
use Prefabcortex\FedexShipApi\Model\SmartPostInfoDetail;
use Prefabcortex\FedexShipApi\Model\SoldToParty;
use Prefabcortex\FedexShipApi\Model\StandaloneBatteryDetails;
use Prefabcortex\FedexShipApi\Model\StringBarcode;
use Prefabcortex\FedexShipApi\Model\SuggestedCommodityDetail;
use Prefabcortex\FedexShipApi\Model\Surcharge;
use Prefabcortex\FedexShipApi\Model\Surcharge2;
use Prefabcortex\FedexShipApi\Model\Tax;
use Prefabcortex\FedexShipApi\Model\Tax2;
use Prefabcortex\FedexShipApi\Model\TaxpayerIdentification;
use Prefabcortex\FedexShipApi\Model\TrackingId;
use Prefabcortex\FedexShipApi\Model\TransactionCreateShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\TransactionDetailVO;
use Prefabcortex\FedexShipApi\Model\TransactionShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetail;
use Prefabcortex\FedexShipApi\Model\UploadDocumentReferenceDetail1;
use Prefabcortex\FedexShipApi\Model\UsmcaCertificationOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaCommercialInvoiceCertificationOfOriginDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaDetail;
use Prefabcortex\FedexShipApi\Model\UsmcaLowValueStatementDetail;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousCommodityContent;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousCommodityDescription;
use Prefabcortex\FedexShipApi\Model\ValidatedHazardousContainer;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetail;
use Prefabcortex\FedexShipApi\Model\VariableHandlingChargeDetailFixedValue;
use Prefabcortex\FedexShipApi\Model\VariableHandlingCharges1;
use Prefabcortex\FedexShipApi\Model\VariationOptions;
use Prefabcortex\FedexShipApi\Model\VerifyShipmentOutputVO;
use Prefabcortex\FedexShipApi\Model\Version;
use Prefabcortex\FedexShipApi\Model\Weight;
use Prefabcortex\FedexShipApi\Model\Weight1;
use Prefabcortex\FedexShipApi\Model\Weight3;
use Prefabcortex\FedexShipApi\Model\Weight4;
use Prefabcortex\FedexShipApi\Validator\AccountNumberConstraint;
use Prefabcortex\FedexShipApi\Validator\AdditionalLabelsDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\AdditionalMeasuresConstraint;
use Prefabcortex\FedexShipApi\Validator\Address1Constraint;
use Prefabcortex\FedexShipApi\Validator\AddressConstraint;
use Prefabcortex\FedexShipApi\Validator\AdrLicenseDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\AlcoholDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\Alert3PConstraint;
use Prefabcortex\FedexShipApi\Validator\Alert3PPConstraint;
use Prefabcortex\FedexShipApi\Validator\AlertConstraint;
use Prefabcortex\FedexShipApi\Validator\AncillaryFeeAndTaxConstraint;
use Prefabcortex\FedexShipApi\Validator\BatteryDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\BillingDetailsConstraint;
use Prefabcortex\FedexShipApi\Validator\BinaryBarcodeConstraint;
use Prefabcortex\FedexShipApi\Validator\BrokerDetailBrokerConstraint;
use Prefabcortex\FedexShipApi\Validator\BrokerDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CancelShipmentOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\CertificateOfOriginDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ClearanceItemDetailAddressConstraint;
use Prefabcortex\FedexShipApi\Validator\ClearanceItemDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ClearanceItemDetailContactConstraint;
use Prefabcortex\FedexShipApi\Validator\CODTransportationChargesDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CommercialInvoiceConstraint;
use Prefabcortex\FedexShipApi\Validator\CommercialInvoiceDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\Commodity1Constraint;
use Prefabcortex\FedexShipApi\Validator\CommodityConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedCreateShipmentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedEtdDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedHazardousPackageDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedHazardousShipmentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedHazardousSummaryDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedHoldAtLocationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedPackageDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CompletedShipmentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\Contact1Constraint;
use Prefabcortex\FedexShipApi\Validator\Contact2Constraint;
use Prefabcortex\FedexShipApi\Validator\ContactAndAddress1Constraint;
use Prefabcortex\FedexShipApi\Validator\ContactAndAddressConstraint;
use Prefabcortex\FedexShipApi\Validator\ContactAndAddressVerifyConstraint;
use Prefabcortex\FedexShipApi\Validator\ContactConstraint;
use Prefabcortex\FedexShipApi\Validator\ContactVerifyConstraint;
use Prefabcortex\FedexShipApi\Validator\ContentRecordConstraint;
use Prefabcortex\FedexShipApi\Validator\CreateShipmentRatingConstraint;
use Prefabcortex\FedexShipApi\Validator\CreateShipmentRatingPickupRateDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CurrencyExchangeRateConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomerImageUsageConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomerReference1Constraint;
use Prefabcortex\FedexShipApi\Validator\CustomerReferenceConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomerSpecifiedLabelDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomsClearanceDetail1Constraint;
use Prefabcortex\FedexShipApi\Validator\CustomsClearanceDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomsDeclarationStatementDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomsMoneyConstraint;
use Prefabcortex\FedexShipApi\Validator\CustomsOptionDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\CXSError2Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSError401Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSError403Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSError404Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSError500Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSError503Constraint;
use Prefabcortex\FedexShipApi\Validator\CXSErrorConstraint;
use Prefabcortex\FedexShipApi\Validator\DangerousGoodsDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\DeliveryOnInvoiceAcceptanceDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientAddressConstraint;
use Prefabcortex\FedexShipApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientConstraint;
use Prefabcortex\FedexShipApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientContactConstraint;
use Prefabcortex\FedexShipApi\Validator\DestinationControlDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\DimensionsConstraint;
use Prefabcortex\FedexShipApi\Validator\DisclaimMessageSetConstraint;
use Prefabcortex\FedexShipApi\Validator\DocTabContentBarcodedConstraint;
use Prefabcortex\FedexShipApi\Validator\DocTabContentConstraint;
use Prefabcortex\FedexShipApi\Validator\DocTabContentZone001Constraint;
use Prefabcortex\FedexShipApi\Validator\DocTabZoneSpecificationConstraint;
use Prefabcortex\FedexShipApi\Validator\DocumentFormatOptionsRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\DocumentGenerationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\DocumentRequirementsDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\EdtCommodityTaxConstraint;
use Prefabcortex\FedexShipApi\Validator\EdtTaxDetail1AppliedPreferentialTradeAgreementConstraint;
use Prefabcortex\FedexShipApi\Validator\EdtTaxDetail1Constraint;
use Prefabcortex\FedexShipApi\Validator\EdtTaxDetail1TaxRatesItemConstraint;
use Prefabcortex\FedexShipApi\Validator\EmailLabelDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\EMailNotificationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\EmailNotificationRecipientConstraint;
use Prefabcortex\FedexShipApi\Validator\EmailOptionsRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\EmailRecipientConstraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO401_2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO401Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO403_2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO403Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO404_2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO404Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO500_2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO500Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO503_2Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVO503Constraint;
use Prefabcortex\FedexShipApi\Validator\ErrorResponseVOConstraint;
use Prefabcortex\FedexShipApi\Validator\ETDDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ExportDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ExpressFreightDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\FullSchemaCancelShipmentConstraint;
use Prefabcortex\FedexShipApi\Validator\FullSchemaGetConfirmedShipmentAsyncResultsConstraint;
use Prefabcortex\FedexShipApi\Validator\FullSchemaShipConstraint;
use Prefabcortex\FedexShipApi\Validator\FullSchemaVerifyShipmentConstraint;
use Prefabcortex\FedexShipApi\Validator\GeneralAgencyAgreementDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\GetOpenShipmentResultsOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityContent001Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityDescription01Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityInnerReceptacleDetail01Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityOptionDetail01Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityOptionDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityPackingDetail01Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityQuantityDetail002Constraint;
use Prefabcortex\FedexShipApi\Validator\HazardousCommodityQuantityDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\HoldAtLocationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\HomeDeliveryPremiumDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\InternationalControlledExportDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\InternationalTrafficInArmsRegulationsDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\JustContactAndAddressConstraint;
use Prefabcortex\FedexShipApi\Validator\LabelResponseVOConstraint;
use Prefabcortex\FedexShipApi\Validator\LabelSpecificationConstraint;
use Prefabcortex\FedexShipApi\Validator\LicenseOrPermitDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\MasterTrackingIdConstraint;
use Prefabcortex\FedexShipApi\Validator\MessageConstraint;
use Prefabcortex\FedexShipApi\Validator\MessageParameterConstraint;
use Prefabcortex\FedexShipApi\Validator\Money1Constraint;
use Prefabcortex\FedexShipApi\Validator\MoneyConstraint;
use Prefabcortex\FedexShipApi\Validator\NetExplosiveDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\Op900DetailConstraint;
use Prefabcortex\FedexShipApi\Validator\OperationalInstructionsConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageBarcodesConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageCODDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageOperationalDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageRateDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageRatingConstraint;
use Prefabcortex\FedexShipApi\Validator\PackageSpecialServicesRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\ParameterConstraint;
use Prefabcortex\FedexShipApi\Validator\Party1Constraint;
use Prefabcortex\FedexShipApi\Validator\Party2Constraint;
use Prefabcortex\FedexShipApi\Validator\Party3Constraint;
use Prefabcortex\FedexShipApi\Validator\PartyAccountNumber1Constraint;
use Prefabcortex\FedexShipApi\Validator\PartyAccountNumberConstraint;
use Prefabcortex\FedexShipApi\Validator\PartyAddress1Constraint;
use Prefabcortex\FedexShipApi\Validator\PartyAddress2Constraint;
use Prefabcortex\FedexShipApi\Validator\PartyAddressConstraint;
use Prefabcortex\FedexShipApi\Validator\PartyContact1Constraint;
use Prefabcortex\FedexShipApi\Validator\PartyContactConstraint;
use Prefabcortex\FedexShipApi\Validator\PartyContacts2Constraint;
use Prefabcortex\FedexShipApi\Validator\Payment1Constraint;
use Prefabcortex\FedexShipApi\Validator\PaymentConstraint;
use Prefabcortex\FedexShipApi\Validator\Payor1Constraint;
use Prefabcortex\FedexShipApi\Validator\PayorConstraint;
use Prefabcortex\FedexShipApi\Validator\PendingShipmentAccessDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PendingShipmentAccessorDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PendingShipmentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PendingShipmentProcessingOptionsRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\PhoneNumber1Constraint;
use Prefabcortex\FedexShipApi\Validator\PickupDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\PieceResponseConstraint;
use Prefabcortex\FedexShipApi\Validator\PriorityAlertDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ProductNameConstraint;
use Prefabcortex\FedexShipApi\Validator\RateDiscount2Constraint;
use Prefabcortex\FedexShipApi\Validator\RateDiscountConstraint;
use Prefabcortex\FedexShipApi\Validator\RebateConstraint;
use Prefabcortex\FedexShipApi\Validator\RecipientCustomsIdConstraint;
use Prefabcortex\FedexShipApi\Validator\RecipientsPartyConstraint;
use Prefabcortex\FedexShipApi\Validator\RecommendedDocumentSpecificationConstraint;
use Prefabcortex\FedexShipApi\Validator\ReferenceMessageSetConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryAdvisoryDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryDetailInfoConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryLabelContentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryProhibitionConstraint;
use Prefabcortex\FedexShipApi\Validator\RegulatoryWaiverConstraint;
use Prefabcortex\FedexShipApi\Validator\RequestedPackageLineItemConstraint;
use Prefabcortex\FedexShipApi\Validator\RequestedShipment1Constraint;
use Prefabcortex\FedexShipApi\Validator\RequestedShipmentVerifyConstraint;
use Prefabcortex\FedexShipApi\Validator\RequestedShipmentVerifyShipmentSpecialServicesConstraint;
use Prefabcortex\FedexShipApi\Validator\ResponsiblePartyPartyConstraint;
use Prefabcortex\FedexShipApi\Validator\RetrieveDateRangeConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnAssociationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnEmailDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnInstructionsDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnMerchandiseAuthorizationConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnShipmentDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ReturnShippingDocumentFormatConstraint;
use Prefabcortex\FedexShipApi\Validator\ServiceDescriptionConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipEmailDispositionDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentAdvisoryDetailsConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentCODDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentDryIceDetail1Constraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentDryIceDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentDryIceProcessingOptionsRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentLegRateDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentOperationalDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentRateDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentRatingConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipmentSpecialServicesRequestedConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipperAccountNumberConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipperPartyConstraint;
use Prefabcortex\FedexShipApi\Validator\ShippingDocumentDispositionDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShippingDocumentEmailDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShippingDocumentEmailRecipientConstraint;
use Prefabcortex\FedexShipApi\Validator\ShippingDocumentFormatConstraint;
use Prefabcortex\FedexShipApi\Validator\ShippingDocumentSpecificationConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipShipmentEMailNotificationDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipShipmentEmailNotificationRecipientConstraint;
use Prefabcortex\FedexShipApi\Validator\ShipShipmentOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\SHPCResponseVOCancelShipmentConstraint;
use Prefabcortex\FedexShipApi\Validator\SHPCResponseVOGetOpenShipmentResultsConstraint;
use Prefabcortex\FedexShipApi\Validator\SHPCResponseVOShipShipmentConstraint;
use Prefabcortex\FedexShipApi\Validator\SHPCResponseVOValidateConstraint;
use Prefabcortex\FedexShipApi\Validator\SignatureOptionDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\SmartPostInfoDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\SoldToPartyConstraint;
use Prefabcortex\FedexShipApi\Validator\StandaloneBatteryDetailsConstraint;
use Prefabcortex\FedexShipApi\Validator\StringBarcodeConstraint;
use Prefabcortex\FedexShipApi\Validator\SuggestedCommodityDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\Surcharge2Constraint;
use Prefabcortex\FedexShipApi\Validator\SurchargeConstraint;
use Prefabcortex\FedexShipApi\Validator\Tax2Constraint;
use Prefabcortex\FedexShipApi\Validator\TaxConstraint;
use Prefabcortex\FedexShipApi\Validator\TaxpayerIdentificationConstraint;
use Prefabcortex\FedexShipApi\Validator\TrackingIdConstraint;
use Prefabcortex\FedexShipApi\Validator\TransactionCreateShipmentOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\TransactionDetailVOConstraint;
use Prefabcortex\FedexShipApi\Validator\TransactionShipmentOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\UploadDocumentReferenceDetail1Constraint;
use Prefabcortex\FedexShipApi\Validator\UploadDocumentReferenceDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\UsmcaCertificationOfOriginDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\UsmcaCommercialInvoiceCertificationOfOriginDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\UsmcaDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\UsmcaLowValueStatementDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\ValidatedHazardousCommodityContentConstraint;
use Prefabcortex\FedexShipApi\Validator\ValidatedHazardousCommodityDescriptionConstraint;
use Prefabcortex\FedexShipApi\Validator\ValidatedHazardousContainerConstraint;
use Prefabcortex\FedexShipApi\Validator\VariableHandlingChargeDetailConstraint;
use Prefabcortex\FedexShipApi\Validator\VariableHandlingChargeDetailFixedValueConstraint;
use Prefabcortex\FedexShipApi\Validator\VariableHandlingCharges1Constraint;
use Prefabcortex\FedexShipApi\Validator\VariationOptionsConstraint;
use Prefabcortex\FedexShipApi\Validator\VerifyShipmentOutputVOConstraint;
use Prefabcortex\FedexShipApi\Validator\VersionConstraint;
use Prefabcortex\FedexShipApi\Validator\Weight1Constraint;
use Prefabcortex\FedexShipApi\Validator\Weight3Constraint;
use Prefabcortex\FedexShipApi\Validator\Weight4Constraint;
use Prefabcortex\FedexShipApi\Validator\WeightConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * The data providers over ModelFixtures: one schema-conformant instance of every model in this
 * package, and what each is checked against.
 *
 * Values are the ones the API description states — `example` or `default` where it gives one, a
 * typed placeholder where it does not. They are shaped like real data, not equal to it: nothing
 * here has been sent to the service, so a value being accepted by the schema says nothing about it
 * being accepted by the server.
 */
final class ModelFixtureProviders
{
    /**
     * Every model that could be built and reads back what it writes, keyed by class name so a
     * failure names the model.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel}>
     */
    public static function roundTrips(): iterable
    {
        yield 'FullSchemaShip' => [ModelFixtures::buildFullSchemaShip(), FullSchemaShip::fromArray(...)];
        yield 'RequestedShipment1' => [ModelFixtures::buildRequestedShipment1(), RequestedShipment1::fromArray(...)];
        yield 'VariationOptions' => [ModelFixtures::buildVariationOptions(), VariationOptions::fromArray(...)];
        yield 'PickupDetail' => [ModelFixtures::buildPickupDetail(), PickupDetail::fromArray(...)];
        yield 'Money' => [ModelFixtures::buildMoney(), Money::fromArray(...)];
        yield 'CustomsMoney' => [ModelFixtures::buildCustomsMoney(), CustomsMoney::fromArray(...)];
        yield 'ShipperParty' => [ModelFixtures::buildShipperParty(), ShipperParty::fromArray(...)];
        yield 'SoldToParty' => [ModelFixtures::buildSoldToParty(), SoldToParty::fromArray(...)];
        yield 'PartyAddress' => [ModelFixtures::buildPartyAddress(), PartyAddress::fromArray(...)];
        yield 'PartyAddress2' => [ModelFixtures::buildPartyAddress2(), PartyAddress2::fromArray(...)];
        yield 'PartyContact' => [ModelFixtures::buildPartyContact(), PartyContact::fromArray(...)];
        yield 'TaxpayerIdentification' => [
            ModelFixtures::buildTaxpayerIdentification(),
            TaxpayerIdentification::fromArray(...),
        ];
        yield 'RecipientsParty' => [ModelFixtures::buildRecipientsParty(), RecipientsParty::fromArray(...)];
        yield 'PartyContacts2' => [ModelFixtures::buildPartyContacts2(), PartyContacts2::fromArray(...)];
        yield 'ContactAndAddress1' => [ModelFixtures::buildContactAndAddress1(), ContactAndAddress1::fromArray(...)];
        yield 'Contact2' => [ModelFixtures::buildContact2(), Contact2::fromArray(...)];
        yield 'Address1' => [ModelFixtures::buildAddress1(), Address1::fromArray(...)];
        yield 'Payment' => [ModelFixtures::buildPayment(), Payment::fromArray(...)];
        yield 'Payor' => [ModelFixtures::buildPayor(), Payor::fromArray(...)];
        yield 'ResponsiblePartyParty' => [
            ModelFixtures::buildResponsiblePartyParty(),
            ResponsiblePartyParty::fromArray(...),
        ];
        yield 'PartyAccountNumber' => [ModelFixtures::buildPartyAccountNumber(), PartyAccountNumber::fromArray(...)];
        yield 'PartyAccountNumber1' => [ModelFixtures::buildPartyAccountNumber1(), PartyAccountNumber1::fromArray(...)];
        yield 'ShipmentSpecialServicesRequested' => [
            ModelFixtures::buildShipmentSpecialServicesRequested(),
            ShipmentSpecialServicesRequested::fromArray(...),
        ];
        yield 'ETDDetail' => [ModelFixtures::buildETDDetail(), ETDDetail::fromArray(...)];
        yield 'UploadDocumentReferenceDetail' => [
            ModelFixtures::buildUploadDocumentReferenceDetail(),
            UploadDocumentReferenceDetail::fromArray(...),
        ];
        yield 'ReturnShipmentDetail' => [
            ModelFixtures::buildReturnShipmentDetail(),
            ReturnShipmentDetail::fromArray(...),
        ];
        yield 'ReturnEmailDetail' => [ModelFixtures::buildReturnEmailDetail(), ReturnEmailDetail::fromArray(...)];
        yield 'ReturnMerchandiseAuthorization' => [
            ModelFixtures::buildReturnMerchandiseAuthorization(),
            ReturnMerchandiseAuthorization::fromArray(...),
        ];
        yield 'ReturnAssociationDetail' => [
            ModelFixtures::buildReturnAssociationDetail(),
            ReturnAssociationDetail::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetail' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetail(),
            DeliveryOnInvoiceAcceptanceDetail::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetail::fromArray(...),
        ];
        yield 'PendingShipmentDetail' => [
            ModelFixtures::buildPendingShipmentDetail(),
            PendingShipmentDetail::fromArray(...),
        ];
        yield 'PendingShipmentProcessingOptionsRequested' => [
            ModelFixtures::buildPendingShipmentProcessingOptionsRequested(),
            PendingShipmentProcessingOptionsRequested::fromArray(...),
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecification::fromArray(...),
        ];
        yield 'EmailLabelDetail' => [ModelFixtures::buildEmailLabelDetail(), EmailLabelDetail::fromArray(...)];
        yield 'EmailRecipient' => [ModelFixtures::buildEmailRecipient(), EmailRecipient::fromArray(...)];
        yield 'EmailOptionsRequested' => [
            ModelFixtures::buildEmailOptionsRequested(),
            EmailOptionsRequested::fromArray(...),
        ];
        yield 'UploadDocumentReferenceDetail1' => [
            ModelFixtures::buildUploadDocumentReferenceDetail1(),
            UploadDocumentReferenceDetail1::fromArray(...),
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
        ];
        yield 'ContactAndAddress' => [ModelFixtures::buildContactAndAddress(), ContactAndAddress::fromArray(...)];
        yield 'Contact1' => [ModelFixtures::buildContact1(), Contact1::fromArray(...)];
        yield 'ShipmentCODDetail' => [ModelFixtures::buildShipmentCODDetail(), ShipmentCODDetail::fromArray(...)];
        yield 'CODTransportationChargesDetail' => [
            ModelFixtures::buildCODTransportationChargesDetail(),
            CODTransportationChargesDetail::fromArray(...),
        ];
        yield 'Party1' => [ModelFixtures::buildParty1(), Party1::fromArray(...)];
        yield 'ShipmentDryIceDetail1' => [
            ModelFixtures::buildShipmentDryIceDetail1(),
            ShipmentDryIceDetail1::fromArray(...),
        ];
        yield 'Weight1' => [ModelFixtures::buildWeight1(), Weight1::fromArray(...)];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetail::fromArray(...),
        ];
        yield 'HomeDeliveryPremiumDetail' => [
            ModelFixtures::buildHomeDeliveryPremiumDetail(),
            HomeDeliveryPremiumDetail::fromArray(...),
        ];
        yield 'PhoneNumber1' => [ModelFixtures::buildPhoneNumber1(), PhoneNumber1::fromArray(...)];
        yield 'ShipShipmentEMailNotificationDetail' => [
            ModelFixtures::buildShipShipmentEMailNotificationDetail(),
            ShipShipmentEMailNotificationDetail::fromArray(...),
        ];
        yield 'ShipShipmentEmailNotificationRecipient' => [
            ModelFixtures::buildShipShipmentEmailNotificationRecipient(),
            ShipShipmentEmailNotificationRecipient::fromArray(...),
        ];
        yield 'ExpressFreightDetail' => [
            ModelFixtures::buildExpressFreightDetail(),
            ExpressFreightDetail::fromArray(...),
        ];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetail::fromArray(...),
        ];
        yield 'VariableHandlingChargeDetailFixedValue' => [
            ModelFixtures::buildVariableHandlingChargeDetailFixedValue(),
            VariableHandlingChargeDetailFixedValue::fromArray(...),
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
        ];
        yield 'CustomsClearanceDetail1' => [
            ModelFixtures::buildCustomsClearanceDetail1(),
            CustomsClearanceDetail1::fromArray(...),
        ];
        yield 'BrokerDetail' => [ModelFixtures::buildBrokerDetail(), BrokerDetail::fromArray(...)];
        yield 'BrokerDetailBroker' => [ModelFixtures::buildBrokerDetailBroker(), BrokerDetailBroker::fromArray(...)];
        yield 'CommercialInvoice' => [ModelFixtures::buildCommercialInvoice(), CommercialInvoice::fromArray(...)];
        yield 'CustomerReference' => [ModelFixtures::buildCustomerReference(), CustomerReference::fromArray(...)];
        yield 'ShipEmailDispositionDetail' => [
            ModelFixtures::buildShipEmailDispositionDetail(),
            ShipEmailDispositionDetail::fromArray(...),
        ];
        yield 'Payment1' => [ModelFixtures::buildPayment1(), Payment1::fromArray(...)];
        yield 'Payor1' => [ModelFixtures::buildPayor1(), Payor1::fromArray(...)];
        yield 'Party2' => [ModelFixtures::buildParty2(), Party2::fromArray(...)];
        yield 'BillingDetails' => [ModelFixtures::buildBillingDetails(), BillingDetails::fromArray(...)];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), Commodity::fromArray(...)];
        yield 'Commodity1' => [ModelFixtures::buildCommodity1(), Commodity1::fromArray(...)];
        yield 'RegulatoryDetail' => [ModelFixtures::buildRegulatoryDetail(), RegulatoryDetail::fromArray(...)];
        yield 'RegulatoryDetailInfo' => [
            ModelFixtures::buildRegulatoryDetailInfo(),
            RegulatoryDetailInfo::fromArray(...),
        ];
        yield 'DisclaimMessageSet' => [ModelFixtures::buildDisclaimMessageSet(), DisclaimMessageSet::fromArray(...)];
        yield 'ReferenceMessageSet' => [ModelFixtures::buildReferenceMessageSet(), ReferenceMessageSet::fromArray(...)];
        yield 'ClearanceItemDetail' => [ModelFixtures::buildClearanceItemDetail(), ClearanceItemDetail::fromArray(...)];
        yield 'ClearanceItemDetailContact' => [
            ModelFixtures::buildClearanceItemDetailContact(),
            ClearanceItemDetailContact::fromArray(...),
        ];
        yield 'ClearanceItemDetailAddress' => [
            ModelFixtures::buildClearanceItemDetailAddress(),
            ClearanceItemDetailAddress::fromArray(...),
        ];
        yield 'AdditionalMeasures' => [ModelFixtures::buildAdditionalMeasures(), AdditionalMeasures::fromArray(...)];
        yield 'Weight' => [ModelFixtures::buildWeight(), Weight::fromArray(...)];
        yield 'Weight4' => [ModelFixtures::buildWeight4(), Weight4::fromArray(...)];
        yield 'Weight3' => [ModelFixtures::buildWeight3(), Weight3::fromArray(...)];
        yield 'UsmcaDetail' => [ModelFixtures::buildUsmcaDetail(), UsmcaDetail::fromArray(...)];
        yield 'RecipientCustomsId' => [ModelFixtures::buildRecipientCustomsId(), RecipientCustomsId::fromArray(...)];
        yield 'CustomsOptionDetail' => [ModelFixtures::buildCustomsOptionDetail(), CustomsOptionDetail::fromArray(...)];
        yield 'ExportDetail' => [ModelFixtures::buildExportDetail(), ExportDetail::fromArray(...)];
        yield 'DestinationControlDetail' => [
            ModelFixtures::buildDestinationControlDetail(),
            DestinationControlDetail::fromArray(...),
        ];
        yield 'CustomsDeclarationStatementDetail' => [
            ModelFixtures::buildCustomsDeclarationStatementDetail(),
            CustomsDeclarationStatementDetail::fromArray(...),
        ];
        yield 'UsmcaLowValueStatementDetail' => [
            ModelFixtures::buildUsmcaLowValueStatementDetail(),
            UsmcaLowValueStatementDetail::fromArray(...),
        ];
        yield 'SmartPostInfoDetail' => [ModelFixtures::buildSmartPostInfoDetail(), SmartPostInfoDetail::fromArray(...)];
        yield 'LabelSpecification' => [ModelFixtures::buildLabelSpecification(), LabelSpecification::fromArray(...)];
        yield 'CustomerSpecifiedLabelDetail' => [
            ModelFixtures::buildCustomerSpecifiedLabelDetail(),
            CustomerSpecifiedLabelDetail::fromArray(...),
        ];
        yield 'RegulatoryLabelContentDetail' => [
            ModelFixtures::buildRegulatoryLabelContentDetail(),
            RegulatoryLabelContentDetail::fromArray(...),
        ];
        yield 'AdditionalLabelsDetail' => [
            ModelFixtures::buildAdditionalLabelsDetail(),
            AdditionalLabelsDetail::fromArray(...),
        ];
        yield 'DocTabContent' => [ModelFixtures::buildDocTabContent(), DocTabContent::fromArray(...)];
        yield 'DocTabContentZone001' => [
            ModelFixtures::buildDocTabContentZone001(),
            DocTabContentZone001::fromArray(...),
        ];
        yield 'DocTabZoneSpecification' => [
            ModelFixtures::buildDocTabZoneSpecification(),
            DocTabZoneSpecification::fromArray(...),
        ];
        yield 'DocTabContentBarcoded' => [
            ModelFixtures::buildDocTabContentBarcoded(),
            DocTabContentBarcoded::fromArray(...),
        ];
        yield 'ShippingDocumentSpecification' => [
            ModelFixtures::buildShippingDocumentSpecification(),
            ShippingDocumentSpecification::fromArray(...),
        ];
        yield 'GeneralAgencyAgreementDetail' => [
            ModelFixtures::buildGeneralAgencyAgreementDetail(),
            GeneralAgencyAgreementDetail::fromArray(...),
        ];
        yield 'ShippingDocumentFormat' => [
            ModelFixtures::buildShippingDocumentFormat(),
            ShippingDocumentFormat::fromArray(...),
        ];
        yield 'DocumentFormatOptionsRequested' => [
            ModelFixtures::buildDocumentFormatOptionsRequested(),
            DocumentFormatOptionsRequested::fromArray(...),
        ];
        yield 'ShippingDocumentDispositionDetail' => [
            ModelFixtures::buildShippingDocumentDispositionDetail(),
            ShippingDocumentDispositionDetail::fromArray(...),
        ];
        yield 'ShippingDocumentEmailDetail' => [
            ModelFixtures::buildShippingDocumentEmailDetail(),
            ShippingDocumentEmailDetail::fromArray(...),
        ];
        yield 'ShippingDocumentEmailRecipient' => [
            ModelFixtures::buildShippingDocumentEmailRecipient(),
            ShippingDocumentEmailRecipient::fromArray(...),
        ];
        yield 'ReturnInstructionsDetail' => [
            ModelFixtures::buildReturnInstructionsDetail(),
            ReturnInstructionsDetail::fromArray(...),
        ];
        yield 'ReturnShippingDocumentFormat' => [
            ModelFixtures::buildReturnShippingDocumentFormat(),
            ReturnShippingDocumentFormat::fromArray(...),
        ];
        yield 'Op900Detail' => [ModelFixtures::buildOp900Detail(), Op900Detail::fromArray(...)];
        yield 'CustomerImageUsage' => [ModelFixtures::buildCustomerImageUsage(), CustomerImageUsage::fromArray(...)];
        yield 'UsmcaCertificationOfOriginDetail' => [
            ModelFixtures::buildUsmcaCertificationOfOriginDetail(),
            UsmcaCertificationOfOriginDetail::fromArray(...),
        ];
        yield 'Party3' => [ModelFixtures::buildParty3(), Party3::fromArray(...)];
        yield 'PartyAddress1' => [ModelFixtures::buildPartyAddress1(), PartyAddress1::fromArray(...)];
        yield 'PartyContact1' => [ModelFixtures::buildPartyContact1(), PartyContact1::fromArray(...)];
        yield 'RetrieveDateRange' => [ModelFixtures::buildRetrieveDateRange(), RetrieveDateRange::fromArray(...)];
        yield 'UsmcaCommercialInvoiceCertificationOfOriginDetail' => [
            ModelFixtures::buildUsmcaCommercialInvoiceCertificationOfOriginDetail(),
            UsmcaCommercialInvoiceCertificationOfOriginDetail::fromArray(...),
        ];
        yield 'CertificateOfOriginDetail' => [
            ModelFixtures::buildCertificateOfOriginDetail(),
            CertificateOfOriginDetail::fromArray(...),
        ];
        yield 'CommercialInvoiceDetail' => [
            ModelFixtures::buildCommercialInvoiceDetail(),
            CommercialInvoiceDetail::fromArray(...),
        ];
        yield 'MasterTrackingId' => [ModelFixtures::buildMasterTrackingId(), MasterTrackingId::fromArray(...)];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
        ];
        yield 'CustomerReference1' => [ModelFixtures::buildCustomerReference1(), CustomerReference1::fromArray(...)];
        yield 'Dimensions' => [ModelFixtures::buildDimensions(), Dimensions::fromArray(...)];
        yield 'ContentRecord' => [ModelFixtures::buildContentRecord(), ContentRecord::fromArray(...)];
        yield 'PackageSpecialServicesRequested' => [
            ModelFixtures::buildPackageSpecialServicesRequested(),
            PackageSpecialServicesRequested::fromArray(...),
        ];
        yield 'PriorityAlertDetail' => [ModelFixtures::buildPriorityAlertDetail(), PriorityAlertDetail::fromArray(...)];
        yield 'SignatureOptionDetail' => [
            ModelFixtures::buildSignatureOptionDetail(),
            SignatureOptionDetail::fromArray(...),
        ];
        yield 'AlcoholDetail' => [ModelFixtures::buildAlcoholDetail(), AlcoholDetail::fromArray(...)];
        yield 'DangerousGoodsDetail' => [
            ModelFixtures::buildDangerousGoodsDetail(),
            DangerousGoodsDetail::fromArray(...),
        ];
        yield 'PackageCODDetail' => [ModelFixtures::buildPackageCODDetail(), PackageCODDetail::fromArray(...)];
        yield 'BatteryDetail' => [ModelFixtures::buildBatteryDetail(), BatteryDetail::fromArray(...)];
        yield 'StandaloneBatteryDetails' => [
            ModelFixtures::buildStandaloneBatteryDetails(),
            StandaloneBatteryDetails::fromArray(...),
        ];
        yield 'ShipperAccountNumber' => [
            ModelFixtures::buildShipperAccountNumber(),
            ShipperAccountNumber::fromArray(...),
        ];
        yield 'SHPCResponseVOShipShipment' => [
            ModelFixtures::buildSHPCResponseVOShipShipment(),
            SHPCResponseVOShipShipment::fromArray(...),
        ];
        yield 'ShipShipmentOutputVO' => [
            ModelFixtures::buildShipShipmentOutputVO(),
            ShipShipmentOutputVO::fromArray(...),
        ];
        yield 'TransactionCreateShipmentOutputVO' => [
            ModelFixtures::buildTransactionCreateShipmentOutputVO(),
            TransactionCreateShipmentOutputVO::fromArray(...),
        ];
        yield 'CompletedCreateShipmentDetail' => [
            ModelFixtures::buildCompletedCreateShipmentDetail(),
            CompletedCreateShipmentDetail::fromArray(...),
        ];
        yield 'TransactionShipmentOutputVO' => [
            ModelFixtures::buildTransactionShipmentOutputVO(),
            TransactionShipmentOutputVO::fromArray(...),
        ];
        yield 'LabelResponseVO' => [ModelFixtures::buildLabelResponseVO(), LabelResponseVO::fromArray(...)];
        yield 'Alert' => [ModelFixtures::buildAlert(), Alert::fromArray(...)];
        yield 'Alert3P' => [ModelFixtures::buildAlert3P(), Alert3P::fromArray(...)];
        yield 'Alert3PP' => [ModelFixtures::buildAlert3PP(), Alert3PP::fromArray(...)];
        yield 'PieceResponse' => [ModelFixtures::buildPieceResponse(), PieceResponse::fromArray(...)];
        yield 'TransactionDetailVO' => [ModelFixtures::buildTransactionDetailVO(), TransactionDetailVO::fromArray(...)];
        yield 'CompletedShipmentDetail' => [
            ModelFixtures::buildCompletedShipmentDetail(),
            CompletedShipmentDetail::fromArray(...),
        ];
        yield 'CompletedPackageDetail' => [
            ModelFixtures::buildCompletedPackageDetail(),
            CompletedPackageDetail::fromArray(...),
        ];
        yield 'PackageOperationalDetail' => [
            ModelFixtures::buildPackageOperationalDetail(),
            PackageOperationalDetail::fromArray(...),
        ];
        yield 'PackageBarcodes' => [ModelFixtures::buildPackageBarcodes(), PackageBarcodes::fromArray(...)];
        yield 'BinaryBarcode' => [ModelFixtures::buildBinaryBarcode(), BinaryBarcode::fromArray(...)];
        yield 'StringBarcode' => [ModelFixtures::buildStringBarcode(), StringBarcode::fromArray(...)];
        yield 'OperationalInstructions' => [
            ModelFixtures::buildOperationalInstructions(),
            OperationalInstructions::fromArray(...),
        ];
        yield 'TrackingId' => [ModelFixtures::buildTrackingId(), TrackingId::fromArray(...)];
        yield 'PackageRating' => [ModelFixtures::buildPackageRating(), PackageRating::fromArray(...)];
        yield 'PackageRateDetail' => [ModelFixtures::buildPackageRateDetail(), PackageRateDetail::fromArray(...)];
        yield 'Surcharge' => [ModelFixtures::buildSurcharge(), Surcharge::fromArray(...)];
        yield 'CompletedHazardousPackageDetail' => [
            ModelFixtures::buildCompletedHazardousPackageDetail(),
            CompletedHazardousPackageDetail::fromArray(...),
        ];
        yield 'ValidatedHazardousContainer' => [
            ModelFixtures::buildValidatedHazardousContainer(),
            ValidatedHazardousContainer::fromArray(...),
        ];
        yield 'ValidatedHazardousCommodityContent' => [
            ModelFixtures::buildValidatedHazardousCommodityContent(),
            ValidatedHazardousCommodityContent::fromArray(...),
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetail::fromArray(...),
        ];
        yield 'HazardousCommodityContent001' => [
            ModelFixtures::buildHazardousCommodityContent001(),
            HazardousCommodityContent001::fromArray(...),
        ];
        yield 'HazardousCommodityInnerReceptacleDetail01' => [
            ModelFixtures::buildHazardousCommodityInnerReceptacleDetail01(),
            HazardousCommodityInnerReceptacleDetail01::fromArray(...),
        ];
        yield 'HazardousCommodityQuantityDetail002' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail002(),
            HazardousCommodityQuantityDetail002::fromArray(...),
        ];
        yield 'HazardousCommodityOptionDetail01' => [
            ModelFixtures::buildHazardousCommodityOptionDetail01(),
            HazardousCommodityOptionDetail01::fromArray(...),
        ];
        yield 'HazardousCommodityDescription01' => [
            ModelFixtures::buildHazardousCommodityDescription01(),
            HazardousCommodityDescription01::fromArray(...),
        ];
        yield 'HazardousCommodityPackingDetail01' => [
            ModelFixtures::buildHazardousCommodityPackingDetail01(),
            HazardousCommodityPackingDetail01::fromArray(...),
        ];
        yield 'ValidatedHazardousCommodityDescription' => [
            ModelFixtures::buildValidatedHazardousCommodityDescription(),
            ValidatedHazardousCommodityDescription::fromArray(...),
        ];
        yield 'NetExplosiveDetail' => [ModelFixtures::buildNetExplosiveDetail(), NetExplosiveDetail::fromArray(...)];
        yield 'ShipmentOperationalDetail' => [
            ModelFixtures::buildShipmentOperationalDetail(),
            ShipmentOperationalDetail::fromArray(...),
        ];
        yield 'CompletedHoldAtLocationDetail' => [
            ModelFixtures::buildCompletedHoldAtLocationDetail(),
            CompletedHoldAtLocationDetail::fromArray(...),
        ];
        yield 'JustContactAndAddress' => [
            ModelFixtures::buildJustContactAndAddress(),
            JustContactAndAddress::fromArray(...),
        ];
        yield 'Address' => [ModelFixtures::buildAddress(), Address::fromArray(...)];
        yield 'Contact' => [ModelFixtures::buildContact(), Contact::fromArray(...)];
        yield 'CompletedEtdDetail' => [ModelFixtures::buildCompletedEtdDetail(), CompletedEtdDetail::fromArray(...)];
        yield 'ServiceDescription' => [ModelFixtures::buildServiceDescription(), ServiceDescription::fromArray(...)];
        yield 'ProductName' => [ModelFixtures::buildProductName(), ProductName::fromArray(...)];
        yield 'CompletedHazardousShipmentDetail' => [
            ModelFixtures::buildCompletedHazardousShipmentDetail(),
            CompletedHazardousShipmentDetail::fromArray(...),
        ];
        yield 'CompletedHazardousSummaryDetail' => [
            ModelFixtures::buildCompletedHazardousSummaryDetail(),
            CompletedHazardousSummaryDetail::fromArray(...),
        ];
        yield 'AdrLicenseDetail' => [ModelFixtures::buildAdrLicenseDetail(), AdrLicenseDetail::fromArray(...)];
        yield 'LicenseOrPermitDetail' => [
            ModelFixtures::buildLicenseOrPermitDetail(),
            LicenseOrPermitDetail::fromArray(...),
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetail::fromArray(...),
        ];
        yield 'ShipmentDryIceProcessingOptionsRequested' => [
            ModelFixtures::buildShipmentDryIceProcessingOptionsRequested(),
            ShipmentDryIceProcessingOptionsRequested::fromArray(...),
        ];
        yield 'ShipmentRating' => [ModelFixtures::buildShipmentRating(), ShipmentRating::fromArray(...)];
        yield 'CreateShipmentRating' => [
            ModelFixtures::buildCreateShipmentRating(),
            CreateShipmentRating::fromArray(...),
        ];
        yield 'CreateShipmentRatingPickupRateDetail' => [
            ModelFixtures::buildCreateShipmentRatingPickupRateDetail(),
            CreateShipmentRatingPickupRateDetail::fromArray(...),
        ];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1::fromArray(...)];
        yield 'EdtCommodityTax' => [ModelFixtures::buildEdtCommodityTax(), EdtCommodityTax::fromArray(...)];
        yield 'EdtTaxDetail1' => [ModelFixtures::buildEdtTaxDetail1(), EdtTaxDetail1::fromArray(...)];
        yield 'EdtTaxDetail1TaxRatesItem' => [
            ModelFixtures::buildEdtTaxDetail1TaxRatesItem(),
            EdtTaxDetail1TaxRatesItem::fromArray(...),
        ];
        yield 'EdtTaxDetail1AppliedPreferentialTradeAgreement' => [
            ModelFixtures::buildEdtTaxDetail1AppliedPreferentialTradeAgreement(),
            EdtTaxDetail1AppliedPreferentialTradeAgreement::fromArray(...),
        ];
        yield 'VariableHandlingCharges1' => [
            ModelFixtures::buildVariableHandlingCharges1(),
            VariableHandlingCharges1::fromArray(...),
        ];
        yield 'AncillaryFeeAndTax' => [ModelFixtures::buildAncillaryFeeAndTax(), AncillaryFeeAndTax::fromArray(...)];
        yield 'RateDiscount2' => [ModelFixtures::buildRateDiscount2(), RateDiscount2::fromArray(...)];
        yield 'Rebate' => [ModelFixtures::buildRebate(), Rebate::fromArray(...)];
        yield 'Surcharge2' => [ModelFixtures::buildSurcharge2(), Surcharge2::fromArray(...)];
        yield 'Tax2' => [ModelFixtures::buildTax2(), Tax2::fromArray(...)];
        yield 'ShipmentRateDetail' => [ModelFixtures::buildShipmentRateDetail(), ShipmentRateDetail::fromArray(...)];
        yield 'Tax' => [ModelFixtures::buildTax(), Tax::fromArray(...)];
        yield 'CurrencyExchangeRate' => [
            ModelFixtures::buildCurrencyExchangeRate(),
            CurrencyExchangeRate::fromArray(...),
        ];
        yield 'ShipmentLegRateDetail' => [
            ModelFixtures::buildShipmentLegRateDetail(),
            ShipmentLegRateDetail::fromArray(...),
        ];
        yield 'RateDiscount' => [ModelFixtures::buildRateDiscount(), RateDiscount::fromArray(...)];
        yield 'DocumentRequirementsDetail' => [
            ModelFixtures::buildDocumentRequirementsDetail(),
            DocumentRequirementsDetail::fromArray(...),
        ];
        yield 'DocumentGenerationDetail' => [
            ModelFixtures::buildDocumentGenerationDetail(),
            DocumentGenerationDetail::fromArray(...),
        ];
        yield 'PendingShipmentAccessDetail' => [
            ModelFixtures::buildPendingShipmentAccessDetail(),
            PendingShipmentAccessDetail::fromArray(...),
        ];
        yield 'PendingShipmentAccessorDetail' => [
            ModelFixtures::buildPendingShipmentAccessorDetail(),
            PendingShipmentAccessorDetail::fromArray(...),
        ];
        yield 'ShipmentAdvisoryDetails' => [
            ModelFixtures::buildShipmentAdvisoryDetails(),
            ShipmentAdvisoryDetails::fromArray(...),
        ];
        yield 'RegulatoryAdvisoryDetail' => [
            ModelFixtures::buildRegulatoryAdvisoryDetail(),
            RegulatoryAdvisoryDetail::fromArray(...),
        ];
        yield 'SuggestedCommodityDetail' => [
            ModelFixtures::buildSuggestedCommodityDetail(),
            SuggestedCommodityDetail::fromArray(...),
        ];
        yield 'RegulatoryProhibition' => [
            ModelFixtures::buildRegulatoryProhibition(),
            RegulatoryProhibition::fromArray(...),
        ];
        yield 'Message' => [ModelFixtures::buildMessage(), Message::fromArray(...)];
        yield 'MessageParameter' => [ModelFixtures::buildMessageParameter(), MessageParameter::fromArray(...)];
        yield 'RegulatoryWaiver' => [ModelFixtures::buildRegulatoryWaiver(), RegulatoryWaiver::fromArray(...)];
        yield 'ErrorResponseVO' => [ModelFixtures::buildErrorResponseVO(), ErrorResponseVO::fromArray(...)];
        yield 'CXSError' => [ModelFixtures::buildCXSError(), CXSError::fromArray(...)];
        yield 'Parameter' => [ModelFixtures::buildParameter(), Parameter::fromArray(...)];
        yield 'ErrorResponseVO401' => [ModelFixtures::buildErrorResponseVO401(), ErrorResponseVO401::fromArray(...)];
        yield 'CXSError401' => [ModelFixtures::buildCXSError401(), CXSError401::fromArray(...)];
        yield 'ErrorResponseVO403' => [ModelFixtures::buildErrorResponseVO403(), ErrorResponseVO403::fromArray(...)];
        yield 'CXSError403' => [ModelFixtures::buildCXSError403(), CXSError403::fromArray(...)];
        yield 'ErrorResponseVO404' => [ModelFixtures::buildErrorResponseVO404(), ErrorResponseVO404::fromArray(...)];
        yield 'CXSError404' => [ModelFixtures::buildCXSError404(), CXSError404::fromArray(...)];
        yield 'ErrorResponseVO500' => [ModelFixtures::buildErrorResponseVO500(), ErrorResponseVO500::fromArray(...)];
        yield 'CXSError500' => [ModelFixtures::buildCXSError500(), CXSError500::fromArray(...)];
        yield 'ErrorResponseVO503' => [ModelFixtures::buildErrorResponseVO503(), ErrorResponseVO503::fromArray(...)];
        yield 'CXSError503' => [ModelFixtures::buildCXSError503(), CXSError503::fromArray(...)];
        yield 'FullSchemaCancelShipment' => [
            ModelFixtures::buildFullSchemaCancelShipment(),
            FullSchemaCancelShipment::fromArray(...),
        ];
        yield 'SHPCResponseVOCancelShipment' => [
            ModelFixtures::buildSHPCResponseVOCancelShipment(),
            SHPCResponseVOCancelShipment::fromArray(...),
        ];
        yield 'CancelShipmentOutputVO' => [
            ModelFixtures::buildCancelShipmentOutputVO(),
            CancelShipmentOutputVO::fromArray(...),
        ];
        yield 'ErrorResponseVO2' => [ModelFixtures::buildErrorResponseVO2(), ErrorResponseVO2::fromArray(...)];
        yield 'CXSError2' => [ModelFixtures::buildCXSError2(), CXSError2::fromArray(...)];
        yield 'ErrorResponseVO401_2' => [
            ModelFixtures::buildErrorResponseVO4012(),
            ErrorResponseVO401_2::fromArray(...),
        ];
        yield 'ErrorResponseVO403_2' => [
            ModelFixtures::buildErrorResponseVO4032(),
            ErrorResponseVO403_2::fromArray(...),
        ];
        yield 'ErrorResponseVO404_2' => [
            ModelFixtures::buildErrorResponseVO4042(),
            ErrorResponseVO404_2::fromArray(...),
        ];
        yield 'ErrorResponseVO500_2' => [
            ModelFixtures::buildErrorResponseVO5002(),
            ErrorResponseVO500_2::fromArray(...),
        ];
        yield 'ErrorResponseVO503_2' => [
            ModelFixtures::buildErrorResponseVO5032(),
            ErrorResponseVO503_2::fromArray(...),
        ];
        yield 'FullSchemaGetConfirmedShipmentAsyncResults' => [
            ModelFixtures::buildFullSchemaGetConfirmedShipmentAsyncResults(),
            FullSchemaGetConfirmedShipmentAsyncResults::fromArray(...),
        ];
        yield 'AccountNumber' => [ModelFixtures::buildAccountNumber(), AccountNumber::fromArray(...)];
        yield 'SHPCResponseVOGetOpenShipmentResults' => [
            ModelFixtures::buildSHPCResponseVOGetOpenShipmentResults(),
            SHPCResponseVOGetOpenShipmentResults::fromArray(...),
        ];
        yield 'GetOpenShipmentResultsOutputVO' => [
            ModelFixtures::buildGetOpenShipmentResultsOutputVO(),
            GetOpenShipmentResultsOutputVO::fromArray(...),
        ];
        yield 'FullSchemaVerifyShipment' => [
            ModelFixtures::buildFullSchemaVerifyShipment(),
            FullSchemaVerifyShipment::fromArray(...),
        ];
        yield 'RequestedShipmentVerify' => [
            ModelFixtures::buildRequestedShipmentVerify(),
            RequestedShipmentVerify::fromArray(...),
        ];
        yield 'ContactAndAddressVerify' => [
            ModelFixtures::buildContactAndAddressVerify(),
            ContactAndAddressVerify::fromArray(...),
        ];
        yield 'ContactVerify' => [ModelFixtures::buildContactVerify(), ContactVerify::fromArray(...)];
        yield 'EMailNotificationDetail' => [
            ModelFixtures::buildEMailNotificationDetail(),
            EMailNotificationDetail::fromArray(...),
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
        ];
        yield 'SHPCResponseVOValidate' => [
            ModelFixtures::buildSHPCResponseVOValidate(),
            SHPCResponseVOValidate::fromArray(...),
        ];
        yield 'VerifyShipmentOutputVO' => [
            ModelFixtures::buildVerifyShipmentOutputVO(),
            VerifyShipmentOutputVO::fromArray(...),
        ];
        yield 'RequestedShipmentVerifyShipmentSpecialServices' => [
            ModelFixtures::buildRequestedShipmentVerifyShipmentSpecialServices(),
            RequestedShipmentVerifyShipmentSpecialServices::fromArray(...),
        ];
        yield 'HazardousCommodityOptionDetail' => [
            ModelFixtures::buildHazardousCommodityOptionDetail(),
            HazardousCommodityOptionDetail::fromArray(...),
        ];
        yield 'Version' => [ModelFixtures::buildVersion(), Version::fromArray(...)];
    }

    /**
     * Each model with the wire names its document must carry.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel, list<string>}>
     */
    public static function documentsMissingARequiredProperty(): iterable
    {
        yield 'FullSchemaShip' => [
            ModelFixtures::buildFullSchemaShip(),
            FullSchemaShip::fromArray(...),
            ['requestedShipment', 'labelResponseOptions', 'accountNumber'],
        ];
        yield 'RequestedShipment1' => [
            ModelFixtures::buildRequestedShipment1(),
            RequestedShipment1::fromArray(...),
            [
                'shipper',
                'recipients',
                'pickupType',
                'serviceType',
                'packagingType',
                'totalWeight',
                'shippingChargesPayment',
                'labelSpecification',
                'requestedPackageLineItems',
            ],
        ];
        yield 'ShipperParty' => [
            ModelFixtures::buildShipperParty(),
            ShipperParty::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'PartyAddress2' => [
            ModelFixtures::buildPartyAddress2(),
            PartyAddress2::fromArray(...),
            ['streetLines', 'city', 'countryCode'],
        ];
        yield 'PartyContact' => [ModelFixtures::buildPartyContact(), PartyContact::fromArray(...), ['phoneNumber']];
        yield 'TaxpayerIdentification' => [
            ModelFixtures::buildTaxpayerIdentification(),
            TaxpayerIdentification::fromArray(...),
            ['number', 'tinType'],
        ];
        yield 'RecipientsParty' => [
            ModelFixtures::buildRecipientsParty(),
            RecipientsParty::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'PartyContacts2' => [
            ModelFixtures::buildPartyContacts2(),
            PartyContacts2::fromArray(...),
            ['phoneNumber'],
        ];
        yield 'Payment' => [ModelFixtures::buildPayment(), Payment::fromArray(...), ['paymentType']];
        yield 'Payor' => [ModelFixtures::buildPayor(), Payor::fromArray(...), ['responsibleParty']];
        yield 'ResponsiblePartyParty' => [
            ModelFixtures::buildResponsiblePartyParty(),
            ResponsiblePartyParty::fromArray(...),
            ['accountNumber'],
        ];
        yield 'ReturnShipmentDetail' => [
            ModelFixtures::buildReturnShipmentDetail(),
            ReturnShipmentDetail::fromArray(...),
            ['returnType'],
        ];
        yield 'ReturnEmailDetail' => [
            ModelFixtures::buildReturnEmailDetail(),
            ReturnEmailDetail::fromArray(...),
            ['merchantPhoneNumber', 'allowedSpecialService'],
        ];
        yield 'ReturnAssociationDetail' => [
            ModelFixtures::buildReturnAssociationDetail(),
            ReturnAssociationDetail::fromArray(...),
            ['trackingNumber'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
            ['streetLines', 'countryCode'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
            ['companyName', 'personName', 'phoneNumber'],
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetail::fromArray(...),
            ['licenseOrExemptionNumber'],
        ];
        yield 'PendingShipmentDetail' => [
            ModelFixtures::buildPendingShipmentDetail(),
            PendingShipmentDetail::fromArray(...),
            ['pendingShipmentType', 'emailLabelDetail'],
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecification::fromArray(...),
            ['types'],
        ];
        yield 'EmailRecipient' => [
            ModelFixtures::buildEmailRecipient(),
            EmailRecipient::fromArray(...),
            ['emailAddress', 'role'],
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
            ['locationId'],
        ];
        yield 'ShipmentCODDetail' => [
            ModelFixtures::buildShipmentCODDetail(),
            ShipmentCODDetail::fromArray(...),
            ['codCollectionType'],
        ];
        yield 'Party1' => [ModelFixtures::buildParty1(), Party1::fromArray(...), ['contact']];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetail::fromArray(...),
            ['type'],
        ];
        yield 'ShipShipmentEmailNotificationRecipient' => [
            ModelFixtures::buildShipShipmentEmailNotificationRecipient(),
            ShipShipmentEmailNotificationRecipient::fromArray(...),
            ['emailNotificationRecipientType', 'emailAddress'],
        ];
        yield 'VariableHandlingChargeDetailFixedValue' => [
            ModelFixtures::buildVariableHandlingChargeDetailFixedValue(),
            VariableHandlingChargeDetailFixedValue::fromArray(...),
            ['amount', 'currency'],
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
            ['commercialInvoice', 'commodities'],
        ];
        yield 'CustomsClearanceDetail1' => [
            ModelFixtures::buildCustomsClearanceDetail1(),
            CustomsClearanceDetail1::fromArray(...),
            ['commercialInvoice', 'commodities'],
        ];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBroker::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), Commodity::fromArray(...), ['description']];
        yield 'Commodity1' => [ModelFixtures::buildCommodity1(), Commodity1::fromArray(...), ['description']];
        yield 'RegulatoryDetail' => [
            ModelFixtures::buildRegulatoryDetail(),
            RegulatoryDetail::fromArray(...),
            ['regulationCode', 'productId', 'productIdType'],
        ];
        yield 'Weight' => [ModelFixtures::buildWeight(), Weight::fromArray(...), ['units', 'value']];
        yield 'Weight4' => [ModelFixtures::buildWeight4(), Weight4::fromArray(...), ['units', 'value']];
        yield 'Weight3' => [ModelFixtures::buildWeight3(), Weight3::fromArray(...), ['units', 'value']];
        yield 'DestinationControlDetail' => [
            ModelFixtures::buildDestinationControlDetail(),
            DestinationControlDetail::fromArray(...),
            ['statementTypes'],
        ];
        yield 'CustomsDeclarationStatementDetail' => [
            ModelFixtures::buildCustomsDeclarationStatementDetail(),
            CustomsDeclarationStatementDetail::fromArray(...),
            ['usmcaLowValueStatementDetail'],
        ];
        yield 'UsmcaLowValueStatementDetail' => [
            ModelFixtures::buildUsmcaLowValueStatementDetail(),
            UsmcaLowValueStatementDetail::fromArray(...),
            ['customsRole'],
        ];
        yield 'SmartPostInfoDetail' => [
            ModelFixtures::buildSmartPostInfoDetail(),
            SmartPostInfoDetail::fromArray(...),
            ['hubId', 'indicia'],
        ];
        yield 'LabelSpecification' => [
            ModelFixtures::buildLabelSpecification(),
            LabelSpecification::fromArray(...),
            ['labelStockType', 'imageType'],
        ];
        yield 'ShippingDocumentEmailDetail' => [
            ModelFixtures::buildShippingDocumentEmailDetail(),
            ShippingDocumentEmailDetail::fromArray(...),
            ['eMailRecipients'],
        ];
        yield 'ShippingDocumentEmailRecipient' => [
            ModelFixtures::buildShippingDocumentEmailRecipient(),
            ShippingDocumentEmailRecipient::fromArray(...),
            ['recipientType'],
        ];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
            ['weight'],
        ];
        yield 'ShipperAccountNumber' => [
            ModelFixtures::buildShipperAccountNumber(),
            ShipperAccountNumber::fromArray(...),
            ['value'],
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetail::fromArray(...),
            ['quantityType', 'amount'],
        ];
        yield 'HazardousCommodityQuantityDetail002' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail002(),
            HazardousCommodityQuantityDetail002::fromArray(...),
            ['quantityType', 'amount'],
        ];
        yield 'HazardousCommodityDescription01' => [
            ModelFixtures::buildHazardousCommodityDescription01(),
            HazardousCommodityDescription01::fromArray(...),
            ['reportableQuantity', 'packingGroup'],
        ];
        yield 'HazardousCommodityPackingDetail01' => [
            ModelFixtures::buildHazardousCommodityPackingDetail01(),
            HazardousCommodityPackingDetail01::fromArray(...),
            ['cargoAircraftOnly'],
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetail::fromArray(...),
            ['packageCount'],
        ];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1::fromArray(...), ['value']];
        yield 'FullSchemaCancelShipment' => [
            ModelFixtures::buildFullSchemaCancelShipment(),
            FullSchemaCancelShipment::fromArray(...),
            ['accountNumber', 'trackingNumber'],
        ];
        yield 'FullSchemaGetConfirmedShipmentAsyncResults' => [
            ModelFixtures::buildFullSchemaGetConfirmedShipmentAsyncResults(),
            FullSchemaGetConfirmedShipmentAsyncResults::fromArray(...),
            ['accountNumber', 'jobId'],
        ];
        yield 'FullSchemaVerifyShipment' => [
            ModelFixtures::buildFullSchemaVerifyShipment(),
            FullSchemaVerifyShipment::fromArray(...),
            ['requestedShipment'],
        ];
        yield 'RequestedShipmentVerify' => [
            ModelFixtures::buildRequestedShipmentVerify(),
            RequestedShipmentVerify::fromArray(...),
            [
                'pickupType',
                'serviceType',
                'packagingType',
                'totalWeight',
                'shipper',
                'recipients',
                'shippingChargesPayment',
                'labelSpecification',
                'requestedPackageLineItems',
            ],
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
            ['emailNotificationRecipientType'],
        ];
    }

    /**
     * Each model with, per wire name, a value of a type that property cannot hold.
     *
     * Only properties whose type is a single closed shape appear. A union may legitimately accept
     * what looks like the wrong type, and a schema stating no type accepts anything.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel, array<array-key, int|string>}>
     */
    public static function documentsWithAMistypedProperty(): iterable
    {
        yield 'FullSchemaShip' => [
            ModelFixtures::buildFullSchemaShip(),
            FullSchemaShip::fromArray(...),
            ['requestedShipment' => 'not-an-object', 'labelResponseOptions' => 42, 'accountNumber' => 'not-an-object'],
        ];
        yield 'RequestedShipment1' => [
            ModelFixtures::buildRequestedShipment1(),
            RequestedShipment1::fromArray(...),
            [
                'shipper' => 'not-an-object',
                'recipients' => 'not-an-object',
                'pickupType' => 42,
                'serviceType' => 42,
                'packagingType' => 42,
                'totalWeight' => 'not-a-number',
                'shippingChargesPayment' => 'not-an-object',
                'labelSpecification' => 'not-an-object',
                'requestedPackageLineItems' => 'not-an-object',
            ],
        ];
        yield 'ShipperParty' => [
            ModelFixtures::buildShipperParty(),
            ShipperParty::fromArray(...),
            ['address' => 'not-an-object', 'contact' => 'not-an-object'],
        ];
        yield 'PartyAddress2' => [
            ModelFixtures::buildPartyAddress2(),
            PartyAddress2::fromArray(...),
            ['streetLines' => 'not-an-object', 'city' => 42, 'countryCode' => 42],
        ];
        yield 'PartyContact' => [
            ModelFixtures::buildPartyContact(),
            PartyContact::fromArray(...),
            ['phoneNumber' => 42],
        ];
        yield 'TaxpayerIdentification' => [
            ModelFixtures::buildTaxpayerIdentification(),
            TaxpayerIdentification::fromArray(...),
            ['number' => 42, 'tinType' => 42],
        ];
        yield 'RecipientsParty' => [
            ModelFixtures::buildRecipientsParty(),
            RecipientsParty::fromArray(...),
            ['address' => 'not-an-object', 'contact' => 'not-an-object'],
        ];
        yield 'PartyContacts2' => [
            ModelFixtures::buildPartyContacts2(),
            PartyContacts2::fromArray(...),
            ['phoneNumber' => 42],
        ];
        yield 'Payment' => [ModelFixtures::buildPayment(), Payment::fromArray(...), ['paymentType' => 42]];
        yield 'Payor' => [ModelFixtures::buildPayor(), Payor::fromArray(...), ['responsibleParty' => 'not-an-object']];
        yield 'ResponsiblePartyParty' => [
            ModelFixtures::buildResponsiblePartyParty(),
            ResponsiblePartyParty::fromArray(...),
            ['accountNumber' => 'not-an-object'],
        ];
        yield 'ReturnShipmentDetail' => [
            ModelFixtures::buildReturnShipmentDetail(),
            ReturnShipmentDetail::fromArray(...),
            ['returnType' => 42],
        ];
        yield 'ReturnEmailDetail' => [
            ModelFixtures::buildReturnEmailDetail(),
            ReturnEmailDetail::fromArray(...),
            ['merchantPhoneNumber' => 42, 'allowedSpecialService' => 'not-an-object'],
        ];
        yield 'ReturnAssociationDetail' => [
            ModelFixtures::buildReturnAssociationDetail(),
            ReturnAssociationDetail::fromArray(...),
            ['trackingNumber' => 42],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
            ['address' => 'not-an-object', 'contact' => 'not-an-object'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
            ['streetLines' => 'not-an-object', 'countryCode' => 42],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
            ['companyName' => 42, 'personName' => 42, 'phoneNumber' => 42],
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetail::fromArray(...),
            ['licenseOrExemptionNumber' => 42],
        ];
        yield 'PendingShipmentDetail' => [
            ModelFixtures::buildPendingShipmentDetail(),
            PendingShipmentDetail::fromArray(...),
            ['pendingShipmentType' => 42, 'emailLabelDetail' => 'not-an-object'],
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecification::fromArray(...),
            ['types' => 'not-an-object'],
        ];
        yield 'EmailRecipient' => [
            ModelFixtures::buildEmailRecipient(),
            EmailRecipient::fromArray(...),
            ['emailAddress' => 42, 'role' => 42],
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
            ['locationId' => 42],
        ];
        yield 'ShipmentCODDetail' => [
            ModelFixtures::buildShipmentCODDetail(),
            ShipmentCODDetail::fromArray(...),
            ['codCollectionType' => 42],
        ];
        yield 'Party1' => [ModelFixtures::buildParty1(), Party1::fromArray(...), ['contact' => 'not-an-object']];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetail::fromArray(...),
            ['type' => 42],
        ];
        yield 'ShipShipmentEmailNotificationRecipient' => [
            ModelFixtures::buildShipShipmentEmailNotificationRecipient(),
            ShipShipmentEmailNotificationRecipient::fromArray(...),
            ['emailNotificationRecipientType' => 42, 'emailAddress' => 42],
        ];
        yield 'VariableHandlingChargeDetailFixedValue' => [
            ModelFixtures::buildVariableHandlingChargeDetailFixedValue(),
            VariableHandlingChargeDetailFixedValue::fromArray(...),
            ['amount' => 'not-a-number', 'currency' => 42],
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
            ['commercialInvoice' => 'not-an-object', 'commodities' => 'not-an-object'],
        ];
        yield 'CustomsClearanceDetail1' => [
            ModelFixtures::buildCustomsClearanceDetail1(),
            CustomsClearanceDetail1::fromArray(...),
            ['commercialInvoice' => 'not-an-object', 'commodities' => 'not-an-object'],
        ];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBroker::fromArray(...),
            ['address' => 'not-an-object', 'contact' => 'not-an-object'],
        ];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), Commodity::fromArray(...), ['description' => 42]];
        yield 'Commodity1' => [ModelFixtures::buildCommodity1(), Commodity1::fromArray(...), ['description' => 42]];
        yield 'RegulatoryDetail' => [
            ModelFixtures::buildRegulatoryDetail(),
            RegulatoryDetail::fromArray(...),
            ['regulationCode' => 42, 'productId' => 42, 'productIdType' => 42],
        ];
        yield 'Weight' => [
            ModelFixtures::buildWeight(),
            Weight::fromArray(...),
            ['units' => 42, 'value' => 'not-a-number'],
        ];
        yield 'Weight4' => [
            ModelFixtures::buildWeight4(),
            Weight4::fromArray(...),
            ['units' => 42, 'value' => 'not-a-number'],
        ];
        yield 'Weight3' => [
            ModelFixtures::buildWeight3(),
            Weight3::fromArray(...),
            ['units' => 42, 'value' => 'not-a-number'],
        ];
        yield 'DestinationControlDetail' => [
            ModelFixtures::buildDestinationControlDetail(),
            DestinationControlDetail::fromArray(...),
            ['statementTypes' => 42],
        ];
        yield 'CustomsDeclarationStatementDetail' => [
            ModelFixtures::buildCustomsDeclarationStatementDetail(),
            CustomsDeclarationStatementDetail::fromArray(...),
            ['usmcaLowValueStatementDetail' => 'not-an-object'],
        ];
        yield 'UsmcaLowValueStatementDetail' => [
            ModelFixtures::buildUsmcaLowValueStatementDetail(),
            UsmcaLowValueStatementDetail::fromArray(...),
            ['customsRole' => 42],
        ];
        yield 'SmartPostInfoDetail' => [
            ModelFixtures::buildSmartPostInfoDetail(),
            SmartPostInfoDetail::fromArray(...),
            ['hubId' => 42, 'indicia' => 42],
        ];
        yield 'LabelSpecification' => [
            ModelFixtures::buildLabelSpecification(),
            LabelSpecification::fromArray(...),
            ['labelStockType' => 42, 'imageType' => 42],
        ];
        yield 'ShippingDocumentEmailDetail' => [
            ModelFixtures::buildShippingDocumentEmailDetail(),
            ShippingDocumentEmailDetail::fromArray(...),
            ['eMailRecipients' => 'not-an-object'],
        ];
        yield 'ShippingDocumentEmailRecipient' => [
            ModelFixtures::buildShippingDocumentEmailRecipient(),
            ShippingDocumentEmailRecipient::fromArray(...),
            ['recipientType' => 42],
        ];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
            ['weight' => 'not-an-object'],
        ];
        yield 'ShipperAccountNumber' => [
            ModelFixtures::buildShipperAccountNumber(),
            ShipperAccountNumber::fromArray(...),
            ['value' => 42],
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetail::fromArray(...),
            ['quantityType' => 42, 'amount' => 'not-a-number'],
        ];
        yield 'HazardousCommodityQuantityDetail002' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail002(),
            HazardousCommodityQuantityDetail002::fromArray(...),
            ['quantityType' => 42, 'amount' => 'not-a-number'],
        ];
        yield 'HazardousCommodityDescription01' => [
            ModelFixtures::buildHazardousCommodityDescription01(),
            HazardousCommodityDescription01::fromArray(...),
            ['reportableQuantity' => 0, 'packingGroup' => 42],
        ];
        yield 'HazardousCommodityPackingDetail01' => [
            ModelFixtures::buildHazardousCommodityPackingDetail01(),
            HazardousCommodityPackingDetail01::fromArray(...),
            ['cargoAircraftOnly' => 0],
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetail::fromArray(...),
            ['packageCount' => 'not-a-number'],
        ];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1::fromArray(...), ['value' => 42]];
        yield 'FullSchemaCancelShipment' => [
            ModelFixtures::buildFullSchemaCancelShipment(),
            FullSchemaCancelShipment::fromArray(...),
            ['accountNumber' => 'not-an-object', 'trackingNumber' => 42],
        ];
        yield 'FullSchemaGetConfirmedShipmentAsyncResults' => [
            ModelFixtures::buildFullSchemaGetConfirmedShipmentAsyncResults(),
            FullSchemaGetConfirmedShipmentAsyncResults::fromArray(...),
            ['accountNumber' => 'not-an-object', 'jobId' => 42],
        ];
        yield 'FullSchemaVerifyShipment' => [
            ModelFixtures::buildFullSchemaVerifyShipment(),
            FullSchemaVerifyShipment::fromArray(...),
            ['requestedShipment' => 'not-an-object'],
        ];
        yield 'RequestedShipmentVerify' => [
            ModelFixtures::buildRequestedShipmentVerify(),
            RequestedShipmentVerify::fromArray(...),
            [
                'pickupType' => 42,
                'serviceType' => 42,
                'packagingType' => 42,
                'totalWeight' => 'not-a-number',
                'shipper' => 'not-an-object',
                'recipients' => 'not-an-object',
                'shippingChargesPayment' => 'not-an-object',
                'labelSpecification' => 'not-an-object',
                'requestedPackageLineItems' => 'not-an-object',
            ],
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
            ['emailNotificationRecipientType' => 42],
        ];
    }

    /**
     * Each model whose values all pass their constraints, with those constraints.
     *
     * @return iterable<string, array{SelfNormalizingModel, list<Constraint>}>
     */
    public static function modelsWithTheirConstraints(): iterable
    {
        yield 'FullSchemaShip' => [ModelFixtures::buildFullSchemaShip(), FullSchemaShipConstraint::constraints()];
        yield 'RequestedShipment1' => [
            ModelFixtures::buildRequestedShipment1(),
            RequestedShipment1Constraint::constraints(),
        ];
        yield 'VariationOptions' => [ModelFixtures::buildVariationOptions(), VariationOptionsConstraint::constraints()];
        yield 'PickupDetail' => [ModelFixtures::buildPickupDetail(), PickupDetailConstraint::constraints()];
        yield 'Money' => [ModelFixtures::buildMoney(), MoneyConstraint::constraints()];
        yield 'CustomsMoney' => [ModelFixtures::buildCustomsMoney(), CustomsMoneyConstraint::constraints()];
        yield 'ShipperParty' => [ModelFixtures::buildShipperParty(), ShipperPartyConstraint::constraints()];
        yield 'SoldToParty' => [ModelFixtures::buildSoldToParty(), SoldToPartyConstraint::constraints()];
        yield 'PartyAddress' => [ModelFixtures::buildPartyAddress(), PartyAddressConstraint::constraints()];
        yield 'PartyAddress2' => [ModelFixtures::buildPartyAddress2(), PartyAddress2Constraint::constraints()];
        yield 'PartyContact' => [ModelFixtures::buildPartyContact(), PartyContactConstraint::constraints()];
        yield 'TaxpayerIdentification' => [
            ModelFixtures::buildTaxpayerIdentification(),
            TaxpayerIdentificationConstraint::constraints(),
        ];
        yield 'RecipientsParty' => [ModelFixtures::buildRecipientsParty(), RecipientsPartyConstraint::constraints()];
        yield 'PartyContacts2' => [ModelFixtures::buildPartyContacts2(), PartyContacts2Constraint::constraints()];
        yield 'ContactAndAddress1' => [
            ModelFixtures::buildContactAndAddress1(),
            ContactAndAddress1Constraint::constraints(),
        ];
        yield 'Contact2' => [ModelFixtures::buildContact2(), Contact2Constraint::constraints()];
        yield 'Address1' => [ModelFixtures::buildAddress1(), Address1Constraint::constraints()];
        yield 'Payment' => [ModelFixtures::buildPayment(), PaymentConstraint::constraints()];
        yield 'Payor' => [ModelFixtures::buildPayor(), PayorConstraint::constraints()];
        yield 'ResponsiblePartyParty' => [
            ModelFixtures::buildResponsiblePartyParty(),
            ResponsiblePartyPartyConstraint::constraints(),
        ];
        yield 'PartyAccountNumber' => [
            ModelFixtures::buildPartyAccountNumber(),
            PartyAccountNumberConstraint::constraints(),
        ];
        yield 'PartyAccountNumber1' => [
            ModelFixtures::buildPartyAccountNumber1(),
            PartyAccountNumber1Constraint::constraints(),
        ];
        yield 'ShipmentSpecialServicesRequested' => [
            ModelFixtures::buildShipmentSpecialServicesRequested(),
            ShipmentSpecialServicesRequestedConstraint::constraints(),
        ];
        yield 'ETDDetail' => [ModelFixtures::buildETDDetail(), ETDDetailConstraint::constraints()];
        yield 'UploadDocumentReferenceDetail' => [
            ModelFixtures::buildUploadDocumentReferenceDetail(),
            UploadDocumentReferenceDetailConstraint::constraints(),
        ];
        yield 'ReturnShipmentDetail' => [
            ModelFixtures::buildReturnShipmentDetail(),
            ReturnShipmentDetailConstraint::constraints(),
        ];
        yield 'ReturnEmailDetail' => [
            ModelFixtures::buildReturnEmailDetail(),
            ReturnEmailDetailConstraint::constraints(),
        ];
        yield 'ReturnMerchandiseAuthorization' => [
            ModelFixtures::buildReturnMerchandiseAuthorization(),
            ReturnMerchandiseAuthorizationConstraint::constraints(),
        ];
        yield 'ReturnAssociationDetail' => [
            ModelFixtures::buildReturnAssociationDetail(),
            ReturnAssociationDetailConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetail' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetail(),
            DeliveryOnInvoiceAcceptanceDetailConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipientConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddressConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContactConstraint::constraints(),
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetailConstraint::constraints(),
        ];
        yield 'PendingShipmentDetail' => [
            ModelFixtures::buildPendingShipmentDetail(),
            PendingShipmentDetailConstraint::constraints(),
        ];
        yield 'PendingShipmentProcessingOptionsRequested' => [
            ModelFixtures::buildPendingShipmentProcessingOptionsRequested(),
            PendingShipmentProcessingOptionsRequestedConstraint::constraints(),
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecificationConstraint::constraints(),
        ];
        yield 'EmailLabelDetail' => [ModelFixtures::buildEmailLabelDetail(), EmailLabelDetailConstraint::constraints()];
        yield 'EmailRecipient' => [ModelFixtures::buildEmailRecipient(), EmailRecipientConstraint::constraints()];
        yield 'EmailOptionsRequested' => [
            ModelFixtures::buildEmailOptionsRequested(),
            EmailOptionsRequestedConstraint::constraints(),
        ];
        yield 'UploadDocumentReferenceDetail1' => [
            ModelFixtures::buildUploadDocumentReferenceDetail1(),
            UploadDocumentReferenceDetail1Constraint::constraints(),
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetailConstraint::constraints(),
        ];
        yield 'ContactAndAddress' => [
            ModelFixtures::buildContactAndAddress(),
            ContactAndAddressConstraint::constraints(),
        ];
        yield 'Contact1' => [ModelFixtures::buildContact1(), Contact1Constraint::constraints()];
        yield 'ShipmentCODDetail' => [
            ModelFixtures::buildShipmentCODDetail(),
            ShipmentCODDetailConstraint::constraints(),
        ];
        yield 'CODTransportationChargesDetail' => [
            ModelFixtures::buildCODTransportationChargesDetail(),
            CODTransportationChargesDetailConstraint::constraints(),
        ];
        yield 'Party1' => [ModelFixtures::buildParty1(), Party1Constraint::constraints()];
        yield 'ShipmentDryIceDetail1' => [
            ModelFixtures::buildShipmentDryIceDetail1(),
            ShipmentDryIceDetail1Constraint::constraints(),
        ];
        yield 'Weight1' => [ModelFixtures::buildWeight1(), Weight1Constraint::constraints()];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetailConstraint::constraints(),
        ];
        yield 'HomeDeliveryPremiumDetail' => [
            ModelFixtures::buildHomeDeliveryPremiumDetail(),
            HomeDeliveryPremiumDetailConstraint::constraints(),
        ];
        yield 'PhoneNumber1' => [ModelFixtures::buildPhoneNumber1(), PhoneNumber1Constraint::constraints()];
        yield 'ShipShipmentEMailNotificationDetail' => [
            ModelFixtures::buildShipShipmentEMailNotificationDetail(),
            ShipShipmentEMailNotificationDetailConstraint::constraints(),
        ];
        yield 'ShipShipmentEmailNotificationRecipient' => [
            ModelFixtures::buildShipShipmentEmailNotificationRecipient(),
            ShipShipmentEmailNotificationRecipientConstraint::constraints(),
        ];
        yield 'ExpressFreightDetail' => [
            ModelFixtures::buildExpressFreightDetail(),
            ExpressFreightDetailConstraint::constraints(),
        ];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetailConstraint::constraints(),
        ];
        yield 'VariableHandlingChargeDetailFixedValue' => [
            ModelFixtures::buildVariableHandlingChargeDetailFixedValue(),
            VariableHandlingChargeDetailFixedValueConstraint::constraints(),
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetailConstraint::constraints(),
        ];
        yield 'CustomsClearanceDetail1' => [
            ModelFixtures::buildCustomsClearanceDetail1(),
            CustomsClearanceDetail1Constraint::constraints(),
        ];
        yield 'BrokerDetail' => [ModelFixtures::buildBrokerDetail(), BrokerDetailConstraint::constraints()];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBrokerConstraint::constraints(),
        ];
        yield 'CommercialInvoice' => [
            ModelFixtures::buildCommercialInvoice(),
            CommercialInvoiceConstraint::constraints(),
        ];
        yield 'CustomerReference' => [
            ModelFixtures::buildCustomerReference(),
            CustomerReferenceConstraint::constraints(),
        ];
        yield 'ShipEmailDispositionDetail' => [
            ModelFixtures::buildShipEmailDispositionDetail(),
            ShipEmailDispositionDetailConstraint::constraints(),
        ];
        yield 'Payment1' => [ModelFixtures::buildPayment1(), Payment1Constraint::constraints()];
        yield 'Payor1' => [ModelFixtures::buildPayor1(), Payor1Constraint::constraints()];
        yield 'Party2' => [ModelFixtures::buildParty2(), Party2Constraint::constraints()];
        yield 'BillingDetails' => [ModelFixtures::buildBillingDetails(), BillingDetailsConstraint::constraints()];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), CommodityConstraint::constraints()];
        yield 'Commodity1' => [ModelFixtures::buildCommodity1(), Commodity1Constraint::constraints()];
        yield 'RegulatoryDetail' => [ModelFixtures::buildRegulatoryDetail(), RegulatoryDetailConstraint::constraints()];
        yield 'RegulatoryDetailInfo' => [
            ModelFixtures::buildRegulatoryDetailInfo(),
            RegulatoryDetailInfoConstraint::constraints(),
        ];
        yield 'DisclaimMessageSet' => [
            ModelFixtures::buildDisclaimMessageSet(),
            DisclaimMessageSetConstraint::constraints(),
        ];
        yield 'ReferenceMessageSet' => [
            ModelFixtures::buildReferenceMessageSet(),
            ReferenceMessageSetConstraint::constraints(),
        ];
        yield 'ClearanceItemDetail' => [
            ModelFixtures::buildClearanceItemDetail(),
            ClearanceItemDetailConstraint::constraints(),
        ];
        yield 'ClearanceItemDetailContact' => [
            ModelFixtures::buildClearanceItemDetailContact(),
            ClearanceItemDetailContactConstraint::constraints(),
        ];
        yield 'ClearanceItemDetailAddress' => [
            ModelFixtures::buildClearanceItemDetailAddress(),
            ClearanceItemDetailAddressConstraint::constraints(),
        ];
        yield 'AdditionalMeasures' => [
            ModelFixtures::buildAdditionalMeasures(),
            AdditionalMeasuresConstraint::constraints(),
        ];
        yield 'Weight' => [ModelFixtures::buildWeight(), WeightConstraint::constraints()];
        yield 'Weight4' => [ModelFixtures::buildWeight4(), Weight4Constraint::constraints()];
        yield 'Weight3' => [ModelFixtures::buildWeight3(), Weight3Constraint::constraints()];
        yield 'UsmcaDetail' => [ModelFixtures::buildUsmcaDetail(), UsmcaDetailConstraint::constraints()];
        yield 'RecipientCustomsId' => [
            ModelFixtures::buildRecipientCustomsId(),
            RecipientCustomsIdConstraint::constraints(),
        ];
        yield 'CustomsOptionDetail' => [
            ModelFixtures::buildCustomsOptionDetail(),
            CustomsOptionDetailConstraint::constraints(),
        ];
        yield 'ExportDetail' => [ModelFixtures::buildExportDetail(), ExportDetailConstraint::constraints()];
        yield 'DestinationControlDetail' => [
            ModelFixtures::buildDestinationControlDetail(),
            DestinationControlDetailConstraint::constraints(),
        ];
        yield 'CustomsDeclarationStatementDetail' => [
            ModelFixtures::buildCustomsDeclarationStatementDetail(),
            CustomsDeclarationStatementDetailConstraint::constraints(),
        ];
        yield 'UsmcaLowValueStatementDetail' => [
            ModelFixtures::buildUsmcaLowValueStatementDetail(),
            UsmcaLowValueStatementDetailConstraint::constraints(),
        ];
        yield 'SmartPostInfoDetail' => [
            ModelFixtures::buildSmartPostInfoDetail(),
            SmartPostInfoDetailConstraint::constraints(),
        ];
        yield 'LabelSpecification' => [
            ModelFixtures::buildLabelSpecification(),
            LabelSpecificationConstraint::constraints(),
        ];
        yield 'CustomerSpecifiedLabelDetail' => [
            ModelFixtures::buildCustomerSpecifiedLabelDetail(),
            CustomerSpecifiedLabelDetailConstraint::constraints(),
        ];
        yield 'RegulatoryLabelContentDetail' => [
            ModelFixtures::buildRegulatoryLabelContentDetail(),
            RegulatoryLabelContentDetailConstraint::constraints(),
        ];
        yield 'AdditionalLabelsDetail' => [
            ModelFixtures::buildAdditionalLabelsDetail(),
            AdditionalLabelsDetailConstraint::constraints(),
        ];
        yield 'DocTabContent' => [ModelFixtures::buildDocTabContent(), DocTabContentConstraint::constraints()];
        yield 'DocTabContentZone001' => [
            ModelFixtures::buildDocTabContentZone001(),
            DocTabContentZone001Constraint::constraints(),
        ];
        yield 'DocTabZoneSpecification' => [
            ModelFixtures::buildDocTabZoneSpecification(),
            DocTabZoneSpecificationConstraint::constraints(),
        ];
        yield 'DocTabContentBarcoded' => [
            ModelFixtures::buildDocTabContentBarcoded(),
            DocTabContentBarcodedConstraint::constraints(),
        ];
        yield 'ShippingDocumentSpecification' => [
            ModelFixtures::buildShippingDocumentSpecification(),
            ShippingDocumentSpecificationConstraint::constraints(),
        ];
        yield 'GeneralAgencyAgreementDetail' => [
            ModelFixtures::buildGeneralAgencyAgreementDetail(),
            GeneralAgencyAgreementDetailConstraint::constraints(),
        ];
        yield 'ShippingDocumentFormat' => [
            ModelFixtures::buildShippingDocumentFormat(),
            ShippingDocumentFormatConstraint::constraints(),
        ];
        yield 'DocumentFormatOptionsRequested' => [
            ModelFixtures::buildDocumentFormatOptionsRequested(),
            DocumentFormatOptionsRequestedConstraint::constraints(),
        ];
        yield 'ShippingDocumentDispositionDetail' => [
            ModelFixtures::buildShippingDocumentDispositionDetail(),
            ShippingDocumentDispositionDetailConstraint::constraints(),
        ];
        yield 'ShippingDocumentEmailDetail' => [
            ModelFixtures::buildShippingDocumentEmailDetail(),
            ShippingDocumentEmailDetailConstraint::constraints(),
        ];
        yield 'ShippingDocumentEmailRecipient' => [
            ModelFixtures::buildShippingDocumentEmailRecipient(),
            ShippingDocumentEmailRecipientConstraint::constraints(),
        ];
        yield 'ReturnInstructionsDetail' => [
            ModelFixtures::buildReturnInstructionsDetail(),
            ReturnInstructionsDetailConstraint::constraints(),
        ];
        yield 'ReturnShippingDocumentFormat' => [
            ModelFixtures::buildReturnShippingDocumentFormat(),
            ReturnShippingDocumentFormatConstraint::constraints(),
        ];
        yield 'Op900Detail' => [ModelFixtures::buildOp900Detail(), Op900DetailConstraint::constraints()];
        yield 'CustomerImageUsage' => [
            ModelFixtures::buildCustomerImageUsage(),
            CustomerImageUsageConstraint::constraints(),
        ];
        yield 'UsmcaCertificationOfOriginDetail' => [
            ModelFixtures::buildUsmcaCertificationOfOriginDetail(),
            UsmcaCertificationOfOriginDetailConstraint::constraints(),
        ];
        yield 'Party3' => [ModelFixtures::buildParty3(), Party3Constraint::constraints()];
        yield 'PartyAddress1' => [ModelFixtures::buildPartyAddress1(), PartyAddress1Constraint::constraints()];
        yield 'PartyContact1' => [ModelFixtures::buildPartyContact1(), PartyContact1Constraint::constraints()];
        yield 'RetrieveDateRange' => [
            ModelFixtures::buildRetrieveDateRange(),
            RetrieveDateRangeConstraint::constraints(),
        ];
        yield 'UsmcaCommercialInvoiceCertificationOfOriginDetail' => [
            ModelFixtures::buildUsmcaCommercialInvoiceCertificationOfOriginDetail(),
            UsmcaCommercialInvoiceCertificationOfOriginDetailConstraint::constraints(),
        ];
        yield 'CertificateOfOriginDetail' => [
            ModelFixtures::buildCertificateOfOriginDetail(),
            CertificateOfOriginDetailConstraint::constraints(),
        ];
        yield 'CommercialInvoiceDetail' => [
            ModelFixtures::buildCommercialInvoiceDetail(),
            CommercialInvoiceDetailConstraint::constraints(),
        ];
        yield 'MasterTrackingId' => [ModelFixtures::buildMasterTrackingId(), MasterTrackingIdConstraint::constraints()];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItemConstraint::constraints(),
        ];
        yield 'CustomerReference1' => [
            ModelFixtures::buildCustomerReference1(),
            CustomerReference1Constraint::constraints(),
        ];
        yield 'Dimensions' => [ModelFixtures::buildDimensions(), DimensionsConstraint::constraints()];
        yield 'ContentRecord' => [ModelFixtures::buildContentRecord(), ContentRecordConstraint::constraints()];
        yield 'PackageSpecialServicesRequested' => [
            ModelFixtures::buildPackageSpecialServicesRequested(),
            PackageSpecialServicesRequestedConstraint::constraints(),
        ];
        yield 'PriorityAlertDetail' => [
            ModelFixtures::buildPriorityAlertDetail(),
            PriorityAlertDetailConstraint::constraints(),
        ];
        yield 'SignatureOptionDetail' => [
            ModelFixtures::buildSignatureOptionDetail(),
            SignatureOptionDetailConstraint::constraints(),
        ];
        yield 'AlcoholDetail' => [ModelFixtures::buildAlcoholDetail(), AlcoholDetailConstraint::constraints()];
        yield 'DangerousGoodsDetail' => [
            ModelFixtures::buildDangerousGoodsDetail(),
            DangerousGoodsDetailConstraint::constraints(),
        ];
        yield 'PackageCODDetail' => [ModelFixtures::buildPackageCODDetail(), PackageCODDetailConstraint::constraints()];
        yield 'BatteryDetail' => [ModelFixtures::buildBatteryDetail(), BatteryDetailConstraint::constraints()];
        yield 'StandaloneBatteryDetails' => [
            ModelFixtures::buildStandaloneBatteryDetails(),
            StandaloneBatteryDetailsConstraint::constraints(),
        ];
        yield 'ShipperAccountNumber' => [
            ModelFixtures::buildShipperAccountNumber(),
            ShipperAccountNumberConstraint::constraints(),
        ];
        yield 'SHPCResponseVOShipShipment' => [
            ModelFixtures::buildSHPCResponseVOShipShipment(),
            SHPCResponseVOShipShipmentConstraint::constraints(),
        ];
        yield 'ShipShipmentOutputVO' => [
            ModelFixtures::buildShipShipmentOutputVO(),
            ShipShipmentOutputVOConstraint::constraints(),
        ];
        yield 'TransactionCreateShipmentOutputVO' => [
            ModelFixtures::buildTransactionCreateShipmentOutputVO(),
            TransactionCreateShipmentOutputVOConstraint::constraints(),
        ];
        yield 'CompletedCreateShipmentDetail' => [
            ModelFixtures::buildCompletedCreateShipmentDetail(),
            CompletedCreateShipmentDetailConstraint::constraints(),
        ];
        yield 'TransactionShipmentOutputVO' => [
            ModelFixtures::buildTransactionShipmentOutputVO(),
            TransactionShipmentOutputVOConstraint::constraints(),
        ];
        yield 'LabelResponseVO' => [ModelFixtures::buildLabelResponseVO(), LabelResponseVOConstraint::constraints()];
        yield 'Alert' => [ModelFixtures::buildAlert(), AlertConstraint::constraints()];
        yield 'Alert3P' => [ModelFixtures::buildAlert3P(), Alert3PConstraint::constraints()];
        yield 'Alert3PP' => [ModelFixtures::buildAlert3PP(), Alert3PPConstraint::constraints()];
        yield 'PieceResponse' => [ModelFixtures::buildPieceResponse(), PieceResponseConstraint::constraints()];
        yield 'TransactionDetailVO' => [
            ModelFixtures::buildTransactionDetailVO(),
            TransactionDetailVOConstraint::constraints(),
        ];
        yield 'CompletedShipmentDetail' => [
            ModelFixtures::buildCompletedShipmentDetail(),
            CompletedShipmentDetailConstraint::constraints(),
        ];
        yield 'CompletedPackageDetail' => [
            ModelFixtures::buildCompletedPackageDetail(),
            CompletedPackageDetailConstraint::constraints(),
        ];
        yield 'PackageOperationalDetail' => [
            ModelFixtures::buildPackageOperationalDetail(),
            PackageOperationalDetailConstraint::constraints(),
        ];
        yield 'PackageBarcodes' => [ModelFixtures::buildPackageBarcodes(), PackageBarcodesConstraint::constraints()];
        yield 'BinaryBarcode' => [ModelFixtures::buildBinaryBarcode(), BinaryBarcodeConstraint::constraints()];
        yield 'StringBarcode' => [ModelFixtures::buildStringBarcode(), StringBarcodeConstraint::constraints()];
        yield 'OperationalInstructions' => [
            ModelFixtures::buildOperationalInstructions(),
            OperationalInstructionsConstraint::constraints(),
        ];
        yield 'TrackingId' => [ModelFixtures::buildTrackingId(), TrackingIdConstraint::constraints()];
        yield 'PackageRating' => [ModelFixtures::buildPackageRating(), PackageRatingConstraint::constraints()];
        yield 'PackageRateDetail' => [
            ModelFixtures::buildPackageRateDetail(),
            PackageRateDetailConstraint::constraints(),
        ];
        yield 'Surcharge' => [ModelFixtures::buildSurcharge(), SurchargeConstraint::constraints()];
        yield 'CompletedHazardousPackageDetail' => [
            ModelFixtures::buildCompletedHazardousPackageDetail(),
            CompletedHazardousPackageDetailConstraint::constraints(),
        ];
        yield 'ValidatedHazardousContainer' => [
            ModelFixtures::buildValidatedHazardousContainer(),
            ValidatedHazardousContainerConstraint::constraints(),
        ];
        yield 'ValidatedHazardousCommodityContent' => [
            ModelFixtures::buildValidatedHazardousCommodityContent(),
            ValidatedHazardousCommodityContentConstraint::constraints(),
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetailConstraint::constraints(),
        ];
        yield 'HazardousCommodityContent001' => [
            ModelFixtures::buildHazardousCommodityContent001(),
            HazardousCommodityContent001Constraint::constraints(),
        ];
        yield 'HazardousCommodityInnerReceptacleDetail01' => [
            ModelFixtures::buildHazardousCommodityInnerReceptacleDetail01(),
            HazardousCommodityInnerReceptacleDetail01Constraint::constraints(),
        ];
        yield 'HazardousCommodityQuantityDetail002' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail002(),
            HazardousCommodityQuantityDetail002Constraint::constraints(),
        ];
        yield 'HazardousCommodityOptionDetail01' => [
            ModelFixtures::buildHazardousCommodityOptionDetail01(),
            HazardousCommodityOptionDetail01Constraint::constraints(),
        ];
        yield 'HazardousCommodityDescription01' => [
            ModelFixtures::buildHazardousCommodityDescription01(),
            HazardousCommodityDescription01Constraint::constraints(),
        ];
        yield 'HazardousCommodityPackingDetail01' => [
            ModelFixtures::buildHazardousCommodityPackingDetail01(),
            HazardousCommodityPackingDetail01Constraint::constraints(),
        ];
        yield 'ValidatedHazardousCommodityDescription' => [
            ModelFixtures::buildValidatedHazardousCommodityDescription(),
            ValidatedHazardousCommodityDescriptionConstraint::constraints(),
        ];
        yield 'NetExplosiveDetail' => [
            ModelFixtures::buildNetExplosiveDetail(),
            NetExplosiveDetailConstraint::constraints(),
        ];
        yield 'ShipmentOperationalDetail' => [
            ModelFixtures::buildShipmentOperationalDetail(),
            ShipmentOperationalDetailConstraint::constraints(),
        ];
        yield 'CompletedHoldAtLocationDetail' => [
            ModelFixtures::buildCompletedHoldAtLocationDetail(),
            CompletedHoldAtLocationDetailConstraint::constraints(),
        ];
        yield 'JustContactAndAddress' => [
            ModelFixtures::buildJustContactAndAddress(),
            JustContactAndAddressConstraint::constraints(),
        ];
        yield 'Address' => [ModelFixtures::buildAddress(), AddressConstraint::constraints()];
        yield 'Contact' => [ModelFixtures::buildContact(), ContactConstraint::constraints()];
        yield 'CompletedEtdDetail' => [
            ModelFixtures::buildCompletedEtdDetail(),
            CompletedEtdDetailConstraint::constraints(),
        ];
        yield 'ServiceDescription' => [
            ModelFixtures::buildServiceDescription(),
            ServiceDescriptionConstraint::constraints(),
        ];
        yield 'ProductName' => [ModelFixtures::buildProductName(), ProductNameConstraint::constraints()];
        yield 'CompletedHazardousShipmentDetail' => [
            ModelFixtures::buildCompletedHazardousShipmentDetail(),
            CompletedHazardousShipmentDetailConstraint::constraints(),
        ];
        yield 'CompletedHazardousSummaryDetail' => [
            ModelFixtures::buildCompletedHazardousSummaryDetail(),
            CompletedHazardousSummaryDetailConstraint::constraints(),
        ];
        yield 'AdrLicenseDetail' => [ModelFixtures::buildAdrLicenseDetail(), AdrLicenseDetailConstraint::constraints()];
        yield 'LicenseOrPermitDetail' => [
            ModelFixtures::buildLicenseOrPermitDetail(),
            LicenseOrPermitDetailConstraint::constraints(),
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetailConstraint::constraints(),
        ];
        yield 'ShipmentDryIceProcessingOptionsRequested' => [
            ModelFixtures::buildShipmentDryIceProcessingOptionsRequested(),
            ShipmentDryIceProcessingOptionsRequestedConstraint::constraints(),
        ];
        yield 'ShipmentRating' => [ModelFixtures::buildShipmentRating(), ShipmentRatingConstraint::constraints()];
        yield 'CreateShipmentRating' => [
            ModelFixtures::buildCreateShipmentRating(),
            CreateShipmentRatingConstraint::constraints(),
        ];
        yield 'CreateShipmentRatingPickupRateDetail' => [
            ModelFixtures::buildCreateShipmentRatingPickupRateDetail(),
            CreateShipmentRatingPickupRateDetailConstraint::constraints(),
        ];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1Constraint::constraints()];
        yield 'EdtCommodityTax' => [ModelFixtures::buildEdtCommodityTax(), EdtCommodityTaxConstraint::constraints()];
        yield 'EdtTaxDetail1' => [ModelFixtures::buildEdtTaxDetail1(), EdtTaxDetail1Constraint::constraints()];
        yield 'EdtTaxDetail1TaxRatesItem' => [
            ModelFixtures::buildEdtTaxDetail1TaxRatesItem(),
            EdtTaxDetail1TaxRatesItemConstraint::constraints(),
        ];
        yield 'EdtTaxDetail1AppliedPreferentialTradeAgreement' => [
            ModelFixtures::buildEdtTaxDetail1AppliedPreferentialTradeAgreement(),
            EdtTaxDetail1AppliedPreferentialTradeAgreementConstraint::constraints(),
        ];
        yield 'VariableHandlingCharges1' => [
            ModelFixtures::buildVariableHandlingCharges1(),
            VariableHandlingCharges1Constraint::constraints(),
        ];
        yield 'AncillaryFeeAndTax' => [
            ModelFixtures::buildAncillaryFeeAndTax(),
            AncillaryFeeAndTaxConstraint::constraints(),
        ];
        yield 'RateDiscount2' => [ModelFixtures::buildRateDiscount2(), RateDiscount2Constraint::constraints()];
        yield 'Rebate' => [ModelFixtures::buildRebate(), RebateConstraint::constraints()];
        yield 'Surcharge2' => [ModelFixtures::buildSurcharge2(), Surcharge2Constraint::constraints()];
        yield 'Tax2' => [ModelFixtures::buildTax2(), Tax2Constraint::constraints()];
        yield 'ShipmentRateDetail' => [
            ModelFixtures::buildShipmentRateDetail(),
            ShipmentRateDetailConstraint::constraints(),
        ];
        yield 'Tax' => [ModelFixtures::buildTax(), TaxConstraint::constraints()];
        yield 'CurrencyExchangeRate' => [
            ModelFixtures::buildCurrencyExchangeRate(),
            CurrencyExchangeRateConstraint::constraints(),
        ];
        yield 'ShipmentLegRateDetail' => [
            ModelFixtures::buildShipmentLegRateDetail(),
            ShipmentLegRateDetailConstraint::constraints(),
        ];
        yield 'RateDiscount' => [ModelFixtures::buildRateDiscount(), RateDiscountConstraint::constraints()];
        yield 'DocumentRequirementsDetail' => [
            ModelFixtures::buildDocumentRequirementsDetail(),
            DocumentRequirementsDetailConstraint::constraints(),
        ];
        yield 'DocumentGenerationDetail' => [
            ModelFixtures::buildDocumentGenerationDetail(),
            DocumentGenerationDetailConstraint::constraints(),
        ];
        yield 'PendingShipmentAccessDetail' => [
            ModelFixtures::buildPendingShipmentAccessDetail(),
            PendingShipmentAccessDetailConstraint::constraints(),
        ];
        yield 'PendingShipmentAccessorDetail' => [
            ModelFixtures::buildPendingShipmentAccessorDetail(),
            PendingShipmentAccessorDetailConstraint::constraints(),
        ];
        yield 'ShipmentAdvisoryDetails' => [
            ModelFixtures::buildShipmentAdvisoryDetails(),
            ShipmentAdvisoryDetailsConstraint::constraints(),
        ];
        yield 'RegulatoryAdvisoryDetail' => [
            ModelFixtures::buildRegulatoryAdvisoryDetail(),
            RegulatoryAdvisoryDetailConstraint::constraints(),
        ];
        yield 'SuggestedCommodityDetail' => [
            ModelFixtures::buildSuggestedCommodityDetail(),
            SuggestedCommodityDetailConstraint::constraints(),
        ];
        yield 'RegulatoryProhibition' => [
            ModelFixtures::buildRegulatoryProhibition(),
            RegulatoryProhibitionConstraint::constraints(),
        ];
        yield 'Message' => [ModelFixtures::buildMessage(), MessageConstraint::constraints()];
        yield 'MessageParameter' => [ModelFixtures::buildMessageParameter(), MessageParameterConstraint::constraints()];
        yield 'RegulatoryWaiver' => [ModelFixtures::buildRegulatoryWaiver(), RegulatoryWaiverConstraint::constraints()];
        yield 'ErrorResponseVO' => [ModelFixtures::buildErrorResponseVO(), ErrorResponseVOConstraint::constraints()];
        yield 'CXSError' => [ModelFixtures::buildCXSError(), CXSErrorConstraint::constraints()];
        yield 'Parameter' => [ModelFixtures::buildParameter(), ParameterConstraint::constraints()];
        yield 'ErrorResponseVO401' => [
            ModelFixtures::buildErrorResponseVO401(),
            ErrorResponseVO401Constraint::constraints(),
        ];
        yield 'CXSError401' => [ModelFixtures::buildCXSError401(), CXSError401Constraint::constraints()];
        yield 'ErrorResponseVO403' => [
            ModelFixtures::buildErrorResponseVO403(),
            ErrorResponseVO403Constraint::constraints(),
        ];
        yield 'CXSError403' => [ModelFixtures::buildCXSError403(), CXSError403Constraint::constraints()];
        yield 'ErrorResponseVO404' => [
            ModelFixtures::buildErrorResponseVO404(),
            ErrorResponseVO404Constraint::constraints(),
        ];
        yield 'CXSError404' => [ModelFixtures::buildCXSError404(), CXSError404Constraint::constraints()];
        yield 'ErrorResponseVO500' => [
            ModelFixtures::buildErrorResponseVO500(),
            ErrorResponseVO500Constraint::constraints(),
        ];
        yield 'CXSError500' => [ModelFixtures::buildCXSError500(), CXSError500Constraint::constraints()];
        yield 'ErrorResponseVO503' => [
            ModelFixtures::buildErrorResponseVO503(),
            ErrorResponseVO503Constraint::constraints(),
        ];
        yield 'CXSError503' => [ModelFixtures::buildCXSError503(), CXSError503Constraint::constraints()];
        yield 'FullSchemaCancelShipment' => [
            ModelFixtures::buildFullSchemaCancelShipment(),
            FullSchemaCancelShipmentConstraint::constraints(),
        ];
        yield 'SHPCResponseVOCancelShipment' => [
            ModelFixtures::buildSHPCResponseVOCancelShipment(),
            SHPCResponseVOCancelShipmentConstraint::constraints(),
        ];
        yield 'CancelShipmentOutputVO' => [
            ModelFixtures::buildCancelShipmentOutputVO(),
            CancelShipmentOutputVOConstraint::constraints(),
        ];
        yield 'ErrorResponseVO2' => [ModelFixtures::buildErrorResponseVO2(), ErrorResponseVO2Constraint::constraints()];
        yield 'CXSError2' => [ModelFixtures::buildCXSError2(), CXSError2Constraint::constraints()];
        yield 'ErrorResponseVO401_2' => [
            ModelFixtures::buildErrorResponseVO4012(),
            ErrorResponseVO401_2Constraint::constraints(),
        ];
        yield 'ErrorResponseVO403_2' => [
            ModelFixtures::buildErrorResponseVO4032(),
            ErrorResponseVO403_2Constraint::constraints(),
        ];
        yield 'ErrorResponseVO404_2' => [
            ModelFixtures::buildErrorResponseVO4042(),
            ErrorResponseVO404_2Constraint::constraints(),
        ];
        yield 'ErrorResponseVO500_2' => [
            ModelFixtures::buildErrorResponseVO5002(),
            ErrorResponseVO500_2Constraint::constraints(),
        ];
        yield 'ErrorResponseVO503_2' => [
            ModelFixtures::buildErrorResponseVO5032(),
            ErrorResponseVO503_2Constraint::constraints(),
        ];
        yield 'FullSchemaGetConfirmedShipmentAsyncResults' => [
            ModelFixtures::buildFullSchemaGetConfirmedShipmentAsyncResults(),
            FullSchemaGetConfirmedShipmentAsyncResultsConstraint::constraints(),
        ];
        yield 'AccountNumber' => [ModelFixtures::buildAccountNumber(), AccountNumberConstraint::constraints()];
        yield 'SHPCResponseVOGetOpenShipmentResults' => [
            ModelFixtures::buildSHPCResponseVOGetOpenShipmentResults(),
            SHPCResponseVOGetOpenShipmentResultsConstraint::constraints(),
        ];
        yield 'GetOpenShipmentResultsOutputVO' => [
            ModelFixtures::buildGetOpenShipmentResultsOutputVO(),
            GetOpenShipmentResultsOutputVOConstraint::constraints(),
        ];
        yield 'FullSchemaVerifyShipment' => [
            ModelFixtures::buildFullSchemaVerifyShipment(),
            FullSchemaVerifyShipmentConstraint::constraints(),
        ];
        yield 'RequestedShipmentVerify' => [
            ModelFixtures::buildRequestedShipmentVerify(),
            RequestedShipmentVerifyConstraint::constraints(),
        ];
        yield 'ContactAndAddressVerify' => [
            ModelFixtures::buildContactAndAddressVerify(),
            ContactAndAddressVerifyConstraint::constraints(),
        ];
        yield 'ContactVerify' => [ModelFixtures::buildContactVerify(), ContactVerifyConstraint::constraints()];
        yield 'EMailNotificationDetail' => [
            ModelFixtures::buildEMailNotificationDetail(),
            EMailNotificationDetailConstraint::constraints(),
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipientConstraint::constraints(),
        ];
        yield 'SHPCResponseVOValidate' => [
            ModelFixtures::buildSHPCResponseVOValidate(),
            SHPCResponseVOValidateConstraint::constraints(),
        ];
        yield 'VerifyShipmentOutputVO' => [
            ModelFixtures::buildVerifyShipmentOutputVO(),
            VerifyShipmentOutputVOConstraint::constraints(),
        ];
        yield 'RequestedShipmentVerifyShipmentSpecialServices' => [
            ModelFixtures::buildRequestedShipmentVerifyShipmentSpecialServices(),
            RequestedShipmentVerifyShipmentSpecialServicesConstraint::constraints(),
        ];
        yield 'HazardousCommodityOptionDetail' => [
            ModelFixtures::buildHazardousCommodityOptionDetail(),
            HazardousCommodityOptionDetailConstraint::constraints(),
        ];
        yield 'Version' => [ModelFixtures::buildVersion(), VersionConstraint::constraints()];
    }
}

<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\SearchStandingDashboardType $SearchStanding
 * @property \DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType $SellerFeeDiscount
 * @property \DTS\eBaySDK\Trading\Types\PowerSellerDashboardType $PowerSellerStatus
 * @property \DTS\eBaySDK\Trading\Types\PolicyComplianceDashboardType $PolicyCompliance
 * @property \DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property \DTS\eBaySDK\Trading\Types\SellerAccountDashboardType $SellerAccount
 * @property \DTS\eBaySDK\Trading\Types\PerformanceDashboardType[] $Performance
 */
class GetSellerDashboardResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchStanding' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SearchStandingDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ],
        'SellerFeeDiscount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
        ],
        'PowerSellerStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PowerSellerDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ],
        'PolicyCompliance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PolicyComplianceDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PolicyCompliance'
        ],
        'BuyerSatisfaction' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ],
        'SellerAccount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerAccountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ],
        'Performance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PerformanceDashboardType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Performance'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        $parentClass = get_parent_class(static::class);

if (!array_key_exists(__CLASS__, self::$properties)) {
    if (isset(self::$properties[$parentClass])) {
        self::$properties[__CLASS__] = array_merge(self::$properties[$parentClass], self::$propertyTypes);
    } else {
        self::$properties[__CLASS__] = self::$propertyTypes;
    }
}

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}

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
 * @property integer $SummaryDays
 * @property integer $TotalBids
 * @property integer $BidActivityWithSeller
 * @property integer $BidsToUniqueSellers
 * @property integer $BidsToUniqueCategories
 * @property integer $BidRetractions
 * @property \DTS\eBaySDK\Trading\Types\ItemBidDetailsType[] $ItemBidDetails
 */
class BiddingSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SummaryDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SummaryDays'
        ],
        'TotalBids' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalBids'
        ],
        'BidActivityWithSeller' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidActivityWithSeller'
        ],
        'BidsToUniqueSellers' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueSellers'
        ],
        'BidsToUniqueCategories' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidsToUniqueCategories'
        ],
        'BidRetractions' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidRetractions'
        ],
        'ItemBidDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemBidDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemBidDetails'
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

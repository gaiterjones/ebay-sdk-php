<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property \DTS\eBaySDK\Account\Types\Amount $maxSoldInventoryValue
 * @property integer $maxSoldQuantity
 * @property \DTS\eBaySDK\Account\Types\Amount $minSoldInventoryValue
 * @property integer $minSoldQuantity
 * @property \DTS\eBaySDK\Account\Types\TimeDuration $period
 */
class SoldAggregatedMetrics extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'maxSoldInventoryValue' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxSoldInventoryValue'
        ],
        'maxSoldQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxSoldQuantity'
        ],
        'minSoldInventoryValue' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minSoldInventoryValue'
        ],
        'minSoldQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minSoldQuantity'
        ],
        'period' => [
            'type' => 'DTS\eBaySDK\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'period'
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

        $this->setValues(__CLASS__, $childValues);
    }
}

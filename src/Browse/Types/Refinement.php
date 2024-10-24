<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property \DTS\eBaySDK\Browse\Types\AspectDistribution[] $aspectDistributions
 * @property \DTS\eBaySDK\Browse\Types\BuyingOptionDistribution[] $buyingOptionDistributions
 * @property \DTS\eBaySDK\Browse\Types\CategoryDistribution[] $categoryDistributions
 * @property \DTS\eBaySDK\Browse\Types\ConditionDistribution[] $conditionDistributions
 * @property string $dominantCategoryId
 */
class Refinement extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectDistributions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\AspectDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectDistributions'
        ],
        'buyingOptionDistributions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\BuyingOptionDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptionDistributions'
        ],
        'categoryDistributions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\CategoryDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryDistributions'
        ],
        'conditionDistributions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ConditionDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'conditionDistributions'
        ],
        'dominantCategoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dominantCategoryId'
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

<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Catalog\Types;

/**
 *
 * @property \DTS\eBaySDK\Catalog\Types\CategoryAspect[] $aspects
 * @property \DTS\eBaySDK\Catalog\Types\ProductIdentifier $brand
 * @property \DTS\eBaySDK\Catalog\Types\ProductIdentifier $mpn
 */
class ProductMetadataForCategories extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspects' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\CategoryAspect',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspects'
        ],
        'brand' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'mpn' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
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

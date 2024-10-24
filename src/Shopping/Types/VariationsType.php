<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property \DTS\eBaySDK\Shopping\Types\VariationType[] $Variation
 * @property \DTS\eBaySDK\Shopping\Types\PicturesType[] $Pictures
 * @property \DTS\eBaySDK\Shopping\Types\NameValueListArrayType $VariationSpecificsSet
 */
class VariationsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Variation' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\VariationType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'Pictures' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\PicturesType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Pictures'
        ],
        'VariationSpecificsSet' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecificsSet'
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

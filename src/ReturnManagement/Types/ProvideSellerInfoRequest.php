<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ReturnManagement\Types\ReturnIdType $ReturnId
 * @property string $returnMerchandiseAuthorization
 * @property \DTS\eBaySDK\ReturnManagement\Types\Address $returnAddress
 */
class ProvideSellerInfoRequest extends \DTS\eBaySDK\ReturnManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ReturnId' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\ReturnIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnId'
        ],
        'returnMerchandiseAuthorization' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ],
        'returnAddress' => [
            'type' => 'DTS\eBaySDK\ReturnManagement\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnAddress'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'provideSellerInfoRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}

<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property string $cancelledDate
 * @property \DTS\eBaySDK\Fulfillment\Types\CancelRequest[] $cancelRequests
 * @property \DTS\eBaySDK\Fulfillment\Enums\CancelStateEnum $cancelState
 */
class CancelStatus extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'cancelledDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelledDate'
        ],
        'cancelRequests' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\CancelRequest',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'cancelRequests'
        ],
        'cancelState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelState'
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

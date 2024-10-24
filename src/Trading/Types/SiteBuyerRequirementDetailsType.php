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
 * @property boolean $LinkedPayPalAccount
 * @property \DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
 * @property \DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType $MaximumItemRequirements
 * @property \DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
 * @property \DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
 * @property boolean $ShipToRegistrationCountry
 * @property \DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class SiteBuyerRequirementDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'LinkedPayPalAccount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ],
        'MaximumBuyerPolicyViolations' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
        ],
        'MaximumItemRequirements' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ],
        'MaximumUnpaidItemStrikesInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ],
        'MinimumFeedbackScore' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ],
        'ShipToRegistrationCountry' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ],
        'VerifiedUserRequirements' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
        ],
        'DetailVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
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

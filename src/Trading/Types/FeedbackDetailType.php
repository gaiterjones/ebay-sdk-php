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
 * @property string $CommentingUser
 * @property \DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property integer $CommentingUserScore
 * @property string $CommentText
 * @property \DateTime $CommentTime
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType $CommentType
 * @property string $FeedbackResponse
 * @property string $Followup
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Enums\TradingRoleCodeType $Role
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemPrice
 * @property string $FeedbackID
 * @property string $TransactionID
 * @property boolean $CommentReplaced
 * @property boolean $ResponseReplaced
 * @property boolean $FollowUpReplaced
 * @property boolean $Countable
 * @property boolean $FeedbackRevised
 * @property string $OrderLineItemID
 */
class FeedbackDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CommentingUser' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentingUser'
        ],
        'FeedbackRatingStar' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ],
        'CommentingUserScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentingUserScore'
        ],
        'CommentText' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentText'
        ],
        'CommentTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentTime'
        ],
        'CommentType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentType'
        ],
        'FeedbackResponse' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackResponse'
        ],
        'Followup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Followup'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'Role' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Role'
        ],
        'ItemTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ],
        'ItemPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemPrice'
        ],
        'FeedbackID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'CommentReplaced' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentReplaced'
        ],
        'ResponseReplaced' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ResponseReplaced'
        ],
        'FollowUpReplaced' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FollowUpReplaced'
        ],
        'Countable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Countable'
        ],
        'FeedbackRevised' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRevised'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
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

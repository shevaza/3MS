<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3\EntityType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An excluded entity phrase that should not be matched.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.EntityType.ExcludedPhrase</code>
 */
class ExcludedPhrase extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The word or phrase to be excluded.
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           Required. The word or phrase to be excluded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The word or phrase to be excluded.
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Required. The word or phrase to be excluded.
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/fulfillment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases\PBCase;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The list of messages or conditional cases to activate for this case.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case.CaseContent</code>
 */
class CaseContent extends \Google\Protobuf\Internal\Message
{
    protected $cases_or_message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage $message
     *           Returned message.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases $additional_cases
     *           Additional cases to be evaluated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ResponseMessage message = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage|null
     */
    public function getMessage()
    {
        return $this->readOneof(1);
    }

    public function hasMessage()
    {
        return $this->hasOneof(1);
    }

    /**
     * Returned message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ResponseMessage message = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Additional cases to be evaluated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases additional_cases = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases|null
     */
    public function getAdditionalCases()
    {
        return $this->readOneof(2);
    }

    public function hasAdditionalCases()
    {
        return $this->hasOneof(2);
    }

    /**
     * Additional cases to be evaluated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases additional_cases = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases $var
     * @return $this
     */
    public function setAdditionalCases($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Fulfillment\ConditionalCases::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCasesOrMessage()
    {
        return $this->whichOneof("cases_or_message");
    }

}



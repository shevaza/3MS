<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [TestCases.GetTestCaseResult][google.cloud.dialogflow.cx.v3.TestCases.GetTestCaseResult].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetTestCaseResultRequest</code>
 */
class GetTestCaseResultRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the testcase.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the testcase.
     *                     Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                     ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`. Please see
     *                     {@see TestCasesClient::testCaseResultName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\GetTestCaseResultRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the testcase.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the testcase.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the testcase.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/testCases/<TestCase ID>/results/<TestCaseResult ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


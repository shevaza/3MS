<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/environment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata returned for the
 * [Environments.DeployFlow][google.cloud.dialogflow.cx.v3.Environments.DeployFlow]
 * long running operation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DeployFlowMetadata</code>
 */
class DeployFlowMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Errors of running deployment tests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError test_errors = 1;</code>
     */
    private $test_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\TestError>|\Google\Protobuf\Internal\RepeatedField $test_errors
     *           Errors of running deployment tests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Errors of running deployment tests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError test_errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestErrors()
    {
        return $this->test_errors;
    }

    /**
     * Errors of running deployment tests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestError test_errors = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\TestError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TestError::class);
        $this->test_errors = $arr;

        return $this;
    }

}


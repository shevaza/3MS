<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to StopAirflowCommandRequest.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.StopAirflowCommandResponse</code>
 */
class StopAirflowCommandResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the execution is still running.
     *
     * Generated from protobuf field <code>bool is_done = 1;</code>
     */
    private $is_done = false;
    /**
     * Output message from stopping execution request.
     *
     * Generated from protobuf field <code>repeated string output = 2;</code>
     */
    private $output;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_done
     *           Whether the execution is still running.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $output
     *           Output message from stopping execution request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the execution is still running.
     *
     * Generated from protobuf field <code>bool is_done = 1;</code>
     * @return bool
     */
    public function getIsDone()
    {
        return $this->is_done;
    }

    /**
     * Whether the execution is still running.
     *
     * Generated from protobuf field <code>bool is_done = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDone($var)
    {
        GPBUtil::checkBool($var);
        $this->is_done = $var;

        return $this;
    }

    /**
     * Output message from stopping execution request.
     *
     * Generated from protobuf field <code>repeated string output = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Output message from stopping execution request.
     *
     * Generated from protobuf field <code>repeated string output = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutput($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->output = $arr;

        return $this;
    }

}


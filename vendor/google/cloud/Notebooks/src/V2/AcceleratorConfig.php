<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/gce_setup.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An accelerator configuration for a VM instance
 * Definition of a hardware accelerator. Note that there is no check on `type`
 * and `core_count` combinations. TPUs are not supported.
 * See [GPUs on Compute
 * Engine](https://cloud.google.com/compute/docs/gpus/#gpus-list) to find a
 * valid combination.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.AcceleratorConfig</code>
 */
class AcceleratorConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Type of this accelerator.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.AcceleratorConfig.AcceleratorType type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $type = 0;
    /**
     * Optional. Count of cores of this accelerator.
     *
     * Generated from protobuf field <code>int64 core_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $core_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Optional. Type of this accelerator.
     *     @type int|string $core_count
     *           Optional. Count of cores of this accelerator.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\GceSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Type of this accelerator.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.AcceleratorConfig.AcceleratorType type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Type of this accelerator.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.AcceleratorConfig.AcceleratorType type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\AcceleratorConfig\AcceleratorType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Count of cores of this accelerator.
     *
     * Generated from protobuf field <code>int64 core_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getCoreCount()
    {
        return $this->core_count;
    }

    /**
     * Optional. Count of cores of this accelerator.
     *
     * Generated from protobuf field <code>int64 core_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCoreCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->core_count = $var;

        return $this;
    }

}


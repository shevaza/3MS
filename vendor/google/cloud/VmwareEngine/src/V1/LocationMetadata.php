<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VmwareEngine specific metadata for the given
 * [google.cloud.location.Location][google.cloud.location.Location]. It is
 * returned as a content of the `google.cloud.location.Location.metadata` field.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Capabilities of this location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.LocationMetadata.Capability capabilities = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $capabilities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $capabilities
     *           Output only. Capabilities of this location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Capabilities of this location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.LocationMetadata.Capability capabilities = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Output only. Capabilities of this location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.LocationMetadata.Capability capabilities = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapabilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\VmwareEngine\V1\LocationMetadata\Capability::class);
        $this->capabilities = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/gce_setup.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of a network interface resource attached to a VM.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.NetworkInterface</code>
 */
class NetworkInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of the VPC that this VM instance is in.
     * Format:
     * `projects/{project_id}/global/networks/{network_id}`
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $network = '';
    /**
     * Optional. The name of the subnet that this VM instance is in.
     * Format:
     * `projects/{project_id}/regions/{region}/subnetworks/{subnetwork_id}`
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subnet = '';
    /**
     * Optional. The type of vNIC to be used on this interface. This may be gVNIC
     * or VirtioNet.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.NetworkInterface.NicType nic_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $nic_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Optional. The name of the VPC that this VM instance is in.
     *           Format:
     *           `projects/{project_id}/global/networks/{network_id}`
     *     @type string $subnet
     *           Optional. The name of the subnet that this VM instance is in.
     *           Format:
     *           `projects/{project_id}/regions/{region}/subnetworks/{subnetwork_id}`
     *     @type int $nic_type
     *           Optional. The type of vNIC to be used on this interface. This may be gVNIC
     *           or VirtioNet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\GceSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of the VPC that this VM instance is in.
     * Format:
     * `projects/{project_id}/global/networks/{network_id}`
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. The name of the VPC that this VM instance is in.
     * Format:
     * `projects/{project_id}/global/networks/{network_id}`
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. The name of the subnet that this VM instance is in.
     * Format:
     * `projects/{project_id}/regions/{region}/subnetworks/{subnetwork_id}`
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * Optional. The name of the subnet that this VM instance is in.
     * Format:
     * `projects/{project_id}/regions/{region}/subnetworks/{subnetwork_id}`
     *
     * Generated from protobuf field <code>string subnet = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnet($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet = $var;

        return $this;
    }

    /**
     * Optional. The type of vNIC to be used on this interface. This may be gVNIC
     * or VirtioNet.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.NetworkInterface.NicType nic_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getNicType()
    {
        return $this->nic_type;
    }

    /**
     * Optional. The type of vNIC to be used on this interface. This may be gVNIC
     * or VirtioNet.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.NetworkInterface.NicType nic_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setNicType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\NetworkInterface\NicType::class);
        $this->nic_type = $var;

        return $this;
    }

}


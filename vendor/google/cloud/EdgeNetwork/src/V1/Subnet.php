<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/resources.proto

namespace Google\Cloud\EdgeNetwork\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message describing Subnet object
 *
 * Generated from protobuf message <code>google.cloud.edgenetwork.v1.Subnet</code>
 */
class Subnet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The canonical resource name of the subnet.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. The time when the subnet was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the subnet was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Labels associated with this resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Optional. A free-text description of the resource. Max length 1024
     * characters.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Required. The network that this subnetwork belongs to.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * The ranges of ipv4 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv4_cidr = 7;</code>
     */
    private $ipv4_cidr;
    /**
     * The ranges of ipv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv6_cidr = 8;</code>
     */
    private $ipv6_cidr;
    /**
     * Optional. VLAN id provided by user. If not specified we assign one
     * automatically.
     *
     * Generated from protobuf field <code>int32 vlan_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $vlan_id = 0;
    /**
     * Output only. Current stage of the resource to the device by config push.
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.ResourceState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The canonical resource name of the subnet.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the subnet was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the subnet was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels associated with this resource.
     *     @type string $description
     *           Optional. A free-text description of the resource. Max length 1024
     *           characters.
     *     @type string $network
     *           Required. The network that this subnetwork belongs to.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv4_cidr
     *           The ranges of ipv4 addresses that are owned by this subnetwork.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv6_cidr
     *           The ranges of ipv6 addresses that are owned by this subnetwork.
     *     @type int $vlan_id
     *           Optional. VLAN id provided by user. If not specified we assign one
     *           automatically.
     *     @type int $state
     *           Output only. Current stage of the resource to the device by config push.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Edgenetwork\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The canonical resource name of the subnet.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The canonical resource name of the subnet.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time when the subnet was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the subnet was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the subnet was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the subnet was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Labels associated with this resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels associated with this resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. A free-text description of the resource. Max length 1024
     * characters.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A free-text description of the resource. Max length 1024
     * characters.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. The network that this subnetwork belongs to.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Required. The network that this subnetwork belongs to.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The ranges of ipv4 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv4_cidr = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv4Cidr()
    {
        return $this->ipv4_cidr;
    }

    /**
     * The ranges of ipv4 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv4_cidr = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpv4Cidr($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv4_cidr = $arr;

        return $this;
    }

    /**
     * The ranges of ipv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv6_cidr = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv6Cidr()
    {
        return $this->ipv6_cidr;
    }

    /**
     * The ranges of ipv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>repeated string ipv6_cidr = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpv6Cidr($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv6_cidr = $arr;

        return $this;
    }

    /**
     * Optional. VLAN id provided by user. If not specified we assign one
     * automatically.
     *
     * Generated from protobuf field <code>int32 vlan_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getVlanId()
    {
        return $this->vlan_id;
    }

    /**
     * Optional. VLAN id provided by user. If not specified we assign one
     * automatically.
     *
     * Generated from protobuf field <code>int32 vlan_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setVlanId($var)
    {
        GPBUtil::checkInt32($var);
        $this->vlan_id = $var;

        return $this;
    }

    /**
     * Output only. Current stage of the resource to the device by config push.
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.ResourceState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current stage of the resource to the device by config push.
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.ResourceState state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\EdgeNetwork\V1\ResourceState::class);
        $this->state = $var;

        return $this;
    }

}

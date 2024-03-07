<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceProperties</code>
 */
class InstanceProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Controls for advanced machine-related behavior features. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AdvancedMachineFeatures advanced_machine_features = 409646002;</code>
     */
    private $advanced_machine_features = null;
    /**
     * Enables instances created based on these properties to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     */
    private $can_ip_forward = null;
    /**
     * Specifies the Confidential Instance options. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ConfidentialInstanceConfig confidential_instance_config = 490637685;</code>
     */
    private $confidential_instance_config = null;
    /**
     * An optional text description for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * An array of disks that are associated with the instances that are created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AttachedDisk disks = 95594102;</code>
     */
    private $disks;
    /**
     * A list of guest accelerator cards' type and count to use for instances created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     */
    private $guest_accelerators;
    /**
     * KeyRevocationActionType of the instance. Supported options are "STOP" and "NONE". The default value is "NONE" if it is not specified.
     * Check the KeyRevocationActionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string key_revocation_action_type = 235941474;</code>
     */
    private $key_revocation_action_type = null;
    /**
     * Labels to apply to instances that are created from these properties.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;
    /**
     * The machine type to use for instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     */
    private $machine_type = null;
    /**
     * The metadata key/value pairs to assign to instances that are created from these properties. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     */
    private $metadata = null;
    /**
     * Minimum cpu/platform to be used by instances. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     */
    private $min_cpu_platform = null;
    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     */
    private $network_interfaces;
    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkPerformanceConfig network_performance_config = 398330850;</code>
     */
    private $network_performance_config = null;
    /**
     * The private IPv6 google access type for VMs. If not specified, use INHERIT_FROM_SUBNETWORK as default. Note that for MachineImage, this is not supported yet.
     * Check the PrivateIpv6GoogleAccess enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string private_ipv6_google_access = 48277006;</code>
     */
    private $private_ipv6_google_access = null;
    /**
     * Specifies the reservations that instances can consume from. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationAffinity reservation_affinity = 157850683;</code>
     */
    private $reservation_affinity = null;
    /**
     * Resource manager tags to be bound to the instance. Tag keys and values have the same definition as resource manager tags. Keys must be in the format `tagKeys/{tag_key_id}`, and values are in the format `tagValues/456`. The field is ignored (both PUT & PATCH) when empty.
     *
     * Generated from protobuf field <code>map<string, string> resource_manager_tags = 377671164;</code>
     */
    private $resource_manager_tags;
    /**
     * Resource policies (names, not URLs) applied to instances created from these properties. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     */
    private $resource_policies;
    /**
     * Specifies the scheduling options for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     */
    private $scheduling = null;
    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from these properties. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     */
    private $service_accounts;
    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShieldedInstanceConfig shielded_instance_config = 12862901;</code>
     */
    private $shielded_instance_config = null;
    /**
     * A list of tags to apply to the instances that are created from these properties. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     */
    private $tags = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AdvancedMachineFeatures $advanced_machine_features
     *           Controls for advanced machine-related behavior features. Note that for MachineImage, this is not supported yet.
     *     @type bool $can_ip_forward
     *           Enables instances created based on these properties to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *     @type \Google\Cloud\Compute\V1\ConfidentialInstanceConfig $confidential_instance_config
     *           Specifies the Confidential Instance options. Note that for MachineImage, this is not supported yet.
     *     @type string $description
     *           An optional text description for the instances that are created from these properties.
     *     @type array<\Google\Cloud\Compute\V1\AttachedDisk>|\Google\Protobuf\Internal\RepeatedField $disks
     *           An array of disks that are associated with the instances that are created from these properties.
     *     @type array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $guest_accelerators
     *           A list of guest accelerator cards' type and count to use for instances created from these properties.
     *     @type string $key_revocation_action_type
     *           KeyRevocationActionType of the instance. Supported options are "STOP" and "NONE". The default value is "NONE" if it is not specified.
     *           Check the KeyRevocationActionType enum for the list of possible values.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels to apply to instances that are created from these properties.
     *     @type string $machine_type
     *           The machine type to use for instances that are created from these properties.
     *     @type \Google\Cloud\Compute\V1\Metadata $metadata
     *           The metadata key/value pairs to assign to instances that are created from these properties. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *     @type string $min_cpu_platform
     *           Minimum cpu/platform to be used by instances. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *     @type array<\Google\Cloud\Compute\V1\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *           An array of network access configurations for this interface.
     *     @type \Google\Cloud\Compute\V1\NetworkPerformanceConfig $network_performance_config
     *           Note that for MachineImage, this is not supported yet.
     *     @type string $private_ipv6_google_access
     *           The private IPv6 google access type for VMs. If not specified, use INHERIT_FROM_SUBNETWORK as default. Note that for MachineImage, this is not supported yet.
     *           Check the PrivateIpv6GoogleAccess enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\ReservationAffinity $reservation_affinity
     *           Specifies the reservations that instances can consume from. Note that for MachineImage, this is not supported yet.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_manager_tags
     *           Resource manager tags to be bound to the instance. Tag keys and values have the same definition as resource manager tags. Keys must be in the format `tagKeys/{tag_key_id}`, and values are in the format `tagValues/456`. The field is ignored (both PUT & PATCH) when empty.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $resource_policies
     *           Resource policies (names, not URLs) applied to instances created from these properties. Note that for MachineImage, this is not supported yet.
     *     @type \Google\Cloud\Compute\V1\Scheduling $scheduling
     *           Specifies the scheduling options for the instances that are created from these properties.
     *     @type array<\Google\Cloud\Compute\V1\ServiceAccount>|\Google\Protobuf\Internal\RepeatedField $service_accounts
     *           A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from these properties. Use metadata queries to obtain the access tokens for these instances.
     *     @type \Google\Cloud\Compute\V1\ShieldedInstanceConfig $shielded_instance_config
     *           Note that for MachineImage, this is not supported yet.
     *     @type \Google\Cloud\Compute\V1\Tags $tags
     *           A list of tags to apply to the instances that are created from these properties. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Controls for advanced machine-related behavior features. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AdvancedMachineFeatures advanced_machine_features = 409646002;</code>
     * @return \Google\Cloud\Compute\V1\AdvancedMachineFeatures|null
     */
    public function getAdvancedMachineFeatures()
    {
        return $this->advanced_machine_features;
    }

    public function hasAdvancedMachineFeatures()
    {
        return isset($this->advanced_machine_features);
    }

    public function clearAdvancedMachineFeatures()
    {
        unset($this->advanced_machine_features);
    }

    /**
     * Controls for advanced machine-related behavior features. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AdvancedMachineFeatures advanced_machine_features = 409646002;</code>
     * @param \Google\Cloud\Compute\V1\AdvancedMachineFeatures $var
     * @return $this
     */
    public function setAdvancedMachineFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AdvancedMachineFeatures::class);
        $this->advanced_machine_features = $var;

        return $this;
    }

    /**
     * Enables instances created based on these properties to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     * @return bool
     */
    public function getCanIpForward()
    {
        return isset($this->can_ip_forward) ? $this->can_ip_forward : false;
    }

    public function hasCanIpForward()
    {
        return isset($this->can_ip_forward);
    }

    public function clearCanIpForward()
    {
        unset($this->can_ip_forward);
    }

    /**
     * Enables instances created based on these properties to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanIpForward($var)
    {
        GPBUtil::checkBool($var);
        $this->can_ip_forward = $var;

        return $this;
    }

    /**
     * Specifies the Confidential Instance options. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ConfidentialInstanceConfig confidential_instance_config = 490637685;</code>
     * @return \Google\Cloud\Compute\V1\ConfidentialInstanceConfig|null
     */
    public function getConfidentialInstanceConfig()
    {
        return $this->confidential_instance_config;
    }

    public function hasConfidentialInstanceConfig()
    {
        return isset($this->confidential_instance_config);
    }

    public function clearConfidentialInstanceConfig()
    {
        unset($this->confidential_instance_config);
    }

    /**
     * Specifies the Confidential Instance options. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ConfidentialInstanceConfig confidential_instance_config = 490637685;</code>
     * @param \Google\Cloud\Compute\V1\ConfidentialInstanceConfig $var
     * @return $this
     */
    public function setConfidentialInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ConfidentialInstanceConfig::class);
        $this->confidential_instance_config = $var;

        return $this;
    }

    /**
     * An optional text description for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional text description for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
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
     * An array of disks that are associated with the instances that are created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AttachedDisk disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * An array of disks that are associated with the instances that are created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AttachedDisk disks = 95594102;</code>
     * @param array<\Google\Cloud\Compute\V1\AttachedDisk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AttachedDisk::class);
        $this->disks = $arr;

        return $this;
    }

    /**
     * A list of guest accelerator cards' type and count to use for instances created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestAccelerators()
    {
        return $this->guest_accelerators;
    }

    /**
     * A list of guest accelerator cards' type and count to use for instances created from these properties.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @param array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AcceleratorConfig::class);
        $this->guest_accelerators = $arr;

        return $this;
    }

    /**
     * KeyRevocationActionType of the instance. Supported options are "STOP" and "NONE". The default value is "NONE" if it is not specified.
     * Check the KeyRevocationActionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string key_revocation_action_type = 235941474;</code>
     * @return string
     */
    public function getKeyRevocationActionType()
    {
        return isset($this->key_revocation_action_type) ? $this->key_revocation_action_type : '';
    }

    public function hasKeyRevocationActionType()
    {
        return isset($this->key_revocation_action_type);
    }

    public function clearKeyRevocationActionType()
    {
        unset($this->key_revocation_action_type);
    }

    /**
     * KeyRevocationActionType of the instance. Supported options are "STOP" and "NONE". The default value is "NONE" if it is not specified.
     * Check the KeyRevocationActionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string key_revocation_action_type = 235941474;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyRevocationActionType($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_revocation_action_type = $var;

        return $this;
    }

    /**
     * Labels to apply to instances that are created from these properties.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels to apply to instances that are created from these properties.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
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
     * The machine type to use for instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     * @return string
     */
    public function getMachineType()
    {
        return isset($this->machine_type) ? $this->machine_type : '';
    }

    public function hasMachineType()
    {
        return isset($this->machine_type);
    }

    public function clearMachineType()
    {
        unset($this->machine_type);
    }

    /**
     * The machine type to use for instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * The metadata key/value pairs to assign to instances that are created from these properties. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     * @return \Google\Cloud\Compute\V1\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * The metadata key/value pairs to assign to instances that are created from these properties. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     * @param \Google\Cloud\Compute\V1\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Minimum cpu/platform to be used by instances. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     * @return string
     */
    public function getMinCpuPlatform()
    {
        return isset($this->min_cpu_platform) ? $this->min_cpu_platform : '';
    }

    public function hasMinCpuPlatform()
    {
        return isset($this->min_cpu_platform);
    }

    public function clearMinCpuPlatform()
    {
        unset($this->min_cpu_platform);
    }

    /**
     * Minimum cpu/platform to be used by instances. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     * @param string $var
     * @return $this
     */
    public function setMinCpuPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_cpu_platform = $var;

        return $this;
    }

    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     * @param array<\Google\Cloud\Compute\V1\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NetworkInterface::class);
        $this->network_interfaces = $arr;

        return $this;
    }

    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkPerformanceConfig network_performance_config = 398330850;</code>
     * @return \Google\Cloud\Compute\V1\NetworkPerformanceConfig|null
     */
    public function getNetworkPerformanceConfig()
    {
        return $this->network_performance_config;
    }

    public function hasNetworkPerformanceConfig()
    {
        return isset($this->network_performance_config);
    }

    public function clearNetworkPerformanceConfig()
    {
        unset($this->network_performance_config);
    }

    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkPerformanceConfig network_performance_config = 398330850;</code>
     * @param \Google\Cloud\Compute\V1\NetworkPerformanceConfig $var
     * @return $this
     */
    public function setNetworkPerformanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkPerformanceConfig::class);
        $this->network_performance_config = $var;

        return $this;
    }

    /**
     * The private IPv6 google access type for VMs. If not specified, use INHERIT_FROM_SUBNETWORK as default. Note that for MachineImage, this is not supported yet.
     * Check the PrivateIpv6GoogleAccess enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string private_ipv6_google_access = 48277006;</code>
     * @return string
     */
    public function getPrivateIpv6GoogleAccess()
    {
        return isset($this->private_ipv6_google_access) ? $this->private_ipv6_google_access : '';
    }

    public function hasPrivateIpv6GoogleAccess()
    {
        return isset($this->private_ipv6_google_access);
    }

    public function clearPrivateIpv6GoogleAccess()
    {
        unset($this->private_ipv6_google_access);
    }

    /**
     * The private IPv6 google access type for VMs. If not specified, use INHERIT_FROM_SUBNETWORK as default. Note that for MachineImage, this is not supported yet.
     * Check the PrivateIpv6GoogleAccess enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string private_ipv6_google_access = 48277006;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateIpv6GoogleAccess($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_ipv6_google_access = $var;

        return $this;
    }

    /**
     * Specifies the reservations that instances can consume from. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationAffinity reservation_affinity = 157850683;</code>
     * @return \Google\Cloud\Compute\V1\ReservationAffinity|null
     */
    public function getReservationAffinity()
    {
        return $this->reservation_affinity;
    }

    public function hasReservationAffinity()
    {
        return isset($this->reservation_affinity);
    }

    public function clearReservationAffinity()
    {
        unset($this->reservation_affinity);
    }

    /**
     * Specifies the reservations that instances can consume from. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ReservationAffinity reservation_affinity = 157850683;</code>
     * @param \Google\Cloud\Compute\V1\ReservationAffinity $var
     * @return $this
     */
    public function setReservationAffinity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ReservationAffinity::class);
        $this->reservation_affinity = $var;

        return $this;
    }

    /**
     * Resource manager tags to be bound to the instance. Tag keys and values have the same definition as resource manager tags. Keys must be in the format `tagKeys/{tag_key_id}`, and values are in the format `tagValues/456`. The field is ignored (both PUT & PATCH) when empty.
     *
     * Generated from protobuf field <code>map<string, string> resource_manager_tags = 377671164;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourceManagerTags()
    {
        return $this->resource_manager_tags;
    }

    /**
     * Resource manager tags to be bound to the instance. Tag keys and values have the same definition as resource manager tags. Keys must be in the format `tagKeys/{tag_key_id}`, and values are in the format `tagValues/456`. The field is ignored (both PUT & PATCH) when empty.
     *
     * Generated from protobuf field <code>map<string, string> resource_manager_tags = 377671164;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourceManagerTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_manager_tags = $arr;

        return $this;
    }

    /**
     * Resource policies (names, not URLs) applied to instances created from these properties. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourcePolicies()
    {
        return $this->resource_policies;
    }

    /**
     * Resource policies (names, not URLs) applied to instances created from these properties. Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourcePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_policies = $arr;

        return $this;
    }

    /**
     * Specifies the scheduling options for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     * @return \Google\Cloud\Compute\V1\Scheduling|null
     */
    public function getScheduling()
    {
        return $this->scheduling;
    }

    public function hasScheduling()
    {
        return isset($this->scheduling);
    }

    public function clearScheduling()
    {
        unset($this->scheduling);
    }

    /**
     * Specifies the scheduling options for the instances that are created from these properties.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     * @param \Google\Cloud\Compute\V1\Scheduling $var
     * @return $this
     */
    public function setScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Scheduling::class);
        $this->scheduling = $var;

        return $this;
    }

    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from these properties. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccounts()
    {
        return $this->service_accounts;
    }

    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from these properties. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     * @param array<\Google\Cloud\Compute\V1\ServiceAccount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ServiceAccount::class);
        $this->service_accounts = $arr;

        return $this;
    }

    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShieldedInstanceConfig shielded_instance_config = 12862901;</code>
     * @return \Google\Cloud\Compute\V1\ShieldedInstanceConfig|null
     */
    public function getShieldedInstanceConfig()
    {
        return $this->shielded_instance_config;
    }

    public function hasShieldedInstanceConfig()
    {
        return isset($this->shielded_instance_config);
    }

    public function clearShieldedInstanceConfig()
    {
        unset($this->shielded_instance_config);
    }

    /**
     * Note that for MachineImage, this is not supported yet.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShieldedInstanceConfig shielded_instance_config = 12862901;</code>
     * @param \Google\Cloud\Compute\V1\ShieldedInstanceConfig $var
     * @return $this
     */
    public function setShieldedInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ShieldedInstanceConfig::class);
        $this->shielded_instance_config = $var;

        return $this;
    }

    /**
     * A list of tags to apply to the instances that are created from these properties. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     * @return \Google\Cloud\Compute\V1\Tags|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function hasTags()
    {
        return isset($this->tags);
    }

    public function clearTags()
    {
        unset($this->tags);
    }

    /**
     * A list of tags to apply to the instances that are created from these properties. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     * @param \Google\Cloud\Compute\V1\Tags $var
     * @return $this
     */
    public function setTags($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Tags::class);
        $this->tags = $var;

        return $this;
    }

}


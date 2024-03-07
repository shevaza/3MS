<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/replication.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Replication is a nested resource under Volume, that describes a
 * cross-region replication relationship between 2 volumes in different
 * regions.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.Replication</code>
 */
class Replication extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the Replication.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. State of the replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. State details of the replication.
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_details = '';
    /**
     * Output only. Indicates whether this points to source or destination.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationRole role = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $role = 0;
    /**
     * Required. Indicates the schedule for replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationSchedule replication_schedule = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $replication_schedule = 0;
    /**
     * Output only. Indicates the state of mirroring.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.MirrorState mirror_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $mirror_state = 0;
    /**
     * Output only. Condition of the relationship. Can be one of the following:
     * - true: The replication relationship is healthy. It has not missed the most
     * recent scheduled transfer.
     * - false: The replication relationship is not healthy. It has missed the
     * most recent scheduled transfer.
     *
     * Generated from protobuf field <code>optional bool healthy = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $healthy = null;
    /**
     * Output only. Replication create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Full name of destination volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string destination_volume = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $destination_volume = '';
    /**
     * Output only. Replication transfer statistics.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.TransferStats transfer_stats = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $transfer_stats = null;
    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12;</code>
     */
    private $labels;
    /**
     * A description about this replication relationship.
     *
     * Generated from protobuf field <code>optional string description = 13;</code>
     */
    protected $description = null;
    /**
     * Required. Input only. Destination volume parameters
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.DestinationVolumeParameters destination_volume_parameters = 14 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination_volume_parameters = null;
    /**
     * Output only. Full name of source volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string source_volume = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $source_volume = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the Replication.
     *           Format:
     *           `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`.
     *     @type int $state
     *           Output only. State of the replication.
     *     @type string $state_details
     *           Output only. State details of the replication.
     *     @type int $role
     *           Output only. Indicates whether this points to source or destination.
     *     @type int $replication_schedule
     *           Required. Indicates the schedule for replication.
     *     @type int $mirror_state
     *           Output only. Indicates the state of mirroring.
     *     @type bool $healthy
     *           Output only. Condition of the relationship. Can be one of the following:
     *           - true: The replication relationship is healthy. It has not missed the most
     *           recent scheduled transfer.
     *           - false: The replication relationship is not healthy. It has missed the
     *           most recent scheduled transfer.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Replication create time.
     *     @type string $destination_volume
     *           Output only. Full name of destination volume resource.
     *           Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *     @type \Google\Cloud\NetApp\V1\TransferStats $transfer_stats
     *           Output only. Replication transfer statistics.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user provided metadata.
     *     @type string $description
     *           A description about this replication relationship.
     *     @type \Google\Cloud\NetApp\V1\DestinationVolumeParameters $destination_volume_parameters
     *           Required. Input only. Destination volume parameters
     *     @type string $source_volume
     *           Output only. Full name of source volume resource.
     *           Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the Replication.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the Replication.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. State of the replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\Replication\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. State details of the replication.
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetails()
    {
        return $this->state_details;
    }

    /**
     * Output only. State details of the replication.
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this points to source or destination.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationRole role = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Output only. Indicates whether this points to source or destination.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationRole role = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\Replication\ReplicationRole::class);
        $this->role = $var;

        return $this;
    }

    /**
     * Required. Indicates the schedule for replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationSchedule replication_schedule = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getReplicationSchedule()
    {
        return $this->replication_schedule;
    }

    /**
     * Required. Indicates the schedule for replication.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.ReplicationSchedule replication_schedule = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setReplicationSchedule($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\Replication\ReplicationSchedule::class);
        $this->replication_schedule = $var;

        return $this;
    }

    /**
     * Output only. Indicates the state of mirroring.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.MirrorState mirror_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMirrorState()
    {
        return $this->mirror_state;
    }

    /**
     * Output only. Indicates the state of mirroring.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Replication.MirrorState mirror_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMirrorState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\Replication\MirrorState::class);
        $this->mirror_state = $var;

        return $this;
    }

    /**
     * Output only. Condition of the relationship. Can be one of the following:
     * - true: The replication relationship is healthy. It has not missed the most
     * recent scheduled transfer.
     * - false: The replication relationship is not healthy. It has missed the
     * most recent scheduled transfer.
     *
     * Generated from protobuf field <code>optional bool healthy = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHealthy()
    {
        return isset($this->healthy) ? $this->healthy : false;
    }

    public function hasHealthy()
    {
        return isset($this->healthy);
    }

    public function clearHealthy()
    {
        unset($this->healthy);
    }

    /**
     * Output only. Condition of the relationship. Can be one of the following:
     * - true: The replication relationship is healthy. It has not missed the most
     * recent scheduled transfer.
     * - false: The replication relationship is not healthy. It has missed the
     * most recent scheduled transfer.
     *
     * Generated from protobuf field <code>optional bool healthy = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHealthy($var)
    {
        GPBUtil::checkBool($var);
        $this->healthy = $var;

        return $this;
    }

    /**
     * Output only. Replication create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Replication create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Full name of destination volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string destination_volume = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDestinationVolume()
    {
        return $this->destination_volume;
    }

    /**
     * Output only. Full name of destination volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string destination_volume = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_volume = $var;

        return $this;
    }

    /**
     * Output only. Replication transfer statistics.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.TransferStats transfer_stats = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\NetApp\V1\TransferStats|null
     */
    public function getTransferStats()
    {
        return $this->transfer_stats;
    }

    public function hasTransferStats()
    {
        return isset($this->transfer_stats);
    }

    public function clearTransferStats()
    {
        unset($this->transfer_stats);
    }

    /**
     * Output only. Replication transfer statistics.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.TransferStats transfer_stats = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\NetApp\V1\TransferStats $var
     * @return $this
     */
    public function setTransferStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\TransferStats::class);
        $this->transfer_stats = $var;

        return $this;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 12;</code>
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
     * A description about this replication relationship.
     *
     * Generated from protobuf field <code>optional string description = 13;</code>
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
     * A description about this replication relationship.
     *
     * Generated from protobuf field <code>optional string description = 13;</code>
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
     * Required. Input only. Destination volume parameters
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.DestinationVolumeParameters destination_volume_parameters = 14 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetApp\V1\DestinationVolumeParameters|null
     */
    public function getDestinationVolumeParameters()
    {
        return $this->destination_volume_parameters;
    }

    public function hasDestinationVolumeParameters()
    {
        return isset($this->destination_volume_parameters);
    }

    public function clearDestinationVolumeParameters()
    {
        unset($this->destination_volume_parameters);
    }

    /**
     * Required. Input only. Destination volume parameters
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.DestinationVolumeParameters destination_volume_parameters = 14 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetApp\V1\DestinationVolumeParameters $var
     * @return $this
     */
    public function setDestinationVolumeParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\DestinationVolumeParameters::class);
        $this->destination_volume_parameters = $var;

        return $this;
    }

    /**
     * Output only. Full name of source volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string source_volume = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceVolume()
    {
        return $this->source_volume;
    }

    /**
     * Output only. Full name of source volume resource.
     * Example : "projects/{project}/locations/{location}/volumes/{volume_id}"
     *
     * Generated from protobuf field <code>string source_volume = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_volume = $var;

        return $this;
    }

}


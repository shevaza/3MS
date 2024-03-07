<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore_plan.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration of a potential series of Restore operations to be performed
 * against Backups belong to a particular BackupPlan.
 * Next id: 13
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestorePlan</code>
 */
class RestorePlan extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The full name of the RestorePlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The timestamp when this RestorePlan resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp when this RestorePlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * User specified descriptive string for this RestorePlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Required. Immutable. A reference to the
     * [BackupPlan][google.cloud.gkebackup.v1.BackupPlan] from which Backups may
     * be used as the source for Restores created via this RestorePlan. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`.
     *
     * Generated from protobuf field <code>string backup_plan = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $backup_plan = '';
    /**
     * Required. Immutable. The target cluster into which Restores created via
     * this RestorePlan will restore data. NOTE: the cluster's region must be the
     * same as the RestorePlan. Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $cluster = '';
    /**
     * Required. Configuration of Restores created via this RestorePlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig restore_config = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $restore_config = null;
    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     */
    private $labels;
    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a restore from overwriting each other.
     * It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform restore updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetRestorePlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateRestorePlan` or `DeleteRestorePlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $etag = '';
    /**
     * Output only. State of the RestorePlan. This State field reflects the
     * various stages a RestorePlan can be in
     * during the Create operation.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestorePlan.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Human-readable description of why RestorePlan is in the
     * current `state`
     *
     * Generated from protobuf field <code>string state_reason = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The full name of the RestorePlan resource.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;`.
     *     @type string $uid
     *           Output only. Server generated global unique identifier of
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when this RestorePlan resource was
     *           created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when this RestorePlan resource was last
     *           updated.
     *     @type string $description
     *           User specified descriptive string for this RestorePlan.
     *     @type string $backup_plan
     *           Required. Immutable. A reference to the
     *           [BackupPlan][google.cloud.gkebackup.v1.BackupPlan] from which Backups may
     *           be used as the source for Restores created via this RestorePlan. Format:
     *           `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`.
     *     @type string $cluster
     *           Required. Immutable. The target cluster into which Restores created via
     *           this RestorePlan will restore data. NOTE: the cluster's region must be the
     *           same as the RestorePlan. Valid formats:
     *             - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *             - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig $restore_config
     *           Required. Configuration of Restores created via this RestorePlan.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A set of custom labels supplied by user.
     *     @type string $etag
     *           Output only. `etag` is used for optimistic concurrency control as a way to
     *           help prevent simultaneous updates of a restore from overwriting each other.
     *           It is strongly suggested that systems make use of the `etag` in the
     *           read-modify-write cycle to perform restore updates in order to avoid
     *           race conditions: An `etag` is returned in the response to `GetRestorePlan`,
     *           and systems are expected to put that etag in the request to
     *           `UpdateRestorePlan` or `DeleteRestorePlan` to ensure that their change
     *           will be applied to the same version of the resource.
     *     @type int $state
     *           Output only. State of the RestorePlan. This State field reflects the
     *           various stages a RestorePlan can be in
     *           during the Create operation.
     *     @type string $state_reason
     *           Output only. Human-readable description of why RestorePlan is in the
     *           current `state`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\RestorePlan::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The full name of the RestorePlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The full name of the RestorePlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this RestorePlan resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when this RestorePlan resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when this RestorePlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when this RestorePlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * User specified descriptive string for this RestorePlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User specified descriptive string for this RestorePlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
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
     * Required. Immutable. A reference to the
     * [BackupPlan][google.cloud.gkebackup.v1.BackupPlan] from which Backups may
     * be used as the source for Restores created via this RestorePlan. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`.
     *
     * Generated from protobuf field <code>string backup_plan = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackupPlan()
    {
        return $this->backup_plan;
    }

    /**
     * Required. Immutable. A reference to the
     * [BackupPlan][google.cloud.gkebackup.v1.BackupPlan] from which Backups may
     * be used as the source for Restores created via this RestorePlan. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`.
     *
     * Generated from protobuf field <code>string backup_plan = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_plan = $var;

        return $this;
    }

    /**
     * Required. Immutable. The target cluster into which Restores created via
     * this RestorePlan will restore data. NOTE: the cluster's region must be the
     * same as the RestorePlan. Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Required. Immutable. The target cluster into which Restores created via
     * this RestorePlan will restore data. NOTE: the cluster's region must be the
     * same as the RestorePlan. Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Required. Configuration of Restores created via this RestorePlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig restore_config = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig|null
     */
    public function getRestoreConfig()
    {
        return $this->restore_config;
    }

    public function hasRestoreConfig()
    {
        return isset($this->restore_config);
    }

    public function clearRestoreConfig()
    {
        unset($this->restore_config);
    }

    /**
     * Required. Configuration of Restores created via this RestorePlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig restore_config = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig $var
     * @return $this
     */
    public function setRestoreConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig::class);
        $this->restore_config = $var;

        return $this;
    }

    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
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
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a restore from overwriting each other.
     * It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform restore updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetRestorePlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateRestorePlan` or `DeleteRestorePlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a restore from overwriting each other.
     * It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform restore updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetRestorePlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateRestorePlan` or `DeleteRestorePlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. State of the RestorePlan. This State field reflects the
     * various stages a RestorePlan can be in
     * during the Create operation.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestorePlan.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the RestorePlan. This State field reflects the
     * various stages a RestorePlan can be in
     * during the Create operation.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestorePlan.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\RestorePlan\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Human-readable description of why RestorePlan is in the
     * current `state`
     *
     * Generated from protobuf field <code>string state_reason = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateReason()
    {
        return $this->state_reason;
    }

    /**
     * Output only. Human-readable description of why RestorePlan is in the
     * current `state`
     *
     * Generated from protobuf field <code>string state_reason = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_reason = $var;

        return $this;
    }

}

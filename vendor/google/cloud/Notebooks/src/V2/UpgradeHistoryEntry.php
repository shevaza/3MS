<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/instance.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entry of VM image upgrade history.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.UpgradeHistoryEntry</code>
 */
class UpgradeHistoryEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The snapshot of the boot disk of this notebook instance before
     * upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $snapshot = '';
    /**
     * Optional. The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $vm_image = '';
    /**
     * Optional. The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $container_image = '';
    /**
     * Optional. The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $framework = '';
    /**
     * Optional. The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version = '';
    /**
     * Output only. The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Immutable. The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $create_time = null;
    /**
     * Optional. Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.Action action = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $action = 0;
    /**
     * Optional. Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $target_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot
     *           Optional. The snapshot of the boot disk of this notebook instance before
     *           upgrade.
     *     @type string $vm_image
     *           Optional. The VM image before this instance upgrade.
     *     @type string $container_image
     *           Optional. The container image before this instance upgrade.
     *     @type string $framework
     *           Optional. The framework of this notebook instance.
     *     @type string $version
     *           Optional. The version of the notebook instance before this upgrade.
     *     @type int $state
     *           Output only. The state of this instance upgrade history entry.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Immutable. The time that this instance upgrade history entry is created.
     *     @type int $action
     *           Optional. Action. Rolloback or Upgrade.
     *     @type string $target_version
     *           Optional. Target VM Version, like m63.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The snapshot of the boot disk of this notebook instance before
     * upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * Optional. The snapshot of the boot disk of this notebook instance before
     * upgrade.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * Optional. The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVmImage()
    {
        return $this->vm_image;
    }

    /**
     * Optional. The VM image before this instance upgrade.
     *
     * Generated from protobuf field <code>string vm_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVmImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_image = $var;

        return $this;
    }

    /**
     * Optional. The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getContainerImage()
    {
        return $this->container_image;
    }

    /**
     * Optional. The container image before this instance upgrade.
     *
     * Generated from protobuf field <code>string container_image = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setContainerImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_image = $var;

        return $this;
    }

    /**
     * Optional. The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFramework()
    {
        return $this->framework;
    }

    /**
     * Optional. The framework of this notebook instance.
     *
     * Generated from protobuf field <code>string framework = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFramework($var)
    {
        GPBUtil::checkString($var, True);
        $this->framework = $var;

        return $this;
    }

    /**
     * Optional. The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. The version of the notebook instance before this upgrade.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of this instance upgrade history entry.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\UpgradeHistoryEntry\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Immutable. The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Immutable. The time that this instance upgrade history entry is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Optional. Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.Action action = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Optional. Action. Rolloback or Upgrade.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.UpgradeHistoryEntry.Action action = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\UpgradeHistoryEntry\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Optional. Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTargetVersion()
    {
        return $this->target_version;
    }

    /**
     * Optional. Target VM Version, like m63.
     *
     * Generated from protobuf field <code>string target_version = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_version = $var;

        return $this;
    }

}


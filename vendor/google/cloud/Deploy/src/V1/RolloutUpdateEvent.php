<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/rollout_update_payload.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload proto for "clouddeploy.googleapis.com/rollout_update"
 * Platform Log event that describes the rollout update event.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RolloutUpdateEvent</code>
 */
class RolloutUpdateEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Debug message for when a rollout update event occurs.
     *
     * Generated from protobuf field <code>string message = 6;</code>
     */
    private $message = '';
    /**
     * Unique identifier of the pipeline.
     *
     * Generated from protobuf field <code>string pipeline_uid = 1;</code>
     */
    private $pipeline_uid = '';
    /**
     * Unique identifier of the release.
     *
     * Generated from protobuf field <code>string release_uid = 2;</code>
     */
    private $release_uid = '';
    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 8;</code>
     */
    private $release = '';
    /**
     * The name of the rollout.
     * rollout_uid is not in this log message because we write some of these log
     * messages at rollout creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string rollout = 3;</code>
     */
    private $rollout = '';
    /**
     * ID of the target.
     *
     * Generated from protobuf field <code>string target_id = 4;</code>
     */
    private $target_id = '';
    /**
     * Type of this notification, e.g. for a rollout update event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 7;</code>
     */
    private $type = 0;
    /**
     * The type of the rollout update.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RolloutUpdateEvent.RolloutUpdateType rollout_update_type = 5;</code>
     */
    private $rollout_update_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Debug message for when a rollout update event occurs.
     *     @type string $pipeline_uid
     *           Unique identifier of the pipeline.
     *     @type string $release_uid
     *           Unique identifier of the release.
     *     @type string $release
     *           The name of the `Release`.
     *     @type string $rollout
     *           The name of the rollout.
     *           rollout_uid is not in this log message because we write some of these log
     *           messages at rollout creation time, before we've generated the uid.
     *     @type string $target_id
     *           ID of the target.
     *     @type int $type
     *           Type of this notification, e.g. for a rollout update event.
     *     @type int $rollout_update_type
     *           The type of the rollout update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\RolloutUpdatePayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Debug message for when a rollout update event occurs.
     *
     * Generated from protobuf field <code>string message = 6;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Debug message for when a rollout update event occurs.
     *
     * Generated from protobuf field <code>string message = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Unique identifier of the pipeline.
     *
     * Generated from protobuf field <code>string pipeline_uid = 1;</code>
     * @return string
     */
    public function getPipelineUid()
    {
        return $this->pipeline_uid;
    }

    /**
     * Unique identifier of the pipeline.
     *
     * Generated from protobuf field <code>string pipeline_uid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_uid = $var;

        return $this;
    }

    /**
     * Unique identifier of the release.
     *
     * Generated from protobuf field <code>string release_uid = 2;</code>
     * @return string
     */
    public function getReleaseUid()
    {
        return $this->release_uid;
    }

    /**
     * Unique identifier of the release.
     *
     * Generated from protobuf field <code>string release_uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReleaseUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->release_uid = $var;

        return $this;
    }

    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 8;</code>
     * @return string
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->release = $var;

        return $this;
    }

    /**
     * The name of the rollout.
     * rollout_uid is not in this log message because we write some of these log
     * messages at rollout creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string rollout = 3;</code>
     * @return string
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    /**
     * The name of the rollout.
     * rollout_uid is not in this log message because we write some of these log
     * messages at rollout creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string rollout = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout = $var;

        return $this;
    }

    /**
     * ID of the target.
     *
     * Generated from protobuf field <code>string target_id = 4;</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * ID of the target.
     *
     * Generated from protobuf field <code>string target_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Type of this notification, e.g. for a rollout update event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 7;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this notification, e.g. for a rollout update event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The type of the rollout update.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RolloutUpdateEvent.RolloutUpdateType rollout_update_type = 5;</code>
     * @return int
     */
    public function getRolloutUpdateType()
    {
        return $this->rollout_update_type;
    }

    /**
     * The type of the rollout update.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RolloutUpdateEvent.RolloutUpdateType rollout_update_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRolloutUpdateType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\RolloutUpdateEvent\RolloutUpdateType::class);
        $this->rollout_update_type = $var;

        return $this;
    }

}

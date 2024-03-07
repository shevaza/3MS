<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for Updating a workload.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.UpdateWorkloadRequest</code>
 */
class UpdateWorkloadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The workload to update.
     * The workload's `name` field is used to identify the workload to be updated.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload workload = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $workload = null;
    /**
     * Required. The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload $workload
     *           Required. The workload to update.
     *           The workload's `name` field is used to identify the workload to be updated.
     *           Format:
     *           organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The workload to update.
     * The workload's `name` field is used to identify the workload to be updated.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload workload = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload|null
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    public function hasWorkload()
    {
        return isset($this->workload);
    }

    public function clearWorkload()
    {
        unset($this->workload);
    }

    /**
     * Required. The workload to update.
     * The workload's `name` field is used to identify the workload to be updated.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload workload = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload $var
     * @return $this
     */
    public function setWorkload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload::class);
        $this->workload = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


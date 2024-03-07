<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a EventThreatDetectionCustomModule
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.UpdateEventThreatDetectionCustomModuleRequest</code>
 */
class UpdateEventThreatDetectionCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * EventThreatDetectionCustomModule resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The module being updated
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $event_threat_detection_custom_module = null;
    /**
     * Optional. When set to true, only validations (including IAM checks) will
     * done for the request (module will not be updated). An OK response indicates
     * the request is valid while an error response indicates the request is
     * invalid. Note that a subsequent request to actually update the module could
     * still fail because 1. the state could have changed (e.g. IAM permission
     * lost) or
     * 2. A failure occurred while trying to update the module.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule $eventThreatDetectionCustomModule Required. The module being updated
     * @param \Google\Protobuf\FieldMask                                                 $updateMask                       Required. Field mask is used to specify the fields to be overwritten in the
     *                                                                                                                     EventThreatDetectionCustomModule resource by the update.
     *                                                                                                                     The fields specified in the update_mask are relative to the resource, not
     *                                                                                                                     the full request. A field will be overwritten if it is in the mask. If the
     *                                                                                                                     user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\SecurityCenterManagement\V1\UpdateEventThreatDetectionCustomModuleRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule $eventThreatDetectionCustomModule, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setEventThreatDetectionCustomModule($eventThreatDetectionCustomModule)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           EventThreatDetectionCustomModule resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule $event_threat_detection_custom_module
     *           Required. The module being updated
     *     @type bool $validate_only
     *           Optional. When set to true, only validations (including IAM checks) will
     *           done for the request (module will not be updated). An OK response indicates
     *           the request is valid while an error response indicates the request is
     *           invalid. Note that a subsequent request to actually update the module could
     *           still fail because 1. the state could have changed (e.g. IAM permission
     *           lost) or
     *           2. A failure occurred while trying to update the module.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * EventThreatDetectionCustomModule resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Field mask is used to specify the fields to be overwritten in the
     * EventThreatDetectionCustomModule resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The module being updated
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule|null
     */
    public function getEventThreatDetectionCustomModule()
    {
        return $this->event_threat_detection_custom_module;
    }

    public function hasEventThreatDetectionCustomModule()
    {
        return isset($this->event_threat_detection_custom_module);
    }

    public function clearEventThreatDetectionCustomModule()
    {
        unset($this->event_threat_detection_custom_module);
    }

    /**
     * Required. The module being updated
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule $var
     * @return $this
     */
    public function setEventThreatDetectionCustomModule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenterManagement\V1\EventThreatDetectionCustomModule::class);
        $this->event_threat_detection_custom_module = $var;

        return $this;
    }

    /**
     * Optional. When set to true, only validations (including IAM checks) will
     * done for the request (module will not be updated). An OK response indicates
     * the request is valid while an error response indicates the request is
     * invalid. Note that a subsequent request to actually update the module could
     * still fail because 1. the state could have changed (e.g. IAM permission
     * lost) or
     * 2. A failure occurred while trying to update the module.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. When set to true, only validations (including IAM checks) will
     * done for the request (module will not be updated). An OK response indicates
     * the request is valid while an error response indicates the request is
     * invalid. Note that a subsequent request to actually update the module could
     * still fail because 1. the state could have changed (e.g. IAM permission
     * lost) or
     * 2. A failure occurred while trying to update the module.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This organization policy message is a modified version of the one defined in
 * the Organization Policy system. This message contains several fields defined
 * in the original organization policy with some new fields for analysis
 * purpose.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzerOrgPolicy</code>
 */
class AnalyzerOrgPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy is
     * set.
     * Notice that some type of constraints are defined with default policy. This
     * field will be empty for them.
     *
     * Generated from protobuf field <code>string attached_resource = 1;</code>
     */
    private $attached_resource = '';
    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy
     * applies to.
     * For any user defined org policies, this field has the same value as
     * the [attached_resource] field. Only for default policy, this field has
     * the different value.
     *
     * Generated from protobuf field <code>string applied_resource = 5;</code>
     */
    private $applied_resource = '';
    /**
     * List of rules for this organization policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy.Rule rules = 2;</code>
     */
    private $rules;
    /**
     * If `inherit_from_parent` is true, Rules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * policy becomes the effective root for evaluation.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 3;</code>
     */
    private $inherit_from_parent = false;
    /**
     * Ignores policies set above this resource and restores the default behavior
     * of the constraint at this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 4;</code>
     */
    private $reset = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attached_resource
     *           The [full resource name]
     *           (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     *           an organization/folder/project resource where this organization policy is
     *           set.
     *           Notice that some type of constraints are defined with default policy. This
     *           field will be empty for them.
     *     @type string $applied_resource
     *           The [full resource name]
     *           (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     *           an organization/folder/project resource where this organization policy
     *           applies to.
     *           For any user defined org policies, this field has the same value as
     *           the [attached_resource] field. Only for default policy, this field has
     *           the different value.
     *     @type array<\Google\Cloud\Asset\V1\AnalyzerOrgPolicy\Rule>|\Google\Protobuf\Internal\RepeatedField $rules
     *           List of rules for this organization policy.
     *     @type bool $inherit_from_parent
     *           If `inherit_from_parent` is true, Rules set higher up in the
     *           hierarchy (up to the closest root) are inherited and present in the
     *           effective policy. If it is false, then no rules are inherited, and this
     *           policy becomes the effective root for evaluation.
     *     @type bool $reset
     *           Ignores policies set above this resource and restores the default behavior
     *           of the constraint at this resource.
     *           This field can be set in policies for either list or boolean
     *           constraints. If set, `rules` must be empty and `inherit_from_parent`
     *           must be set to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy is
     * set.
     * Notice that some type of constraints are defined with default policy. This
     * field will be empty for them.
     *
     * Generated from protobuf field <code>string attached_resource = 1;</code>
     * @return string
     */
    public function getAttachedResource()
    {
        return $this->attached_resource;
    }

    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy is
     * set.
     * Notice that some type of constraints are defined with default policy. This
     * field will be empty for them.
     *
     * Generated from protobuf field <code>string attached_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachedResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->attached_resource = $var;

        return $this;
    }

    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy
     * applies to.
     * For any user defined org policies, this field has the same value as
     * the [attached_resource] field. Only for default policy, this field has
     * the different value.
     *
     * Generated from protobuf field <code>string applied_resource = 5;</code>
     * @return string
     */
    public function getAppliedResource()
    {
        return $this->applied_resource;
    }

    /**
     * The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format) of
     * an organization/folder/project resource where this organization policy
     * applies to.
     * For any user defined org policies, this field has the same value as
     * the [attached_resource] field. Only for default policy, this field has
     * the different value.
     *
     * Generated from protobuf field <code>string applied_resource = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppliedResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->applied_resource = $var;

        return $this;
    }

    /**
     * List of rules for this organization policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy.Rule rules = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * List of rules for this organization policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy.Rule rules = 2;</code>
     * @param array<\Google\Cloud\Asset\V1\AnalyzerOrgPolicy\Rule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\AnalyzerOrgPolicy\Rule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * If `inherit_from_parent` is true, Rules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * policy becomes the effective root for evaluation.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 3;</code>
     * @return bool
     */
    public function getInheritFromParent()
    {
        return $this->inherit_from_parent;
    }

    /**
     * If `inherit_from_parent` is true, Rules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * policy becomes the effective root for evaluation.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInheritFromParent($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_from_parent = $var;

        return $this;
    }

    /**
     * Ignores policies set above this resource and restores the default behavior
     * of the constraint at this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 4;</code>
     * @return bool
     */
    public function getReset()
    {
        return $this->reset;
    }

    /**
     * Ignores policies set above this resource and restores the default behavior
     * of the constraint at this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setReset($var)
    {
        GPBUtil::checkBool($var);
        $this->reset = $var;

        return $this;
    }

}


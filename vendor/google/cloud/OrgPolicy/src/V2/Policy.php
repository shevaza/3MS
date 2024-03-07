<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an organization policy which is used to specify constraints
 * for configurations of Google Cloud resources.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.Policy</code>
 */
class Policy extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the policy. Must be one of the following
     * forms, where `constraint_name` is the name of the constraint which this
     * policy configures:
     * * `projects/{project_number}/policies/{constraint_name}`
     * * `folders/{folder_id}/policies/{constraint_name}`
     * * `organizations/{organization_id}/policies/{constraint_name}`
     * For example, `projects/123/policies/compute.disableSerialPortAccess`.
     * Note: `projects/{project_id}/policies/{constraint_name}` is also an
     * acceptable name for API requests, but responses will return the name using
     * the equivalent project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Basic information about the Organization Policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec spec = 2;</code>
     */
    private $spec = null;
    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.AlternatePolicySpec alternate = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $alternate = null;
    /**
     * Dry-run policy.
     * Audit-only policy, can be used to monitor how the policy would have
     * impacted the existing and future resources if it's enforced.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec dry_run_spec = 4;</code>
     */
    private $dry_run_spec = null;
    /**
     * Optional. An opaque tag indicating the current state of the policy, used
     * for concurrency control. This 'etag' is computed by the server based on the
     * value of other fields, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the policy. Must be one of the following
     *           forms, where `constraint_name` is the name of the constraint which this
     *           policy configures:
     *           * `projects/{project_number}/policies/{constraint_name}`
     *           * `folders/{folder_id}/policies/{constraint_name}`
     *           * `organizations/{organization_id}/policies/{constraint_name}`
     *           For example, `projects/123/policies/compute.disableSerialPortAccess`.
     *           Note: `projects/{project_id}/policies/{constraint_name}` is also an
     *           acceptable name for API requests, but responses will return the name using
     *           the equivalent project number.
     *     @type \Google\Cloud\OrgPolicy\V2\PolicySpec $spec
     *           Basic information about the Organization Policy.
     *     @type \Google\Cloud\OrgPolicy\V2\AlternatePolicySpec $alternate
     *           Deprecated.
     *     @type \Google\Cloud\OrgPolicy\V2\PolicySpec $dry_run_spec
     *           Dry-run policy.
     *           Audit-only policy, can be used to monitor how the policy would have
     *           impacted the existing and future resources if it's enforced.
     *     @type string $etag
     *           Optional. An opaque tag indicating the current state of the policy, used
     *           for concurrency control. This 'etag' is computed by the server based on the
     *           value of other fields, and may be sent on update and delete requests to
     *           ensure the client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the policy. Must be one of the following
     * forms, where `constraint_name` is the name of the constraint which this
     * policy configures:
     * * `projects/{project_number}/policies/{constraint_name}`
     * * `folders/{folder_id}/policies/{constraint_name}`
     * * `organizations/{organization_id}/policies/{constraint_name}`
     * For example, `projects/123/policies/compute.disableSerialPortAccess`.
     * Note: `projects/{project_id}/policies/{constraint_name}` is also an
     * acceptable name for API requests, but responses will return the name using
     * the equivalent project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the policy. Must be one of the following
     * forms, where `constraint_name` is the name of the constraint which this
     * policy configures:
     * * `projects/{project_number}/policies/{constraint_name}`
     * * `folders/{folder_id}/policies/{constraint_name}`
     * * `organizations/{organization_id}/policies/{constraint_name}`
     * For example, `projects/123/policies/compute.disableSerialPortAccess`.
     * Note: `projects/{project_id}/policies/{constraint_name}` is also an
     * acceptable name for API requests, but responses will return the name using
     * the equivalent project number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Basic information about the Organization Policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec spec = 2;</code>
     * @return \Google\Cloud\OrgPolicy\V2\PolicySpec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * Basic information about the Organization Policy.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec spec = 2;</code>
     * @param \Google\Cloud\OrgPolicy\V2\PolicySpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\PolicySpec::class);
        $this->spec = $var;

        return $this;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.AlternatePolicySpec alternate = 3 [deprecated = true];</code>
     * @return \Google\Cloud\OrgPolicy\V2\AlternatePolicySpec|null
     * @deprecated
     */
    public function getAlternate()
    {
        @trigger_error('alternate is deprecated.', E_USER_DEPRECATED);
        return $this->alternate;
    }

    public function hasAlternate()
    {
        @trigger_error('alternate is deprecated.', E_USER_DEPRECATED);
        return isset($this->alternate);
    }

    public function clearAlternate()
    {
        @trigger_error('alternate is deprecated.', E_USER_DEPRECATED);
        unset($this->alternate);
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.AlternatePolicySpec alternate = 3 [deprecated = true];</code>
     * @param \Google\Cloud\OrgPolicy\V2\AlternatePolicySpec $var
     * @return $this
     * @deprecated
     */
    public function setAlternate($var)
    {
        @trigger_error('alternate is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\AlternatePolicySpec::class);
        $this->alternate = $var;

        return $this;
    }

    /**
     * Dry-run policy.
     * Audit-only policy, can be used to monitor how the policy would have
     * impacted the existing and future resources if it's enforced.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec dry_run_spec = 4;</code>
     * @return \Google\Cloud\OrgPolicy\V2\PolicySpec|null
     */
    public function getDryRunSpec()
    {
        return $this->dry_run_spec;
    }

    public function hasDryRunSpec()
    {
        return isset($this->dry_run_spec);
    }

    public function clearDryRunSpec()
    {
        unset($this->dry_run_spec);
    }

    /**
     * Dry-run policy.
     * Audit-only policy, can be used to monitor how the policy would have
     * impacted the existing and future resources if it's enforced.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v2.PolicySpec dry_run_spec = 4;</code>
     * @param \Google\Cloud\OrgPolicy\V2\PolicySpec $var
     * @return $this
     */
    public function setDryRunSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V2\PolicySpec::class);
        $this->dry_run_spec = $var;

        return $this;
    }

    /**
     * Optional. An opaque tag indicating the current state of the policy, used
     * for concurrency control. This 'etag' is computed by the server based on the
     * value of other fields, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. An opaque tag indicating the current state of the policy, used
     * for concurrency control. This 'etag' is computed by the server based on the
     * value of other fields, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

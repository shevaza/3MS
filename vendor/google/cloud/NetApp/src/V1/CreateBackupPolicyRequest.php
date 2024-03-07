<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/backup_policy.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateBackupPolicyRequest creates a backupPolicy.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.CreateBackupPolicyRequest</code>
 */
class CreateBackupPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location to create the backup policies of, in the format
     * `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. A backupPolicy resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy backup_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_policy = null;
    /**
     * Required. The ID to use for the backup policy.
     * The ID must be unique within the specified location.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string backup_policy_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_policy_id = '';

    /**
     * @param string                               $parent         Required. The location to create the backup policies of, in the format
     *                                                             `projects/{project_id}/locations/{location}`
     *                                                             Please see {@see NetAppClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetApp\V1\BackupPolicy $backupPolicy   Required. A backupPolicy resource
     * @param string                               $backupPolicyId Required. The ID to use for the backup policy.
     *                                                             The ID must be unique within the specified location.
     *                                                             This value must start with a lowercase letter followed by up to 62
     *                                                             lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * @return \Google\Cloud\NetApp\V1\CreateBackupPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetApp\V1\BackupPolicy $backupPolicy, string $backupPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackupPolicy($backupPolicy)
            ->setBackupPolicyId($backupPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The location to create the backup policies of, in the format
     *           `projects/{project_id}/locations/{location}`
     *     @type \Google\Cloud\NetApp\V1\BackupPolicy $backup_policy
     *           Required. A backupPolicy resource
     *     @type string $backup_policy_id
     *           Required. The ID to use for the backup policy.
     *           The ID must be unique within the specified location.
     *           This value must start with a lowercase letter followed by up to 62
     *           lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\BackupPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location to create the backup policies of, in the format
     * `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The location to create the backup policies of, in the format
     * `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. A backupPolicy resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy backup_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetApp\V1\BackupPolicy|null
     */
    public function getBackupPolicy()
    {
        return $this->backup_policy;
    }

    public function hasBackupPolicy()
    {
        return isset($this->backup_policy);
    }

    public function clearBackupPolicy()
    {
        unset($this->backup_policy);
    }

    /**
     * Required. A backupPolicy resource
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy backup_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetApp\V1\BackupPolicy $var
     * @return $this
     */
    public function setBackupPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\BackupPolicy::class);
        $this->backup_policy = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the backup policy.
     * The ID must be unique within the specified location.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string backup_policy_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupPolicyId()
    {
        return $this->backup_policy_id;
    }

    /**
     * Required. The ID to use for the backup policy.
     * The ID must be unique within the specified location.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string backup_policy_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_policy_id = $var;

        return $this;
    }

}


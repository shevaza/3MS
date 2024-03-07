<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AwsClusters.UpdateAwsCluster` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.UpdateAwsClusterRequest</code>
 */
class UpdateAwsClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $aws_cluster = null;
    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    private $validate_only = false;
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]:
     *  *   `description`.
     *  *   `annotations`.
     *  *   `control_plane.version`.
     *  *   `authorization.admin_users`.
     *  *   `authorization.admin_groups`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `control_plane.aws_services_authentication.role_arn`.
     *  *   `control_plane.aws_services_authentication.role_session_name`.
     *  *   `control_plane.config_encryption.kms_key_arn`.
     *  *   `control_plane.instance_type`.
     *  *   `control_plane.security_group_ids`.
     *  *   `control_plane.proxy_config`.
     *  *   `control_plane.proxy_config.secret_arn`.
     *  *   `control_plane.proxy_config.secret_version`.
     *  *   `control_plane.root_volume.size_gib`.
     *  *   `control_plane.root_volume.volume_type`.
     *  *   `control_plane.root_volume.iops`.
     *  *   `control_plane.root_volume.throughput`.
     *  *   `control_plane.root_volume.kms_key_arn`.
     *  *   `control_plane.ssh_config`.
     *  *   `control_plane.ssh_config.ec2_key_pair`.
     *  *   `control_plane.instance_placement.tenancy`.
     *  *   `control_plane.iam_instance_profile`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `control_plane.tags`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `networking.per_node_pool_sg_rules_disabled`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsCluster $awsCluster Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     *                                                              resource to update.
     * @param \Google\Protobuf\FieldMask                $updateMask Required. Mask of fields to update. At least one path must be supplied in
     *                                                              this field. The elements of the repeated paths field can only include these
     *                                                              fields from [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]:
     *
     *                                                              *   `description`.
     *                                                              *   `annotations`.
     *                                                              *   `control_plane.version`.
     *                                                              *   `authorization.admin_users`.
     *                                                              *   `authorization.admin_groups`.
     *                                                              *   `binary_authorization.evaluation_mode`.
     *                                                              *   `control_plane.aws_services_authentication.role_arn`.
     *                                                              *   `control_plane.aws_services_authentication.role_session_name`.
     *                                                              *   `control_plane.config_encryption.kms_key_arn`.
     *                                                              *   `control_plane.instance_type`.
     *                                                              *   `control_plane.security_group_ids`.
     *                                                              *   `control_plane.proxy_config`.
     *                                                              *   `control_plane.proxy_config.secret_arn`.
     *                                                              *   `control_plane.proxy_config.secret_version`.
     *                                                              *   `control_plane.root_volume.size_gib`.
     *                                                              *   `control_plane.root_volume.volume_type`.
     *                                                              *   `control_plane.root_volume.iops`.
     *                                                              *   `control_plane.root_volume.throughput`.
     *                                                              *   `control_plane.root_volume.kms_key_arn`.
     *                                                              *   `control_plane.ssh_config`.
     *                                                              *   `control_plane.ssh_config.ec2_key_pair`.
     *                                                              *   `control_plane.instance_placement.tenancy`.
     *                                                              *   `control_plane.iam_instance_profile`.
     *                                                              *   `logging_config.component_config.enable_components`.
     *                                                              *   `control_plane.tags`.
     *                                                              *   `monitoring_config.managed_prometheus_config.enabled`.
     *                                                              *   `networking.per_node_pool_sg_rules_disabled`.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\UpdateAwsClusterRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\GkeMultiCloud\V1\AwsCluster $awsCluster, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAwsCluster($awsCluster)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsCluster $aws_cluster
     *           Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     *           resource to update.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually update the cluster.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. The elements of the repeated paths field can only include these
     *           fields from [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]:
     *            *   `description`.
     *            *   `annotations`.
     *            *   `control_plane.version`.
     *            *   `authorization.admin_users`.
     *            *   `authorization.admin_groups`.
     *            *   `binary_authorization.evaluation_mode`.
     *            *   `control_plane.aws_services_authentication.role_arn`.
     *            *   `control_plane.aws_services_authentication.role_session_name`.
     *            *   `control_plane.config_encryption.kms_key_arn`.
     *            *   `control_plane.instance_type`.
     *            *   `control_plane.security_group_ids`.
     *            *   `control_plane.proxy_config`.
     *            *   `control_plane.proxy_config.secret_arn`.
     *            *   `control_plane.proxy_config.secret_version`.
     *            *   `control_plane.root_volume.size_gib`.
     *            *   `control_plane.root_volume.volume_type`.
     *            *   `control_plane.root_volume.iops`.
     *            *   `control_plane.root_volume.throughput`.
     *            *   `control_plane.root_volume.kms_key_arn`.
     *            *   `control_plane.ssh_config`.
     *            *   `control_plane.ssh_config.ec2_key_pair`.
     *            *   `control_plane.instance_placement.tenancy`.
     *            *   `control_plane.iam_instance_profile`.
     *            *   `logging_config.component_config.enable_components`.
     *            *   `control_plane.tags`.
     *            *   `monitoring_config.managed_prometheus_config.enabled`.
     *            *   `networking.per_node_pool_sg_rules_disabled`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsCluster|null
     */
    public function getAwsCluster()
    {
        return $this->aws_cluster;
    }

    public function hasAwsCluster()
    {
        return isset($this->aws_cluster);
    }

    public function clearAwsCluster()
    {
        unset($this->aws_cluster);
    }

    /**
     * Required. The [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsCluster $var
     * @return $this
     */
    public function setAwsCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsCluster::class);
        $this->aws_cluster = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually update the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]:
     *  *   `description`.
     *  *   `annotations`.
     *  *   `control_plane.version`.
     *  *   `authorization.admin_users`.
     *  *   `authorization.admin_groups`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `control_plane.aws_services_authentication.role_arn`.
     *  *   `control_plane.aws_services_authentication.role_session_name`.
     *  *   `control_plane.config_encryption.kms_key_arn`.
     *  *   `control_plane.instance_type`.
     *  *   `control_plane.security_group_ids`.
     *  *   `control_plane.proxy_config`.
     *  *   `control_plane.proxy_config.secret_arn`.
     *  *   `control_plane.proxy_config.secret_version`.
     *  *   `control_plane.root_volume.size_gib`.
     *  *   `control_plane.root_volume.volume_type`.
     *  *   `control_plane.root_volume.iops`.
     *  *   `control_plane.root_volume.throughput`.
     *  *   `control_plane.root_volume.kms_key_arn`.
     *  *   `control_plane.ssh_config`.
     *  *   `control_plane.ssh_config.ec2_key_pair`.
     *  *   `control_plane.instance_placement.tenancy`.
     *  *   `control_plane.iam_instance_profile`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `control_plane.tags`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `networking.per_node_pool_sg_rules_disabled`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]:
     *  *   `description`.
     *  *   `annotations`.
     *  *   `control_plane.version`.
     *  *   `authorization.admin_users`.
     *  *   `authorization.admin_groups`.
     *  *   `binary_authorization.evaluation_mode`.
     *  *   `control_plane.aws_services_authentication.role_arn`.
     *  *   `control_plane.aws_services_authentication.role_session_name`.
     *  *   `control_plane.config_encryption.kms_key_arn`.
     *  *   `control_plane.instance_type`.
     *  *   `control_plane.security_group_ids`.
     *  *   `control_plane.proxy_config`.
     *  *   `control_plane.proxy_config.secret_arn`.
     *  *   `control_plane.proxy_config.secret_version`.
     *  *   `control_plane.root_volume.size_gib`.
     *  *   `control_plane.root_volume.volume_type`.
     *  *   `control_plane.root_volume.iops`.
     *  *   `control_plane.root_volume.throughput`.
     *  *   `control_plane.root_volume.kms_key_arn`.
     *  *   `control_plane.ssh_config`.
     *  *   `control_plane.ssh_config.ec2_key_pair`.
     *  *   `control_plane.instance_placement.tenancy`.
     *  *   `control_plane.iam_instance_profile`.
     *  *   `logging_config.component_config.enable_components`.
     *  *   `control_plane.tags`.
     *  *   `monitoring_config.managed_prometheus_config.enabled`.
     *  *   `networking.per_node_pool_sg_rules_disabled`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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

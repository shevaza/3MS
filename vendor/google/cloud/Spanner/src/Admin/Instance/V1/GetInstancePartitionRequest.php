<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [GetInstancePartition][google.spanner.admin.instance.v1.InstanceAdmin.GetInstancePartition].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.GetInstancePartitionRequest</code>
 */
class GetInstancePartitionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the requested instance partition. Values are of
     * the form
     * `projects/{project}/instances/{instance}/instancePartitions/{instance_partition}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the requested instance partition. Values are of
     *                     the form
     *                     `projects/{project}/instances/{instance}/instancePartitions/{instance_partition}`. Please see
     *                     {@see InstanceAdminClient::instancePartitionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\GetInstancePartitionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the requested instance partition. Values are of
     *           the form
     *           `projects/{project}/instances/{instance}/instancePartitions/{instance_partition}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the requested instance partition. Values are of
     * the form
     * `projects/{project}/instances/{instance}/instancePartitions/{instance_partition}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the requested instance partition. Values are of
     * the form
     * `projects/{project}/instances/{instance}/instancePartitions/{instance_partition}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


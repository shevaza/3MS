<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AzureClusters.CreateAzureCluster` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.CreateAzureClusterRequest</code>
 */
class CreateAzureClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location where this
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource will be
     * created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The specification of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster azure_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $azure_cluster = null;
    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string azure_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $azure_cluster_id = '';
    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    private $validate_only = false;

    /**
     * @param string                                      $parent         Required. The parent location where this
     *                                                                    [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource will be
     *                                                                    created.
     *
     *                                                                    Location names are formatted as `projects/<project-id>/locations/<region>`.
     *
     *                                                                    See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                                                                    for more details on Google Cloud resource names. Please see
     *                                                                    {@see AzureClustersClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureCluster $azureCluster   Required. The specification of the
     *                                                                    [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] to create.
     * @param string                                      $azureClusterId Required. A client provided ID the resource. Must be unique within the
     *                                                                    parent resource.
     *
     *                                                                    The provided ID will be part of the
     *                                                                    [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource name
     *                                                                    formatted as
     *                                                                    `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
     *
     *                                                                    Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\CreateAzureClusterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\GkeMultiCloud\V1\AzureCluster $azureCluster, string $azureClusterId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAzureCluster($azureCluster)
            ->setAzureClusterId($azureClusterId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location where this
     *           [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource will be
     *           created.
     *           Location names are formatted as `projects/<project-id>/locations/<region>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureCluster $azure_cluster
     *           Required. The specification of the
     *           [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] to create.
     *     @type string $azure_cluster_id
     *           Required. A client provided ID the resource. Must be unique within the
     *           parent resource.
     *           The provided ID will be part of the
     *           [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource name
     *           formatted as
     *           `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
     *           Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually create the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location where this
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource will be
     * created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location where this
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource will be
     * created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
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
     * Required. The specification of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster azure_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureCluster|null
     */
    public function getAzureCluster()
    {
        return $this->azure_cluster;
    }

    public function hasAzureCluster()
    {
        return isset($this->azure_cluster);
    }

    public function clearAzureCluster()
    {
        unset($this->azure_cluster);
    }

    /**
     * Required. The specification of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureCluster azure_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureCluster $var
     * @return $this
     */
    public function setAzureCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureCluster::class);
        $this->azure_cluster = $var;

        return $this;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string azure_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAzureClusterId()
    {
        return $this->azure_cluster_id;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the
     * parent resource.
     * The provided ID will be part of the
     * [AzureCluster][google.cloud.gkemulticloud.v1.AzureCluster] resource name
     * formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 63 characters.
     *
     * Generated from protobuf field <code>string azure_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAzureClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_cluster_id = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
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


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateMasterRequest updates the master of the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.UpdateMasterRequest</code>
 */
class UpdateMasterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $zone = '';
    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $cluster_id = '';
    /**
     * Required. The Kubernetes version to change the master to.
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the default Kubernetes version
     *
     * Generated from protobuf field <code>string master_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $master_version = '';
    /**
     * The name (project, location, cluster) of the cluster to update.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    private $name = '';

    /**
     * @param string $projectId     Deprecated. The Google Developers Console [project ID or project
     *                              number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *                              This field has been deprecated and replaced by the name field.
     * @param string $zone          Deprecated. The name of the Google Compute Engine
     *                              [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *                              cluster resides. This field has been deprecated and replaced by the name
     *                              field.
     * @param string $clusterId     Deprecated. The name of the cluster to upgrade.
     *                              This field has been deprecated and replaced by the name field.
     * @param string $masterVersion Required. The Kubernetes version to change the master to.
     *
     *                              Users may specify either explicit versions offered by Kubernetes Engine or
     *                              version aliases, which have the following behavior:
     *
     *                              - "latest": picks the highest valid Kubernetes version
     *                              - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     *                              - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     *                              - "1.X.Y-gke.N": picks an explicit Kubernetes version
     *                              - "-": picks the default Kubernetes version
     *
     * @return \Google\Cloud\Container\V1\UpdateMasterRequest
     *
     * @experimental
     */
    public static function build(string $projectId, string $zone, string $clusterId, string $masterVersion): self
    {
        return (new self())
            ->setProjectId($projectId)
            ->setZone($zone)
            ->setClusterId($clusterId)
            ->setMasterVersion($masterVersion);
    }

    /**
     * @param string $name          The name (project, location, cluster) of the cluster to update.
     *                              Specified in the format `projects/&#42;/locations/&#42;/clusters/*`.
     * @param string $masterVersion Required. The Kubernetes version to change the master to.
     *
     *                              Users may specify either explicit versions offered by Kubernetes Engine or
     *                              version aliases, which have the following behavior:
     *
     *                              - "latest": picks the highest valid Kubernetes version
     *                              - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     *                              - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     *                              - "1.X.Y-gke.N": picks an explicit Kubernetes version
     *                              - "-": picks the default Kubernetes version
     *
     * @return \Google\Cloud\Container\V1\UpdateMasterRequest
     *
     * @experimental
     */
    public static function buildFromNameMasterVersion(string $name, string $masterVersion): self
    {
        return (new self())
            ->setName($name)
            ->setMasterVersion($masterVersion);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides. This field has been deprecated and replaced by the name
     *           field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $master_version
     *           Required. The Kubernetes version to change the master to.
     *           Users may specify either explicit versions offered by Kubernetes Engine or
     *           version aliases, which have the following behavior:
     *           - "latest": picks the highest valid Kubernetes version
     *           - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     *           - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     *           - "1.X.Y-gke.N": picks an explicit Kubernetes version
     *           - "-": picks the default Kubernetes version
     *     @type string $name
     *           The name (project, location, cluster) of the cluster to update.
     *           Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getProjectId()
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setProjectId($var)
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getZone()
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setZone($var)
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getClusterId()
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setClusterId($var)
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The Kubernetes version to change the master to.
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the default Kubernetes version
     *
     * Generated from protobuf field <code>string master_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMasterVersion()
    {
        return $this->master_version;
    }

    /**
     * Required. The Kubernetes version to change the master to.
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the default Kubernetes version
     *
     * Generated from protobuf field <code>string master_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMasterVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_version = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster) of the cluster to update.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster) of the cluster to update.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 7;</code>
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


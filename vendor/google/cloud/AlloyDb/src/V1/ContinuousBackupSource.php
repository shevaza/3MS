<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message describing a ContinuousBackupSource.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.ContinuousBackupSource</code>
 */
class ContinuousBackupSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The source cluster from which to restore. This cluster must have
     * continuous backup enabled for this operation to succeed. For the required
     * format, see the comment on the Cluster.name field.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster = '';
    /**
     * Required. The point in time to restore to.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $point_in_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           Required. The source cluster from which to restore. This cluster must have
     *           continuous backup enabled for this operation to succeed. For the required
     *           format, see the comment on the Cluster.name field.
     *     @type \Google\Protobuf\Timestamp $point_in_time
     *           Required. The point in time to restore to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The source cluster from which to restore. This cluster must have
     * continuous backup enabled for this operation to succeed. For the required
     * format, see the comment on the Cluster.name field.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Required. The source cluster from which to restore. This cluster must have
     * continuous backup enabled for this operation to succeed. For the required
     * format, see the comment on the Cluster.name field.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Required. The point in time to restore to.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPointInTime()
    {
        return $this->point_in_time;
    }

    public function hasPointInTime()
    {
        return isset($this->point_in_time);
    }

    public function clearPointInTime()
    {
        unset($this->point_in_time);
    }

    /**
     * Required. The point in time to restore to.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPointInTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->point_in_time = $var;

        return $this;
    }

}

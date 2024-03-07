<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1beta2/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1beta2\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Memcached Node.
 *
 * Generated from protobuf message <code>google.cloud.memcache.v1beta2.Instance.NodeConfig</code>
 */
class NodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Number of cpus per Memcached node.
     *
     * Generated from protobuf field <code>int32 cpu_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cpu_count = 0;
    /**
     * Required. Memory size in MiB for each Memcached node.
     *
     * Generated from protobuf field <code>int32 memory_size_mb = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $memory_size_mb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cpu_count
     *           Required. Number of cpus per Memcached node.
     *     @type int $memory_size_mb
     *           Required. Memory size in MiB for each Memcached node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1Beta2\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Number of cpus per Memcached node.
     *
     * Generated from protobuf field <code>int32 cpu_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCpuCount()
    {
        return $this->cpu_count;
    }

    /**
     * Required. Number of cpus per Memcached node.
     *
     * Generated from protobuf field <code>int32 cpu_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCpuCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->cpu_count = $var;

        return $this;
    }

    /**
     * Required. Memory size in MiB for each Memcached node.
     *
     * Generated from protobuf field <code>int32 memory_size_mb = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMemorySizeMb()
    {
        return $this->memory_size_mb;
    }

    /**
     * Required. Memory size in MiB for each Memcached node.
     *
     * Generated from protobuf field <code>int32 memory_size_mb = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMemorySizeMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_size_mb = $var;

        return $this;
    }

}



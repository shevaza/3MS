<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\DirectedReadOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ExcludeReplicas contains a repeated set of ReplicaSelection that should
 * be excluded from serving requests.
 *
 * Generated from protobuf message <code>google.spanner.v1.DirectedReadOptions.ExcludeReplicas</code>
 */
class ExcludeReplicas extends \Google\Protobuf\Internal\Message
{
    /**
     * The directed read replica selector.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.DirectedReadOptions.ReplicaSelection replica_selections = 1;</code>
     */
    private $replica_selections;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Spanner\V1\DirectedReadOptions\ReplicaSelection>|\Google\Protobuf\Internal\RepeatedField $replica_selections
     *           The directed read replica selector.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * The directed read replica selector.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.DirectedReadOptions.ReplicaSelection replica_selections = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicaSelections()
    {
        return $this->replica_selections;
    }

    /**
     * The directed read replica selector.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.DirectedReadOptions.ReplicaSelection replica_selections = 1;</code>
     * @param array<\Google\Cloud\Spanner\V1\DirectedReadOptions\ReplicaSelection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicaSelections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\DirectedReadOptions\ReplicaSelection::class);
        $this->replica_selections = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExcludeReplicas::class, \Google\Cloud\Spanner\V1\DirectedReadOptions_ExcludeReplicas::class);


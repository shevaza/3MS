<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query_profile.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Planning and execution statistics for the query.
 *
 * Generated from protobuf message <code>google.datastore.v1.ResultSetStats</code>
 */
class ResultSetStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Plan for the query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryPlan query_plan = 1;</code>
     */
    private $query_plan = null;
    /**
     * Aggregated statistics from the execution of the query.
     * This will only be present when the request specifies `PROFILE` mode.
     * For example, a query will return the statistics including:
     * {
     *   "results_returned": "20",
     *   "documents_scanned": "20",
     *   "indexes_entries_scanned": "10050",
     *   "total_execution_time": "100.7 msecs"
     * }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     */
    private $query_stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\QueryPlan $query_plan
     *           Plan for the query.
     *     @type \Google\Protobuf\Struct $query_stats
     *           Aggregated statistics from the execution of the query.
     *           This will only be present when the request specifies `PROFILE` mode.
     *           For example, a query will return the statistics including:
     *           {
     *             "results_returned": "20",
     *             "documents_scanned": "20",
     *             "indexes_entries_scanned": "10050",
     *             "total_execution_time": "100.7 msecs"
     *           }
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\QueryProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Plan for the query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryPlan query_plan = 1;</code>
     * @return \Google\Cloud\Datastore\V1\QueryPlan|null
     */
    public function getQueryPlan()
    {
        return $this->query_plan;
    }

    public function hasQueryPlan()
    {
        return isset($this->query_plan);
    }

    public function clearQueryPlan()
    {
        unset($this->query_plan);
    }

    /**
     * Plan for the query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryPlan query_plan = 1;</code>
     * @param \Google\Cloud\Datastore\V1\QueryPlan $var
     * @return $this
     */
    public function setQueryPlan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\QueryPlan::class);
        $this->query_plan = $var;

        return $this;
    }

    /**
     * Aggregated statistics from the execution of the query.
     * This will only be present when the request specifies `PROFILE` mode.
     * For example, a query will return the statistics including:
     * {
     *   "results_returned": "20",
     *   "documents_scanned": "20",
     *   "indexes_entries_scanned": "10050",
     *   "total_execution_time": "100.7 msecs"
     * }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getQueryStats()
    {
        return $this->query_stats;
    }

    public function hasQueryStats()
    {
        return isset($this->query_stats);
    }

    public function clearQueryStats()
    {
        unset($this->query_stats);
    }

    /**
     * Aggregated statistics from the execution of the query.
     * This will only be present when the request specifies `PROFILE` mode.
     * For example, a query will return the statistics including:
     * {
     *   "results_returned": "20",
     *   "documents_scanned": "20",
     *   "indexes_entries_scanned": "10050",
     *   "total_execution_time": "100.7 msecs"
     * }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setQueryStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->query_stats = $var;

        return $this;
    }

}


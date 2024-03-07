<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance demote request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesDemoteRequest</code>
 */
class SqlInstancesDemoteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Cloud SQL instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = '';
    /**
     * Required. The project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesDemoteRequest body = 100;</code>
     */
    private $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Required. The name of the Cloud SQL instance.
     *     @type string $project
     *           Required. The project ID of the project that contains the instance.
     *     @type \Google\Cloud\Sql\V1beta4\InstancesDemoteRequest $body
     *           The request body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Cloud SQL instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. The name of the Cloud SQL instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. The project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. The project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesDemoteRequest body = 100;</code>
     * @return \Google\Cloud\Sql\V1beta4\InstancesDemoteRequest|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * The request body.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesDemoteRequest body = 100;</code>
     * @param \Google\Cloud\Sql\V1beta4\InstancesDemoteRequest $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\InstancesDemoteRequest::class);
        $this->body = $var;

        return $this;
    }

}


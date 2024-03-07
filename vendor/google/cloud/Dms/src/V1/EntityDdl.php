<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single DDL statement for a specific entity
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.EntityDdl</code>
 */
class EntityDdl extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of DDL (Create, Alter).
     *
     * Generated from protobuf field <code>string ddl_type = 1;</code>
     */
    private $ddl_type = '';
    /**
     * The name of the database entity the ddl refers to.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     */
    private $entity = '';
    /**
     * The actual ddl code.
     *
     * Generated from protobuf field <code>string ddl = 3;</code>
     */
    private $ddl = '';
    /**
     * The entity type (if the DDL is for a sub entity).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEntityType entity_type = 4;</code>
     */
    private $entity_type = 0;
    /**
     * EntityIssues found for this ddl.
     *
     * Generated from protobuf field <code>repeated string issue_id = 100;</code>
     */
    private $issue_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ddl_type
     *           Type of DDL (Create, Alter).
     *     @type string $entity
     *           The name of the database entity the ddl refers to.
     *     @type string $ddl
     *           The actual ddl code.
     *     @type int $entity_type
     *           The entity type (if the DDL is for a sub entity).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $issue_id
     *           EntityIssues found for this ddl.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of DDL (Create, Alter).
     *
     * Generated from protobuf field <code>string ddl_type = 1;</code>
     * @return string
     */
    public function getDdlType()
    {
        return $this->ddl_type;
    }

    /**
     * Type of DDL (Create, Alter).
     *
     * Generated from protobuf field <code>string ddl_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDdlType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ddl_type = $var;

        return $this;
    }

    /**
     * The name of the database entity the ddl refers to.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * The name of the database entity the ddl refers to.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity = $var;

        return $this;
    }

    /**
     * The actual ddl code.
     *
     * Generated from protobuf field <code>string ddl = 3;</code>
     * @return string
     */
    public function getDdl()
    {
        return $this->ddl;
    }

    /**
     * The actual ddl code.
     *
     * Generated from protobuf field <code>string ddl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDdl($var)
    {
        GPBUtil::checkString($var, True);
        $this->ddl = $var;

        return $this;
    }

    /**
     * The entity type (if the DDL is for a sub entity).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEntityType entity_type = 4;</code>
     * @return int
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * The entity type (if the DDL is for a sub entity).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEntityType entity_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\DatabaseEntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * EntityIssues found for this ddl.
     *
     * Generated from protobuf field <code>repeated string issue_id = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssueId()
    {
        return $this->issue_id;
    }

    /**
     * EntityIssues found for this ddl.
     *
     * Generated from protobuf field <code>repeated string issue_id = 100;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssueId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->issue_id = $arr;

        return $this;
    }

}


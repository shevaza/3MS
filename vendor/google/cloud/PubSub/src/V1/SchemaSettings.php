<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for validating messages published against a schema.
 *
 * Generated from protobuf message <code>google.pubsub.v1.SchemaSettings</code>
 */
class SchemaSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the schema that messages published should be
     * validated against. Format is `projects/{project}/schemas/{schema}`. The
     * value of this field will be `_deleted-schema_` if the schema has been
     * deleted.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $schema = '';
    /**
     * Optional. The encoding of messages validated against `schema`.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Encoding encoding = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encoding = 0;
    /**
     * Optional. The minimum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * last_revision or any revision created before.
     *
     * Generated from protobuf field <code>string first_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $first_revision_id = '';
    /**
     * Optional. The maximum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * first_revision or any revision created after.
     *
     * Generated from protobuf field <code>string last_revision_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $last_revision_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schema
     *           Required. The name of the schema that messages published should be
     *           validated against. Format is `projects/{project}/schemas/{schema}`. The
     *           value of this field will be `_deleted-schema_` if the schema has been
     *           deleted.
     *     @type int $encoding
     *           Optional. The encoding of messages validated against `schema`.
     *     @type string $first_revision_id
     *           Optional. The minimum (inclusive) revision allowed for validating messages.
     *           If empty or not present, allow any revision to be validated against
     *           last_revision or any revision created before.
     *     @type string $last_revision_id
     *           Optional. The maximum (inclusive) revision allowed for validating messages.
     *           If empty or not present, allow any revision to be validated against
     *           first_revision or any revision created after.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the schema that messages published should be
     * validated against. Format is `projects/{project}/schemas/{schema}`. The
     * value of this field will be `_deleted-schema_` if the schema has been
     * deleted.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Required. The name of the schema that messages published should be
     * validated against. Format is `projects/{project}/schemas/{schema}`. The
     * value of this field will be `_deleted-schema_` if the schema has been
     * deleted.
     *
     * Generated from protobuf field <code>string schema = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema = $var;

        return $this;
    }

    /**
     * Optional. The encoding of messages validated against `schema`.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Encoding encoding = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Optional. The encoding of messages validated against `schema`.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Encoding encoding = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Optional. The minimum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * last_revision or any revision created before.
     *
     * Generated from protobuf field <code>string first_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFirstRevisionId()
    {
        return $this->first_revision_id;
    }

    /**
     * Optional. The minimum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * last_revision or any revision created before.
     *
     * Generated from protobuf field <code>string first_revision_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFirstRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_revision_id = $var;

        return $this;
    }

    /**
     * Optional. The maximum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * first_revision or any revision created after.
     *
     * Generated from protobuf field <code>string last_revision_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLastRevisionId()
    {
        return $this->last_revision_id;
    }

    /**
     * Optional. The maximum (inclusive) revision allowed for validating messages.
     * If empty or not present, allow any revision to be validated against
     * first_revision or any revision created after.
     *
     * Generated from protobuf field <code>string last_revision_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLastRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_revision_id = $var;

        return $this;
    }

}


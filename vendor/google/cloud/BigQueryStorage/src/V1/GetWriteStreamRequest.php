<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `GetWriteStreamRequest`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.GetWriteStreamRequest</code>
 */
class GetWriteStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the stream to get, in the form of
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Indicates whether to get full or partial view of the WriteStream. If
     * not set, view returned will be basic.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStreamView view = 3;</code>
     */
    private $view = 0;

    /**
     * @param string $name Required. Name of the stream to get, in the form of
     *                     `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`. Please see
     *                     {@see BigQueryWriteClient::writeStreamName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Storage\V1\GetWriteStreamRequest
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
     *           Required. Name of the stream to get, in the form of
     *           `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *     @type int $view
     *           Indicates whether to get full or partial view of the WriteStream. If
     *           not set, view returned will be basic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the stream to get, in the form of
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the stream to get, in the form of
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
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

    /**
     * Indicates whether to get full or partial view of the WriteStream. If
     * not set, view returned will be basic.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStreamView view = 3;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Indicates whether to get full or partial view of the WriteStream. If
     * not set, view returned will be basic.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStreamView view = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\WriteStreamView::class);
        $this->view = $var;

        return $this;
    }

}


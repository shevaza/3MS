<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DataprocMetastore.DeleteService][google.cloud.metastore.v1.DataprocMetastore.DeleteService].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.DeleteServiceRequest</code>
 */
class DeleteServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the metastore service to delete, in
     * the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * @param string $name Required. The relative resource name of the metastore service to delete, in
     *                     the following form:
     *
     *                     `projects/{project_number}/locations/{location_id}/services/{service_id}`. Please see
     *                     {@see DataprocMetastoreClient::serviceName()} for help formatting this field.
     *
     * @return \Google\Cloud\Metastore\V1\DeleteServiceRequest
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
     *           Required. The relative resource name of the metastore service to delete, in
     *           the following form:
     *           `projects/{project_number}/locations/{location_id}/services/{service_id}`.
     *     @type string $request_id
     *           Optional. A request ID. Specify a unique request ID to allow the server to
     *           ignore the request if it has completed. The server will ignore subsequent
     *           requests that provide a duplicate request ID for at least 60 minutes after
     *           the first request.
     *           For example, if an initial request times out, followed by another request
     *           with the same request ID, the server ignores the second request to prevent
     *           the creation of duplicate commitments.
     *           The request ID must be a valid
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     *           A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the metastore service to delete, in
     * the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The relative resource name of the metastore service to delete, in
     * the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`.
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
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}


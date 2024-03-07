<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/managed_service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for creating a Managed Notebook Runtime.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.CreateRuntimeRequest</code>
 */
class CreateRuntimeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `parent=projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. User-defined unique ID of this Runtime.
     *
     * Generated from protobuf field <code>string runtime_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $runtime_id = '';
    /**
     * Required. The Runtime to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $runtime = null;
    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    private $request_id = '';

    /**
     * @param string                             $parent    Required. Format:
     *                                                      `parent=projects/{project_id}/locations/{location}`
     *                                                      Please see {@see ManagedNotebookServiceClient::runtimeName()} for help formatting this field.
     * @param string                             $runtimeId Required. User-defined unique ID of this Runtime.
     * @param \Google\Cloud\Notebooks\V1\Runtime $runtime   Required. The Runtime to be created.
     *
     * @return \Google\Cloud\Notebooks\V1\CreateRuntimeRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $runtimeId, \Google\Cloud\Notebooks\V1\Runtime $runtime): self
    {
        return (new self())
            ->setParent($parent)
            ->setRuntimeId($runtimeId)
            ->setRuntime($runtime);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Format:
     *           `parent=projects/{project_id}/locations/{location}`
     *     @type string $runtime_id
     *           Required. User-defined unique ID of this Runtime.
     *     @type \Google\Cloud\Notebooks\V1\Runtime $runtime
     *           Required. The Runtime to be created.
     *     @type string $request_id
     *           Idempotent request UUID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\ManagedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `parent=projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Format:
     * `parent=projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. User-defined unique ID of this Runtime.
     *
     * Generated from protobuf field <code>string runtime_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRuntimeId()
    {
        return $this->runtime_id;
    }

    /**
     * Required. User-defined unique ID of this Runtime.
     *
     * Generated from protobuf field <code>string runtime_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRuntimeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime_id = $var;

        return $this;
    }

    /**
     * Required. The Runtime to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Notebooks\V1\Runtime|null
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    public function hasRuntime()
    {
        return isset($this->runtime);
    }

    public function clearRuntime()
    {
        unset($this->runtime);
    }

    /**
     * Required. The Runtime to be created.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Runtime runtime = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Notebooks\V1\Runtime $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\Runtime::class);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Idempotent request UUID.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
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


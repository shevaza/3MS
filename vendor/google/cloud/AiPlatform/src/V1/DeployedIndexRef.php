<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployed_index_ref.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Points to a DeployedIndex.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployedIndexRef</code>
 */
class DeployedIndexRef extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. A resource name of the IndexEndpoint.
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    private $index_endpoint = '';
    /**
     * Immutable. The ID of the DeployedIndex in the above IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $deployed_index_id = '';
    /**
     * Output only. The display name of the DeployedIndex.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index_endpoint
     *           Immutable. A resource name of the IndexEndpoint.
     *     @type string $deployed_index_id
     *           Immutable. The ID of the DeployedIndex in the above IndexEndpoint.
     *     @type string $display_name
     *           Output only. The display name of the DeployedIndex.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeployedIndexRef::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. A resource name of the IndexEndpoint.
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIndexEndpoint()
    {
        return $this->index_endpoint;
    }

    /**
     * Immutable. A resource name of the IndexEndpoint.
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIndexEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_endpoint = $var;

        return $this;
    }

    /**
     * Immutable. The ID of the DeployedIndex in the above IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getDeployedIndexId()
    {
        return $this->deployed_index_id;
    }

    /**
     * Immutable. The ID of the DeployedIndex in the above IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedIndexId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_index_id = $var;

        return $this;
    }

    /**
     * Output only. The display name of the DeployedIndex.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name of the DeployedIndex.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

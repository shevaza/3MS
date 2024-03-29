<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for sending an AdaptiveMt translation query.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.AdaptiveMtTranslateRequest</code>
 */
class AdaptiveMtTranslateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The resource name for the dataset to use for adaptive MT.
     * `projects/{project}/locations/{location-id}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string dataset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $dataset = '';
    /**
     * Required. The content of the input in string format.
     * For now only one sentence per request is supported.
     *
     * Generated from protobuf field <code>repeated string content = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $content;

    /**
     * @param string   $parent  Required. Location to make a regional call.
     *
     *                          Format: `projects/{project-number-or-id}/locations/{location-id}`. Please see
     *                          {@see TranslationServiceClient::locationName()} for help formatting this field.
     * @param string[] $content Required. The content of the input in string format.
     *                          For now only one sentence per request is supported.
     *
     * @return \Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $content): self
    {
        return (new self())
            ->setParent($parent)
            ->setContent($content);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Location to make a regional call.
     *           Format: `projects/{project-number-or-id}/locations/{location-id}`.
     *     @type string $dataset
     *           Required. The resource name for the dataset to use for adaptive MT.
     *           `projects/{project}/locations/{location-id}/adaptiveMtDatasets/{dataset}`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $content
     *           Required. The content of the input in string format.
     *           For now only one sentence per request is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
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
     * Required. The resource name for the dataset to use for adaptive MT.
     * `projects/{project}/locations/{location-id}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string dataset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Required. The resource name for the dataset to use for adaptive MT.
     * `projects/{project}/locations/{location-id}/adaptiveMtDatasets/{dataset}`
     *
     * Generated from protobuf field <code>string dataset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Required. The content of the input in string format.
     * For now only one sentence per request is supported.
     *
     * Generated from protobuf field <code>repeated string content = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Required. The content of the input in string format.
     * For now only one sentence per request is supported.
     *
     * Generated from protobuf field <code>repeated string content = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContent($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->content = $arr;

        return $this;
    }

}


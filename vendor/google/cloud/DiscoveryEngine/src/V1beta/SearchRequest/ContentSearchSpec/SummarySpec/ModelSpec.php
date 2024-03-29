<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\ContentSearchSpec\SummarySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of the model.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec.ModelSpec</code>
 */
class ModelSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The model version used to generate the summary.
     * Supported values are:
     * * `stable`: string. Default value when no value is specified. Uses a
     *   generally available, fine-tuned version of the text-bison&#64;001
     *   model.
     * * `preview`: string. (Public preview) Uses a fine-tuned version of
     *   the text-bison&#64;002 model. This model works only for summaries in
     *   English.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The model version used to generate the summary.
     *           Supported values are:
     *           * `stable`: string. Default value when no value is specified. Uses a
     *             generally available, fine-tuned version of the text-bison&#64;001
     *             model.
     *           * `preview`: string. (Public preview) Uses a fine-tuned version of
     *             the text-bison&#64;002 model. This model works only for summaries in
     *             English.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The model version used to generate the summary.
     * Supported values are:
     * * `stable`: string. Default value when no value is specified. Uses a
     *   generally available, fine-tuned version of the text-bison&#64;001
     *   model.
     * * `preview`: string. (Public preview) Uses a fine-tuned version of
     *   the text-bison&#64;002 model. This model works only for summaries in
     *   English.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The model version used to generate the summary.
     * Supported values are:
     * * `stable`: string. Default value when no value is specified. Uses a
     *   generally available, fine-tuned version of the text-bison&#64;001
     *   model.
     * * `preview`: string. (Public preview) Uses a fine-tuned version of
     *   the text-bison&#64;002 model. This model works only for summaries in
     *   English.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\ContentSearchSpec\SummarySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of the prompt to use with the model.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec.ModelPromptSpec</code>
 */
class ModelPromptSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Text at the beginning of the prompt that instructs the assistant.
     * Examples are available in the user guide.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     */
    protected $preamble = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preamble
     *           Text at the beginning of the prompt that instructs the assistant.
     *           Examples are available in the user guide.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text at the beginning of the prompt that instructs the assistant.
     * Examples are available in the user guide.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     * @return string
     */
    public function getPreamble()
    {
        return $this->preamble;
    }

    /**
     * Text at the beginning of the prompt that instructs the assistant.
     * Examples are available in the user guide.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreamble($var)
    {
        GPBUtil::checkString($var, True);
        $this->preamble = $var;

        return $this;
    }

}



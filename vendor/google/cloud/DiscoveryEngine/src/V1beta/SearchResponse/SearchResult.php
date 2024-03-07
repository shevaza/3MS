<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the search results.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult</code>
 */
class SearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * [Document.id][google.cloud.discoveryengine.v1beta.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1beta.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The document data snippet in the search response. Only fields that are
     * marked as retrievable are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Document document = 2;</code>
     */
    protected $document = null;
    /**
     * Google provided available scores.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.DoubleList> model_scores = 4;</code>
     */
    private $model_scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           [Document.id][google.cloud.discoveryengine.v1beta.Document.id] of the
     *           searched [Document][google.cloud.discoveryengine.v1beta.Document].
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Document $document
     *           The document data snippet in the search response. Only fields that are
     *           marked as retrievable are populated.
     *     @type array|\Google\Protobuf\Internal\MapField $model_scores
     *           Google provided available scores.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * [Document.id][google.cloud.discoveryengine.v1beta.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1beta.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Document.id][google.cloud.discoveryengine.v1beta.Document.id] of the
     * searched [Document][google.cloud.discoveryengine.v1beta.Document].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The document data snippet in the search response. Only fields that are
     * marked as retrievable are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Document document = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * The document data snippet in the search response. Only fields that are
     * marked as retrievable are populated.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Document document = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * Google provided available scores.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.DoubleList> model_scores = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getModelScores()
    {
        return $this->model_scores;
    }

    /**
     * Google provided available scores.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1beta.DoubleList> model_scores = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setModelScores($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\DoubleList::class);
        $this->model_scores = $arr;

        return $this;
    }

}


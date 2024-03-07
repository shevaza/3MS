<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/completion_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\CompleteQueryResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Suggestions as search queries.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CompleteQueryResponse.QuerySuggestion</code>
 */
class QuerySuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     */
    protected $suggestion = '';
    /**
     * The unique document field paths that serve as the source of this
     * suggestion if it was generated from completable fields.
     * This field is only populated for the document-completable model.
     *
     * Generated from protobuf field <code>repeated string completable_field_paths = 2;</code>
     */
    private $completable_field_paths;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $suggestion
     *           The suggestion for the query.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $completable_field_paths
     *           The unique document field paths that serve as the source of this
     *           suggestion if it was generated from completable fields.
     *           This field is only populated for the document-completable model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @return string
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggestion = $var;

        return $this;
    }

    /**
     * The unique document field paths that serve as the source of this
     * suggestion if it was generated from completable fields.
     * This field is only populated for the document-completable model.
     *
     * Generated from protobuf field <code>repeated string completable_field_paths = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompletableFieldPaths()
    {
        return $this->completable_field_paths;
    }

    /**
     * The unique document field paths that serve as the source of this
     * suggestion if it was generated from completable fields.
     * This field is only populated for the document-completable model.
     *
     * Generated from protobuf field <code>repeated string completable_field_paths = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompletableFieldPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->completable_field_paths = $arr;

        return $this;
    }

}



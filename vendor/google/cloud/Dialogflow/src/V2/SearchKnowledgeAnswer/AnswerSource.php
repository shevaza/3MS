<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\SearchKnowledgeAnswer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sources of the answers.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SearchKnowledgeAnswer.AnswerSource</code>
 */
class AnswerSource extends \Google\Protobuf\Internal\Message
{
    /**
     * The title of the article.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    private $title = '';
    /**
     * The URI of the article.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    private $uri = '';
    /**
     * The relevant snippet of the article.
     *
     * Generated from protobuf field <code>string snippet = 3;</code>
     */
    private $snippet = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           The title of the article.
     *     @type string $uri
     *           The URI of the article.
     *     @type string $snippet
     *           The relevant snippet of the article.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * The title of the article.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title of the article.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The URI of the article.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The URI of the article.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The relevant snippet of the article.
     *
     * Generated from protobuf field <code>string snippet = 3;</code>
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * The relevant snippet of the article.
     *
     * Generated from protobuf field <code>string snippet = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->snippet = $var;

        return $this;
    }

}


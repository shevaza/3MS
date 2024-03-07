<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents answer from "frequently asked questions".
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.FaqAnswer</code>
 */
class FaqAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     */
    private $answer = '';
    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this conversational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     */
    private $question = '';
    /**
     * Indicates which Knowledge Document this answer was extracted
     * from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/agent/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     */
    private $source = '';
    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     */
    private $metadata;
    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     */
    private $answer_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $answer
     *           The piece of text from the `source` knowledge base document.
     *     @type float $confidence
     *           The system's confidence score that this Knowledge answer is a good match
     *           for this conversational query, range from 0.0 (completely uncertain)
     *           to 1.0 (completely certain).
     *     @type string $question
     *           The corresponding FAQ question.
     *     @type string $source
     *           Indicates which Knowledge Document this answer was extracted
     *           from.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/agent/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           A map that contains metadata about the answer and the
     *           document from which it originates.
     *     @type string $answer_record
     *           The name of answer record, in the format of
     *           "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     *           ID>"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer = $var;

        return $this;
    }

    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this conversational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this conversational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->question = $var;

        return $this;
    }

    /**
     * Indicates which Knowledge Document this answer was extracted
     * from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/agent/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Indicates which Knowledge Document this answer was extracted
     * from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/agent/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_record = $var;

        return $this;
    }

}


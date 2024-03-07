<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1\GenerateContentResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Usage metadata about response(s).
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GenerateContentResponse.UsageMetadata</code>
 */
class UsageMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of tokens in the request.
     *
     * Generated from protobuf field <code>int32 prompt_token_count = 1;</code>
     */
    private $prompt_token_count = 0;
    /**
     * Number of tokens in the response(s).
     *
     * Generated from protobuf field <code>int32 candidates_token_count = 2;</code>
     */
    private $candidates_token_count = 0;
    /**
     * Generated from protobuf field <code>int32 total_token_count = 3;</code>
     */
    private $total_token_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prompt_token_count
     *           Number of tokens in the request.
     *     @type int $candidates_token_count
     *           Number of tokens in the response(s).
     *     @type int $total_token_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of tokens in the request.
     *
     * Generated from protobuf field <code>int32 prompt_token_count = 1;</code>
     * @return int
     */
    public function getPromptTokenCount()
    {
        return $this->prompt_token_count;
    }

    /**
     * Number of tokens in the request.
     *
     * Generated from protobuf field <code>int32 prompt_token_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPromptTokenCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->prompt_token_count = $var;

        return $this;
    }

    /**
     * Number of tokens in the response(s).
     *
     * Generated from protobuf field <code>int32 candidates_token_count = 2;</code>
     * @return int
     */
    public function getCandidatesTokenCount()
    {
        return $this->candidates_token_count;
    }

    /**
     * Number of tokens in the response(s).
     *
     * Generated from protobuf field <code>int32 candidates_token_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCandidatesTokenCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->candidates_token_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_token_count = 3;</code>
     * @return int
     */
    public function getTotalTokenCount()
    {
        return $this->total_token_count;
    }

    /**
     * Generated from protobuf field <code>int32 total_token_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalTokenCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_token_count = $var;

        return $this;
    }

}



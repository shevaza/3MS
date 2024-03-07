<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/mediatranslation/v1beta1/media_translation.proto

namespace Google\Cloud\MediaTranslation\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A streaming speech translation response corresponding to a portion of
 * the audio currently processed.
 *
 * Generated from protobuf message <code>google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse</code>
 */
class StreamingTranslateSpeechResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;
    /**
     * Output only. The translation result that is currently being processed (is_final could be
     * true or false).
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult result = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $result = null;
    /**
     * Output only. Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse.SpeechEventType speech_event_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $speech_event_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $error
     *           Output only. If set, returns a [google.rpc.Status][google.rpc.Status] message that
     *           specifies the error for the operation.
     *     @type \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechResult $result
     *           Output only. The translation result that is currently being processed (is_final could be
     *           true or false).
     *     @type int $speech_event_type
     *           Output only. Indicates the type of speech event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Mediatranslation\V1Beta1\MediaTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Output only. The translation result that is currently being processed (is_final could be
     * true or false).
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult result = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Output only. The translation result that is currently being processed (is_final could be
     * true or false).
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult result = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Output only. Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse.SpeechEventType speech_event_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpeechEventType()
    {
        return $this->speech_event_type;
    }

    /**
     * Output only. Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse.SpeechEventType speech_event_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpeechEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechResponse\SpeechEventType::class);
        $this->speech_event_type = $var;

        return $this;
    }

}


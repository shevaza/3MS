<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to set the feedback for a bot answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.SubmitAnswerFeedbackRequest</code>
 */
class SubmitAnswerFeedbackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session the feedback was sent to.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * Required. ID of the response to update its feedback. This is the same as
     * DetectIntentResponse.response_id.
     *
     * Generated from protobuf field <code>string response_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $response_id = '';
    /**
     * Required. Feedback provided for a bot answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AnswerFeedback answer_feedback = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $answer_feedback = null;
    /**
     * Optional. The mask to control which fields to update. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session the feedback was sent to.
     *     @type string $response_id
     *           Required. ID of the response to update its feedback. This is the same as
     *           DetectIntentResponse.response_id.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\AnswerFeedback $answer_feedback
     *           Required. Feedback provided for a bot answer.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The mask to control which fields to update. If the mask is not
     *           present, all fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session the feedback was sent to.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session the feedback was sent to.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Required. ID of the response to update its feedback. This is the same as
     * DetectIntentResponse.response_id.
     *
     * Generated from protobuf field <code>string response_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResponseId()
    {
        return $this->response_id;
    }

    /**
     * Required. ID of the response to update its feedback. This is the same as
     * DetectIntentResponse.response_id.
     *
     * Generated from protobuf field <code>string response_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResponseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->response_id = $var;

        return $this;
    }

    /**
     * Required. Feedback provided for a bot answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AnswerFeedback answer_feedback = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\AnswerFeedback|null
     */
    public function getAnswerFeedback()
    {
        return $this->answer_feedback;
    }

    public function hasAnswerFeedback()
    {
        return isset($this->answer_feedback);
    }

    public function clearAnswerFeedback()
    {
        unset($this->answer_feedback);
    }

    /**
     * Required. Feedback provided for a bot answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AnswerFeedback answer_feedback = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\AnswerFeedback $var
     * @return $this
     */
    public function setAnswerFeedback($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\AnswerFeedback::class);
        $this->answer_feedback = $var;

        return $this;
    }

    /**
     * Optional. The mask to control which fields to update. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The mask to control which fields to update. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PredictionService.DirectRawPredict][google.cloud.aiplatform.v1.PredictionService.DirectRawPredict].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DirectRawPredictRequest</code>
 */
class DirectRawPredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $endpoint = '';
    /**
     * Fully qualified name of the API method being invoked to perform
     * predictions.
     * Format:
     * `/namespace.Service/Method/`
     * Example:
     * `/tensorflow.serving.PredictionService/Predict`
     *
     * Generated from protobuf field <code>string method_name = 2;</code>
     */
    private $method_name = '';
    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>bytes input = 3;</code>
     */
    private $input = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to serve the prediction.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type string $method_name
     *           Fully qualified name of the API method being invoked to perform
     *           predictions.
     *           Format:
     *           `/namespace.Service/Method/`
     *           Example:
     *           `/tensorflow.serving.PredictionService/Predict`
     *     @type string $input
     *           The prediction input.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Fully qualified name of the API method being invoked to perform
     * predictions.
     * Format:
     * `/namespace.Service/Method/`
     * Example:
     * `/tensorflow.serving.PredictionService/Predict`
     *
     * Generated from protobuf field <code>string method_name = 2;</code>
     * @return string
     */
    public function getMethodName()
    {
        return $this->method_name;
    }

    /**
     * Fully qualified name of the API method being invoked to perform
     * predictions.
     * Format:
     * `/namespace.Service/Method/`
     * Example:
     * `/tensorflow.serving.PredictionService/Predict`
     *
     * Generated from protobuf field <code>string method_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMethodName($var)
    {
        GPBUtil::checkString($var, True);
        $this->method_name = $var;

        return $this;
    }

    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>bytes input = 3;</code>
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>bytes input = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkString($var, False);
        $this->input = $var;

        return $this;
    }

}


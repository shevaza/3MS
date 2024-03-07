<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataQualityDimensionResult provides a more detailed, per-dimension view of
 * the results.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityDimensionResult</code>
 */
class DataQualityDimensionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The dimension config specified in the DataQualitySpec, as is.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityDimension dimension = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dimension = null;
    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     */
    private $passed = false;
    /**
     * Output only. The dimension-level data quality score for this data scan job
     * if and only if the 'dimension' field is set.
     * The score ranges between [0, 100] (up to two decimal
     * points).
     *
     * Generated from protobuf field <code>optional float score = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\DataQualityDimension $dimension
     *           Output only. The dimension config specified in the DataQualitySpec, as is.
     *     @type bool $passed
     *           Whether the dimension passed or failed.
     *     @type float $score
     *           Output only. The dimension-level data quality score for this data scan job
     *           if and only if the 'dimension' field is set.
     *           The score ranges between [0, 100] (up to two decimal
     *           points).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The dimension config specified in the DataQualitySpec, as is.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityDimension dimension = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityDimension|null
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    public function hasDimension()
    {
        return isset($this->dimension);
    }

    public function clearDimension()
    {
        unset($this->dimension);
    }

    /**
     * Output only. The dimension config specified in the DataQualitySpec, as is.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityDimension dimension = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityDimension $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityDimension::class);
        $this->dimension = $var;

        return $this;
    }

    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     * @return bool
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * Whether the dimension passed or failed.
     *
     * Generated from protobuf field <code>bool passed = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPassed($var)
    {
        GPBUtil::checkBool($var);
        $this->passed = $var;

        return $this;
    }

    /**
     * Output only. The dimension-level data quality score for this data scan job
     * if and only if the 'dimension' field is set.
     * The score ranges between [0, 100] (up to two decimal
     * points).
     *
     * Generated from protobuf field <code>optional float score = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getScore()
    {
        return isset($this->score) ? $this->score : 0.0;
    }

    public function hasScore()
    {
        return isset($this->score);
    }

    public function clearScore()
    {
        unset($this->score);
    }

    /**
     * Output only. The dimension-level data quality score for this data scan job
     * if and only if the 'dimension' field is set.
     * The score ranges between [0, 100] (up to two decimal
     * points).
     *
     * Generated from protobuf field <code>optional float score = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}


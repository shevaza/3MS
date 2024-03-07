<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_service.proto

namespace Google\Cloud\AIPlatform\V1\FetchFeatureValuesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response structure in the format of key (feature name) and (feature) value
 * pair.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FetchFeatureValuesResponse.FeatureNameValuePairList</code>
 */
class FeatureNameValuePairList extends \Google\Protobuf\Internal\Message
{
    /**
     * List of feature names and values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FetchFeatureValuesResponse.FeatureNameValuePairList.FeatureNameValuePair features = 1;</code>
     */
    private $features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\FetchFeatureValuesResponse\FeatureNameValuePairList\FeatureNameValuePair>|\Google\Protobuf\Internal\RepeatedField $features
     *           List of feature names and values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of feature names and values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FetchFeatureValuesResponse.FeatureNameValuePairList.FeatureNameValuePair features = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * List of feature names and values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FetchFeatureValuesResponse.FeatureNameValuePairList.FeatureNameValuePair features = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\FetchFeatureValuesResponse\FeatureNameValuePairList\FeatureNameValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FetchFeatureValuesResponse\FeatureNameValuePairList\FeatureNameValuePair::class);
        $this->features = $arr;

        return $this;
    }

}


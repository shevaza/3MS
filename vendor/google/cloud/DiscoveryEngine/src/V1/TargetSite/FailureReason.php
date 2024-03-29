<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine.proto

namespace Google\Cloud\DiscoveryEngine\V1\TargetSite;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Site search indexing failure reasons.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.TargetSite.FailureReason</code>
 */
class FailureReason extends \Google\Protobuf\Internal\Message
{
    protected $failure;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason\QuotaFailure $quota_failure
     *           Failed due to insufficient quota.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SiteSearchEngine::initOnce();
        parent::__construct($data);
    }

    /**
     * Failed due to insufficient quota.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.FailureReason.QuotaFailure quota_failure = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason\QuotaFailure|null
     */
    public function getQuotaFailure()
    {
        return $this->readOneof(1);
    }

    public function hasQuotaFailure()
    {
        return $this->hasOneof(1);
    }

    /**
     * Failed due to insufficient quota.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TargetSite.FailureReason.QuotaFailure quota_failure = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason\QuotaFailure $var
     * @return $this
     */
    public function setQuotaFailure($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\TargetSite\FailureReason\QuotaFailure::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFailure()
    {
        return $this->whichOneof("failure");
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature.proto

namespace Google\Cloud\AIPlatform\V1\Feature;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of historical
 * [SnapshotAnalysis][google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysis]
 * or
 * [ImportFeaturesAnalysis][google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis]
 * stats requested by user, sorted by
 * [FeatureStatsAnomaly.start_time][google.cloud.aiplatform.v1.FeatureStatsAnomaly.start_time]
 * descending.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomaly</code>
 */
class MonitoringStatsAnomaly extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The objective for each stats.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomaly.Objective objective = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $objective = 0;
    /**
     * Output only. The stats and anomalies generated at specific timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly feature_stats_anomaly = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $feature_stats_anomaly = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $objective
     *           Output only. The objective for each stats.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly $feature_stats_anomaly
     *           Output only. The stats and anomalies generated at specific timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Feature::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The objective for each stats.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomaly.Objective objective = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * Output only. The objective for each stats.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomaly.Objective objective = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setObjective($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Feature\MonitoringStatsAnomaly\Objective::class);
        $this->objective = $var;

        return $this;
    }

    /**
     * Output only. The stats and anomalies generated at specific timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly feature_stats_anomaly = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly|null
     */
    public function getFeatureStatsAnomaly()
    {
        return $this->feature_stats_anomaly;
    }

    public function hasFeatureStatsAnomaly()
    {
        return isset($this->feature_stats_anomaly);
    }

    public function clearFeatureStatsAnomaly()
    {
        unset($this->feature_stats_anomaly);
    }

    /**
     * Output only. The stats and anomalies generated at specific timestamp.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly feature_stats_anomaly = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly $var
     * @return $this
     */
    public function setFeatureStatsAnomaly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly::class);
        $this->feature_stats_anomaly = $var;

        return $this;
    }

}



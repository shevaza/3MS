<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation_job.proto

namespace GPBMetadata\Google\Cloud\Datalabeling\V1Beta1;

class EvaluationJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/cloud/datalabeling/v1beta1/evaluation_job.proto!google.cloud.datalabeling.v1beta1/google/cloud/datalabeling/v1beta1/dataset.proto2google/cloud/datalabeling/v1beta1/evaluation.proto?google/cloud/datalabeling/v1beta1/human_annotation_config.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
EvaluationJob
name (	
description (	E
state (26.google.cloud.datalabeling.v1beta1.EvaluationJob.State
schedule (	
model_version (	U
evaluation_job_config (26.google.cloud.datalabeling.v1beta1.EvaluationJobConfig
annotation_spec_set (	"
label_missing_ground_truth (<
attempts	 (2*.google.cloud.datalabeling.v1beta1.Attempt/
create_time
 (2.google.protobuf.Timestamp"S
State
STATE_UNSPECIFIED 
	SCHEDULED
RUNNING

PAUSED
STOPPED:b�A_
)datalabeling.googleapis.com/EvaluationJob2projects/{project}/evaluationJobs/{evaluation_job}"�
EvaluationJobConfigc
image_classification_config (2<.google.cloud.datalabeling.v1beta1.ImageClassificationConfigH U
bounding_poly_config (25.google.cloud.datalabeling.v1beta1.BoundingPolyConfigH a
text_classification_config (2;.google.cloud.datalabeling.v1beta1.TextClassificationConfigH D
input_config (2..google.cloud.datalabeling.v1beta1.InputConfigN
evaluation_config (23.google.cloud.datalabeling.v1beta1.EvaluationConfigY
human_annotation_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigl
bigquery_import_keys	 (2N.google.cloud.datalabeling.v1beta1.EvaluationJobConfig.BigqueryImportKeysEntry
example_count
 (!
example_sample_percentage (`
evaluation_job_alert_config (2;.google.cloud.datalabeling.v1beta1.EvaluationJobAlertConfig9
BigqueryImportKeysEntry
key (	
value (	:8B!
human_annotation_request_config"X
EvaluationJobAlertConfig
email (	-
%min_acceptable_mean_average_precision ("i
Attempt0
attempt_time (2.google.protobuf.Timestamp,
partial_failures (2.google.rpc.StatusB�
%com.google.cloud.datalabeling.v1beta1PZIcloud.google.com/go/datalabeling/apiv1beta1/datalabelingpb;datalabelingpb�!Google.Cloud.DataLabeling.V1Beta1�!Google\\Cloud\\DataLabeling\\V1beta1�$Google::Cloud::DataLabeling::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


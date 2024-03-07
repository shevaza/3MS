<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/analytics_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class AnalyticsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\ExportConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/retail/v2/analytics_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto*google/cloud/retail/v2/export_config.proto#google/longrunning/operations.proto2�
AnalyticsService�
ExportAnalyticsMetrics5.google.cloud.retail.v2.ExportAnalyticsMetricsRequest.google.longrunning.Operation"��A^
5google.cloud.retail.v2.ExportAnalyticsMetricsResponse%google.cloud.retail.v2.ExportMetadata���K"F/v2/{catalog=projects/*/locations/*/catalogs/*}:exportAnalyticsMetrics:*I�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BAnalyticsServiceProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


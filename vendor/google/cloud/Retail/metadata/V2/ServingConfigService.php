<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class ServingConfigService
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
        \GPBMetadata\Google\Cloud\Retail\V2\ServingConfig::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/retail/v2/serving_config_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto+google/cloud/retail/v2/serving_config.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateServingConfigRequest5
parent (	B%�A�A
retail.googleapis.com/CatalogB
serving_config (2%.google.cloud.retail.v2.ServingConfigB�A
serving_config_id (	B�A"�
UpdateServingConfigRequestB
serving_config (2%.google.cloud.retail.v2.ServingConfigB�A/
update_mask (2.google.protobuf.FieldMask"W
DeleteServingConfigRequest9
name (	B+�A�A%
#retail.googleapis.com/ServingConfig"T
GetServingConfigRequest9
name (	B+�A�A%
#retail.googleapis.com/ServingConfig"�
ListServingConfigsRequest5
parent (	B%�A�A
retail.googleapis.com/Catalog
	page_size (B�A

page_token (	B�A"u
ListServingConfigsResponse>
serving_configs (2%.google.cloud.retail.v2.ServingConfig
next_page_token (	"q
AddControlRequestC
serving_config (	B+�A�A%
#retail.googleapis.com/ServingConfig

control_id (	B�A"t
RemoveControlRequestC
serving_config (	B+�A�A%
#retail.googleapis.com/ServingConfig

control_id (	B�A2�
ServingConfigService�
CreateServingConfig2.google.cloud.retail.v2.CreateServingConfigRequest%.google.cloud.retail.v2.ServingConfig"�A\'parent,serving_config,serving_config_id���O"=/v2/{parent=projects/*/locations/*/catalogs/*}/servingConfigs:serving_config�
DeleteServingConfig2.google.cloud.retail.v2.DeleteServingConfigRequest.google.protobuf.Empty"L�Aname���?*=/v2/{name=projects/*/locations/*/catalogs/*/servingConfigs/*}�
UpdateServingConfig2.google.cloud.retail.v2.UpdateServingConfigRequest%.google.cloud.retail.v2.ServingConfig"��Aserving_config,update_mask���^2L/v2/{serving_config.name=projects/*/locations/*/catalogs/*/servingConfigs/*}:serving_config�
GetServingConfig/.google.cloud.retail.v2.GetServingConfigRequest%.google.cloud.retail.v2.ServingConfig"L�Aname���?=/v2/{name=projects/*/locations/*/catalogs/*/servingConfigs/*}�
ListServingConfigs1.google.cloud.retail.v2.ListServingConfigsRequest2.google.cloud.retail.v2.ListServingConfigsResponse"N�Aparent���?=/v2/{parent=projects/*/locations/*/catalogs/*}/servingConfigs�

AddControl).google.cloud.retail.v2.AddControlRequest%.google.cloud.retail.v2.ServingConfig"n�Aserving_config���W"R/v2/{serving_config=projects/*/locations/*/catalogs/*/servingConfigs/*}:addControl:*�
RemoveControl,.google.cloud.retail.v2.RemoveControlRequest%.google.cloud.retail.v2.ServingConfig"q�Aserving_config���Z"U/v2/{serving_config=projects/*/locations/*/catalogs/*/servingConfigs/*}:removeControl:*I�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BServingConfigServiceProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


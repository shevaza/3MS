<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace GPBMetadata\Google\Api\Servicemanagement\V1;

class Servicemanager
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
        \GPBMetadata\Google\Api\Service::initOnce();
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
4google/api/servicemanagement/v1/servicemanager.protogoogle.api.servicemanagement.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/service.proto/google/api/servicemanagement/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/any.protogoogle/protobuf/empty.proto"r
ListServicesRequest
producer_project_id (	
	page_size (

page_token (	
consumer_id (	B"r
ListServicesResponseA
services (2/.google.api.servicemanagement.v1.ManagedService
next_page_token (	".
GetServiceRequest
service_name (	B�A"]
CreateServiceRequestE
service (2/.google.api.servicemanagement.v1.ManagedServiceB�A"1
DeleteServiceRequest
service_name (	B�A"3
UndeleteServiceRequest
service_name (	B�A"[
UndeleteServiceResponse@
service (2/.google.api.servicemanagement.v1.ManagedService"�
GetServiceConfigRequest
service_name (	B�A
	config_id (	B�AQ
view (2C.google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView"!

ConfigView	
BASIC 
FULL"]
ListServiceConfigsRequest
service_name (	B�A

page_token (	
	page_size ("c
ListServiceConfigsResponse,
service_configs (2.google.api.Service
next_page_token (	"i
CreateServiceConfigRequest
service_name (	B�A0
service_config (2.google.api.ServiceB�A"�
SubmitConfigSourceRequest
service_name (	B�AI
config_source (2-.google.api.servicemanagement.v1.ConfigSourceB�A
validate_only (B�A"I
SubmitConfigSourceResponse+
service_config (2.google.api.Service"x
CreateServiceRolloutRequest
service_name (	B�A>
rollout (2(.google.api.servicemanagement.v1.RolloutB�A"s
ListServiceRolloutsRequest
service_name (	B�A

page_token (	
	page_size (
filter (	B�A"r
ListServiceRolloutsResponse:
rollouts (2(.google.api.servicemanagement.v1.Rollout
next_page_token (	"N
GetServiceRolloutRequest
service_name (	B�A

rollout_id (	B�A"
EnableServiceResponse"{
GenerateConfigReportRequest-

new_config (2.google.protobuf.AnyB�A-

old_config (2.google.protobuf.AnyB�A"�
GenerateConfigReportResponse
service_name (	

id (	E
change_reports (2-.google.api.servicemanagement.v1.ChangeReport@
diagnostics (2+.google.api.servicemanagement.v1.Diagnostic2�
ServiceManager�
ListServices4.google.api.servicemanagement.v1.ListServicesRequest5.google.api.servicemanagement.v1.ListServicesResponse"6�Aproducer_project_id,consumer_id���/v1/services�

GetService2.google.api.servicemanagement.v1.GetServiceRequest/.google.api.servicemanagement.v1.ManagedService"2�Aservice_name���/v1/services/{service_name}�
CreateService5.google.api.servicemanagement.v1.CreateServiceRequest.google.longrunning.Operation"��Ac
.google.api.servicemanagement.v1.ManagedService1google.api.servicemanagement.v1.OperationMetadata�Aservice���"/v1/services:service�
DeleteService5.google.api.servicemanagement.v1.DeleteServiceRequest.google.longrunning.Operation"�AJ
google.protobuf.Empty1google.api.servicemanagement.v1.OperationMetadata�Aservice_name���*/v1/services/{service_name}�
UndeleteService7.google.api.servicemanagement.v1.UndeleteServiceRequest.google.longrunning.Operation"��Al
7google.api.servicemanagement.v1.UndeleteServiceResponse1google.api.servicemanagement.v1.OperationMetadata�Aservice_name���&"$/v1/services/{service_name}:undelete�
ListServiceConfigs:.google.api.servicemanagement.v1.ListServiceConfigsRequest;.google.api.servicemanagement.v1.ListServiceConfigsResponse":�Aservice_name���%#/v1/services/{service_name}/configs�
GetServiceConfig8.google.api.servicemanagement.v1.GetServiceConfigRequest.google.api.Service"{�Aservice_name,config_id,view���W//v1/services/{service_name}/configs/{config_id}Z$"/v1/services/{service_name}/config�
CreateServiceConfig;.google.api.servicemanagement.v1.CreateServiceConfigRequest.google.api.Service"Y�Aservice_name,service_config���5"#/v1/services/{service_name}/configs:service_config�
SubmitConfigSource:.google.api.servicemanagement.v1.SubmitConfigSourceRequest.google.longrunning.Operation"��Ao
:google.api.servicemanagement.v1.SubmitConfigSourceResponse1google.api.servicemanagement.v1.OperationMetadata�A(service_name,config_source,validate_only���/"*/v1/services/{service_name}/configs:submit:*�
ListServiceRollouts;.google.api.servicemanagement.v1.ListServiceRolloutsRequest<.google.api.servicemanagement.v1.ListServiceRolloutsResponse"B�Aservice_name,filter���&$/v1/services/{service_name}/rollouts�
GetServiceRollout9.google.api.servicemanagement.v1.GetServiceRolloutRequest(.google.api.servicemanagement.v1.Rollout"S�Aservice_name,rollout_id���31/v1/services/{service_name}/rollouts/{rollout_id}�
CreateServiceRollout<.google.api.servicemanagement.v1.CreateServiceRolloutRequest.google.longrunning.Operation"��A\\
\'google.api.servicemanagement.v1.Rollout1google.api.servicemanagement.v1.OperationMetadata�Aservice_name,rollout���/"$/v1/services/{service_name}/rollouts:rollout�
GenerateConfigReport<.google.api.servicemanagement.v1.GenerateConfigReportRequest=.google.api.servicemanagement.v1.GenerateConfigReportResponse"D�Anew_config,old_config���&"!/v1/services:generateConfigReport:*��A servicemanagement.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-only,https://www.googleapis.com/auth/service.management,https://www.googleapis.com/auth/service.management.readonlyB�
#com.google.api.servicemanagement.v1BServiceManagerProtoPZScloud.google.com/go/servicemanagement/apiv1/servicemanagementpb;servicemanagementpb�GASM�!Google.Cloud.ServiceManagement.V1�!Google\\Cloud\\ServiceManagement\\V1�$Google::Cloud::ServiceManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


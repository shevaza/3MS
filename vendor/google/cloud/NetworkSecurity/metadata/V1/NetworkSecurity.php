<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/network_security.proto

namespace GPBMetadata\Google\Cloud\Networksecurity\V1;

class NetworkSecurity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\AuthorizationPolicy::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ClientTlsPolicy::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ServerTlsPolicy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
6google/cloud/networksecurity/v1/network_security.protogoogle.cloud.networksecurity.v1google/api/client.proto:google/cloud/networksecurity/v1/authorization_policy.proto7google/cloud/networksecurity/v1/client_tls_policy.proto7google/cloud/networksecurity/v1/server_tls_policy.proto#google/longrunning/operations.proto2� 
NetworkSecurity�
ListAuthorizationPoliciesA.google.cloud.networksecurity.v1.ListAuthorizationPoliciesRequestB.google.cloud.networksecurity.v1.ListAuthorizationPoliciesResponse"J�Aparent���;9/v1/{parent=projects/*/locations/*}/authorizationPolicies�
GetAuthorizationPolicy>.google.cloud.networksecurity.v1.GetAuthorizationPolicyRequest4.google.cloud.networksecurity.v1.AuthorizationPolicy"H�Aname���;9/v1/{name=projects/*/locations/*/authorizationPolicies/*}�
CreateAuthorizationPolicyA.google.cloud.networksecurity.v1.CreateAuthorizationPolicyRequest.google.longrunning.Operation"��AH
AuthorizationPolicy1google.cloud.networksecurity.v1.OperationMetadata�A3parent,authorization_policy,authorization_policy_id���Q"9/v1/{parent=projects/*/locations/*}/authorizationPolicies:authorization_policy�
UpdateAuthorizationPolicyA.google.cloud.networksecurity.v1.UpdateAuthorizationPolicyRequest.google.longrunning.Operation"��AH
AuthorizationPolicy1google.cloud.networksecurity.v1.OperationMetadata�A authorization_policy,update_mask���f2N/v1/{authorization_policy.name=projects/*/locations/*/authorizationPolicies/*}:authorization_policy�
DeleteAuthorizationPolicyA.google.cloud.networksecurity.v1.DeleteAuthorizationPolicyRequest.google.longrunning.Operation"��AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadata�Aname���;*9/v1/{name=projects/*/locations/*/authorizationPolicies/*}�
ListServerTlsPolicies=.google.cloud.networksecurity.v1.ListServerTlsPoliciesRequest>.google.cloud.networksecurity.v1.ListServerTlsPoliciesResponse"F�Aparent���75/v1/{parent=projects/*/locations/*}/serverTlsPolicies�
GetServerTlsPolicy:.google.cloud.networksecurity.v1.GetServerTlsPolicyRequest0.google.cloud.networksecurity.v1.ServerTlsPolicy"D�Aname���75/v1/{name=projects/*/locations/*/serverTlsPolicies/*}�
CreateServerTlsPolicy=.google.cloud.networksecurity.v1.CreateServerTlsPolicyRequest.google.longrunning.Operation"��AD
ServerTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�A-parent,server_tls_policy,server_tls_policy_id���J"5/v1/{parent=projects/*/locations/*}/serverTlsPolicies:server_tls_policy�
UpdateServerTlsPolicy=.google.cloud.networksecurity.v1.UpdateServerTlsPolicyRequest.google.longrunning.Operation"��AD
ServerTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�Aserver_tls_policy,update_mask���\\2G/v1/{server_tls_policy.name=projects/*/locations/*/serverTlsPolicies/*}:server_tls_policy�
DeleteServerTlsPolicy=.google.cloud.networksecurity.v1.DeleteServerTlsPolicyRequest.google.longrunning.Operation"��AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadata�Aname���7*5/v1/{name=projects/*/locations/*/serverTlsPolicies/*}�
ListClientTlsPolicies=.google.cloud.networksecurity.v1.ListClientTlsPoliciesRequest>.google.cloud.networksecurity.v1.ListClientTlsPoliciesResponse"F�Aparent���75/v1/{parent=projects/*/locations/*}/clientTlsPolicies�
GetClientTlsPolicy:.google.cloud.networksecurity.v1.GetClientTlsPolicyRequest0.google.cloud.networksecurity.v1.ClientTlsPolicy"D�Aname���75/v1/{name=projects/*/locations/*/clientTlsPolicies/*}�
CreateClientTlsPolicy=.google.cloud.networksecurity.v1.CreateClientTlsPolicyRequest.google.longrunning.Operation"��AD
ClientTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�A-parent,client_tls_policy,client_tls_policy_id���J"5/v1/{parent=projects/*/locations/*}/clientTlsPolicies:client_tls_policy�
UpdateClientTlsPolicy=.google.cloud.networksecurity.v1.UpdateClientTlsPolicyRequest.google.longrunning.Operation"��AD
ClientTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�Aclient_tls_policy,update_mask���\\2G/v1/{client_tls_policy.name=projects/*/locations/*/clientTlsPolicies/*}:client_tls_policy�
DeleteClientTlsPolicy=.google.cloud.networksecurity.v1.DeleteClientTlsPolicyRequest.google.longrunning.Operation"��AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadata�Aname���7*5/v1/{name=projects/*/locations/*/clientTlsPolicies/*}R�Anetworksecurity.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.networksecurity.v1PZMcloud.google.com/go/networksecurity/apiv1/networksecuritypb;networksecuritypb�Google.Cloud.NetworkSecurity.V1�Google\\Cloud\\NetworkSecurity\\V1�"Google::Cloud::NetworkSecurity::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


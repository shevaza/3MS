<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/service.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1Alpha;

class Service
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
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�y
*google/cloud/alloydb/v1alpha/service.protogoogle.cloud.alloydb.v1alphagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/alloydb/v1alpha/resources.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ListClustersRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"}
ListClustersResponse7
clusters (2%.google.cloud.alloydb.v1alpha.Cluster
next_page_token (	
unreachable (	"�
GetClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster<
view (2).google.cloud.alloydb.v1alpha.ClusterViewB�A"�
CreateSecondaryClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A;
cluster (2%.google.cloud.alloydb.v1alpha.ClusterB�A

request_id (	B�A
validate_only (B�A"�
CreateClusterRequest6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A;
cluster (2%.google.cloud.alloydb.v1alpha.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A;
cluster (2%.google.cloud.alloydb.v1alpha.ClusterB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A
force (B�A"�
PromoteClusterRequest4
name (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
etag (	B�A
validate_only (B�A"�
RestoreClusterRequestC
backup_source (2*.google.cloud.alloydb.v1alpha.BackupSourceH X
continuous_backup_source (24.google.cloud.alloydb.v1alpha.ContinuousBackupSourceH 6
parent (	B&�A�A alloydb.googleapis.com/Cluster

cluster_id (	B�A;
cluster (2%.google.cloud.alloydb.v1alpha.ClusterB�A

request_id (	B�A
validate_only (B�AB
source"�
ListInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
	page_size (B�A

page_token (	
filter (	B�A
order_by (	B�A"�
ListInstancesResponse9
	instances (2&.google.cloud.alloydb.v1alpha.Instance
next_page_token (	
unreachable (	"�
GetInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance8
view (2*.google.cloud.alloydb.v1alpha.InstanceView"�
CreateInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A=
instance (2&.google.cloud.alloydb.v1alpha.InstanceB�A

request_id (	B�A
validate_only (B�A"�
CreateSecondaryInstanceRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Instance
instance_id (	B�A=
instance (2&.google.cloud.alloydb.v1alpha.InstanceB�A

request_id (	B�A
validate_only (B�A"t
CreateInstanceRequestsZ
create_instance_requests (23.google.cloud.alloydb.v1alpha.CreateInstanceRequestB�A"�
BatchCreateInstancesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/InstanceK
requests (24.google.cloud.alloydb.v1alpha.CreateInstanceRequestsB�A

request_id (	B�A"Y
BatchCreateInstancesResponse9
	instances (2&.google.cloud.alloydb.v1alpha.Instance"�
BatchCreateInstancesMetadata
instance_targets (	k
instance_statuses (2P.google.cloud.alloydb.v1alpha.BatchCreateInstancesMetadata.InstanceStatusesEntryp
InstanceStatusesEntry
key (	F
value (27.google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus:8"�
BatchCreateInstanceStatusL
state (2=.google.cloud.alloydb.v1alpha.BatchCreateInstanceStatus.State
	error_msg (	!
error (2.google.rpc.StatusA
type (23.google.cloud.alloydb.v1alpha.Instance.InstanceType"v
State
STATE_UNSPECIFIED 
PENDING_CREATE	
READY
CREATING
DELETING

FAILED
ROLLED_BACK"�
UpdateInstanceRequest4
update_mask (2.google.protobuf.FieldMaskB�A=
instance (2&.google.cloud.alloydb.v1alpha.InstanceB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
etag (	B�A
validate_only (B�A"�
FailoverInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"�
InjectFaultRequestS

fault_type (2:.google.cloud.alloydb.v1alpha.InjectFaultRequest.FaultTypeB�A5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"4
	FaultType
FAULT_TYPE_UNSPECIFIED 
STOP_VM"�
RestartInstanceRequest5
name (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A
validate_only (B�A"�
ListBackupsRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	page_size (

page_token (	
filter (	
order_by (	"z
ListBackupsResponse5
backups (2$.google.cloud.alloydb.v1alpha.Backup
next_page_token (	
unreachable (	"G
GetBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup"�
CreateBackupRequest5
parent (	B%�A�Aalloydb.googleapis.com/Backup
	backup_id (	B�A9
backup (2$.google.cloud.alloydb.v1alpha.BackupB�A

request_id (	B�A
validate_only (B�A"�
UpdateBackupRequest4
update_mask (2.google.protobuf.FieldMaskB�A9
backup (2$.google.cloud.alloydb.v1alpha.BackupB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"�
DeleteBackupRequest3
name (	B%�A�A
alloydb.googleapis.com/Backup

request_id (	B�A
validate_only (B�A
etag (	B�A"�
!ListSupportedDatabaseFlagsRequestD
parent (	B4�A�A.,alloydb.googleapis.com/SupportedDatabaseFlag
	page_size (

page_token (	"�
"ListSupportedDatabaseFlagsResponseU
supported_database_flags (23.google.cloud.alloydb.v1alpha.SupportedDatabaseFlag
next_page_token (	"�
 GenerateClientCertificateRequest6
parent (	B&�A�A 
alloydb.googleapis.com/Cluster

request_id (	B�A
pem_csr (	B�A5
cert_duration (2.google.protobuf.DurationB�A

public_key (	B�A"
use_metadata_exchange (B�A"}
!GenerateClientCertificateResponse
pem_certificate (	B�A"
pem_certificate_chain (	B�A
ca_cert (	B�A"l
GetConnectionInfoRequest7
parent (	B\'�A�A!
alloydb.googleapis.com/Instance

request_id (	B�A"�
OperationMetadataj
batch_create_instances_metadata (2:.google.cloud.alloydb.v1alpha.BatchCreateInstancesMetadataB�AH 4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AB
request_specific"�
ListUsersRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"t
ListUsersResponse1
users (2".google.cloud.alloydb.v1alpha.User
next_page_token (	
unreachable (	"C
GetUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User"�
CreateUserRequest3
parent (	B#�A�Aalloydb.googleapis.com/User
user_id (	B�A5
user (2".google.cloud.alloydb.v1alpha.UserB�A

request_id (	B�A
validate_only (B�A"�
UpdateUserRequest4
update_mask (2.google.protobuf.FieldMaskB�A5
user (2".google.cloud.alloydb.v1alpha.UserB�A

request_id (	B�A
validate_only (B�A
allow_missing (B�A"{
DeleteUserRequest1
name (	B#�A�A
alloydb.googleapis.com/User

request_id (	B�A
validate_only (B�A"�
ListDatabasesRequest7
parent (	B\'�A�A!alloydb.googleapis.com/Database
	page_size (B�A

page_token (	B�A
filter (	B�A"k
ListDatabasesResponse9
	databases (2&.google.cloud.alloydb.v1alpha.Database
next_page_token (	2�6
AlloyDBAdmin�
ListClusters1.google.cloud.alloydb.v1alpha.ListClustersRequest2.google.cloud.alloydb.v1alpha.ListClustersResponse"B�Aparent���31/v1alpha/{parent=projects/*/locations/*}/clusters�

GetCluster/.google.cloud.alloydb.v1alpha.GetClusterRequest%.google.cloud.alloydb.v1alpha.Cluster"@�Aname���31/v1alpha/{name=projects/*/locations/*/clusters/*}�
CreateCluster2.google.cloud.alloydb.v1alpha.CreateClusterRequest.google.longrunning.Operation"}�A
ClusterOperationMetadata�Aparent,cluster,cluster_id���<"1/v1alpha/{parent=projects/*/locations/*}/clusters:cluster�
UpdateCluster2.google.cloud.alloydb.v1alpha.UpdateClusterRequest.google.longrunning.Operation"�A
ClusterOperationMetadata�Acluster,update_mask���D29/v1alpha/{cluster.name=projects/*/locations/*/clusters/*}:cluster�
DeleteCluster2.google.cloud.alloydb.v1alpha.DeleteClusterRequest.google.longrunning.Operation"m�A*
google.protobuf.EmptyOperationMetadata�Aname���3*1/v1alpha/{name=projects/*/locations/*/clusters/*}�
PromoteCluster3.google.cloud.alloydb.v1alpha.PromoteClusterRequest.google.longrunning.Operation"j�A
ClusterOperationMetadata�Aname���>"9/v1alpha/{name=projects/*/locations/*/clusters/*}:promote:*�
RestoreCluster3.google.cloud.alloydb.v1alpha.RestoreClusterRequest.google.longrunning.Operation"c�A
ClusterOperationMetadata���>"9/v1alpha/{parent=projects/*/locations/*}/clusters:restore:*�
CreateSecondaryCluster;.google.cloud.alloydb.v1alpha.CreateSecondaryClusterRequest.google.longrunning.Operation"��A
ClusterOperationMetadata�Aparent,cluster,cluster_id���L"A/v1alpha/{parent=projects/*/locations/*}/clusters:createsecondary:cluster�
ListInstances2.google.cloud.alloydb.v1alpha.ListInstancesRequest3.google.cloud.alloydb.v1alpha.ListInstancesResponse"N�Aparent���?=/v1alpha/{parent=projects/*/locations/*/clusters/*}/instances�
GetInstance0.google.cloud.alloydb.v1alpha.GetInstanceRequest&.google.cloud.alloydb.v1alpha.Instance"L�Aname���?=/v1alpha/{name=projects/*/locations/*/clusters/*/instances/*}�
CreateInstance3.google.cloud.alloydb.v1alpha.CreateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Aparent,instance,instance_id���I"=/v1alpha/{parent=projects/*/locations/*/clusters/*}/instances:instance�
CreateSecondaryInstance<.google.cloud.alloydb.v1alpha.CreateSecondaryInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Aparent,instance,instance_id���Y"M/v1alpha/{parent=projects/*/locations/*/clusters/*}/instances:createsecondary:instance�
BatchCreateInstances9.google.cloud.alloydb.v1alpha.BatchCreateInstancesRequest.google.longrunning.Operation"��A1
BatchCreateInstancesResponseOperationMetadata���U"I/v1alpha/{parent=projects/*/locations/*/clusters/*}/instances:batchCreate:requests�
UpdateInstance3.google.cloud.alloydb.v1alpha.UpdateInstanceRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Ainstance,update_mask���R2F/v1alpha/{instance.name=projects/*/locations/*/clusters/*/instances/*}:instance�
DeleteInstance3.google.cloud.alloydb.v1alpha.DeleteInstanceRequest.google.longrunning.Operation"y�A*
google.protobuf.EmptyOperationMetadata�Aname���?*=/v1alpha/{name=projects/*/locations/*/clusters/*/instances/*}�
FailoverInstance5.google.cloud.alloydb.v1alpha.FailoverInstanceRequest.google.longrunning.Operation"x�A
InstanceOperationMetadata�Aname���K"F/v1alpha/{name=projects/*/locations/*/clusters/*/instances/*}:failover:*�
InjectFault0.google.cloud.alloydb.v1alpha.InjectFaultRequest.google.longrunning.Operation"��A
InstanceOperationMetadata�Afault_type,name���N"I/v1alpha/{name=projects/*/locations/*/clusters/*/instances/*}:injectFault:*�
RestartInstance4.google.cloud.alloydb.v1alpha.RestartInstanceRequest.google.longrunning.Operation"w�A
InstanceOperationMetadata�Aname���J"E/v1alpha/{name=projects/*/locations/*/clusters/*/instances/*}:restart:*�
ListBackups0.google.cloud.alloydb.v1alpha.ListBackupsRequest1.google.cloud.alloydb.v1alpha.ListBackupsResponse"A�Aparent���20/v1alpha/{parent=projects/*/locations/*}/backups�
	GetBackup..google.cloud.alloydb.v1alpha.GetBackupRequest$.google.cloud.alloydb.v1alpha.Backup"?�Aname���20/v1alpha/{name=projects/*/locations/*/backups/*}�
CreateBackup1.google.cloud.alloydb.v1alpha.CreateBackupRequest.google.longrunning.Operation"x�A
BackupOperationMetadata�Aparent,backup,backup_id���:"0/v1alpha/{parent=projects/*/locations/*}/backups:backup�
UpdateBackup1.google.cloud.alloydb.v1alpha.UpdateBackupRequest.google.longrunning.Operation"z�A
BackupOperationMetadata�Abackup,update_mask���A27/v1alpha/{backup.name=projects/*/locations/*/backups/*}:backup�
DeleteBackup1.google.cloud.alloydb.v1alpha.DeleteBackupRequest.google.longrunning.Operation"l�A*
google.protobuf.EmptyOperationMetadata�Aname���2*0/v1alpha/{name=projects/*/locations/*/backups/*}�
ListSupportedDatabaseFlags?.google.cloud.alloydb.v1alpha.ListSupportedDatabaseFlagsRequest@.google.cloud.alloydb.v1alpha.ListSupportedDatabaseFlagsResponse"P�Aparent���A?/v1alpha/{parent=projects/*/locations/*}/supportedDatabaseFlags�
GenerateClientCertificate>.google.cloud.alloydb.v1alpha.GenerateClientCertificateRequest?.google.cloud.alloydb.v1alpha.GenerateClientCertificateResponse"a�Aparent���R"M/v1alpha/{parent=projects/*/locations/*/clusters/*}:generateClientCertificate:*�
GetConnectionInfo6.google.cloud.alloydb.v1alpha.GetConnectionInfoRequest,.google.cloud.alloydb.v1alpha.ConnectionInfo"_�Aparent���PN/v1alpha/{parent=projects/*/locations/*/clusters/*/instances/*}/connectionInfo�
	ListUsers..google.cloud.alloydb.v1alpha.ListUsersRequest/.google.cloud.alloydb.v1alpha.ListUsersResponse"J�Aparent���;9/v1alpha/{parent=projects/*/locations/*/clusters/*}/users�
GetUser,.google.cloud.alloydb.v1alpha.GetUserRequest".google.cloud.alloydb.v1alpha.User"H�Aname���;9/v1alpha/{name=projects/*/locations/*/clusters/*/users/*}�

CreateUser/.google.cloud.alloydb.v1alpha.CreateUserRequest".google.cloud.alloydb.v1alpha.User"]�Aparent,user,user_id���A"9/v1alpha/{parent=projects/*/locations/*/clusters/*}/users:user�

UpdateUser/.google.cloud.alloydb.v1alpha.UpdateUserRequest".google.cloud.alloydb.v1alpha.User"_�Auser,update_mask���F2>/v1alpha/{user.name=projects/*/locations/*/clusters/*/users/*}:user�

DeleteUser/.google.cloud.alloydb.v1alpha.DeleteUserRequest.google.protobuf.Empty"H�Aname���;*9/v1alpha/{name=projects/*/locations/*/clusters/*/users/*}�
ListDatabases2.google.cloud.alloydb.v1alpha.ListDatabasesRequest3.google.cloud.alloydb.v1alpha.ListDatabasesResponse"N�Aparent���?=/v1alpha/{parent=projects/*/locations/*/clusters/*}/databasesJ�Aalloydb.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.alloydb.v1alphaBServiceProtoPZ:cloud.google.com/go/alloydb/apiv1alpha/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1Alpha�Google\\Cloud\\AlloyDb\\V1alpha�Google::Cloud::AlloyDB::V1alphabproto3'
        , true);

        static::$is_initialized = true;
    }
}


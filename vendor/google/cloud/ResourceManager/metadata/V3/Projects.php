<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace GPBMetadata\Google\Cloud\Resourcemanager\V3;

class Projects
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
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�#
.google/cloud/resourcemanager/v3/projects.protogoogle.cloud.resourcemanager.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Project
name (	B�A
parent (	B�A

project_id (	B�AB
state (2..google.cloud.resourcemanager.v3.Project.StateB�A
display_name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A
etag	 (	B�AI
labels
 (24.google.cloud.resourcemanager.v3.Project.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8"@
State
STATE_UNSPECIFIED 

ACTIVE
DELETE_REQUESTED:G�AD
+cloudresourcemanager.googleapis.com/Projectprojects/{project}R"V
GetProjectRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project"|
ListProjectsRequest
parent (	B	�A�A*

page_token (	B�A
	page_size (B�A
show_deleted (B�A"k
ListProjectsResponse:
projects (2(.google.cloud.resourcemanager.v3.Project
next_page_token (	"\\
SearchProjectsRequest
query (	B�A

page_token (	B�A
	page_size (B�A"m
SearchProjectsResponse:
projects (2(.google.cloud.resourcemanager.v3.Project
next_page_token (	"V
CreateProjectRequest>
project (2(.google.cloud.resourcemanager.v3.ProjectB�A"i
CreateProjectMetadata/
create_time (2.google.protobuf.Timestamp
gettable (
ready ("�
UpdateProjectRequest>
project (2(.google.cloud.resourcemanager.v3.ProjectB�A4
update_mask (2.google.protobuf.FieldMaskB�A"
UpdateProjectMetadata"~
MoveProjectRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project%
destination_parent (	B	�A�A*"
MoveProjectMetadata"Y
DeleteProjectRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project"
DeleteProjectMetadata"[
UndeleteProjectRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project"
UndeleteProjectMetadata2�
Projects�

GetProject2.google.cloud.resourcemanager.v3.GetProjectRequest(.google.cloud.resourcemanager.v3.Project"$�Aname���/v3/{name=projects/*}�
ListProjects4.google.cloud.resourcemanager.v3.ListProjectsRequest5.google.cloud.resourcemanager.v3.ListProjectsResponse"�Aparent���/v3/projects�
SearchProjects6.google.cloud.resourcemanager.v3.SearchProjectsRequest7.google.cloud.resourcemanager.v3.SearchProjectsResponse"#�Aquery���/v3/projects:search�
CreateProject5.google.cloud.resourcemanager.v3.CreateProjectRequest.google.longrunning.Operation"J�A 
ProjectCreateProjectMetadata�Aproject���"/v3/projects:project�
UpdateProject5.google.cloud.resourcemanager.v3.UpdateProjectRequest.google.longrunning.Operation"g�A 
ProjectUpdateProjectMetadata�Aproject,update_mask���(2/v3/{project.name=projects/*}:project�
MoveProject3.google.cloud.resourcemanager.v3.MoveProjectRequest.google.longrunning.Operation"a�A
ProjectMoveProjectMetadata�Aname, destination_parent���"/v3/{name=projects/*}:move:*�
DeleteProject5.google.cloud.resourcemanager.v3.DeleteProjectRequest.google.longrunning.Operation"G�A 
ProjectDeleteProjectMetadata�Aname���*/v3/{name=projects/*}�
UndeleteProject7.google.cloud.resourcemanager.v3.UndeleteProjectRequest.google.longrunning.Operation"U�A"
ProjectUndeleteProjectMetadata�Aname���#"/v3/{name=projects/*}:undelete:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"<�Aresource���+"&/v3/{resource=projects/*}:getIamPolicy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"D�Aresource, policy���+"&/v3/{resource=projects/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"O�Aresource, permissions���1",/v3/{resource=projects/*}:testIamPermissions:*��A#cloudresourcemanager.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
#com.google.cloud.resourcemanager.v3BProjectsProtoPZMcloud.google.com/go/resourcemanager/apiv3/resourcemanagerpb;resourcemanagerpb�Google.Cloud.ResourceManager.V3�Google\\Cloud\\ResourceManager\\V3�"Google::Cloud::ResourceManager::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}


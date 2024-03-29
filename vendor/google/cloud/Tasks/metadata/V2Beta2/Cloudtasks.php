<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta2;

class Cloudtasks
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
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Queue::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Task::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�8
+google/cloud/tasks/v2beta2/cloudtasks.protogoogle.cloud.tasks.v2beta2google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto&google/cloud/tasks/v2beta2/queue.proto%google/cloud/tasks/v2beta2/task.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListQueuesRequest7
parent (	B\'�A�A!cloudtasks.googleapis.com/Queue
filter (	
	page_size (

page_token (	2
	read_mask (2.google.protobuf.FieldMaskB�A"`
ListQueuesResponse1
queues (2!.google.cloud.tasks.v2beta2.Queue
next_page_token (	"|
GetQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue2
	read_mask (2.google.protobuf.FieldMaskB�A"�
CreateQueueRequest7
parent (	B\'�A�A!cloudtasks.googleapis.com/Queue5
queue (2!.google.cloud.tasks.v2beta2.QueueB�A"|
UpdateQueueRequest5
queue (2!.google.cloud.tasks.v2beta2.QueueB�A/
update_mask (2.google.protobuf.FieldMask"K
DeleteQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue"J
PurgeQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue"J
PauseQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue"K
ResumeQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue"i
UploadQueueYamlRequest
app_id (	B�A,
	http_body (2.google.api.HttpBodyH �B

_http_body"�
ListTasksRequest6
parent (	B&�A�A cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta2.Task.View
	page_size (

page_token (	"]
ListTasksResponse/
tasks (2 .google.cloud.tasks.v2beta2.Task
next_page_token (	"�
GetTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta2.Task.View"�
CreateTaskRequest6
parent (	B&�A�A cloudtasks.googleapis.com/Task3
task (2 .google.cloud.tasks.v2beta2.TaskB�A<
response_view (2%.google.cloud.tasks.v2beta2.Task.View"I
DeleteTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task"�
LeaseTasksRequest6
parent (	B&�A�A cloudtasks.googleapis.com/Task
	max_tasks (6
lease_duration (2.google.protobuf.DurationB�A<
response_view (2%.google.cloud.tasks.v2beta2.Task.View
filter (	"E
LeaseTasksResponse/
tasks (2 .google.cloud.tasks.v2beta2.Task"�
AcknowledgeTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task6
schedule_time (2.google.protobuf.TimestampB�A"�
RenewLeaseRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task6
schedule_time (2.google.protobuf.TimestampB�A6
lease_duration (2.google.protobuf.DurationB�A<
response_view (2%.google.cloud.tasks.v2beta2.Task.View"�
CancelLeaseRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task6
schedule_time (2.google.protobuf.TimestampB�A<
response_view (2%.google.cloud.tasks.v2beta2.Task.View"�
RunTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta2.Task.View2�

CloudTasks�

ListQueues-.google.cloud.tasks.v2beta2.ListQueuesRequest..google.cloud.tasks.v2beta2.ListQueuesResponse"@�Aparent���1//v2beta2/{parent=projects/*/locations/*}/queues�
GetQueue+.google.cloud.tasks.v2beta2.GetQueueRequest!.google.cloud.tasks.v2beta2.Queue">�Aname���1//v2beta2/{name=projects/*/locations/*/queues/*}�
CreateQueue..google.cloud.tasks.v2beta2.CreateQueueRequest!.google.cloud.tasks.v2beta2.Queue"M�Aparent,queue���8"//v2beta2/{parent=projects/*/locations/*}/queues:queue�
UpdateQueue..google.cloud.tasks.v2beta2.UpdateQueueRequest!.google.cloud.tasks.v2beta2.Queue"X�Aqueue,update_mask���>25/v2beta2/{queue.name=projects/*/locations/*/queues/*}:queue�
DeleteQueue..google.cloud.tasks.v2beta2.DeleteQueueRequest.google.protobuf.Empty">�Aname���1*//v2beta2/{name=projects/*/locations/*/queues/*}�

PurgeQueue-.google.cloud.tasks.v2beta2.PurgeQueueRequest!.google.cloud.tasks.v2beta2.Queue"G�Aname���:"5/v2beta2/{name=projects/*/locations/*/queues/*}:purge:*�

PauseQueue-.google.cloud.tasks.v2beta2.PauseQueueRequest!.google.cloud.tasks.v2beta2.Queue"G�Aname���:"5/v2beta2/{name=projects/*/locations/*/queues/*}:pause:*�
ResumeQueue..google.cloud.tasks.v2beta2.ResumeQueueRequest!.google.cloud.tasks.v2beta2.Queue"H�Aname���;"6/v2beta2/{name=projects/*/locations/*/queues/*}:resume:*_
UploadQueueYaml2.google.cloud.tasks.v2beta2.UploadQueueYamlRequest.google.protobuf.Empty" �
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"V�Aresource���E"@/v2beta2/{resource=projects/*/locations/*/queues/*}:getIamPolicy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"]�Aresource,policy���E"@/v2beta2/{resource=projects/*/locations/*/queues/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"h�Aresource,permissions���K"F/v2beta2/{resource=projects/*/locations/*/queues/*}:testIamPermissions:*�
	ListTasks,.google.cloud.tasks.v2beta2.ListTasksRequest-.google.cloud.tasks.v2beta2.ListTasksResponse"H�Aparent���97/v2beta2/{parent=projects/*/locations/*/queues/*}/tasks�
GetTask*.google.cloud.tasks.v2beta2.GetTaskRequest .google.cloud.tasks.v2beta2.Task"F�Aname���97/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}�

CreateTask-.google.cloud.tasks.v2beta2.CreateTaskRequest .google.cloud.tasks.v2beta2.Task"P�Aparent,task���<"7/v2beta2/{parent=projects/*/locations/*/queues/*}/tasks:*�

DeleteTask-.google.cloud.tasks.v2beta2.DeleteTaskRequest.google.protobuf.Empty"F�Aname���9*7/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}�

LeaseTasks-.google.cloud.tasks.v2beta2.LeaseTasksRequest..google.cloud.tasks.v2beta2.LeaseTasksResponse"`�Aparent,lease_duration���B"=/v2beta2/{parent=projects/*/locations/*/queues/*}/tasks:lease:*�
AcknowledgeTask2.google.cloud.tasks.v2beta2.AcknowledgeTaskRequest.google.protobuf.Empty"c�Aname,schedule_time���H"C/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}:acknowledge:*�

RenewLease-.google.cloud.tasks.v2beta2.RenewLeaseRequest .google.cloud.tasks.v2beta2.Task"q�A!name,schedule_time,lease_duration���G"B/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}:renewLease:*�
CancelLease..google.cloud.tasks.v2beta2.CancelLeaseRequest .google.cloud.tasks.v2beta2.Task"c�Aname,schedule_time���H"C/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}:cancelLease:*�
RunTask*.google.cloud.tasks.v2beta2.RunTaskRequest .google.cloud.tasks.v2beta2.Task"M�Aname���@";/v2beta2/{name=projects/*/locations/*/queues/*/tasks/*}:run:*M�Acloudtasks.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.tasks.v2beta2BCloudTasksProtoPZCcloud.google.com/go/cloudtasks/apiv2beta2/cloudtaskspb;cloudtaskspb�TASKS�AM
"cloudtasks.googleapis.com/Location\'projects/{project}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Queue::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Task::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
+google/cloud/tasks/v2beta3/cloudtasks.protogoogle.cloud.tasks.v2beta3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/tasks/v2beta3/queue.proto%google/cloud/tasks/v2beta3/task.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ListQueuesRequest7
parent (	B\'�A�A!cloudtasks.googleapis.com/Queue
filter (	
	page_size (

page_token (	2
	read_mask (2.google.protobuf.FieldMaskB�A"`
ListQueuesResponse1
queues (2!.google.cloud.tasks.v2beta3.Queue
next_page_token (	"|
GetQueueRequest5
name (	B\'�A�A!
cloudtasks.googleapis.com/Queue2
	read_mask (2.google.protobuf.FieldMaskB�A"�
CreateQueueRequest7
parent (	B\'�A�A!cloudtasks.googleapis.com/Queue5
queue (2!.google.cloud.tasks.v2beta3.QueueB�A"|
UpdateQueueRequest5
queue (2!.google.cloud.tasks.v2beta3.QueueB�A/
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
cloudtasks.googleapis.com/Queue"�
ListTasksRequest6
parent (	B&�A�A cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta3.Task.View
	page_size (

page_token (	"]
ListTasksResponse/
tasks (2 .google.cloud.tasks.v2beta3.Task
next_page_token (	"�
GetTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta3.Task.View"�
CreateTaskRequest6
parent (	B&�A�A cloudtasks.googleapis.com/Task3
task (2 .google.cloud.tasks.v2beta3.TaskB�A<
response_view (2%.google.cloud.tasks.v2beta3.Task.View"I
DeleteTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task"�
RunTaskRequest4
name (	B&�A�A 
cloudtasks.googleapis.com/Task<
response_view (2%.google.cloud.tasks.v2beta3.Task.View2�

CloudTasks�

ListQueues-.google.cloud.tasks.v2beta3.ListQueuesRequest..google.cloud.tasks.v2beta3.ListQueuesResponse"@�Aparent���1//v2beta3/{parent=projects/*/locations/*}/queues�
GetQueue+.google.cloud.tasks.v2beta3.GetQueueRequest!.google.cloud.tasks.v2beta3.Queue">�Aname���1//v2beta3/{name=projects/*/locations/*/queues/*}�
CreateQueue..google.cloud.tasks.v2beta3.CreateQueueRequest!.google.cloud.tasks.v2beta3.Queue"M�Aparent,queue���8"//v2beta3/{parent=projects/*/locations/*}/queues:queue�
UpdateQueue..google.cloud.tasks.v2beta3.UpdateQueueRequest!.google.cloud.tasks.v2beta3.Queue"X�Aqueue,update_mask���>25/v2beta3/{queue.name=projects/*/locations/*/queues/*}:queue�
DeleteQueue..google.cloud.tasks.v2beta3.DeleteQueueRequest.google.protobuf.Empty">�Aname���1*//v2beta3/{name=projects/*/locations/*/queues/*}�

PurgeQueue-.google.cloud.tasks.v2beta3.PurgeQueueRequest!.google.cloud.tasks.v2beta3.Queue"G�Aname���:"5/v2beta3/{name=projects/*/locations/*/queues/*}:purge:*�

PauseQueue-.google.cloud.tasks.v2beta3.PauseQueueRequest!.google.cloud.tasks.v2beta3.Queue"G�Aname���:"5/v2beta3/{name=projects/*/locations/*/queues/*}:pause:*�
ResumeQueue..google.cloud.tasks.v2beta3.ResumeQueueRequest!.google.cloud.tasks.v2beta3.Queue"H�Aname���;"6/v2beta3/{name=projects/*/locations/*/queues/*}:resume:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"V�Aresource���E"@/v2beta3/{resource=projects/*/locations/*/queues/*}:getIamPolicy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"]�Aresource,policy���E"@/v2beta3/{resource=projects/*/locations/*/queues/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"h�Aresource,permissions���K"F/v2beta3/{resource=projects/*/locations/*/queues/*}:testIamPermissions:*�
	ListTasks,.google.cloud.tasks.v2beta3.ListTasksRequest-.google.cloud.tasks.v2beta3.ListTasksResponse"H�Aparent���97/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks�
GetTask*.google.cloud.tasks.v2beta3.GetTaskRequest .google.cloud.tasks.v2beta3.Task"F�Aname���97/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}�

CreateTask-.google.cloud.tasks.v2beta3.CreateTaskRequest .google.cloud.tasks.v2beta3.Task"P�Aparent,task���<"7/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks:*�

DeleteTask-.google.cloud.tasks.v2beta3.DeleteTaskRequest.google.protobuf.Empty"F�Aname���9*7/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}�
RunTask*.google.cloud.tasks.v2beta3.RunTaskRequest .google.cloud.tasks.v2beta3.Task"M�Aname���@";/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}:run:*M�Acloudtasks.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.tasks.v2beta3BCloudTasksProtoPZCcloud.google.com/go/cloudtasks/apiv2beta3/cloudtaskspb;cloudtaskspb�TASKSbproto3'
        , true);

        static::$is_initialized = true;
    }
}


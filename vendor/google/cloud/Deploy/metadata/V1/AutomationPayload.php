<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/automation_payload.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class AutomationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Deploy\V1\LogEnums::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/deploy/v1/automation_payload.protogoogle.cloud.deploy.v1"x
AutomationEvent
message (	

automation (	
pipeline_uid (	*
type (2.google.cloud.deploy.v1.TypeBj
com.google.cloud.deploy.v1BAutomationPayloadProtoPZ2cloud.google.com/go/deploy/apiv1/deploypb;deploypbbproto3'
        , true);

        static::$is_initialized = true;
    }
}


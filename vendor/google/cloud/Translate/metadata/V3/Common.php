<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/common.proto

namespace GPBMetadata\Google\Cloud\Translate\V3;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/translate/v3/common.protogoogle.cloud.translation.v3"(
GcsInputSource
	input_uri (	B�A"Z
FileInputSource
	mime_type (	B�A
content (B�A
display_name (	B�A"6
GcsOutputDestination
output_uri_prefix (	B�AB�
com.google.cloud.translate.v3BCommonProtoPZ;cloud.google.com/go/translate/apiv3/translatepb;translatepb��Google.Cloud.Translate.V3�Google\\Cloud\\Translate\\V3�Google::Cloud::Translate::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}


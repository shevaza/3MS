<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class ConversationalSearchService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Conversation::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
Cgoogle/cloud/discoveryengine/v1/conversational_search_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/discoveryengine/v1/conversation.proto4google/cloud/discoveryengine/v1/search_service.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ConverseConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation>
query (2*.google.cloud.discoveryengine.v1.TextInputB�AI
serving_config (	B1�A.
,discoveryengine.googleapis.com/ServingConfigC
conversation (2-.google.cloud.discoveryengine.v1.Conversation
safe_search (a
user_labels (2L.google.cloud.discoveryengine.v1.ConverseConversationRequest.UserLabelsEntryb
summary_spec (2L.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec
filter	 (	1
UserLabelsEntry
key (	
value (	:8"�
ConverseConversationResponse5
reply (2&.google.cloud.discoveryengine.v1.ReplyC
conversation (2-.google.cloud.discoveryengine.v1.ConversationT
search_results (2<.google.cloud.discoveryengine.v1.SearchResponse.SearchResult"�
CreateConversationRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH
conversation (2-.google.cloud.discoveryengine.v1.ConversationB�A"�
UpdateConversationRequestH
conversation (2-.google.cloud.discoveryengine.v1.ConversationB�A/
update_mask (2.google.protobuf.FieldMask"^
DeleteConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"[
GetConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"�
ListConversationsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"z
ListConversationsResponseD
conversations (2-.google.cloud.discoveryengine.v1.Conversation
next_page_token (	2�
ConversationalSearchService�
ConverseConversation<.google.cloud.discoveryengine.v1.ConverseConversationRequest=.google.cloud.discoveryengine.v1.ConverseConversationResponse"��A
name,query����"G/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}:converse:*ZZ"U/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:converse:*ZW"R/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}:converse:*�
CreateConversation:.google.cloud.discoveryengine.v1.CreateConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aparent,conversation����">/v1/{parent=projects/*/locations/*/dataStores/*}/conversations:conversationZ\\"L/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations:conversationZY"I/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversations:conversation�
DeleteConversation:.google.cloud.discoveryengine.v1.DeleteConversationRequest.google.protobuf.Empty"��Aname����*>/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}ZN*L/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZK*I/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
UpdateConversation:.google.cloud.discoveryengine.v1.UpdateConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aconversation,update_mask����2K/v1/{conversation.name=projects/*/locations/*/dataStores/*/conversations/*}:conversationZi2Y/v1/{conversation.name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:conversationZf2V/v1/{conversation.name=projects/*/locations/*/collections/*/engines/*/conversations/*}:conversation�
GetConversation7.google.cloud.discoveryengine.v1.GetConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aname����>/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}ZNL/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZKI/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
ListConversations9.google.cloud.discoveryengine.v1.ListConversationsRequest:.google.cloud.discoveryengine.v1.ListConversationsResponse"��Aparent����>/v1/{parent=projects/*/locations/*/dataStores/*}/conversationsZNL/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversationsZKI/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversationsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1B ConversationalSearchServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


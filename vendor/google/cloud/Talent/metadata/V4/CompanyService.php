<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/company_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4;

class CompanyService
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
        \GPBMetadata\Google\Cloud\Talent\V4\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Company::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/talent/v4/company_service.protogoogle.cloud.talent.v4google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/cloud/talent/v4/common.proto$google/cloud/talent/v4/company.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateCompanyRequest2
parent (	B"�A�A
jobs.googleapis.com/Tenant5
company (2.google.cloud.talent.v4.CompanyB�A"F
GetCompanyRequest1
name (	B#�A�A
jobs.googleapis.com/Company"~
UpdateCompanyRequest5
company (2.google.cloud.talent.v4.CompanyB�A/
update_mask (2.google.protobuf.FieldMask"I
DeleteCompanyRequest1
name (	B#�A�A
jobs.googleapis.com/Company"�
ListCompaniesRequest2
parent (	B"�A�A
jobs.googleapis.com/Tenant

page_token (	
	page_size (
require_open_jobs ("�
ListCompaniesResponse2
	companies (2.google.cloud.talent.v4.Company
next_page_token (	:
metadata (2(.google.cloud.talent.v4.ResponseMetadata2�
CompanyService�


GetCompany).google.cloud.talent.v4.GetCompanyRequest.google.cloud.talent.v4.Company":�Aname���-+/v4/{name=projects/*/tenants/*/companies/*}�



com.google.cloud.talent.v4BCompanyServiceProtoPZ2cloud.google.com/go/talent/apiv4/talentpb;talentpb�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

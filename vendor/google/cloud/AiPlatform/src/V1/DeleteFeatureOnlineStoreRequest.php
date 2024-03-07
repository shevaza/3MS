<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_admin_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeatureOnlineStoreAdminService.DeleteFeatureOnlineStore][google.cloud.aiplatform.v1.FeatureOnlineStoreAdminService.DeleteFeatureOnlineStore].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteFeatureOnlineStoreRequest</code>
 */
class DeleteFeatureOnlineStoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the FeatureOnlineStore to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If set to true, any FeatureViews and Features for this FeatureOnlineStore
     * will also be deleted. (Otherwise, the request will only work if the
     * FeatureOnlineStore has no FeatureViews.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    private $force = false;

    /**
     * @param string $name  Required. The name of the FeatureOnlineStore to be deleted.
     *                      Format:
     *                      `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *                      Please see {@see FeatureOnlineStoreAdminServiceClient::featureOnlineStoreName()} for help formatting this field.
     * @param bool   $force If set to true, any FeatureViews and Features for this FeatureOnlineStore
     *                      will also be deleted. (Otherwise, the request will only work if the
     *                      FeatureOnlineStore has no FeatureViews.)
     *
     * @return \Google\Cloud\AIPlatform\V1\DeleteFeatureOnlineStoreRequest
     *
     * @experimental
     */
    public static function build(string $name, bool $force): self
    {
        return (new self())
            ->setName($name)
            ->setForce($force);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the FeatureOnlineStore to be deleted.
     *           Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *     @type bool $force
     *           If set to true, any FeatureViews and Features for this FeatureOnlineStore
     *           will also be deleted. (Otherwise, the request will only work if the
     *           FeatureOnlineStore has no FeatureViews.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreAdminService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the FeatureOnlineStore to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the FeatureOnlineStore to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If set to true, any FeatureViews and Features for this FeatureOnlineStore
     * will also be deleted. (Otherwise, the request will only work if the
     * FeatureOnlineStore has no FeatureViews.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, any FeatureViews and Features for this FeatureOnlineStore
     * will also be deleted. (Otherwise, the request will only work if the
     * FeatureOnlineStore has no FeatureViews.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

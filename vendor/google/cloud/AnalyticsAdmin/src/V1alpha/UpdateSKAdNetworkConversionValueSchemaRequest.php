<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateSKAdNetworkConversionValueSchema RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateSKAdNetworkConversionValueSchemaRequest</code>
 */
class UpdateSKAdNetworkConversionValueSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. SKAdNetwork conversion value schema to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SKAdNetworkConversionValueSchema skadnetwork_conversion_value_schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $skadnetwork_conversion_value_schema = null;
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema $skadnetworkConversionValueSchema Required. SKAdNetwork conversion value schema to update.
     * @param \Google\Protobuf\FieldMask                                       $updateMask                       Required. The list of fields to be updated. Omitted fields will not be
     *                                                                                                           updated.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateSKAdNetworkConversionValueSchemaRequest
     *
     * @experimental
     */
    public static function build(\Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema $skadnetworkConversionValueSchema, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSkadnetworkConversionValueSchema($skadnetworkConversionValueSchema)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema $skadnetwork_conversion_value_schema
     *           Required. SKAdNetwork conversion value schema to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Omitted fields will not be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. SKAdNetwork conversion value schema to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SKAdNetworkConversionValueSchema skadnetwork_conversion_value_schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema|null
     */
    public function getSkadnetworkConversionValueSchema()
    {
        return $this->skadnetwork_conversion_value_schema;
    }

    public function hasSkadnetworkConversionValueSchema()
    {
        return isset($this->skadnetwork_conversion_value_schema);
    }

    public function clearSkadnetworkConversionValueSchema()
    {
        unset($this->skadnetwork_conversion_value_schema);
    }

    /**
     * Required. SKAdNetwork conversion value schema to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SKAdNetworkConversionValueSchema skadnetwork_conversion_value_schema = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema $var
     * @return $this
     */
    public function setSkadnetworkConversionValueSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema::class);
        $this->skadnetwork_conversion_value_schema = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


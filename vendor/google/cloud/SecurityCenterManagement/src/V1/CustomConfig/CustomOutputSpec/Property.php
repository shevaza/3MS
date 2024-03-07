<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\CustomConfig\CustomOutputSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual name-value pair that defines a custom source property.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.CustomConfig.CustomOutputSpec.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the property for the custom output.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Optional. The CEL expression for the custom output. A resource property
     * can be specified to return the value of the property or a text string
     * enclosed in quotation marks.
     *
     * Generated from protobuf field <code>.google.type.Expr value_expression = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $value_expression = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the property for the custom output.
     *     @type \Google\Type\Expr $value_expression
     *           Optional. The CEL expression for the custom output. A resource property
     *           can be specified to return the value of the property or a text string
     *           enclosed in quotation marks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the property for the custom output.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the property for the custom output.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The CEL expression for the custom output. A resource property
     * can be specified to return the value of the property or a text string
     * enclosed in quotation marks.
     *
     * Generated from protobuf field <code>.google.type.Expr value_expression = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Type\Expr|null
     */
    public function getValueExpression()
    {
        return $this->value_expression;
    }

    public function hasValueExpression()
    {
        return isset($this->value_expression);
    }

    public function clearValueExpression()
    {
        unset($this->value_expression);
    }

    /**
     * Optional. The CEL expression for the custom output. A resource property
     * can be specified to return the value of the property or a text string
     * enclosed in quotation marks.
     *
     * Generated from protobuf field <code>.google.type.Expr value_expression = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Type\Expr $var
     * @return $this
     */
    public function setValueExpression($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Expr::class);
        $this->value_expression = $var;

        return $this;
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/shell/v1/cloudshell.proto

namespace Google\Cloud\Shell\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GetEnvironment][google.cloud.shell.v1.CloudShellService.GetEnvironment].
 *
 * Generated from protobuf message <code>google.cloud.shell.v1.GetEnvironmentRequest</code>
 */
class GetEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the requested resource, for example `users/me/environments/default`
     * or `users/someone&#64;example.com/environments/default`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Name of the requested resource, for example `users/me/environments/default`
     *                     or `users/someone&#64;example.com/environments/default`. Please see
     *                     {@see CloudShellServiceClient::environmentName()} for help formatting this field.
     *
     * @return \Google\Cloud\Shell\V1\GetEnvironmentRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the requested resource, for example `users/me/environments/default`
     *           or `users/someone&#64;example.com/environments/default`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Shell\V1\Cloudshell::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the requested resource, for example `users/me/environments/default`
     * or `users/someone&#64;example.com/environments/default`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the requested resource, for example `users/me/environments/default`
     * or `users/someone&#64;example.com/environments/default`.
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

}


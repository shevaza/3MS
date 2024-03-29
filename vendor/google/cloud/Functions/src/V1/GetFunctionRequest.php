<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `GetFunction` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.GetFunctionRequest</code>
 */
class GetFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the function which details should be obtained.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. The optional version of the function whose details should be
     * obtained. The version of a 1st Gen function is an integer that starts from
     * 1 and gets incremented on redeployments. Each deployment creates a config
     * version of the underlying function. GCF may keep historical configs for old
     * versions. This field can be specified to fetch the historical configs.
     * Leave it blank or set to 0 to get the latest version of the function.
     *
     * Generated from protobuf field <code>int64 version_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the function which details should be obtained.
     *     @type int|string $version_id
     *           Optional. The optional version of the function whose details should be
     *           obtained. The version of a 1st Gen function is an integer that starts from
     *           1 and gets incremented on redeployments. Each deployment creates a config
     *           version of the underlying function. GCF may keep historical configs for old
     *           versions. This field can be specified to fetch the historical configs.
     *           Leave it blank or set to 0 to get the latest version of the function.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the function which details should be obtained.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the function which details should be obtained.
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
     * Optional. The optional version of the function whose details should be
     * obtained. The version of a 1st Gen function is an integer that starts from
     * 1 and gets incremented on redeployments. Each deployment creates a config
     * version of the underlying function. GCF may keep historical configs for old
     * versions. This field can be specified to fetch the historical configs.
     * Leave it blank or set to 0 to get the latest version of the function.
     *
     * Generated from protobuf field <code>int64 version_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Optional. The optional version of the function whose details should be
     * obtained. The version of a 1st Gen function is an integer that starts from
     * 1 and gets incremented on redeployments. Each deployment creates a config
     * version of the underlying function. GCF may keep historical configs for old
     * versions. This field can be specified to fetch the historical configs.
     * Leave it blank or set to 0 to get the latest version of the function.
     *
     * Generated from protobuf field <code>int64 version_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->version_id = $var;

        return $this;
    }

}


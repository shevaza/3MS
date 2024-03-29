<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `Status` type defines a logical error model that is suitable for different programming environments, including REST APIs and RPC APIs. It is used by [gRPC](https://github.com/grpc). Each `Status` message contains three pieces of data: error code, error message, and error details. You can find out more about this error model and how to work with it in the [API Design Guide](https://cloud.google.com/apis/design/errors).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * The status code, which should be an enum value of google.rpc.Code.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     */
    private $code = null;
    /**
     * A list of messages that carry the error details. There is a common set of message types for APIs to use.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 483979842;</code>
     */
    private $details;
    /**
     * A developer-facing error message, which should be in English. Any user-facing error message should be localized and sent in the google.rpc.Status.details field, or localized by the client.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     */
    private $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           The status code, which should be an enum value of google.rpc.Code.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $details
     *           A list of messages that carry the error details. There is a common set of message types for APIs to use.
     *     @type string $message
     *           A developer-facing error message, which should be in English. Any user-facing error message should be localized and sent in the google.rpc.Status.details field, or localized by the client.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The status code, which should be an enum value of google.rpc.Code.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     * @return int
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : 0;
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * The status code, which should be an enum value of google.rpc.Code.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * A list of messages that carry the error details. There is a common set of message types for APIs to use.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 483979842;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A list of messages that carry the error details. There is a common set of message types for APIs to use.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 483979842;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->details = $arr;

        return $this;
    }

    /**
     * A developer-facing error message, which should be in English. Any user-facing error message should be localized and sent in the google.rpc.Status.details field, or localized by the client.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     * @return string
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : '';
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * A developer-facing error message, which should be in English. Any user-facing error message should be localized and sent in the google.rpc.Status.details field, or localized by the client.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}


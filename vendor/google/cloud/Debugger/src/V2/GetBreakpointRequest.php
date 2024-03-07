<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get breakpoint information.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.GetBreakpointRequest</code>
 */
class GetBreakpointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. ID of the debuggee whose breakpoint to get.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $debuggee_id = '';
    /**
     * Required. ID of the breakpoint to get.
     *
     * Generated from protobuf field <code>string breakpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $breakpoint_id = '';
    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $client_version = '';

    /**
     * @param string $debuggeeId    Required. ID of the debuggee whose breakpoint to get.
     * @param string $breakpointId  Required. ID of the breakpoint to get.
     * @param string $clientVersion Required. The client version making the call.
     *                              Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * @return \Google\Cloud\Debugger\V2\GetBreakpointRequest
     *
     * @experimental
     */
    public static function build(string $debuggeeId, string $breakpointId, string $clientVersion): self
    {
        return (new self())
            ->setDebuggeeId($debuggeeId)
            ->setBreakpointId($breakpointId)
            ->setClientVersion($clientVersion);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $debuggee_id
     *           Required. ID of the debuggee whose breakpoint to get.
     *     @type string $breakpoint_id
     *           Required. ID of the breakpoint to get.
     *     @type string $client_version
     *           Required. The client version making the call.
     *           Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. ID of the debuggee whose breakpoint to get.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDebuggeeId()
    {
        return $this->debuggee_id;
    }

    /**
     * Required. ID of the debuggee whose breakpoint to get.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDebuggeeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->debuggee_id = $var;

        return $this;
    }

    /**
     * Required. ID of the breakpoint to get.
     *
     * Generated from protobuf field <code>string breakpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBreakpointId()
    {
        return $this->breakpoint_id;
    }

    /**
     * Required. ID of the breakpoint to get.
     *
     * Generated from protobuf field <code>string breakpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBreakpointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->breakpoint_id = $var;

        return $this;
    }

    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;

        return $this;
    }

}

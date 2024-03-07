<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/sessions.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of interactive sessions.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListSessionsResponse</code>
 */
class ListSessionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The sessions from the specified collection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Session sessions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sessions;
    /**
     * A token, which can be sent as `page_token`, to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataproc\V1\Session>|\Google\Protobuf\Internal\RepeatedField $sessions
     *           Output only. The sessions from the specified collection.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token`, to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The sessions from the specified collection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Session sessions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Output only. The sessions from the specified collection.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Session sessions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataproc\V1\Session>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\Session::class);
        $this->sessions = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token`, to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token`, to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

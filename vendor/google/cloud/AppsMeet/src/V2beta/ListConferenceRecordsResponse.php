<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/service.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of ListConferenceRecords method.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.ListConferenceRecordsResponse</code>
 */
class ListConferenceRecordsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of conferences in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.ConferenceRecord conference_records = 1;</code>
     */
    private $conference_records;
    /**
     * Token to be circulated back for further List call if current List does NOT
     * include all the Conferences. Unset if all conferences have been returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Meet\V2beta\ConferenceRecord>|\Google\Protobuf\Internal\RepeatedField $conference_records
     *           List of conferences in one page.
     *     @type string $next_page_token
     *           Token to be circulated back for further List call if current List does NOT
     *           include all the Conferences. Unset if all conferences have been returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of conferences in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.ConferenceRecord conference_records = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConferenceRecords()
    {
        return $this->conference_records;
    }

    /**
     * List of conferences in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.ConferenceRecord conference_records = 1;</code>
     * @param array<\Google\Apps\Meet\V2beta\ConferenceRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConferenceRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Meet\V2beta\ConferenceRecord::class);
        $this->conference_records = $arr;

        return $this;
    }

    /**
     * Token to be circulated back for further List call if current List does NOT
     * include all the Conferences. Unset if all conferences have been returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to be circulated back for further List call if current List does NOT
     * include all the Conferences. Unset if all conferences have been returned.
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


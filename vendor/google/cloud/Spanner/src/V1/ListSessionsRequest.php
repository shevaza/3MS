<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ListSessions][google.spanner.v1.Spanner.ListSessions].
 *
 * Generated from protobuf message <code>google.spanner.v1.ListSessionsRequest</code>
 */
class ListSessionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database in which to list sessions.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $database = '';
    /**
     * Number of sessions to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.v1.ListSessionsResponse.next_page_token]
     * from a previous
     * [ListSessionsResponse][google.spanner.v1.ListSessionsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `labels.key` where key is the name of a label
     * Some examples of using filters are:
     *   * `labels.env:*` --> The session has the label "env".
     *   * `labels.env:dev` --> The session has the label "env" and the value of
     *                        the label contains the string "dev".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * @param string $database Required. The database in which to list sessions. Please see
     *                         {@see SpannerClient::databaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\Spanner\V1\ListSessionsRequest
     *
     * @experimental
     */
    public static function build(string $database): self
    {
        return (new self())
            ->setDatabase($database);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database in which to list sessions.
     *     @type int $page_size
     *           Number of sessions to be returned in the response. If 0 or less, defaults
     *           to the server's maximum allowed page size.
     *     @type string $page_token
     *           If non-empty, `page_token` should contain a
     *           [next_page_token][google.spanner.v1.ListSessionsResponse.next_page_token]
     *           from a previous
     *           [ListSessionsResponse][google.spanner.v1.ListSessionsResponse].
     *     @type string $filter
     *           An expression for filtering the results of the request. Filter rules are
     *           case insensitive. The fields eligible for filtering are:
     *             * `labels.key` where key is the name of a label
     *           Some examples of using filters are:
     *             * `labels.env:*` --> The session has the label "env".
     *             * `labels.env:dev` --> The session has the label "env" and the value of
     *                                  the label contains the string "dev".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database in which to list sessions.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database in which to list sessions.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Number of sessions to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of sessions to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.v1.ListSessionsResponse.next_page_token]
     * from a previous
     * [ListSessionsResponse][google.spanner.v1.ListSessionsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.v1.ListSessionsResponse.next_page_token]
     * from a previous
     * [ListSessionsResponse][google.spanner.v1.ListSessionsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `labels.key` where key is the name of a label
     * Some examples of using filters are:
     *   * `labels.env:*` --> The session has the label "env".
     *   * `labels.env:dev` --> The session has the label "env" and the value of
     *                        the label contains the string "dev".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * `labels.key` where key is the name of a label
     * Some examples of using filters are:
     *   * `labels.env:*` --> The session has the label "env".
     *   * `labels.env:dev` --> The session has the label "env" and the value of
     *                        the label contains the string "dev".
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings of integration with GitHub.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings.GithubSettings</code>
 */
class GithubSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique repository display name for the GitHub repository.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * The GitHub repository URI related to the agent.
     *
     * Generated from protobuf field <code>string repository_uri = 2;</code>
     */
    protected $repository_uri = '';
    /**
     * The branch of the GitHub repository tracked for this agent.
     *
     * Generated from protobuf field <code>string tracking_branch = 3;</code>
     */
    protected $tracking_branch = '';
    /**
     * The access token used to authenticate the access to the GitHub
     * repository.
     *
     * Generated from protobuf field <code>string access_token = 4;</code>
     */
    protected $access_token = '';
    /**
     * A list of branches configured to be used from Dialogflow.
     *
     * Generated from protobuf field <code>repeated string branches = 5;</code>
     */
    private $branches;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           The unique repository display name for the GitHub repository.
     *     @type string $repository_uri
     *           The GitHub repository URI related to the agent.
     *     @type string $tracking_branch
     *           The branch of the GitHub repository tracked for this agent.
     *     @type string $access_token
     *           The access token used to authenticate the access to the GitHub
     *           repository.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $branches
     *           A list of branches configured to be used from Dialogflow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique repository display name for the GitHub repository.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The unique repository display name for the GitHub repository.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The GitHub repository URI related to the agent.
     *
     * Generated from protobuf field <code>string repository_uri = 2;</code>
     * @return string
     */
    public function getRepositoryUri()
    {
        return $this->repository_uri;
    }

    /**
     * The GitHub repository URI related to the agent.
     *
     * Generated from protobuf field <code>string repository_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRepositoryUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository_uri = $var;

        return $this;
    }

    /**
     * The branch of the GitHub repository tracked for this agent.
     *
     * Generated from protobuf field <code>string tracking_branch = 3;</code>
     * @return string
     */
    public function getTrackingBranch()
    {
        return $this->tracking_branch;
    }

    /**
     * The branch of the GitHub repository tracked for this agent.
     *
     * Generated from protobuf field <code>string tracking_branch = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingBranch($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_branch = $var;

        return $this;
    }

    /**
     * The access token used to authenticate the access to the GitHub
     * repository.
     *
     * Generated from protobuf field <code>string access_token = 4;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * The access token used to authenticate the access to the GitHub
     * repository.
     *
     * Generated from protobuf field <code>string access_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_token = $var;

        return $this;
    }

    /**
     * A list of branches configured to be used from Dialogflow.
     *
     * Generated from protobuf field <code>repeated string branches = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBranches()
    {
        return $this->branches;
    }

    /**
     * A list of branches configured to be used from Dialogflow.
     *
     * Generated from protobuf field <code>repeated string branches = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBranches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->branches = $arr;

        return $this;
    }

}


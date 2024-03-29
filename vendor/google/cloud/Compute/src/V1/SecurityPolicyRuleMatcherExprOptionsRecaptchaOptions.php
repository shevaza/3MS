<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions</code>
 */
class SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of site keys to be used during the validation of reCAPTCHA action-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string action_token_site_keys = 59929885;</code>
     */
    private $action_token_site_keys;
    /**
     * A list of site keys to be used during the validation of reCAPTCHA session-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string session_token_site_keys = 333363581;</code>
     */
    private $session_token_site_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $action_token_site_keys
     *           A list of site keys to be used during the validation of reCAPTCHA action-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $session_token_site_keys
     *           A list of site keys to be used during the validation of reCAPTCHA session-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of site keys to be used during the validation of reCAPTCHA action-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string action_token_site_keys = 59929885;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActionTokenSiteKeys()
    {
        return $this->action_token_site_keys;
    }

    /**
     * A list of site keys to be used during the validation of reCAPTCHA action-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string action_token_site_keys = 59929885;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActionTokenSiteKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->action_token_site_keys = $arr;

        return $this;
    }

    /**
     * A list of site keys to be used during the validation of reCAPTCHA session-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string session_token_site_keys = 333363581;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessionTokenSiteKeys()
    {
        return $this->session_token_site_keys;
    }

    /**
     * A list of site keys to be used during the validation of reCAPTCHA session-tokens. The provided site keys need to be created from reCAPTCHA API under the same project where the security policy is created.
     *
     * Generated from protobuf field <code>repeated string session_token_site_keys = 333363581;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessionTokenSiteKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->session_token_site_keys = $arr;

        return $this;
    }

}


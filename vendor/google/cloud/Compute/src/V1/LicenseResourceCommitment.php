<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commitment for a particular license resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LicenseResourceCommitment</code>
 */
class LicenseResourceCommitment extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of licenses purchased.
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     */
    private $amount = null;
    /**
     * Specifies the core range of the instance for which this license applies.
     *
     * Generated from protobuf field <code>optional string cores_per_license = 32482324;</code>
     */
    private $cores_per_license = null;
    /**
     * Any applicable license URI.
     *
     * Generated from protobuf field <code>optional string license = 166757441;</code>
     */
    private $license = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $amount
     *           The number of licenses purchased.
     *     @type string $cores_per_license
     *           Specifies the core range of the instance for which this license applies.
     *     @type string $license
     *           Any applicable license URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of licenses purchased.
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return isset($this->amount) ? $this->amount : 0;
    }

    public function hasAmount()
    {
        return isset($this->amount);
    }

    public function clearAmount()
    {
        unset($this->amount);
    }

    /**
     * The number of licenses purchased.
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Specifies the core range of the instance for which this license applies.
     *
     * Generated from protobuf field <code>optional string cores_per_license = 32482324;</code>
     * @return string
     */
    public function getCoresPerLicense()
    {
        return isset($this->cores_per_license) ? $this->cores_per_license : '';
    }

    public function hasCoresPerLicense()
    {
        return isset($this->cores_per_license);
    }

    public function clearCoresPerLicense()
    {
        unset($this->cores_per_license);
    }

    /**
     * Specifies the core range of the instance for which this license applies.
     *
     * Generated from protobuf field <code>optional string cores_per_license = 32482324;</code>
     * @param string $var
     * @return $this
     */
    public function setCoresPerLicense($var)
    {
        GPBUtil::checkString($var, True);
        $this->cores_per_license = $var;

        return $this;
    }

    /**
     * Any applicable license URI.
     *
     * Generated from protobuf field <code>optional string license = 166757441;</code>
     * @return string
     */
    public function getLicense()
    {
        return isset($this->license) ? $this->license : '';
    }

    public function hasLicense()
    {
        return isset($this->license);
    }

    public function clearLicense()
    {
        unset($this->license);
    }

    /**
     * Any applicable license URI.
     *
     * Generated from protobuf field <code>optional string license = 166757441;</code>
     * @param string $var
     * @return $this
     */
    public function setLicense($var)
    {
        GPBUtil::checkString($var, True);
        $this->license = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1\Instance;

use UnexpectedValueException;

/**
 * Available service tiers.
 *
 * Protobuf type <code>google.cloud.filestore.v1.Instance.Tier</code>
 */
class Tier
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>TIER_UNSPECIFIED = 0;</code>
     */
    const TIER_UNSPECIFIED = 0;
    /**
     * STANDARD tier. BASIC_HDD is the preferred term for this tier.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * PREMIUM tier. BASIC_SSD is the preferred term for this tier.
     *
     * Generated from protobuf enum <code>PREMIUM = 2;</code>
     */
    const PREMIUM = 2;
    /**
     * BASIC instances offer a maximum capacity of 63.9 TB.
     * BASIC_HDD is an alias for STANDARD Tier, offering economical
     * performance backed by HDD.
     *
     * Generated from protobuf enum <code>BASIC_HDD = 3;</code>
     */
    const BASIC_HDD = 3;
    /**
     * BASIC instances offer a maximum capacity of 63.9 TB.
     * BASIC_SSD is an alias for PREMIUM Tier, and offers improved
     * performance backed by SSD.
     *
     * Generated from protobuf enum <code>BASIC_SSD = 4;</code>
     */
    const BASIC_SSD = 4;
    /**
     * HIGH_SCALE instances offer expanded capacity and performance scaling
     * capabilities.
     *
     * Generated from protobuf enum <code>HIGH_SCALE_SSD = 5;</code>
     */
    const HIGH_SCALE_SSD = 5;
    /**
     * ENTERPRISE instances offer the features and availability needed for
     * mission-critical workloads.
     *
     * Generated from protobuf enum <code>ENTERPRISE = 6;</code>
     */
    const ENTERPRISE = 6;
    /**
     * ZONAL instances offer expanded capacity and performance scaling
     * capabilities.
     *
     * Generated from protobuf enum <code>ZONAL = 7;</code>
     */
    const ZONAL = 7;
    /**
     * REGIONAL instances offer the features and availability needed for
     * mission-critical workloads.
     *
     * Generated from protobuf enum <code>REGIONAL = 8;</code>
     */
    const REGIONAL = 8;

    private static $valueToName = [
        self::TIER_UNSPECIFIED => 'TIER_UNSPECIFIED',
        self::STANDARD => 'STANDARD',
        self::PREMIUM => 'PREMIUM',
        self::BASIC_HDD => 'BASIC_HDD',
        self::BASIC_SSD => 'BASIC_SSD',
        self::HIGH_SCALE_SSD => 'HIGH_SCALE_SSD',
        self::ENTERPRISE => 'ENTERPRISE',
        self::ZONAL => 'ZONAL',
        self::REGIONAL => 'REGIONAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}



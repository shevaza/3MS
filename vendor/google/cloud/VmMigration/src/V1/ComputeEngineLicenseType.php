<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use UnexpectedValueException;

/**
 * Types of licenses used in OS adaptation.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.ComputeEngineLicenseType</code>
 */
class ComputeEngineLicenseType
{
    /**
     * The license type is the default for the OS.
     *
     * Generated from protobuf enum <code>COMPUTE_ENGINE_LICENSE_TYPE_DEFAULT = 0;</code>
     */
    const COMPUTE_ENGINE_LICENSE_TYPE_DEFAULT = 0;
    /**
     * The license type is Pay As You Go license type.
     *
     * Generated from protobuf enum <code>COMPUTE_ENGINE_LICENSE_TYPE_PAYG = 1;</code>
     */
    const COMPUTE_ENGINE_LICENSE_TYPE_PAYG = 1;
    /**
     * The license type is Bring Your Own License type.
     *
     * Generated from protobuf enum <code>COMPUTE_ENGINE_LICENSE_TYPE_BYOL = 2;</code>
     */
    const COMPUTE_ENGINE_LICENSE_TYPE_BYOL = 2;

    private static $valueToName = [
        self::COMPUTE_ENGINE_LICENSE_TYPE_DEFAULT => 'COMPUTE_ENGINE_LICENSE_TYPE_DEFAULT',
        self::COMPUTE_ENGINE_LICENSE_TYPE_PAYG => 'COMPUTE_ENGINE_LICENSE_TYPE_PAYG',
        self::COMPUTE_ENGINE_LICENSE_TYPE_BYOL => 'COMPUTE_ENGINE_LICENSE_TYPE_BYOL',
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

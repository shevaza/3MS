<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\MachineArchitectureDetails;

use UnexpectedValueException;

/**
 * CPU hyper-threading support.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.MachineArchitectureDetails.CpuHyperThreading</code>
 */
class CpuHyperThreading
{
    /**
     * Unspecified or unknown.
     *
     * Generated from protobuf enum <code>CPU_HYPER_THREADING_UNSPECIFIED = 0;</code>
     */
    const CPU_HYPER_THREADING_UNSPECIFIED = 0;
    /**
     * Hyper-threading is disabled.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Hyper-threading is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;

    private static $valueToName = [
        self::CPU_HYPER_THREADING_UNSPECIFIED => 'CPU_HYPER_THREADING_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::ENABLED => 'ENABLED',
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


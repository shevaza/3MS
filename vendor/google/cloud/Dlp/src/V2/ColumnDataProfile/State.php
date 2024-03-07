<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\ColumnDataProfile;

use UnexpectedValueException;

/**
 * Possible states of a profile. New items may be added.
 *
 * Protobuf type <code>google.privacy.dlp.v2.ColumnDataProfile.State</code>
 */
class State
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The profile is currently running. Once a profile has finished it will
     * transition to DONE.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * The profile is no longer generating.
     * If profile_status.status.code is 0, the profile succeeded, otherwise, it
     * failed.
     *
     * Generated from protobuf enum <code>DONE = 2;</code>
     */
    const DONE = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Dlp\V2\ColumnDataProfile_State::class);

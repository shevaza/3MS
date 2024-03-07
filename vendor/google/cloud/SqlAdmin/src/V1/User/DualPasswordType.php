<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1\User;

use UnexpectedValueException;

/**
 * The type of retained password.
 *
 * Protobuf type <code>google.cloud.sql.v1.User.DualPasswordType</code>
 */
class DualPasswordType
{
    /**
     * The default value.
     *
     * Generated from protobuf enum <code>DUAL_PASSWORD_TYPE_UNSPECIFIED = 0;</code>
     */
    const DUAL_PASSWORD_TYPE_UNSPECIFIED = 0;
    /**
     * Do not update the user's dual password status.
     *
     * Generated from protobuf enum <code>NO_MODIFY_DUAL_PASSWORD = 1;</code>
     */
    const NO_MODIFY_DUAL_PASSWORD = 1;
    /**
     * No dual password usable for connecting using this user.
     *
     * Generated from protobuf enum <code>NO_DUAL_PASSWORD = 2;</code>
     */
    const NO_DUAL_PASSWORD = 2;
    /**
     * Dual password usable for connecting using this user.
     *
     * Generated from protobuf enum <code>DUAL_PASSWORD = 3;</code>
     */
    const DUAL_PASSWORD = 3;

    private static $valueToName = [
        self::DUAL_PASSWORD_TYPE_UNSPECIFIED => 'DUAL_PASSWORD_TYPE_UNSPECIFIED',
        self::NO_MODIFY_DUAL_PASSWORD => 'NO_MODIFY_DUAL_PASSWORD',
        self::NO_DUAL_PASSWORD => 'NO_DUAL_PASSWORD',
        self::DUAL_PASSWORD => 'DUAL_PASSWORD',
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



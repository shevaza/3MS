<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * Attributes evaluated to determine if a table has been modified. New values
 * may be added at a later time.
 *
 * Protobuf type <code>google.privacy.dlp.v2.BigQueryTableModification</code>
 */
class BigQueryTableModification
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>TABLE_MODIFICATION_UNSPECIFIED = 0;</code>
     */
    const TABLE_MODIFICATION_UNSPECIFIED = 0;
    /**
     * A table will be considered modified when the last_modified_time from
     * BigQuery has been updated.
     *
     * Generated from protobuf enum <code>TABLE_MODIFIED_TIMESTAMP = 1;</code>
     */
    const TABLE_MODIFIED_TIMESTAMP = 1;

    private static $valueToName = [
        self::TABLE_MODIFICATION_UNSPECIFIED => 'TABLE_MODIFICATION_UNSPECIFIED',
        self::TABLE_MODIFIED_TIMESTAMP => 'TABLE_MODIFIED_TIMESTAMP',
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


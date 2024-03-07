<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Asset\ResourceSpec;

use UnexpectedValueException;

/**
 * Type of resource.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.Asset.ResourceSpec.Type</code>
 */
class Type
{
    /**
     * Type not specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Cloud Storage bucket.
     *
     * Generated from protobuf enum <code>STORAGE_BUCKET = 1;</code>
     */
    const STORAGE_BUCKET = 1;
    /**
     * BigQuery dataset.
     *
     * Generated from protobuf enum <code>BIGQUERY_DATASET = 2;</code>
     */
    const BIGQUERY_DATASET = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::STORAGE_BUCKET => 'STORAGE_BUCKET',
        self::BIGQUERY_DATASET => 'BIGQUERY_DATASET',
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



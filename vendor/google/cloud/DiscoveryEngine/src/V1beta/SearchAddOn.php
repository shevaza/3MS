<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/common.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use UnexpectedValueException;

/**
 * Add-on that provides additional functionality for search.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.SearchAddOn</code>
 */
class SearchAddOn
{
    /**
     * Default value when the enum is unspecified. This is invalid to use.
     *
     * Generated from protobuf enum <code>SEARCH_ADD_ON_UNSPECIFIED = 0;</code>
     */
    const SEARCH_ADD_ON_UNSPECIFIED = 0;
    /**
     * Large language model add-on.
     *
     * Generated from protobuf enum <code>SEARCH_ADD_ON_LLM = 1;</code>
     */
    const SEARCH_ADD_ON_LLM = 1;

    private static $valueToName = [
        self::SEARCH_ADD_ON_UNSPECIFIED => 'SEARCH_ADD_ON_UNSPECIFIED',
        self::SEARCH_ADD_ON_LLM => 'SEARCH_ADD_ON_LLM',
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


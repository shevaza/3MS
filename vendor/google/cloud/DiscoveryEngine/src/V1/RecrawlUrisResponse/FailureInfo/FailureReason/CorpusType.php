<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\RecrawlUrisResponse\FailureInfo\FailureReason;

use UnexpectedValueException;

/**
 * CorpusType for the failed crawling operation.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.RecrawlUrisResponse.FailureInfo.FailureReason.CorpusType</code>
 */
class CorpusType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>CORPUS_TYPE_UNSPECIFIED = 0;</code>
     */
    const CORPUS_TYPE_UNSPECIFIED = 0;
    /**
     * Denotes a crawling attempt for the desktop version of a page.
     *
     * Generated from protobuf enum <code>DESKTOP = 1;</code>
     */
    const DESKTOP = 1;
    /**
     * Denotes a crawling attempt for the mobile version of a page.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;

    private static $valueToName = [
        self::CORPUS_TYPE_UNSPECIFIED => 'CORPUS_TYPE_UNSPECIFIED',
        self::DESKTOP => 'DESKTOP',
        self::MOBILE => 'MOBILE',
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



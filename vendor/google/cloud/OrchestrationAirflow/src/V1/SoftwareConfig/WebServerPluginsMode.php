<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\SoftwareConfig;

use UnexpectedValueException;

/**
 * Web server plugins mode of the Cloud Composer environment.
 *
 * Protobuf type <code>google.cloud.orchestration.airflow.service.v1.SoftwareConfig.WebServerPluginsMode</code>
 */
class WebServerPluginsMode
{
    /**
     * Default mode.
     *
     * Generated from protobuf enum <code>WEB_SERVER_PLUGINS_MODE_UNSPECIFIED = 0;</code>
     */
    const WEB_SERVER_PLUGINS_MODE_UNSPECIFIED = 0;
    /**
     * Web server plugins are not supported.
     *
     * Generated from protobuf enum <code>PLUGINS_DISABLED = 1;</code>
     */
    const PLUGINS_DISABLED = 1;
    /**
     * Web server plugins are supported.
     *
     * Generated from protobuf enum <code>PLUGINS_ENABLED = 2;</code>
     */
    const PLUGINS_ENABLED = 2;

    private static $valueToName = [
        self::WEB_SERVER_PLUGINS_MODE_UNSPECIFIED => 'WEB_SERVER_PLUGINS_MODE_UNSPECIFIED',
        self::PLUGINS_DISABLED => 'PLUGINS_DISABLED',
        self::PLUGINS_ENABLED => 'PLUGINS_ENABLED',
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



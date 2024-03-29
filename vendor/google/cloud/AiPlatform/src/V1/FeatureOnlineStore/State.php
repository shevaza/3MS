<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store.proto

namespace Google\Cloud\AIPlatform\V1\FeatureOnlineStore;

use UnexpectedValueException;

/**
 * Possible states a featureOnlineStore can have.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.FeatureOnlineStore.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * State when the featureOnlineStore configuration is not being updated and
     * the fields reflect the current configuration of the featureOnlineStore.
     * The featureOnlineStore is usable in this state.
     *
     * Generated from protobuf enum <code>STABLE = 1;</code>
     */
    const STABLE = 1;
    /**
     * The state of the featureOnlineStore configuration when it is being
     * updated. During an update, the fields reflect either the original
     * configuration or the updated configuration of the featureOnlineStore. The
     * featureOnlineStore is still usable in this state.
     *
     * Generated from protobuf enum <code>UPDATING = 2;</code>
     */
    const UPDATING = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STABLE => 'STABLE',
        self::UPDATING => 'UPDATING',
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



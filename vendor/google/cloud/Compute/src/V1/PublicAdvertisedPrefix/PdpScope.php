<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PublicAdvertisedPrefix;

use UnexpectedValueException;

/**
 * Specifies how child public delegated prefix will be scoped. It could be one of following values: - `REGIONAL`: The public delegated prefix is regional only. The provisioning will take a few minutes. - `GLOBAL`: The public delegated prefix is global only. The provisioning will take ~4 weeks. - `GLOBAL_AND_REGIONAL` [output only]: The public delegated prefixes is BYOIP V1 legacy prefix. This is output only value and no longer supported in BYOIP V2. 
 *
 * Protobuf type <code>google.cloud.compute.v1.PublicAdvertisedPrefix.PdpScope</code>
 */
class PdpScope
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PDP_SCOPE = 0;</code>
     */
    const UNDEFINED_PDP_SCOPE = 0;
    /**
     * The public delegated prefix is global only. The provisioning will take ~4 weeks.
     *
     * Generated from protobuf enum <code>GLOBAL = 494663587;</code>
     */
    const PBGLOBAL = 494663587;
    /**
     * The public delegated prefixes is BYOIP V1 legacy prefix. This is output only value and no longer supported in BYOIP V2.
     *
     * Generated from protobuf enum <code>GLOBAL_AND_REGIONAL = 318053059;</code>
     */
    const GLOBAL_AND_REGIONAL = 318053059;
    /**
     * The public delegated prefix is regional only. The provisioning will take a few minutes.
     *
     * Generated from protobuf enum <code>REGIONAL = 92288543;</code>
     */
    const REGIONAL = 92288543;

    private static $valueToName = [
        self::UNDEFINED_PDP_SCOPE => 'UNDEFINED_PDP_SCOPE',
        self::PBGLOBAL => 'GLOBAL',
        self::GLOBAL_AND_REGIONAL => 'GLOBAL_AND_REGIONAL',
        self::REGIONAL => 'REGIONAL',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


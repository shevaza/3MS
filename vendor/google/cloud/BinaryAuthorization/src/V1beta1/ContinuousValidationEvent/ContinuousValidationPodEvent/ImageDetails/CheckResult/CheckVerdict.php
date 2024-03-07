<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails\CheckResult;

use UnexpectedValueException;

/**
 * Result of evaluating one check.
 *
 * Protobuf type <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails.CheckResult.CheckVerdict</code>
 */
class CheckVerdict
{
    /**
     * We should always have a verdict. This is an error.
     *
     * Generated from protobuf enum <code>CHECK_VERDICT_UNSPECIFIED = 0;</code>
     */
    const CHECK_VERDICT_UNSPECIFIED = 0;
    /**
     * The check was successfully evaluated and the image did not satisfy
     * the check.
     *
     * Generated from protobuf enum <code>NON_CONFORMANT = 1;</code>
     */
    const NON_CONFORMANT = 1;

    private static $valueToName = [
        self::CHECK_VERDICT_UNSPECIFIED => 'CHECK_VERDICT_UNSPECIFIED',
        self::NON_CONFORMANT => 'NON_CONFORMANT',
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
class_alias(CheckVerdict::class, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent_ContinuousValidationPodEvent_ImageDetails_CheckResult_CheckVerdict::class);

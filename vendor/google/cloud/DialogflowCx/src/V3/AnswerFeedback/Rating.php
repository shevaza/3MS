<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3\AnswerFeedback;

use UnexpectedValueException;

/**
 * Represents thumbs up/down rating provided by user about a response.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.AnswerFeedback.Rating</code>
 */
class Rating
{
    /**
     * Rating not specified.
     *
     * Generated from protobuf enum <code>RATING_UNSPECIFIED = 0;</code>
     */
    const RATING_UNSPECIFIED = 0;
    /**
     * Thumbs up feedback from user.
     *
     * Generated from protobuf enum <code>THUMBS_UP = 1;</code>
     */
    const THUMBS_UP = 1;
    /**
     * Thumbs down feedback from user.
     *
     * Generated from protobuf enum <code>THUMBS_DOWN = 2;</code>
     */
    const THUMBS_DOWN = 2;

    private static $valueToName = [
        self::RATING_UNSPECIFIED => 'RATING_UNSPECIFIED',
        self::THUMBS_UP => 'THUMBS_UP',
        self::THUMBS_DOWN => 'THUMBS_DOWN',
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



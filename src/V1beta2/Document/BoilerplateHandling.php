<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\Document;

use UnexpectedValueException;

/**
 * Ways of handling boilerplate detected in the document
 *
 * Protobuf type <code>google.cloud.language.v1beta2.Document.BoilerplateHandling</code>
 */
class BoilerplateHandling
{
    /**
     * The boilerplate handling is not specified.
     *
     * Generated from protobuf enum <code>BOILERPLATE_HANDLING_UNSPECIFIED = 0;</code>
     */
    const BOILERPLATE_HANDLING_UNSPECIFIED = 0;
    /**
     * Do not analyze detected boilerplate. Reference web URI is required for
     * detecting boilerplate.
     *
     * Generated from protobuf enum <code>SKIP_BOILERPLATE = 1;</code>
     */
    const SKIP_BOILERPLATE = 1;
    /**
     * Treat boilerplate the same as content.
     *
     * Generated from protobuf enum <code>KEEP_BOILERPLATE = 2;</code>
     */
    const KEEP_BOILERPLATE = 2;

    private static $valueToName = [
        self::BOILERPLATE_HANDLING_UNSPECIFIED => 'BOILERPLATE_HANDLING_UNSPECIFIED',
        self::SKIP_BOILERPLATE => 'SKIP_BOILERPLATE',
        self::KEEP_BOILERPLATE => 'KEEP_BOILERPLATE',
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



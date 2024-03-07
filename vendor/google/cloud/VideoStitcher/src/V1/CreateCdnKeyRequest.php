<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.createCdnKey.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CreateCdnKeyRequest</code>
 */
class CreateCdnKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project in which the CDN key should be created, in the form
     * of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The CDN key resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CdnKey cdn_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cdn_key = null;
    /**
     * Required. The ID to use for the CDN key, which will become the final
     * component of the CDN key's resource name.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string cdn_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cdn_key_id = '';

    /**
     * @param string                                 $parent   Required. The project in which the CDN key should be created, in the form
     *                                                         of `projects/{project_number}/locations/{location}`. Please see
     *                                                         {@see VideoStitcherServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Video\Stitcher\V1\CdnKey $cdnKey   Required. The CDN key resource to create.
     * @param string                                 $cdnKeyId Required. The ID to use for the CDN key, which will become the final
     *                                                         component of the CDN key's resource name.
     *
     *                                                         This value should conform to RFC-1034, which restricts to
     *                                                         lower-case letters, numbers, and hyphen, with the first character a
     *                                                         letter, the last a letter or a number, and a 63 character maximum.
     *
     * @return \Google\Cloud\Video\Stitcher\V1\CreateCdnKeyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Video\Stitcher\V1\CdnKey $cdnKey, string $cdnKeyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setCdnKey($cdnKey)
            ->setCdnKeyId($cdnKeyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project in which the CDN key should be created, in the form
     *           of `projects/{project_number}/locations/{location}`.
     *     @type \Google\Cloud\Video\Stitcher\V1\CdnKey $cdn_key
     *           Required. The CDN key resource to create.
     *     @type string $cdn_key_id
     *           Required. The ID to use for the CDN key, which will become the final
     *           component of the CDN key's resource name.
     *           This value should conform to RFC-1034, which restricts to
     *           lower-case letters, numbers, and hyphen, with the first character a
     *           letter, the last a letter or a number, and a 63 character maximum.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project in which the CDN key should be created, in the form
     * of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project in which the CDN key should be created, in the form
     * of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The CDN key resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CdnKey cdn_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\CdnKey|null
     */
    public function getCdnKey()
    {
        return $this->cdn_key;
    }

    public function hasCdnKey()
    {
        return isset($this->cdn_key);
    }

    public function clearCdnKey()
    {
        unset($this->cdn_key);
    }

    /**
     * Required. The CDN key resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CdnKey cdn_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\CdnKey $var
     * @return $this
     */
    public function setCdnKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\CdnKey::class);
        $this->cdn_key = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the CDN key, which will become the final
     * component of the CDN key's resource name.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string cdn_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCdnKeyId()
    {
        return $this->cdn_key_id;
    }

    /**
     * Required. The ID to use for the CDN key, which will become the final
     * component of the CDN key's resource name.
     * This value should conform to RFC-1034, which restricts to
     * lower-case letters, numbers, and hyphen, with the first character a
     * letter, the last a letter or a number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string cdn_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCdnKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cdn_key_id = $var;

        return $this;
    }

}


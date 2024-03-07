<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Export destination of the data.Only gcs path is allowed in
 * output_uri.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.GcsDestination</code>
 */
class GcsDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The output uri of destination file.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     */
    private $output_uri = '';
    /**
     * Required. The format of the gcs destination. Only "text/csv" and
     * "application/json"
     * are supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_uri
     *           Required. The output uri of destination file.
     *     @type string $mime_type
     *           Required. The format of the gcs destination. Only "text/csv" and
     *           "application/json"
     *           are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The output uri of destination file.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Required. The output uri of destination file.
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

    /**
     * Required. The format of the gcs destination. Only "text/csv" and
     * "application/json"
     * are supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The format of the gcs destination. Only "text/csv" and
     * "application/json"
     * are supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}


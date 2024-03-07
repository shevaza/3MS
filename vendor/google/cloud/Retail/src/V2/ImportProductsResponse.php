<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/import_config.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of the
 * [ImportProductsRequest][google.cloud.retail.v2.ImportProductsRequest]. If the
 * long running operation is done, then this message is returned by the
 * google.longrunning.Operations.response field if the operation was successful.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.ImportProductsResponse</code>
 */
class ImportProductsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     */
    private $error_samples;
    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ImportErrorsConfig errors_config = 2;</code>
     */
    private $errors_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $error_samples
     *           A sample of errors encountered while processing the request.
     *     @type \Google\Cloud\Retail\V2\ImportErrorsConfig $errors_config
     *           Echoes the destination for the complete errors in the request if set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorSamples()
    {
        return $this->error_samples;
    }

    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->error_samples = $arr;

        return $this;
    }

    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ImportErrorsConfig errors_config = 2;</code>
     * @return \Google\Cloud\Retail\V2\ImportErrorsConfig|null
     */
    public function getErrorsConfig()
    {
        return $this->errors_config;
    }

    public function hasErrorsConfig()
    {
        return isset($this->errors_config);
    }

    public function clearErrorsConfig()
    {
        unset($this->errors_config);
    }

    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ImportErrorsConfig errors_config = 2;</code>
     * @param \Google\Cloud\Retail\V2\ImportErrorsConfig $var
     * @return $this
     */
    public function setErrorsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ImportErrorsConfig::class);
        $this->errors_config = $var;

        return $this;
    }

}


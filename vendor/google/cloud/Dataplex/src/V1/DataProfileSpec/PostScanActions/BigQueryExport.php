<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1\DataProfileSpec\PostScanActions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration of BigQuery export post scan action.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileSpec.PostScanActions.BigQueryExport</code>
 */
class BigQueryExport extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The BigQuery table to export DataProfileScan results to.
     * Format:
     * //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID
     *
     * Generated from protobuf field <code>string results_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $results_table = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $results_table
     *           Optional. The BigQuery table to export DataProfileScan results to.
     *           Format:
     *           //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The BigQuery table to export DataProfileScan results to.
     * Format:
     * //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID
     *
     * Generated from protobuf field <code>string results_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getResultsTable()
    {
        return $this->results_table;
    }

    /**
     * Optional. The BigQuery table to export DataProfileScan results to.
     * Format:
     * //bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID
     *
     * Generated from protobuf field <code>string results_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setResultsTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->results_table = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the enrollment of a cloud resource into a specific service.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.EnrolledService</code>
 */
class EnrolledService extends \Google\Protobuf\Internal\Message
{
    /**
     * The product for which Access Approval will be enrolled. Allowed values are
     * listed below (case-sensitive):
     *   * all
     *   * GA
     *   * App Engine
     *   * BigQuery
     *   * Cloud Bigtable
     *   * Cloud Key Management Service
     *   * Compute Engine
     *   * Cloud Dataflow
     *   * Cloud Dataproc
     *   * Cloud DLP
     *   * Cloud EKM
     *   * Cloud HSM
     *   * Cloud Identity and Access Management
     *   * Cloud Logging
     *   * Cloud Pub/Sub
     *   * Cloud Spanner
     *   * Cloud SQL
     *   * Cloud Storage
     *   * Google Kubernetes Engine
     *   * Organization Policy Serivice
     *   * Persistent Disk
     *   * Resource Manager
     *   * Secret Manager
     *   * Speaker ID
     * Note: These values are supported as input for legacy purposes, but will not
     * be returned from the API.
     *   * all
     *   * ga-only
     *   * appengine.googleapis.com
     *   * bigquery.googleapis.com
     *   * bigtable.googleapis.com
     *   * container.googleapis.com
     *   * cloudkms.googleapis.com
     *   * cloudresourcemanager.googleapis.com
     *   * cloudsql.googleapis.com
     *   * compute.googleapis.com
     *   * dataflow.googleapis.com
     *   * dataproc.googleapis.com
     *   * dlp.googleapis.com
     *   * iam.googleapis.com
     *   * logging.googleapis.com
     *   * orgpolicy.googleapis.com
     *   * pubsub.googleapis.com
     *   * spanner.googleapis.com
     *   * secretmanager.googleapis.com
     *   * speakerid.googleapis.com
     *   * storage.googleapis.com
     * Calls to UpdateAccessApprovalSettings using 'all' or any of the
     * XXX.googleapis.com will be translated to the associated product name
     * ('all', 'App Engine', etc.).
     * Note: 'all' will enroll the resource in all products supported at both 'GA'
     * and 'Preview' levels.
     * More information about levels of support is available at
     * https://cloud.google.com/access-approval/docs/supported-services
     *
     * Generated from protobuf field <code>string cloud_product = 1;</code>
     */
    private $cloud_product = '';
    /**
     * The enrollment level of the service.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.EnrollmentLevel enrollment_level = 2;</code>
     */
    private $enrollment_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cloud_product
     *           The product for which Access Approval will be enrolled. Allowed values are
     *           listed below (case-sensitive):
     *             * all
     *             * GA
     *             * App Engine
     *             * BigQuery
     *             * Cloud Bigtable
     *             * Cloud Key Management Service
     *             * Compute Engine
     *             * Cloud Dataflow
     *             * Cloud Dataproc
     *             * Cloud DLP
     *             * Cloud EKM
     *             * Cloud HSM
     *             * Cloud Identity and Access Management
     *             * Cloud Logging
     *             * Cloud Pub/Sub
     *             * Cloud Spanner
     *             * Cloud SQL
     *             * Cloud Storage
     *             * Google Kubernetes Engine
     *             * Organization Policy Serivice
     *             * Persistent Disk
     *             * Resource Manager
     *             * Secret Manager
     *             * Speaker ID
     *           Note: These values are supported as input for legacy purposes, but will not
     *           be returned from the API.
     *             * all
     *             * ga-only
     *             * appengine.googleapis.com
     *             * bigquery.googleapis.com
     *             * bigtable.googleapis.com
     *             * container.googleapis.com
     *             * cloudkms.googleapis.com
     *             * cloudresourcemanager.googleapis.com
     *             * cloudsql.googleapis.com
     *             * compute.googleapis.com
     *             * dataflow.googleapis.com
     *             * dataproc.googleapis.com
     *             * dlp.googleapis.com
     *             * iam.googleapis.com
     *             * logging.googleapis.com
     *             * orgpolicy.googleapis.com
     *             * pubsub.googleapis.com
     *             * spanner.googleapis.com
     *             * secretmanager.googleapis.com
     *             * speakerid.googleapis.com
     *             * storage.googleapis.com
     *           Calls to UpdateAccessApprovalSettings using 'all' or any of the
     *           XXX.googleapis.com will be translated to the associated product name
     *           ('all', 'App Engine', etc.).
     *           Note: 'all' will enroll the resource in all products supported at both 'GA'
     *           and 'Preview' levels.
     *           More information about levels of support is available at
     *           https://cloud.google.com/access-approval/docs/supported-services
     *     @type int $enrollment_level
     *           The enrollment level of the service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * The product for which Access Approval will be enrolled. Allowed values are
     * listed below (case-sensitive):
     *   * all
     *   * GA
     *   * App Engine
     *   * BigQuery
     *   * Cloud Bigtable
     *   * Cloud Key Management Service
     *   * Compute Engine
     *   * Cloud Dataflow
     *   * Cloud Dataproc
     *   * Cloud DLP
     *   * Cloud EKM
     *   * Cloud HSM
     *   * Cloud Identity and Access Management
     *   * Cloud Logging
     *   * Cloud Pub/Sub
     *   * Cloud Spanner
     *   * Cloud SQL
     *   * Cloud Storage
     *   * Google Kubernetes Engine
     *   * Organization Policy Serivice
     *   * Persistent Disk
     *   * Resource Manager
     *   * Secret Manager
     *   * Speaker ID
     * Note: These values are supported as input for legacy purposes, but will not
     * be returned from the API.
     *   * all
     *   * ga-only
     *   * appengine.googleapis.com
     *   * bigquery.googleapis.com
     *   * bigtable.googleapis.com
     *   * container.googleapis.com
     *   * cloudkms.googleapis.com
     *   * cloudresourcemanager.googleapis.com
     *   * cloudsql.googleapis.com
     *   * compute.googleapis.com
     *   * dataflow.googleapis.com
     *   * dataproc.googleapis.com
     *   * dlp.googleapis.com
     *   * iam.googleapis.com
     *   * logging.googleapis.com
     *   * orgpolicy.googleapis.com
     *   * pubsub.googleapis.com
     *   * spanner.googleapis.com
     *   * secretmanager.googleapis.com
     *   * speakerid.googleapis.com
     *   * storage.googleapis.com
     * Calls to UpdateAccessApprovalSettings using 'all' or any of the
     * XXX.googleapis.com will be translated to the associated product name
     * ('all', 'App Engine', etc.).
     * Note: 'all' will enroll the resource in all products supported at both 'GA'
     * and 'Preview' levels.
     * More information about levels of support is available at
     * https://cloud.google.com/access-approval/docs/supported-services
     *
     * Generated from protobuf field <code>string cloud_product = 1;</code>
     * @return string
     */
    public function getCloudProduct()
    {
        return $this->cloud_product;
    }

    /**
     * The product for which Access Approval will be enrolled. Allowed values are
     * listed below (case-sensitive):
     *   * all
     *   * GA
     *   * App Engine
     *   * BigQuery
     *   * Cloud Bigtable
     *   * Cloud Key Management Service
     *   * Compute Engine
     *   * Cloud Dataflow
     *   * Cloud Dataproc
     *   * Cloud DLP
     *   * Cloud EKM
     *   * Cloud HSM
     *   * Cloud Identity and Access Management
     *   * Cloud Logging
     *   * Cloud Pub/Sub
     *   * Cloud Spanner
     *   * Cloud SQL
     *   * Cloud Storage
     *   * Google Kubernetes Engine
     *   * Organization Policy Serivice
     *   * Persistent Disk
     *   * Resource Manager
     *   * Secret Manager
     *   * Speaker ID
     * Note: These values are supported as input for legacy purposes, but will not
     * be returned from the API.
     *   * all
     *   * ga-only
     *   * appengine.googleapis.com
     *   * bigquery.googleapis.com
     *   * bigtable.googleapis.com
     *   * container.googleapis.com
     *   * cloudkms.googleapis.com
     *   * cloudresourcemanager.googleapis.com
     *   * cloudsql.googleapis.com
     *   * compute.googleapis.com
     *   * dataflow.googleapis.com
     *   * dataproc.googleapis.com
     *   * dlp.googleapis.com
     *   * iam.googleapis.com
     *   * logging.googleapis.com
     *   * orgpolicy.googleapis.com
     *   * pubsub.googleapis.com
     *   * spanner.googleapis.com
     *   * secretmanager.googleapis.com
     *   * speakerid.googleapis.com
     *   * storage.googleapis.com
     * Calls to UpdateAccessApprovalSettings using 'all' or any of the
     * XXX.googleapis.com will be translated to the associated product name
     * ('all', 'App Engine', etc.).
     * Note: 'all' will enroll the resource in all products supported at both 'GA'
     * and 'Preview' levels.
     * More information about levels of support is available at
     * https://cloud.google.com/access-approval/docs/supported-services
     *
     * Generated from protobuf field <code>string cloud_product = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_product = $var;

        return $this;
    }

    /**
     * The enrollment level of the service.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.EnrollmentLevel enrollment_level = 2;</code>
     * @return int
     */
    public function getEnrollmentLevel()
    {
        return $this->enrollment_level;
    }

    /**
     * The enrollment level of the service.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.EnrollmentLevel enrollment_level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEnrollmentLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AccessApproval\V1\EnrollmentLevel::class);
        $this->enrollment_level = $var;

        return $this;
    }

}


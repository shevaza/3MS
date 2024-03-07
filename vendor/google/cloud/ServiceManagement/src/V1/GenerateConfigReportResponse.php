<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for GenerateConfigReport method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.GenerateConfigReportResponse</code>
 */
class GenerateConfigReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the service this report belongs to.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * ID of the service configuration this report belongs to.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * list of ChangeReport, each corresponding to comparison between two
     * service configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.ChangeReport change_reports = 3;</code>
     */
    private $change_reports;
    /**
     * Errors / Linter warnings associated with the service definition this
     * report
     * belongs to.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Diagnostic diagnostics = 4;</code>
     */
    private $diagnostics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Name of the service this report belongs to.
     *     @type string $id
     *           ID of the service configuration this report belongs to.
     *     @type array<\Google\Cloud\ServiceManagement\V1\ChangeReport>|\Google\Protobuf\Internal\RepeatedField $change_reports
     *           list of ChangeReport, each corresponding to comparison between two
     *           service configurations.
     *     @type array<\Google\Cloud\ServiceManagement\V1\Diagnostic>|\Google\Protobuf\Internal\RepeatedField $diagnostics
     *           Errors / Linter warnings associated with the service definition this
     *           report
     *           belongs to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the service this report belongs to.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Name of the service this report belongs to.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * ID of the service configuration this report belongs to.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of the service configuration this report belongs to.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * list of ChangeReport, each corresponding to comparison between two
     * service configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.ChangeReport change_reports = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChangeReports()
    {
        return $this->change_reports;
    }

    /**
     * list of ChangeReport, each corresponding to comparison between two
     * service configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.ChangeReport change_reports = 3;</code>
     * @param array<\Google\Cloud\ServiceManagement\V1\ChangeReport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChangeReports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceManagement\V1\ChangeReport::class);
        $this->change_reports = $arr;

        return $this;
    }

    /**
     * Errors / Linter warnings associated with the service definition this
     * report
     * belongs to.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Diagnostic diagnostics = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * Errors / Linter warnings associated with the service definition this
     * report
     * belongs to.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.Diagnostic diagnostics = 4;</code>
     * @param array<\Google\Cloud\ServiceManagement\V1\Diagnostic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDiagnostics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceManagement\V1\Diagnostic::class);
        $this->diagnostics = $arr;

        return $this;
    }

}


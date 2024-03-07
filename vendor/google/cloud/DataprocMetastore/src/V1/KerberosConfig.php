<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration information for a Kerberos principal.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.KerberosConfig</code>
 */
class KerberosConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A Kerberos keytab file that can be used to authenticate a service principal
     * with a Kerberos Key Distribution Center (KDC).
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.Secret keytab = 1;</code>
     */
    private $keytab = null;
    /**
     * A Kerberos principal that exists in the both the keytab the KDC
     * to authenticate as. A typical principal is of the form
     * `primary/instance&#64;REALM`, but there is no exact format.
     *
     * Generated from protobuf field <code>string principal = 2;</code>
     */
    private $principal = '';
    /**
     * A Cloud Storage URI that specifies the path to a
     * krb5.conf file. It is of the form `gs://{bucket_name}/path/to/krb5.conf`,
     * although the file does not need to be named krb5.conf explicitly.
     *
     * Generated from protobuf field <code>string krb5_config_gcs_uri = 3;</code>
     */
    private $krb5_config_gcs_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Metastore\V1\Secret $keytab
     *           A Kerberos keytab file that can be used to authenticate a service principal
     *           with a Kerberos Key Distribution Center (KDC).
     *     @type string $principal
     *           A Kerberos principal that exists in the both the keytab the KDC
     *           to authenticate as. A typical principal is of the form
     *           `primary/instance&#64;REALM`, but there is no exact format.
     *     @type string $krb5_config_gcs_uri
     *           A Cloud Storage URI that specifies the path to a
     *           krb5.conf file. It is of the form `gs://{bucket_name}/path/to/krb5.conf`,
     *           although the file does not need to be named krb5.conf explicitly.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * A Kerberos keytab file that can be used to authenticate a service principal
     * with a Kerberos Key Distribution Center (KDC).
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.Secret keytab = 1;</code>
     * @return \Google\Cloud\Metastore\V1\Secret|null
     */
    public function getKeytab()
    {
        return $this->keytab;
    }

    public function hasKeytab()
    {
        return isset($this->keytab);
    }

    public function clearKeytab()
    {
        unset($this->keytab);
    }

    /**
     * A Kerberos keytab file that can be used to authenticate a service principal
     * with a Kerberos Key Distribution Center (KDC).
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.Secret keytab = 1;</code>
     * @param \Google\Cloud\Metastore\V1\Secret $var
     * @return $this
     */
    public function setKeytab($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1\Secret::class);
        $this->keytab = $var;

        return $this;
    }

    /**
     * A Kerberos principal that exists in the both the keytab the KDC
     * to authenticate as. A typical principal is of the form
     * `primary/instance&#64;REALM`, but there is no exact format.
     *
     * Generated from protobuf field <code>string principal = 2;</code>
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * A Kerberos principal that exists in the both the keytab the KDC
     * to authenticate as. A typical principal is of the form
     * `primary/instance&#64;REALM`, but there is no exact format.
     *
     * Generated from protobuf field <code>string principal = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal = $var;

        return $this;
    }

    /**
     * A Cloud Storage URI that specifies the path to a
     * krb5.conf file. It is of the form `gs://{bucket_name}/path/to/krb5.conf`,
     * although the file does not need to be named krb5.conf explicitly.
     *
     * Generated from protobuf field <code>string krb5_config_gcs_uri = 3;</code>
     * @return string
     */
    public function getKrb5ConfigGcsUri()
    {
        return $this->krb5_config_gcs_uri;
    }

    /**
     * A Cloud Storage URI that specifies the path to a
     * krb5.conf file. It is of the form `gs://{bucket_name}/path/to/krb5.conf`,
     * although the file does not need to be named krb5.conf explicitly.
     *
     * Generated from protobuf field <code>string krb5_config_gcs_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKrb5ConfigGcsUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->krb5_config_gcs_uri = $var;

        return $this;
    }

}


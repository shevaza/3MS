<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Target HTTPS Proxy resource. Google Compute Engine has two Target HTTPS Proxy resources: * [Global](/compute/docs/reference/rest/v1/targetHttpsProxies) * [Regional](https://cloud.google.com/compute/docs/reference/rest/v1/regionTargetHttpsProxies) A target HTTPS proxy is a component of GCP HTTPS load balancers. * targetHttpProxies are used by global external Application Load Balancers, classic Application Load Balancers, cross-region internal Application Load Balancers, and Traffic Director. * regionTargetHttpProxies are used by regional internal Application Load Balancers and regional external Application Load Balancers. Forwarding rules reference a target HTTPS proxy, and the target proxy then references a URL map. For more information, read Using Target Proxies and Forwarding rule concepts.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetHttpsProxy</code>
 */
class TargetHttpsProxy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy. Refer to the AuthorizationPolicy resource for additional details. authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string authorization_policy = 33945528;</code>
     */
    private $authorization_policy = null;
    /**
     * URL of a certificate map that identifies a certificate map associated with the given target proxy. This field can only be set for global target proxies. If set, sslCertificates will be ignored. Accepted format is //certificatemanager.googleapis.com/projects/{project }/locations/{location}/certificateMaps/{resourceName}.
     *
     * Generated from protobuf field <code>optional string certificate_map = 156463796;</code>
     */
    private $certificate_map = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a TargetHttpsProxy. An up-to-date fingerprint must be provided in order to patch the TargetHttpsProxy; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the TargetHttpsProxy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * Specifies how long to keep a connection open, after completing a response, while there is no matching traffic (in seconds). If an HTTP keep-alive is not specified, a default value (610 seconds) will be used. For global external Application Load Balancers, the minimum allowed value is 5 seconds and the maximum allowed value is 1200 seconds. For classic Application Load Balancers, this option is not supported.
     *
     * Generated from protobuf field <code>optional int32 http_keep_alive_timeout_sec = 447326046;</code>
     */
    private $http_keep_alive_timeout_sec = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED. When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them. The default is false.
     *
     * Generated from protobuf field <code>optional bool proxy_bind = 286025582;</code>
     */
    private $proxy_bind = null;
    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE. - When quic-override is set to NONE, Google manages whether QUIC is used. - When quic-override is set to ENABLE, the load balancer uses QUIC when possible. - When quic-override is set to DISABLE, the load balancer doesn't use QUIC. - If the quic-override flag is not specified, NONE is implied.
     * Check the QuicOverride enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string quic_override = 456577197;</code>
     */
    private $quic_override = null;
    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic. serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED or EXTERNAL or EXTERNAL_MANAGED. For details which ServerTlsPolicy resources are accepted with INTERNAL_SELF_MANAGED and which with EXTERNAL, EXTERNAL_MANAGED loadBalancingScheme consult ServerTlsPolicy documentation. If left blank, communications are not encrypted.
     *
     * Generated from protobuf field <code>optional string server_tls_policy = 295825266;</code>
     */
    private $server_tls_policy = null;
    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates. sslCertificates do not apply when the load balancing scheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 366006543;</code>
     */
    private $ssl_certificates;
    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>optional string ssl_policy = 295190213;</code>
     */
    private $ssl_policy = null;
    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map: - https://www.googleapis.compute/v1/projects/project/global/urlMaps/ url-map - projects/project/global/urlMaps/url-map - global/urlMaps/url-map 
     *
     * Generated from protobuf field <code>optional string url_map = 367020684;</code>
     */
    private $url_map = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $authorization_policy
     *           Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy. Refer to the AuthorizationPolicy resource for additional details. authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. Note: This field currently has no impact.
     *     @type string $certificate_map
     *           URL of a certificate map that identifies a certificate map associated with the given target proxy. This field can only be set for global target proxies. If set, sslCertificates will be ignored. Accepted format is //certificatemanager.googleapis.com/projects/{project }/locations/{location}/certificateMaps/{resourceName}.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $fingerprint
     *           Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a TargetHttpsProxy. An up-to-date fingerprint must be provided in order to patch the TargetHttpsProxy; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the TargetHttpsProxy.
     *     @type int $http_keep_alive_timeout_sec
     *           Specifies how long to keep a connection open, after completing a response, while there is no matching traffic (in seconds). If an HTTP keep-alive is not specified, a default value (610 seconds) will be used. For global external Application Load Balancers, the minimum allowed value is 5 seconds and the maximum allowed value is 1200 seconds. For classic Application Load Balancers, this option is not supported.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type bool $proxy_bind
     *           This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED. When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them. The default is false.
     *     @type string $quic_override
     *           Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE. - When quic-override is set to NONE, Google manages whether QUIC is used. - When quic-override is set to ENABLE, the load balancer uses QUIC when possible. - When quic-override is set to DISABLE, the load balancer doesn't use QUIC. - If the quic-override flag is not specified, NONE is implied.
     *           Check the QuicOverride enum for the list of possible values.
     *     @type string $region
     *           [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $server_tls_policy
     *           Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic. serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED or EXTERNAL or EXTERNAL_MANAGED. For details which ServerTlsPolicy resources are accepted with INTERNAL_SELF_MANAGED and which with EXTERNAL, EXTERNAL_MANAGED loadBalancingScheme consult ServerTlsPolicy documentation. If left blank, communications are not encrypted.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ssl_certificates
     *           URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates. sslCertificates do not apply when the load balancing scheme is set to INTERNAL_SELF_MANAGED.
     *     @type string $ssl_policy
     *           URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *     @type string $url_map
     *           A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map: - https://www.googleapis.compute/v1/projects/project/global/urlMaps/ url-map - projects/project/global/urlMaps/url-map - global/urlMaps/url-map 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy. Refer to the AuthorizationPolicy resource for additional details. authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string authorization_policy = 33945528;</code>
     * @return string
     */
    public function getAuthorizationPolicy()
    {
        return isset($this->authorization_policy) ? $this->authorization_policy : '';
    }

    public function hasAuthorizationPolicy()
    {
        return isset($this->authorization_policy);
    }

    public function clearAuthorizationPolicy()
    {
        unset($this->authorization_policy);
    }

    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy. Refer to the AuthorizationPolicy resource for additional details. authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED. Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>optional string authorization_policy = 33945528;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_policy = $var;

        return $this;
    }

    /**
     * URL of a certificate map that identifies a certificate map associated with the given target proxy. This field can only be set for global target proxies. If set, sslCertificates will be ignored. Accepted format is //certificatemanager.googleapis.com/projects/{project }/locations/{location}/certificateMaps/{resourceName}.
     *
     * Generated from protobuf field <code>optional string certificate_map = 156463796;</code>
     * @return string
     */
    public function getCertificateMap()
    {
        return isset($this->certificate_map) ? $this->certificate_map : '';
    }

    public function hasCertificateMap()
    {
        return isset($this->certificate_map);
    }

    public function clearCertificateMap()
    {
        unset($this->certificate_map);
    }

    /**
     * URL of a certificate map that identifies a certificate map associated with the given target proxy. This field can only be set for global target proxies. If set, sslCertificates will be ignored. Accepted format is //certificatemanager.googleapis.com/projects/{project }/locations/{location}/certificateMaps/{resourceName}.
     *
     * Generated from protobuf field <code>optional string certificate_map = 156463796;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateMap($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate_map = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a TargetHttpsProxy. An up-to-date fingerprint must be provided in order to patch the TargetHttpsProxy; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the TargetHttpsProxy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a TargetHttpsProxy. An up-to-date fingerprint must be provided in order to patch the TargetHttpsProxy; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the TargetHttpsProxy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * Specifies how long to keep a connection open, after completing a response, while there is no matching traffic (in seconds). If an HTTP keep-alive is not specified, a default value (610 seconds) will be used. For global external Application Load Balancers, the minimum allowed value is 5 seconds and the maximum allowed value is 1200 seconds. For classic Application Load Balancers, this option is not supported.
     *
     * Generated from protobuf field <code>optional int32 http_keep_alive_timeout_sec = 447326046;</code>
     * @return int
     */
    public function getHttpKeepAliveTimeoutSec()
    {
        return isset($this->http_keep_alive_timeout_sec) ? $this->http_keep_alive_timeout_sec : 0;
    }

    public function hasHttpKeepAliveTimeoutSec()
    {
        return isset($this->http_keep_alive_timeout_sec);
    }

    public function clearHttpKeepAliveTimeoutSec()
    {
        unset($this->http_keep_alive_timeout_sec);
    }

    /**
     * Specifies how long to keep a connection open, after completing a response, while there is no matching traffic (in seconds). If an HTTP keep-alive is not specified, a default value (610 seconds) will be used. For global external Application Load Balancers, the minimum allowed value is 5 seconds and the maximum allowed value is 1200 seconds. For classic Application Load Balancers, this option is not supported.
     *
     * Generated from protobuf field <code>optional int32 http_keep_alive_timeout_sec = 447326046;</code>
     * @param int $var
     * @return $this
     */
    public function setHttpKeepAliveTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->http_keep_alive_timeout_sec = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED. When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them. The default is false.
     *
     * Generated from protobuf field <code>optional bool proxy_bind = 286025582;</code>
     * @return bool
     */
    public function getProxyBind()
    {
        return isset($this->proxy_bind) ? $this->proxy_bind : false;
    }

    public function hasProxyBind()
    {
        return isset($this->proxy_bind);
    }

    public function clearProxyBind()
    {
        unset($this->proxy_bind);
    }

    /**
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED. When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them. The default is false.
     *
     * Generated from protobuf field <code>optional bool proxy_bind = 286025582;</code>
     * @param bool $var
     * @return $this
     */
    public function setProxyBind($var)
    {
        GPBUtil::checkBool($var);
        $this->proxy_bind = $var;

        return $this;
    }

    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE. - When quic-override is set to NONE, Google manages whether QUIC is used. - When quic-override is set to ENABLE, the load balancer uses QUIC when possible. - When quic-override is set to DISABLE, the load balancer doesn't use QUIC. - If the quic-override flag is not specified, NONE is implied.
     * Check the QuicOverride enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string quic_override = 456577197;</code>
     * @return string
     */
    public function getQuicOverride()
    {
        return isset($this->quic_override) ? $this->quic_override : '';
    }

    public function hasQuicOverride()
    {
        return isset($this->quic_override);
    }

    public function clearQuicOverride()
    {
        unset($this->quic_override);
    }

    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE. - When quic-override is set to NONE, Google manages whether QUIC is used. - When quic-override is set to ENABLE, the load balancer uses QUIC when possible. - When quic-override is set to DISABLE, the load balancer doesn't use QUIC. - If the quic-override flag is not specified, NONE is implied.
     * Check the QuicOverride enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string quic_override = 456577197;</code>
     * @param string $var
     * @return $this
     */
    public function setQuicOverride($var)
    {
        GPBUtil::checkString($var, True);
        $this->quic_override = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic. serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED or EXTERNAL or EXTERNAL_MANAGED. For details which ServerTlsPolicy resources are accepted with INTERNAL_SELF_MANAGED and which with EXTERNAL, EXTERNAL_MANAGED loadBalancingScheme consult ServerTlsPolicy documentation. If left blank, communications are not encrypted.
     *
     * Generated from protobuf field <code>optional string server_tls_policy = 295825266;</code>
     * @return string
     */
    public function getServerTlsPolicy()
    {
        return isset($this->server_tls_policy) ? $this->server_tls_policy : '';
    }

    public function hasServerTlsPolicy()
    {
        return isset($this->server_tls_policy);
    }

    public function clearServerTlsPolicy()
    {
        unset($this->server_tls_policy);
    }

    /**
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic. serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED or EXTERNAL or EXTERNAL_MANAGED. For details which ServerTlsPolicy resources are accepted with INTERNAL_SELF_MANAGED and which with EXTERNAL, EXTERNAL_MANAGED loadBalancingScheme consult ServerTlsPolicy documentation. If left blank, communications are not encrypted.
     *
     * Generated from protobuf field <code>optional string server_tls_policy = 295825266;</code>
     * @param string $var
     * @return $this
     */
    public function setServerTlsPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_tls_policy = $var;

        return $this;
    }

    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates. sslCertificates do not apply when the load balancing scheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 366006543;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSslCertificates()
    {
        return $this->ssl_certificates;
    }

    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates. sslCertificates do not apply when the load balancing scheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 366006543;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSslCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ssl_certificates = $arr;

        return $this;
    }

    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>optional string ssl_policy = 295190213;</code>
     * @return string
     */
    public function getSslPolicy()
    {
        return isset($this->ssl_policy) ? $this->ssl_policy : '';
    }

    public function hasSslPolicy()
    {
        return isset($this->ssl_policy);
    }

    public function clearSslPolicy()
    {
        unset($this->ssl_policy);
    }

    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>optional string ssl_policy = 295190213;</code>
     * @param string $var
     * @return $this
     */
    public function setSslPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssl_policy = $var;

        return $this;
    }

    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map: - https://www.googleapis.compute/v1/projects/project/global/urlMaps/ url-map - projects/project/global/urlMaps/url-map - global/urlMaps/url-map 
     *
     * Generated from protobuf field <code>optional string url_map = 367020684;</code>
     * @return string
     */
    public function getUrlMap()
    {
        return isset($this->url_map) ? $this->url_map : '';
    }

    public function hasUrlMap()
    {
        return isset($this->url_map);
    }

    public function clearUrlMap()
    {
        unset($this->url_map);
    }

    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map: - https://www.googleapis.compute/v1/projects/project/global/urlMaps/ url-map - projects/project/global/urlMaps/url-map - global/urlMaps/url-map 
     *
     * Generated from protobuf field <code>optional string url_map = 367020684;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMap($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_map = $var;

        return $this;
    }

}


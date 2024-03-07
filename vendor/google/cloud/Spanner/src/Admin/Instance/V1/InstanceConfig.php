<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A possible configuration for a Cloud Spanner instance. Configurations
 * define the geographic placement of nodes and their replication.
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.InstanceConfig</code>
 */
class InstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Output only. Whether this instance config is a Google or User Managed
     * Configuration.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.Type config_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $config_type = 0;
    /**
     * The geographic placement of nodes in this instance configuration and their
     * replication properties.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo replicas = 3;</code>
     */
    private $replicas;
    /**
     * Output only. The available optional replicas to choose from for user
     * managed configurations. Populated for Google managed configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo optional_replicas = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $optional_replicas;
    /**
     * Base configuration name, e.g. projects/<project_name>/instanceConfigs/nam3,
     * based on which this configuration is created. Only set for user managed
     * configurations. `base_config` must refer to a configuration of type
     * GOOGLE_MANAGED in the same project as this configuration.
     *
     * Generated from protobuf field <code>string base_config = 7 [(.google.api.resource_reference) = {</code>
     */
    private $base_config = '';
    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. Therefore, you are advised to use
     * an internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * etag is used for optimistic concurrency control as a way
     * to help prevent simultaneous updates of a instance config from overwriting
     * each other. It is strongly suggested that systems make use of the etag in
     * the read-modify-write cycle to perform instance config updates in order to
     * avoid race conditions: An etag is returned in the response which contains
     * instance configs, and systems are expected to put that etag in the request
     * to update instance config to ensure that their change will be applied to
     * the same version of the instance config.
     * If no etag is provided in the call to update instance config, then the
     * existing instance config is overwritten blindly.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
     */
    private $etag = '';
    /**
     * Allowed values of the "default_leader" schema option for databases in
     * instances that use this instance configuration.
     *
     * Generated from protobuf field <code>repeated string leader_options = 4;</code>
     */
    private $leader_options;
    /**
     * Output only. If true, the instance config is being created or updated. If
     * false, there are no ongoing operations for the instance config.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reconciling = false;
    /**
     * Output only. The current instance config state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A unique identifier for the instance configuration.  Values
     *           are of the form
     *           `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`.
     *     @type string $display_name
     *           The name of this instance configuration as it appears in UIs.
     *     @type int $config_type
     *           Output only. Whether this instance config is a Google or User Managed
     *           Configuration.
     *     @type array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo>|\Google\Protobuf\Internal\RepeatedField $replicas
     *           The geographic placement of nodes in this instance configuration and their
     *           replication properties.
     *     @type array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo>|\Google\Protobuf\Internal\RepeatedField $optional_replicas
     *           Output only. The available optional replicas to choose from for user
     *           managed configurations. Populated for Google managed configurations.
     *     @type string $base_config
     *           Base configuration name, e.g. projects/<project_name>/instanceConfigs/nam3,
     *           based on which this configuration is created. Only set for user managed
     *           configurations. `base_config` must refer to a configuration of type
     *           GOOGLE_MANAGED in the same project as this configuration.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     *           resources into groups that reflect a customer's organizational needs and
     *           deployment strategies. Cloud Labels can be used to filter collections of
     *           resources. They can be used to control how resource metrics are aggregated.
     *           And they can be used as arguments to policy management rules (e.g. route,
     *           firewall, load balancing, etc.).
     *            * Label keys must be between 1 and 63 characters long and must conform to
     *              the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *            * Label values must be between 0 and 63 characters long and must conform
     *              to the regular expression `[a-z0-9_-]{0,63}`.
     *            * No more than 64 labels can be associated with a given resource.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           If you plan to use labels in your own code, please note that additional
     *           characters may be allowed in the future. Therefore, you are advised to use
     *           an internal label representation, such as JSON, which doesn't rely upon
     *           specific characters being disallowed.  For example, representing labels
     *           as the string:  name + "_" + value  would prove problematic if we were to
     *           allow "_" in a future release.
     *     @type string $etag
     *           etag is used for optimistic concurrency control as a way
     *           to help prevent simultaneous updates of a instance config from overwriting
     *           each other. It is strongly suggested that systems make use of the etag in
     *           the read-modify-write cycle to perform instance config updates in order to
     *           avoid race conditions: An etag is returned in the response which contains
     *           instance configs, and systems are expected to put that etag in the request
     *           to update instance config to ensure that their change will be applied to
     *           the same version of the instance config.
     *           If no etag is provided in the call to update instance config, then the
     *           existing instance config is overwritten blindly.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $leader_options
     *           Allowed values of the "default_leader" schema option for databases in
     *           instances that use this instance configuration.
     *     @type bool $reconciling
     *           Output only. If true, the instance config is being created or updated. If
     *           false, there are no ongoing operations for the instance config.
     *     @type int $state
     *           Output only. The current instance config state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Whether this instance config is a Google or User Managed
     * Configuration.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.Type config_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getConfigType()
    {
        return $this->config_type;
    }

    /**
     * Output only. Whether this instance config is a Google or User Managed
     * Configuration.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.Type config_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setConfigType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig\Type::class);
        $this->config_type = $var;

        return $this;
    }

    /**
     * The geographic placement of nodes in this instance configuration and their
     * replication properties.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo replicas = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * The geographic placement of nodes in this instance configuration and their
     * replication properties.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo replicas = 3;</code>
     * @param array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo::class);
        $this->replicas = $arr;

        return $this;
    }

    /**
     * Output only. The available optional replicas to choose from for user
     * managed configurations. Populated for Google managed configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo optional_replicas = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptionalReplicas()
    {
        return $this->optional_replicas;
    }

    /**
     * Output only. The available optional replicas to choose from for user
     * managed configurations. Populated for Google managed configurations.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaInfo optional_replicas = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptionalReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Instance\V1\ReplicaInfo::class);
        $this->optional_replicas = $arr;

        return $this;
    }

    /**
     * Base configuration name, e.g. projects/<project_name>/instanceConfigs/nam3,
     * based on which this configuration is created. Only set for user managed
     * configurations. `base_config` must refer to a configuration of type
     * GOOGLE_MANAGED in the same project as this configuration.
     *
     * Generated from protobuf field <code>string base_config = 7 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBaseConfig()
    {
        return $this->base_config;
    }

    /**
     * Base configuration name, e.g. projects/<project_name>/instanceConfigs/nam3,
     * based on which this configuration is created. Only set for user managed
     * configurations. `base_config` must refer to a configuration of type
     * GOOGLE_MANAGED in the same project as this configuration.
     *
     * Generated from protobuf field <code>string base_config = 7 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBaseConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_config = $var;

        return $this;
    }

    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. Therefore, you are advised to use
     * an internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. Therefore, you are advised to use
     * an internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * etag is used for optimistic concurrency control as a way
     * to help prevent simultaneous updates of a instance config from overwriting
     * each other. It is strongly suggested that systems make use of the etag in
     * the read-modify-write cycle to perform instance config updates in order to
     * avoid race conditions: An etag is returned in the response which contains
     * instance configs, and systems are expected to put that etag in the request
     * to update instance config to ensure that their change will be applied to
     * the same version of the instance config.
     * If no etag is provided in the call to update instance config, then the
     * existing instance config is overwritten blindly.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * etag is used for optimistic concurrency control as a way
     * to help prevent simultaneous updates of a instance config from overwriting
     * each other. It is strongly suggested that systems make use of the etag in
     * the read-modify-write cycle to perform instance config updates in order to
     * avoid race conditions: An etag is returned in the response which contains
     * instance configs, and systems are expected to put that etag in the request
     * to update instance config to ensure that their change will be applied to
     * the same version of the instance config.
     * If no etag is provided in the call to update instance config, then the
     * existing instance config is overwritten blindly.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Allowed values of the "default_leader" schema option for databases in
     * instances that use this instance configuration.
     *
     * Generated from protobuf field <code>repeated string leader_options = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeaderOptions()
    {
        return $this->leader_options;
    }

    /**
     * Allowed values of the "default_leader" schema option for databases in
     * instances that use this instance configuration.
     *
     * Generated from protobuf field <code>repeated string leader_options = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeaderOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->leader_options = $arr;

        return $this;
    }

    /**
     * Output only. If true, the instance config is being created or updated. If
     * false, there are no ongoing operations for the instance config.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. If true, the instance config is being created or updated. If
     * false, there are no ongoing operations for the instance config.
     *
     * Generated from protobuf field <code>bool reconciling = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The current instance config state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current instance config state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig\State::class);
        $this->state = $var;

        return $this;
    }

}


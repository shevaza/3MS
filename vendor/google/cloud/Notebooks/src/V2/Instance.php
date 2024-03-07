<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/instance.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of a notebook instance.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of this notebook instance. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The proxy endpoint that is used to access the Jupyter
     * notebook.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $proxy_uri = '';
    /**
     * Optional. Input only. The owner of this instance after creation. Format:
     * `alias&#64;example.com`
     * Currently supports one owner only. If not specified, all of the service
     * account users of your VM instance's service account can use
     * the instance.
     *
     * Generated from protobuf field <code>repeated string instance_owners = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $instance_owners;
    /**
     * Output only. Email address of entity that sent original CreateInstance
     * request.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $creator = '';
    /**
     * Output only. The state of this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The upgrade history of this instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.UpgradeHistoryEntry upgrade_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $upgrade_history;
    /**
     * Output only. Unique ID of the resource.
     *
     * Generated from protobuf field <code>string id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $id = '';
    /**
     * Output only. Instance health_state.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.HealthState health_state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $health_state = 0;
    /**
     * Output only. Additional information about instance health.
     * Example:
     *     healthInfo": {
     *       "docker_proxy_agent_status": "1",
     *       "docker_status": "1",
     *       "jupyterlab_api_status": "-1",
     *       "jupyterlab_status": "-1",
     *       "updated": "2020-10-18 09:40:03.573409"
     *     }
     *
     * Generated from protobuf field <code>map<string, string> health_info = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $health_info;
    /**
     * Output only. Instance creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Instance update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. If true, the notebook instance will not register with the proxy.
     *
     * Generated from protobuf field <code>bool disable_proxy_access = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $disable_proxy_access = false;
    /**
     * Optional. Labels to apply to this instance.
     * These can be later modified by the UpdateInstance method.
     *
     * Generated from protobuf field <code>map<string, string> labels = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    protected $infrastructure;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of this notebook instance. Format:
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *     @type \Google\Cloud\Notebooks\V2\GceSetup $gce_setup
     *           Optional. Compute Engine setup for the notebook. Uses notebook-defined
     *           fields.
     *     @type string $proxy_uri
     *           Output only. The proxy endpoint that is used to access the Jupyter
     *           notebook.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instance_owners
     *           Optional. Input only. The owner of this instance after creation. Format:
     *           `alias&#64;example.com`
     *           Currently supports one owner only. If not specified, all of the service
     *           account users of your VM instance's service account can use
     *           the instance.
     *     @type string $creator
     *           Output only. Email address of entity that sent original CreateInstance
     *           request.
     *     @type int $state
     *           Output only. The state of this instance.
     *     @type array<\Google\Cloud\Notebooks\V2\UpgradeHistoryEntry>|\Google\Protobuf\Internal\RepeatedField $upgrade_history
     *           Output only. The upgrade history of this instance.
     *     @type string $id
     *           Output only. Unique ID of the resource.
     *     @type int $health_state
     *           Output only. Instance health_state.
     *     @type array|\Google\Protobuf\Internal\MapField $health_info
     *           Output only. Additional information about instance health.
     *           Example:
     *               healthInfo": {
     *                 "docker_proxy_agent_status": "1",
     *                 "docker_status": "1",
     *                 "jupyterlab_api_status": "-1",
     *                 "jupyterlab_status": "-1",
     *                 "updated": "2020-10-18 09:40:03.573409"
     *               }
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Instance creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Instance update time.
     *     @type bool $disable_proxy_access
     *           Optional. If true, the notebook instance will not register with the proxy.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels to apply to this instance.
     *           These can be later modified by the UpdateInstance method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of this notebook instance. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of this notebook instance. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Compute Engine setup for the notebook. Uses notebook-defined
     * fields.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.GceSetup gce_setup = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\GceSetup|null
     */
    public function getGceSetup()
    {
        return $this->readOneof(2);
    }

    public function hasGceSetup()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Compute Engine setup for the notebook. Uses notebook-defined
     * fields.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.GceSetup gce_setup = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\GceSetup $var
     * @return $this
     */
    public function setGceSetup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\GceSetup::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. The proxy endpoint that is used to access the Jupyter
     * notebook.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProxyUri()
    {
        return $this->proxy_uri;
    }

    /**
     * Output only. The proxy endpoint that is used to access the Jupyter
     * notebook.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProxyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->proxy_uri = $var;

        return $this;
    }

    /**
     * Optional. Input only. The owner of this instance after creation. Format:
     * `alias&#64;example.com`
     * Currently supports one owner only. If not specified, all of the service
     * account users of your VM instance's service account can use
     * the instance.
     *
     * Generated from protobuf field <code>repeated string instance_owners = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceOwners()
    {
        return $this->instance_owners;
    }

    /**
     * Optional. Input only. The owner of this instance after creation. Format:
     * `alias&#64;example.com`
     * Currently supports one owner only. If not specified, all of the service
     * account users of your VM instance's service account can use
     * the instance.
     *
     * Generated from protobuf field <code>repeated string instance_owners = 4 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instance_owners = $arr;

        return $this;
    }

    /**
     * Output only. Email address of entity that sent original CreateInstance
     * request.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Output only. Email address of entity that sent original CreateInstance
     * request.
     *
     * Generated from protobuf field <code>string creator = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * Output only. The state of this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The upgrade history of this instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.UpgradeHistoryEntry upgrade_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpgradeHistory()
    {
        return $this->upgrade_history;
    }

    /**
     * Output only. The upgrade history of this instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.UpgradeHistoryEntry upgrade_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Notebooks\V2\UpgradeHistoryEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpgradeHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V2\UpgradeHistoryEntry::class);
        $this->upgrade_history = $arr;

        return $this;
    }

    /**
     * Output only. Unique ID of the resource.
     *
     * Generated from protobuf field <code>string id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. Unique ID of the resource.
     *
     * Generated from protobuf field <code>string id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Instance health_state.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.HealthState health_state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getHealthState()
    {
        return $this->health_state;
    }

    /**
     * Output only. Instance health_state.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.HealthState health_state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setHealthState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V2\HealthState::class);
        $this->health_state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about instance health.
     * Example:
     *     healthInfo": {
     *       "docker_proxy_agent_status": "1",
     *       "docker_status": "1",
     *       "jupyterlab_api_status": "-1",
     *       "jupyterlab_status": "-1",
     *       "updated": "2020-10-18 09:40:03.573409"
     *     }
     *
     * Generated from protobuf field <code>map<string, string> health_info = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHealthInfo()
    {
        return $this->health_info;
    }

    /**
     * Output only. Additional information about instance health.
     * Example:
     *     healthInfo": {
     *       "docker_proxy_agent_status": "1",
     *       "docker_status": "1",
     *       "jupyterlab_api_status": "-1",
     *       "jupyterlab_status": "-1",
     *       "updated": "2020-10-18 09:40:03.573409"
     *     }
     *
     * Generated from protobuf field <code>map<string, string> health_info = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHealthInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->health_info = $arr;

        return $this;
    }

    /**
     * Output only. Instance creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Instance creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Instance update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Instance update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. If true, the notebook instance will not register with the proxy.
     *
     * Generated from protobuf field <code>bool disable_proxy_access = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisableProxyAccess()
    {
        return $this->disable_proxy_access;
    }

    /**
     * Optional. If true, the notebook instance will not register with the proxy.
     *
     * Generated from protobuf field <code>bool disable_proxy_access = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableProxyAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_proxy_access = $var;

        return $this;
    }

    /**
     * Optional. Labels to apply to this instance.
     * These can be later modified by the UpdateInstance method.
     *
     * Generated from protobuf field <code>map<string, string> labels = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels to apply to this instance.
     * These can be later modified by the UpdateInstance method.
     *
     * Generated from protobuf field <code>map<string, string> labels = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * @return string
     */
    public function getInfrastructure()
    {
        return $this->whichOneof("infrastructure");
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/backup_vault.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListBackupVaultsResponse is the result of ListBackupVaultsRequest.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.ListBackupVaultsResponse</code>
 */
class ListBackupVaultsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of backupVaults in the project for the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.BackupVault backup_vaults = 1;</code>
     */
    private $backup_vaults;
    /**
     * The token you can use to retrieve the next page of results. Not returned
     * if there are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetApp\V1\BackupVault>|\Google\Protobuf\Internal\RepeatedField $backup_vaults
     *           A list of backupVaults in the project for the specified location.
     *     @type string $next_page_token
     *           The token you can use to retrieve the next page of results. Not returned
     *           if there are no more results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\BackupVault::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of backupVaults in the project for the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.BackupVault backup_vaults = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackupVaults()
    {
        return $this->backup_vaults;
    }

    /**
     * A list of backupVaults in the project for the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.BackupVault backup_vaults = 1;</code>
     * @param array<\Google\Cloud\NetApp\V1\BackupVault>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackupVaults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetApp\V1\BackupVault::class);
        $this->backup_vaults = $arr;

        return $this;
    }

    /**
     * The token you can use to retrieve the next page of results. Not returned
     * if there are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token you can use to retrieve the next page of results. Not returned
     * if there are no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

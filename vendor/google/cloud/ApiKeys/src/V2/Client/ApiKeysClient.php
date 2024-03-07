<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/api/apikeys/v2/apikeys.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ApiKeys\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ApiKeys\V2\CreateKeyRequest;
use Google\Cloud\ApiKeys\V2\DeleteKeyRequest;
use Google\Cloud\ApiKeys\V2\GetKeyRequest;
use Google\Cloud\ApiKeys\V2\GetKeyStringRequest;
use Google\Cloud\ApiKeys\V2\GetKeyStringResponse;
use Google\Cloud\ApiKeys\V2\Key;
use Google\Cloud\ApiKeys\V2\ListKeysRequest;
use Google\Cloud\ApiKeys\V2\LookupKeyRequest;
use Google\Cloud\ApiKeys\V2\LookupKeyResponse;
use Google\Cloud\ApiKeys\V2\UndeleteKeyRequest;
use Google\Cloud\ApiKeys\V2\UpdateKeyRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Manages the API keys associated with projects.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createKeyAsync(CreateKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteKeyAsync(DeleteKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getKeyAsync(GetKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getKeyStringAsync(GetKeyStringRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listKeysAsync(ListKeysRequest $request, array $optionalArgs = [])
 * @method PromiseInterface lookupKeyAsync(LookupKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface undeleteKeyAsync(UndeleteKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateKeyAsync(UpdateKeyRequest $request, array $optionalArgs = [])
 */
final class ApiKeysClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.api.apikeys.v2.ApiKeys';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'apikeys.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'apikeys.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/api_keys_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/api_keys_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/api_keys_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/api_keys_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a key
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $key
     *
     * @return string The formatted key resource.
     */
    public static function keyName(string $project, string $location, string $key): string
    {
        return self::getPathTemplate('key')->render([
            'project' => $project,
            'location' => $location,
            'key' => $key,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - key: projects/{project}/locations/{location}/keys/{key}
     * - location: projects/{project}/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'apikeys.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new API key.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::createKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/create_key.php
     *
     * @param CreateKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createKey(CreateKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateKey', $request, $callOptions)->wait();
    }

    /**
     * Deletes an API key. Deleted key can be retrieved within 30 days of
     * deletion. Afterward, key will be purged from the project.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::deleteKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/delete_key.php
     *
     * @param DeleteKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteKey(DeleteKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteKey', $request, $callOptions)->wait();
    }

    /**
     * Gets the metadata for an API key. The key string of the API key
     * isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::getKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/get_key.php
     *
     * @param GetKeyRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Key
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getKey(GetKeyRequest $request, array $callOptions = []): Key
    {
        return $this->startApiCall('GetKey', $request, $callOptions)->wait();
    }

    /**
     * Get the key string for an API key.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::getKeyStringAsync()} .
     *
     * @example samples/V2/ApiKeysClient/get_key_string.php
     *
     * @param GetKeyStringRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GetKeyStringResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getKeyString(GetKeyStringRequest $request, array $callOptions = []): GetKeyStringResponse
    {
        return $this->startApiCall('GetKeyString', $request, $callOptions)->wait();
    }

    /**
     * Lists the API keys owned by a project. The key string of the API key
     * isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::listKeysAsync()} .
     *
     * @example samples/V2/ApiKeysClient/list_keys.php
     *
     * @param ListKeysRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listKeys(ListKeysRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListKeys', $request, $callOptions);
    }

    /**
     * Find the parent project and resource name of the API
     * key that matches the key string in the request. If the API key has been
     * purged, resource name will not be set.
     * The service account must have the `apikeys.keys.lookup` permission
     * on the parent project.
     *
     * The async variant is {@see ApiKeysClient::lookupKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/lookup_key.php
     *
     * @param LookupKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LookupKeyResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function lookupKey(LookupKeyRequest $request, array $callOptions = []): LookupKeyResponse
    {
        return $this->startApiCall('LookupKey', $request, $callOptions)->wait();
    }

    /**
     * Undeletes an API key which was deleted within 30 days.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::undeleteKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/undelete_key.php
     *
     * @param UndeleteKeyRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function undeleteKey(UndeleteKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UndeleteKey', $request, $callOptions)->wait();
    }

    /**
     * Patches the modifiable fields of an API key.
     * The key string of the API key isn't included in the response.
     *
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * The async variant is {@see ApiKeysClient::updateKeyAsync()} .
     *
     * @example samples/V2/ApiKeysClient/update_key.php
     *
     * @param UpdateKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateKey(UpdateKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateKey', $request, $callOptions)->wait();
    }
}
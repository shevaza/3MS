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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/shell/v1/cloudshell.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Shell\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Shell\V1\AddPublicKeyRequest;
use Google\Cloud\Shell\V1\AuthorizeEnvironmentRequest;
use Google\Cloud\Shell\V1\Environment;
use Google\Cloud\Shell\V1\GetEnvironmentRequest;
use Google\Cloud\Shell\V1\RemovePublicKeyRequest;
use Google\Cloud\Shell\V1\StartEnvironmentMetadata;
use Google\Cloud\Shell\V1\StartEnvironmentRequest;
use Google\Cloud\Shell\V1\StartEnvironmentResponse;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: API for interacting with Google Cloud Shell. Each user of Cloud Shell has at
 * least one environment, which has the ID "default". Environment consists of a
 * Docker image defining what is installed on the environment and a home
 * directory containing the user's data that will remain across sessions.
 * Clients use this API to start and fetch information about their environment,
 * which can then be used to connect to that environment via a separate SSH
 * client.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface addPublicKeyAsync(AddPublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface authorizeEnvironmentAsync(AuthorizeEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getEnvironmentAsync(GetEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removePublicKeyAsync(RemovePublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface startEnvironmentAsync(StartEnvironmentRequest $request, array $optionalArgs = [])
 */
final class CloudShellServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.shell.v1.CloudShellService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'cloudshell.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'cloudshell.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_shell_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_shell_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_shell_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_shell_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a environment
     * resource.
     *
     * @param string $user
     * @param string $environment
     *
     * @return string The formatted environment resource.
     */
    public static function environmentName(string $user, string $environment): string
    {
        return self::getPathTemplate('environment')->render([
            'user' => $user,
            'environment' => $environment,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - environment: users/{user}/environments/{environment}
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
     *           as "<uri>:<port>". Default 'cloudshell.googleapis.com:443'.
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
     * Adds a public SSH key to an environment, allowing clients with the
     * corresponding private key to connect to that environment via SSH. If a key
     * with the same content already exists, this will error with ALREADY_EXISTS.
     *
     * The async variant is {@see CloudShellServiceClient::addPublicKeyAsync()} .
     *
     * @example samples/V1/CloudShellServiceClient/add_public_key.php
     *
     * @param AddPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function addPublicKey(AddPublicKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddPublicKey', $request, $callOptions)->wait();
    }

    /**
     * Sends OAuth credentials to a running environment on behalf of a user. When
     * this completes, the environment will be authorized to run various Google
     * Cloud command line tools without requiring the user to manually
     * authenticate.
     *
     * The async variant is {@see CloudShellServiceClient::authorizeEnvironmentAsync()}
     * .
     *
     * @example samples/V1/CloudShellServiceClient/authorize_environment.php
     *
     * @param AuthorizeEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function authorizeEnvironment(AuthorizeEnvironmentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AuthorizeEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Gets an environment. Returns NOT_FOUND if the environment does not exist.
     *
     * The async variant is {@see CloudShellServiceClient::getEnvironmentAsync()} .
     *
     * @example samples/V1/CloudShellServiceClient/get_environment.php
     *
     * @param GetEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Environment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEnvironment(GetEnvironmentRequest $request, array $callOptions = []): Environment
    {
        return $this->startApiCall('GetEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Removes a public SSH key from an environment. Clients will no longer be
     * able to connect to the environment using the corresponding private key.
     * If a key with the same content is not present, this will error with
     * NOT_FOUND.
     *
     * The async variant is {@see CloudShellServiceClient::removePublicKeyAsync()} .
     *
     * @example samples/V1/CloudShellServiceClient/remove_public_key.php
     *
     * @param RemovePublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function removePublicKey(RemovePublicKeyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemovePublicKey', $request, $callOptions)->wait();
    }

    /**
     * Starts an existing environment, allowing clients to connect to it. The
     * returned operation will contain an instance of StartEnvironmentMetadata in
     * its metadata field. Users can wait for the environment to start by polling
     * this operation via GetOperation. Once the environment has finished starting
     * and is ready to accept connections, the operation will contain a
     * StartEnvironmentResponse in its response field.
     *
     * The async variant is {@see CloudShellServiceClient::startEnvironmentAsync()} .
     *
     * @example samples/V1/CloudShellServiceClient/start_environment.php
     *
     * @param StartEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function startEnvironment(StartEnvironmentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('StartEnvironment', $request, $callOptions)->wait();
    }
}

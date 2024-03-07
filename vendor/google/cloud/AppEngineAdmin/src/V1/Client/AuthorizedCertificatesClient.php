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
 * https://github.com/googleapis/googleapis/blob/master/google/appengine/v1/appengine.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AppEngine\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AppEngine\V1\AuthorizedCertificate;
use Google\Cloud\AppEngine\V1\CreateAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\DeleteAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\GetAuthorizedCertificateRequest;
use Google\Cloud\AppEngine\V1\ListAuthorizedCertificatesRequest;
use Google\Cloud\AppEngine\V1\UpdateAuthorizedCertificateRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Manages SSL certificates a user is authorized to administer. A user can
 * administer any SSL certificates applicable to their authorized domains.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface createAuthorizedCertificateAsync(CreateAuthorizedCertificateRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAuthorizedCertificateAsync(DeleteAuthorizedCertificateRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAuthorizedCertificateAsync(GetAuthorizedCertificateRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAuthorizedCertificatesAsync(ListAuthorizedCertificatesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateAuthorizedCertificateAsync(UpdateAuthorizedCertificateRequest $request, array $optionalArgs = [])
 */
final class AuthorizedCertificatesClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.appengine.v1.AuthorizedCertificates';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'appengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'appengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/appengine.admin',
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/authorized_certificates_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/authorized_certificates_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/authorized_certificates_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/authorized_certificates_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'appengine.googleapis.com:443'.
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
     * Uploads the specified SSL certificate.
     *
     * The async variant is
     * {@see AuthorizedCertificatesClient::createAuthorizedCertificateAsync()} .
     *
     * @example samples/V1/AuthorizedCertificatesClient/create_authorized_certificate.php
     *
     * @param CreateAuthorizedCertificateRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AuthorizedCertificate
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createAuthorizedCertificate(CreateAuthorizedCertificateRequest $request, array $callOptions = []): AuthorizedCertificate
    {
        return $this->startApiCall('CreateAuthorizedCertificate', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified SSL certificate.
     *
     * The async variant is
     * {@see AuthorizedCertificatesClient::deleteAuthorizedCertificateAsync()} .
     *
     * @example samples/V1/AuthorizedCertificatesClient/delete_authorized_certificate.php
     *
     * @param DeleteAuthorizedCertificateRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteAuthorizedCertificate(DeleteAuthorizedCertificateRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteAuthorizedCertificate', $request, $callOptions)->wait();
    }

    /**
     * Gets the specified SSL certificate.
     *
     * The async variant is
     * {@see AuthorizedCertificatesClient::getAuthorizedCertificateAsync()} .
     *
     * @example samples/V1/AuthorizedCertificatesClient/get_authorized_certificate.php
     *
     * @param GetAuthorizedCertificateRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AuthorizedCertificate
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAuthorizedCertificate(GetAuthorizedCertificateRequest $request, array $callOptions = []): AuthorizedCertificate
    {
        return $this->startApiCall('GetAuthorizedCertificate', $request, $callOptions)->wait();
    }

    /**
     * Lists all SSL certificates the user is authorized to administer.
     *
     * The async variant is
     * {@see AuthorizedCertificatesClient::listAuthorizedCertificatesAsync()} .
     *
     * @example samples/V1/AuthorizedCertificatesClient/list_authorized_certificates.php
     *
     * @param ListAuthorizedCertificatesRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function listAuthorizedCertificates(ListAuthorizedCertificatesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAuthorizedCertificates', $request, $callOptions);
    }

    /**
     * Updates the specified SSL certificate. To renew a certificate and maintain
     * its existing domain mappings, update `certificate_data` with a new
     * certificate. The new certificate must be applicable to the same domains as
     * the original certificate. The certificate `display_name` may also be
     * updated.
     *
     * The async variant is
     * {@see AuthorizedCertificatesClient::updateAuthorizedCertificateAsync()} .
     *
     * @example samples/V1/AuthorizedCertificatesClient/update_authorized_certificate.php
     *
     * @param UpdateAuthorizedCertificateRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AuthorizedCertificate
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateAuthorizedCertificate(UpdateAuthorizedCertificateRequest $request, array $callOptions = []): AuthorizedCertificate
    {
        return $this->startApiCall('UpdateAuthorizedCertificate', $request, $callOptions)->wait();
    }
}

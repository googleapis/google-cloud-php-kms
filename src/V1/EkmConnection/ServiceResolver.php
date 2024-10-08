<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/ekm_service.proto

namespace Google\Cloud\Kms\V1\EkmConnection;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [ServiceResolver][google.cloud.kms.v1.EkmConnection.ServiceResolver]
 * represents an EKM replica that can be reached within an
 * [EkmConnection][google.cloud.kms.v1.EkmConnection].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.EkmConnection.ServiceResolver</code>
 */
class ServiceResolver extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Service Directory service pointing to
     * an EKM replica, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string service_directory_service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $service_directory_service = '';
    /**
     * Optional. The filter applied to the endpoints of the resolved service. If
     * no filter is specified, all endpoints will be considered. An endpoint
     * will be chosen arbitrarily from the filtered list for each request.
     * For endpoint filter syntax and examples, see
     * https://cloud.google.com/service-directory/docs/reference/rpc/google.cloud.servicedirectory.v1#resolveservicerequest.
     *
     * Generated from protobuf field <code>string endpoint_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $endpoint_filter = '';
    /**
     * Required. The hostname of the EKM replica used at TLS and HTTP layers.
     *
     * Generated from protobuf field <code>string hostname = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hostname = '';
    /**
     * Required. A list of leaf server certificates used to authenticate HTTPS
     * connections to the EKM replica. Currently, a maximum of 10
     * [Certificate][google.cloud.kms.v1.Certificate] is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.Certificate server_certificates = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $server_certificates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_directory_service
     *           Required. The resource name of the Service Directory service pointing to
     *           an EKM replica, in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *     @type string $endpoint_filter
     *           Optional. The filter applied to the endpoints of the resolved service. If
     *           no filter is specified, all endpoints will be considered. An endpoint
     *           will be chosen arbitrarily from the filtered list for each request.
     *           For endpoint filter syntax and examples, see
     *           https://cloud.google.com/service-directory/docs/reference/rpc/google.cloud.servicedirectory.v1#resolveservicerequest.
     *     @type string $hostname
     *           Required. The hostname of the EKM replica used at TLS and HTTP layers.
     *     @type array<\Google\Cloud\Kms\V1\Certificate>|\Google\Protobuf\Internal\RepeatedField $server_certificates
     *           Required. A list of leaf server certificates used to authenticate HTTPS
     *           connections to the EKM replica. Currently, a maximum of 10
     *           [Certificate][google.cloud.kms.v1.Certificate] is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\EkmService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Service Directory service pointing to
     * an EKM replica, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string service_directory_service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceDirectoryService()
    {
        return $this->service_directory_service;
    }

    /**
     * Required. The resource name of the Service Directory service pointing to
     * an EKM replica, in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string service_directory_service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceDirectoryService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_directory_service = $var;

        return $this;
    }

    /**
     * Optional. The filter applied to the endpoints of the resolved service. If
     * no filter is specified, all endpoints will be considered. An endpoint
     * will be chosen arbitrarily from the filtered list for each request.
     * For endpoint filter syntax and examples, see
     * https://cloud.google.com/service-directory/docs/reference/rpc/google.cloud.servicedirectory.v1#resolveservicerequest.
     *
     * Generated from protobuf field <code>string endpoint_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEndpointFilter()
    {
        return $this->endpoint_filter;
    }

    /**
     * Optional. The filter applied to the endpoints of the resolved service. If
     * no filter is specified, all endpoints will be considered. An endpoint
     * will be chosen arbitrarily from the filtered list for each request.
     * For endpoint filter syntax and examples, see
     * https://cloud.google.com/service-directory/docs/reference/rpc/google.cloud.servicedirectory.v1#resolveservicerequest.
     *
     * Generated from protobuf field <code>string endpoint_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_filter = $var;

        return $this;
    }

    /**
     * Required. The hostname of the EKM replica used at TLS and HTTP layers.
     *
     * Generated from protobuf field <code>string hostname = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Required. The hostname of the EKM replica used at TLS and HTTP layers.
     *
     * Generated from protobuf field <code>string hostname = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Required. A list of leaf server certificates used to authenticate HTTPS
     * connections to the EKM replica. Currently, a maximum of 10
     * [Certificate][google.cloud.kms.v1.Certificate] is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.Certificate server_certificates = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServerCertificates()
    {
        return $this->server_certificates;
    }

    /**
     * Required. A list of leaf server certificates used to authenticate HTTPS
     * connections to the EKM replica. Currently, a maximum of 10
     * [Certificate][google.cloud.kms.v1.Certificate] is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.Certificate server_certificates = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Kms\V1\Certificate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServerCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Kms\V1\Certificate::class);
        $this->server_certificates = $arr;

        return $this;
    }

}



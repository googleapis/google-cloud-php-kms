<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.GetPublicKey][google.cloud.kms.v1.KeyManagementService.GetPublicKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.GetPublicKeyRequest</code>
 */
class GetPublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The [PublicKey][google.cloud.kms.v1.PublicKey] format specified
     * by the user. This field is required for PQC algorithms. If specified, the
     * public key will be exported through the
     * [public_key][google.cloud.kms.v1.PublicKey.public_key] field in the
     * requested format. Otherwise, the [pem][google.cloud.kms.v1.PublicKey.pem]
     * field will be populated for non-PQC algorithms, and an error will be
     * returned for PQC algorithms.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.PublicKey.PublicKeyFormat public_key_format = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $public_key_format = 0;

    /**
     * @param string $name Required. The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     *                     [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key to get. Please see
     *                     {@see KeyManagementServiceClient::cryptoKeyVersionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Kms\V1\GetPublicKeyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key to get.
     *     @type int $public_key_format
     *           Optional. The [PublicKey][google.cloud.kms.v1.PublicKey] format specified
     *           by the user. This field is required for PQC algorithms. If specified, the
     *           public key will be exported through the
     *           [public_key][google.cloud.kms.v1.PublicKey.public_key] field in the
     *           requested format. Otherwise, the [pem][google.cloud.kms.v1.PublicKey.pem]
     *           field will be populated for non-PQC algorithms, and an error will be
     *           returned for PQC algorithms.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKeyVersion.name] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] public key to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The [PublicKey][google.cloud.kms.v1.PublicKey] format specified
     * by the user. This field is required for PQC algorithms. If specified, the
     * public key will be exported through the
     * [public_key][google.cloud.kms.v1.PublicKey.public_key] field in the
     * requested format. Otherwise, the [pem][google.cloud.kms.v1.PublicKey.pem]
     * field will be populated for non-PQC algorithms, and an error will be
     * returned for PQC algorithms.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.PublicKey.PublicKeyFormat public_key_format = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPublicKeyFormat()
    {
        return $this->public_key_format;
    }

    /**
     * Optional. The [PublicKey][google.cloud.kms.v1.PublicKey] format specified
     * by the user. This field is required for PQC algorithms. If specified, the
     * public key will be exported through the
     * [public_key][google.cloud.kms.v1.PublicKey.public_key] field in the
     * requested format. Otherwise, the [pem][google.cloud.kms.v1.PublicKey.pem]
     * field will be populated for non-PQC algorithms, and an error will be
     * returned for PQC algorithms.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.PublicKey.PublicKeyFormat public_key_format = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPublicKeyFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\PublicKey\PublicKeyFormat::class);
        $this->public_key_format = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateCryptoKeyPrimaryVersionRequest</code>
 */
class UpdateCryptoKeyPrimaryVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The id of the child
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $crypto_key_version_id = '';

    /**
     * @param string $name               Required. The resource name of the
     *                                   [CryptoKey][google.cloud.kms.v1.CryptoKey] to update. Please see
     *                                   {@see KeyManagementServiceClient::cryptoKeyName()} for help formatting this field.
     * @param string $cryptoKeyVersionId Required. The id of the child
     *                                   [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * @return \Google\Cloud\Kms\V1\UpdateCryptoKeyPrimaryVersionRequest
     *
     * @experimental
     */
    public static function build(string $name, string $cryptoKeyVersionId): self
    {
        return (new self())
            ->setName($name)
            ->setCryptoKeyVersionId($cryptoKeyVersionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *     @type string $crypto_key_version_id
     *           Required. The id of the child
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
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
     * Required. The id of the child
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCryptoKeyVersionId()
    {
        return $this->crypto_key_version_id;
    }

    /**
     * Required. The id of the child
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_version_id = $var;

        return $this;
    }

}


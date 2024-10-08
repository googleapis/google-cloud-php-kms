<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.UpdateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateCryptoKeyVersionRequest</code>
 */
class UpdateCryptoKeyVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with
     * updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $crypto_key_version = null;
    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Kms\V1\CryptoKeyVersion $cryptoKeyVersion Required. [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with
     *                                                                updated values.
     * @param \Google\Protobuf\FieldMask            $updateMask       Required. List of fields to be updated in this request.
     *
     * @return \Google\Cloud\Kms\V1\UpdateCryptoKeyVersionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Kms\V1\CryptoKeyVersion $cryptoKeyVersion, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setCryptoKeyVersion($cryptoKeyVersion)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Kms\V1\CryptoKeyVersion $crypto_key_version
     *           Required. [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with
     *           updated values.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with
     * updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Kms\V1\CryptoKeyVersion|null
     */
    public function getCryptoKeyVersion()
    {
        return $this->crypto_key_version;
    }

    public function hasCryptoKeyVersion()
    {
        return isset($this->crypto_key_version);
    }

    public function clearCryptoKeyVersion()
    {
        unset($this->crypto_key_version);
    }

    /**
     * Required. [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] with
     * updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion crypto_key_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Kms\V1\CryptoKeyVersion $var
     * @return $this
     */
    public function setCryptoKeyVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKeyVersion::class);
        $this->crypto_key_version = $var;

        return $this;
    }

    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


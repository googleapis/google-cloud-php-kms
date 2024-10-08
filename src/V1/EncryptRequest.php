<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.EncryptRequest</code>
 */
class EncryptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] or
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server
     * will use its [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys, the
     * plaintext must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $plaintext = '';
    /**
     * Optional. Optional data that, if specified, must also be provided during
     * decryption through
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys the
     * AAD must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $additional_authenticated_data = '';
    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     * is equal to
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $plaintext_crc32c = null;
    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     * is equal to
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $additional_authenticated_data_crc32c = null;

    /**
     * @param string $name      Required. The resource name of the
     *                          [CryptoKey][google.cloud.kms.v1.CryptoKey] or
     *                          [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     *                          encryption.
     *
     *                          If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server
     *                          will use its [primary version][google.cloud.kms.v1.CryptoKey.primary].
     * @param string $plaintext Required. The data to encrypt. Must be no larger than 64KiB.
     *
     *                          The maximum size depends on the key version's
     *                          [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     *                          For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     *                          [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     *                          [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys, the
     *                          plaintext must be no larger than 64KiB. For
     *                          [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     *                          the plaintext and additional_authenticated_data fields must be no larger
     *                          than 8KiB.
     *
     * @return \Google\Cloud\Kms\V1\EncryptRequest
     *
     * @experimental
     */
    public static function build(string $name, string $plaintext): self
    {
        return (new self())
            ->setName($name)
            ->setPlaintext($plaintext);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] or
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     *           encryption.
     *           If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server
     *           will use its [primary version][google.cloud.kms.v1.CryptoKey.primary].
     *     @type string $plaintext
     *           Required. The data to encrypt. Must be no larger than 64KiB.
     *           The maximum size depends on the key version's
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     *           For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     *           [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     *           [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys, the
     *           plaintext must be no larger than 64KiB. For
     *           [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     *           the plaintext and additional_authenticated_data fields must be no larger
     *           than 8KiB.
     *     @type string $additional_authenticated_data
     *           Optional. Optional data that, if specified, must also be provided during
     *           decryption through
     *           [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     *           The maximum size depends on the key version's
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     *           For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     *           [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     *           [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys the
     *           AAD must be no larger than 64KiB. For
     *           [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     *           the plaintext and additional_authenticated_data fields must be no larger
     *           than 8KiB.
     *     @type \Google\Protobuf\Int64Value $plaintext_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     *           If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           verify the integrity of the received
     *           [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     *           using this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that
     *           CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     *           is equal to
     *           [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     *           and if so, perform a limited number of retries. A persistent mismatch may
     *           indicate an issue in your computation of the CRC32C checksum. Note: This
     *           field is defined as int64 for reasons of compatibility across different
     *           languages. However, it is a non-negative integer, which will never exceed
     *           2^32-1, and can be safely downconverted to uint32 in languages that support
     *           this type.
     *     @type \Google\Protobuf\Int64Value $additional_authenticated_data_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     *           If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           verify the integrity of the received
     *           [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     *           using this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that
     *           CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     *           is equal to
     *           [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     *           and if so, perform a limited number of retries. A persistent mismatch may
     *           indicate an issue in your computation of the CRC32C checksum. Note: This
     *           field is defined as int64 for reasons of compatibility across different
     *           languages. However, it is a non-negative integer, which will never exceed
     *           2^32-1, and can be safely downconverted to uint32 in languages that support
     *           this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] or
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server
     * will use its [primary version][google.cloud.kms.v1.CryptoKey.primary].
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
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] or
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * encryption.
     * If a [CryptoKey][google.cloud.kms.v1.CryptoKey] is specified, the server
     * will use its [primary version][google.cloud.kms.v1.CryptoKey.primary].
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
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys, the
     * plaintext must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * Required. The data to encrypt. Must be no larger than 64KiB.
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys, the
     * plaintext must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes plaintext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPlaintext($var)
    {
        GPBUtil::checkString($var, False);
        $this->plaintext = $var;

        return $this;
    }

    /**
     * Optional. Optional data that, if specified, must also be provided during
     * decryption through
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys the
     * AAD must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAdditionalAuthenticatedData()
    {
        return $this->additional_authenticated_data;
    }

    /**
     * Optional. Optional data that, if specified, must also be provided during
     * decryption through
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data].
     * The maximum size depends on the key version's
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level].
     * For [SOFTWARE][google.cloud.kms.v1.ProtectionLevel.SOFTWARE],
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL], and
     * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] keys the
     * AAD must be no larger than 64KiB. For
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] keys, the combined length of
     * the plaintext and additional_authenticated_data fields must be no larger
     * than 8KiB.
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalAuthenticatedData($var)
    {
        GPBUtil::checkString($var, False);
        $this->additional_authenticated_data = $var;

        return $this;
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     * is equal to
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getPlaintextCrc32C()
    {
        return $this->plaintext_crc32c;
    }

    public function hasPlaintextCrc32C()
    {
        return isset($this->plaintext_crc32c);
    }

    public function clearPlaintextCrc32C()
    {
        unset($this->plaintext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getPlaintextCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     * is equal to
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getPlaintextCrc32CUnwrapped()
    {
        return $this->readWrapperValue("plaintext_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     * is equal to
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPlaintextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->plaintext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext])
     * is equal to
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPlaintextCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("plaintext_crc32c", $var);
        return $this;}

    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     * is equal to
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getAdditionalAuthenticatedDataCrc32C()
    {
        return $this->additional_authenticated_data_crc32c;
    }

    public function hasAdditionalAuthenticatedDataCrc32C()
    {
        return isset($this->additional_authenticated_data_crc32c);
    }

    public function clearAdditionalAuthenticatedDataCrc32C()
    {
        unset($this->additional_authenticated_data_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getAdditionalAuthenticatedDataCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     * is equal to
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getAdditionalAuthenticatedDataCrc32CUnwrapped()
    {
        return $this->readWrapperValue("additional_authenticated_data_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     * is equal to
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdditionalAuthenticatedDataCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->additional_authenticated_data_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]
     * using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data])
     * is equal to
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdditionalAuthenticatedDataCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("additional_authenticated_data_crc32c", $var);
        return $this;}

}


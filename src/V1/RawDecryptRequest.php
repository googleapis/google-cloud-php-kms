<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.RawDecrypt][google.cloud.kms.v1.KeyManagementService.RawDecrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.RawDecryptRequest</code>
 */
class RawDecryptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * decryption.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The encrypted data originally returned in
     * [RawEncryptResponse.ciphertext][google.cloud.kms.v1.RawEncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ciphertext = '';
    /**
     * Optional. Optional data that must match the data originally supplied in
     * [RawEncryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawEncryptRequest.additional_authenticated_data].
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $additional_authenticated_data = '';
    /**
     * Required. The initialization vector (IV) used during encryption, which must
     * match the data originally provided in
     * [RawEncryptResponse.initialization_vector][google.cloud.kms.v1.RawEncryptResponse.initialization_vector].
     *
     * Generated from protobuf field <code>bytes initialization_vector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $initialization_vector = '';
    /**
     * The length of the authentication tag that is appended to the end of
     * the ciphertext. If unspecified (0), the default value for the key's
     * algorithm will be used (for AES-GCM, the default value is 16).
     *
     * Generated from protobuf field <code>int32 tag_length = 5;</code>
     */
    protected $tag_length = 0;
    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received ciphertext using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that CRC32C(ciphertext) is equal
     * to ciphertext_crc32c, and if so, perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ciphertext_crc32c = null;
    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received additional_authenticated_data using
     * this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(additional_authenticated_data) is equal to
     * additional_authenticated_data_crc32c, and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $additional_authenticated_data_crc32c = null;
    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received initialization_vector using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     * if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value initialization_vector_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $initialization_vector_crc32c = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     *           decryption.
     *     @type string $ciphertext
     *           Required. The encrypted data originally returned in
     *           [RawEncryptResponse.ciphertext][google.cloud.kms.v1.RawEncryptResponse.ciphertext].
     *     @type string $additional_authenticated_data
     *           Optional. Optional data that must match the data originally supplied in
     *           [RawEncryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawEncryptRequest.additional_authenticated_data].
     *     @type string $initialization_vector
     *           Required. The initialization vector (IV) used during encryption, which must
     *           match the data originally provided in
     *           [RawEncryptResponse.initialization_vector][google.cloud.kms.v1.RawEncryptResponse.initialization_vector].
     *     @type int $tag_length
     *           The length of the authentication tag that is appended to the end of
     *           the ciphertext. If unspecified (0), the default value for the key's
     *           algorithm will be used (for AES-GCM, the default value is 16).
     *     @type \Google\Protobuf\Int64Value $ciphertext_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     *           If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           verify the integrity of the received ciphertext using this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that CRC32C(ciphertext) is equal
     *           to ciphertext_crc32c, and if so, perform a limited number of retries. A
     *           persistent mismatch may indicate an issue in your computation of the CRC32C
     *           checksum. Note: This field is defined as int64 for reasons of compatibility
     *           across different languages. However, it is a non-negative integer, which
     *           will never exceed 2^32-1, and can be safely downconverted to uint32 in
     *           languages that support this type.
     *     @type \Google\Protobuf\Int64Value $additional_authenticated_data_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     *           If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           verify the integrity of the received additional_authenticated_data using
     *           this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that
     *           CRC32C(additional_authenticated_data) is equal to
     *           additional_authenticated_data_crc32c, and if so, perform
     *           a limited number of retries. A persistent mismatch may indicate an issue in
     *           your computation of the CRC32C checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *     @type \Google\Protobuf\Int64Value $initialization_vector_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     *           If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     *           verify the integrity of the received initialization_vector using this
     *           checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     *           will report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that
     *           CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     *           if so, perform a limited number of retries. A persistent mismatch may
     *           indicate an issue in your computation of the CRC32C checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * decryption.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * decryption.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The encrypted data originally returned in
     * [RawEncryptResponse.ciphertext][google.cloud.kms.v1.RawEncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCiphertext()
    {
        return $this->ciphertext;
    }

    /**
     * Required. The encrypted data originally returned in
     * [RawEncryptResponse.ciphertext][google.cloud.kms.v1.RawEncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCiphertext($var)
    {
        GPBUtil::checkString($var, False);
        $this->ciphertext = $var;

        return $this;
    }

    /**
     * Optional. Optional data that must match the data originally supplied in
     * [RawEncryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawEncryptRequest.additional_authenticated_data].
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAdditionalAuthenticatedData()
    {
        return $this->additional_authenticated_data;
    }

    /**
     * Optional. Optional data that must match the data originally supplied in
     * [RawEncryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawEncryptRequest.additional_authenticated_data].
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
     * Required. The initialization vector (IV) used during encryption, which must
     * match the data originally provided in
     * [RawEncryptResponse.initialization_vector][google.cloud.kms.v1.RawEncryptResponse.initialization_vector].
     *
     * Generated from protobuf field <code>bytes initialization_vector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInitializationVector()
    {
        return $this->initialization_vector;
    }

    /**
     * Required. The initialization vector (IV) used during encryption, which must
     * match the data originally provided in
     * [RawEncryptResponse.initialization_vector][google.cloud.kms.v1.RawEncryptResponse.initialization_vector].
     *
     * Generated from protobuf field <code>bytes initialization_vector = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInitializationVector($var)
    {
        GPBUtil::checkString($var, False);
        $this->initialization_vector = $var;

        return $this;
    }

    /**
     * The length of the authentication tag that is appended to the end of
     * the ciphertext. If unspecified (0), the default value for the key's
     * algorithm will be used (for AES-GCM, the default value is 16).
     *
     * Generated from protobuf field <code>int32 tag_length = 5;</code>
     * @return int
     */
    public function getTagLength()
    {
        return $this->tag_length;
    }

    /**
     * The length of the authentication tag that is appended to the end of
     * the ciphertext. If unspecified (0), the default value for the key's
     * algorithm will be used (for AES-GCM, the default value is 16).
     *
     * Generated from protobuf field <code>int32 tag_length = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTagLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->tag_length = $var;

        return $this;
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received ciphertext using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that CRC32C(ciphertext) is equal
     * to ciphertext_crc32c, and if so, perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getCiphertextCrc32C()
    {
        return $this->ciphertext_crc32c;
    }

    public function hasCiphertextCrc32C()
    {
        return isset($this->ciphertext_crc32c);
    }

    public function clearCiphertextCrc32C()
    {
        unset($this->ciphertext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getCiphertextCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received ciphertext using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that CRC32C(ciphertext) is equal
     * to ciphertext_crc32c, and if so, perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getCiphertextCrc32CUnwrapped()
    {
        return $this->readWrapperValue("ciphertext_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received ciphertext using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that CRC32C(ciphertext) is equal
     * to ciphertext_crc32c, and if so, perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCiphertextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ciphertext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.ciphertext][google.cloud.kms.v1.RawDecryptRequest.ciphertext].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received ciphertext using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that CRC32C(ciphertext) is equal
     * to ciphertext_crc32c, and if so, perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCiphertextCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("ciphertext_crc32c", $var);
        return $this;}

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received additional_authenticated_data using
     * this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(additional_authenticated_data) is equal to
     * additional_authenticated_data_crc32c, and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received additional_authenticated_data using
     * this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(additional_authenticated_data) is equal to
     * additional_authenticated_data_crc32c, and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getAdditionalAuthenticatedDataCrc32CUnwrapped()
    {
        return $this->readWrapperValue("additional_authenticated_data_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received additional_authenticated_data using
     * this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(additional_authenticated_data) is equal to
     * additional_authenticated_data_crc32c, and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * [RawDecryptRequest.additional_authenticated_data][google.cloud.kms.v1.RawDecryptRequest.additional_authenticated_data].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received additional_authenticated_data using
     * this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(additional_authenticated_data) is equal to
     * additional_authenticated_data_crc32c, and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdditionalAuthenticatedDataCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("additional_authenticated_data_crc32c", $var);
        return $this;}

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received initialization_vector using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     * if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value initialization_vector_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getInitializationVectorCrc32C()
    {
        return $this->initialization_vector_crc32c;
    }

    public function hasInitializationVectorCrc32C()
    {
        return isset($this->initialization_vector_crc32c);
    }

    public function clearInitializationVectorCrc32C()
    {
        unset($this->initialization_vector_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getInitializationVectorCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received initialization_vector using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     * if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value initialization_vector_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getInitializationVectorCrc32CUnwrapped()
    {
        return $this->readWrapperValue("initialization_vector_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received initialization_vector using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     * if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value initialization_vector_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setInitializationVectorCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->initialization_vector_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [RawDecryptRequest.initialization_vector][google.cloud.kms.v1.RawDecryptRequest.initialization_vector].
     * If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will
     * verify the integrity of the received initialization_vector using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C(initialization_vector) is equal to initialization_vector_crc32c, and
     * if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value initialization_vector_crc32c = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setInitializationVectorCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("initialization_vector_crc32c", $var);
        return $this;}

}


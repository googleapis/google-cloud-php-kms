<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeyManagementService.MacSign][google.cloud.kms.v1.KeyManagementService.MacSign].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.MacSignResponse</code>
 */
class MacSignResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     * Check this field to verify that the intended resource was used for signing.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The created signature.
     *
     * Generated from protobuf field <code>bytes mac = 2;</code>
     */
    protected $mac = '';
    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     * integrity check of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     * performed by computing the CRC32C checksum of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value mac_crc32c = 3;</code>
     */
    protected $mac_crc32c = null;
    /**
     * Integrity verification field. A flag indicating whether
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [data][google.cloud.kms.v1.MacSignRequest.data]. A false value of this
     * field indicates either that
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_data_crc32c = 4;</code>
     */
    protected $verified_data_crc32c = false;
    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     */
    protected $protection_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     *           Check this field to verify that the intended resource was used for signing.
     *     @type string $mac
     *           The created signature.
     *     @type \Google\Protobuf\Int64Value $mac_crc32c
     *           Integrity verification field. A CRC32C checksum of the returned
     *           [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     *           integrity check of
     *           [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     *           performed by computing the CRC32C checksum of
     *           [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     *           comparing your results to this field. Discard the response in case of
     *           non-matching checksum values, and perform a limited number of retries. A
     *           persistent mismatch may indicate an issue in your computation of the CRC32C
     *           checksum. Note: This field is defined as int64 for reasons of compatibility
     *           across different languages. However, it is a non-negative integer, which
     *           will never exceed 2^32-1, and can be safely downconverted to uint32 in
     *           languages that support this type.
     *     @type bool $verified_data_crc32c
     *           Integrity verification field. A flag indicating whether
     *           [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     *           was received by
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     *           for the integrity verification of the
     *           [data][google.cloud.kms.v1.MacSignRequest.data]. A false value of this
     *           field indicates either that
     *           [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     *           was left unset or that it was not delivered to
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     *           set
     *           [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     *           but this field is still false, discard the response and perform a limited
     *           number of retries.
     *     @type int $protection_level
     *           The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     * Check this field to verify that the intended resource was used for signing.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     * Check this field to verify that the intended resource was used for signing.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The created signature.
     *
     * Generated from protobuf field <code>bytes mac = 2;</code>
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * The created signature.
     *
     * Generated from protobuf field <code>bytes mac = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMac($var)
    {
        GPBUtil::checkString($var, False);
        $this->mac = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     * integrity check of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     * performed by computing the CRC32C checksum of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value mac_crc32c = 3;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getMacCrc32C()
    {
        return $this->mac_crc32c;
    }

    public function hasMacCrc32C()
    {
        return isset($this->mac_crc32c);
    }

    public function clearMacCrc32C()
    {
        unset($this->mac_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getMacCrc32C()</code>

     * Integrity verification field. A CRC32C checksum of the returned
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     * integrity check of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     * performed by computing the CRC32C checksum of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value mac_crc32c = 3;</code>
     * @return int|string|null
     */
    public function getMacCrc32CUnwrapped()
    {
        return $this->readWrapperValue("mac_crc32c");
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     * integrity check of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     * performed by computing the CRC32C checksum of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value mac_crc32c = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMacCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->mac_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C checksum of the returned
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac]. An
     * integrity check of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] can be
     * performed by computing the CRC32C checksum of
     * [MacSignResponse.mac][google.cloud.kms.v1.MacSignResponse.mac] and
     * comparing your results to this field. Discard the response in case of
     * non-matching checksum values, and perform a limited number of retries. A
     * persistent mismatch may indicate an issue in your computation of the CRC32C
     * checksum. Note: This field is defined as int64 for reasons of compatibility
     * across different languages. However, it is a non-negative integer, which
     * will never exceed 2^32-1, and can be safely downconverted to uint32 in
     * languages that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value mac_crc32c = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMacCrc32CUnwrapped($var)
    {
        $this->writeWrapperValue("mac_crc32c", $var);
        return $this;}

    /**
     * Integrity verification field. A flag indicating whether
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [data][google.cloud.kms.v1.MacSignRequest.data]. A false value of this
     * field indicates either that
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_data_crc32c = 4;</code>
     * @return bool
     */
    public function getVerifiedDataCrc32C()
    {
        return $this->verified_data_crc32c;
    }

    /**
     * Integrity verification field. A flag indicating whether
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used
     * for the integrity verification of the
     * [data][google.cloud.kms.v1.MacSignRequest.data]. A false value of this
     * field indicates either that
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * was left unset or that it was not delivered to
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've
     * set
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c]
     * but this field is still false, discard the response and perform a limited
     * number of retries.
     *
     * Generated from protobuf field <code>bool verified_data_crc32c = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerifiedDataCrc32C($var)
    {
        GPBUtil::checkBool($var);
        $this->verified_data_crc32c = $var;

        return $this;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used for signing.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

}


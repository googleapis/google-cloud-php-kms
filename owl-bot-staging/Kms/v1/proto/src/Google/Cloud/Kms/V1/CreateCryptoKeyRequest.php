<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.CreateCryptoKey][google.cloud.kms.v1.KeyManagementService.CreateCryptoKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CreateCryptoKeyRequest</code>
 */
class CreateCryptoKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the KeyRing associated with the
     * [CryptoKeys][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string crypto_key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $crypto_key_id = '';
    /**
     * Required. A [CryptoKey][google.cloud.kms.v1.CryptoKey] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $crypto_key = null;
    /**
     * If set to true, the request will create a [CryptoKey][google.cloud.kms.v1.CryptoKey] without any
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]. You must manually call
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion] or
     * [ImportCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.ImportCryptoKeyVersion]
     * before you can use this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>bool skip_initial_version_creation = 5;</code>
     */
    protected $skip_initial_version_creation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [name][google.cloud.kms.v1.KeyRing.name] of the KeyRing associated with the
     *           [CryptoKeys][google.cloud.kms.v1.CryptoKey].
     *     @type string $crypto_key_id
     *           Required. It must be unique within a KeyRing and match the regular
     *           expression `[a-zA-Z0-9_-]{1,63}`
     *     @type \Google\Cloud\Kms\V1\CryptoKey $crypto_key
     *           Required. A [CryptoKey][google.cloud.kms.v1.CryptoKey] with initial field values.
     *     @type bool $skip_initial_version_creation
     *           If set to true, the request will create a [CryptoKey][google.cloud.kms.v1.CryptoKey] without any
     *           [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]. You must manually call
     *           [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion] or
     *           [ImportCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.ImportCryptoKeyVersion]
     *           before you can use this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the KeyRing associated with the
     * [CryptoKeys][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the KeyRing associated with the
     * [CryptoKeys][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string crypto_key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCryptoKeyId()
    {
        return $this->crypto_key_id;
    }

    /**
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string crypto_key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_id = $var;

        return $this;
    }

    /**
     * Required. A [CryptoKey][google.cloud.kms.v1.CryptoKey] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Kms\V1\CryptoKey|null
     */
    public function getCryptoKey()
    {
        return $this->crypto_key;
    }

    public function hasCryptoKey()
    {
        return isset($this->crypto_key);
    }

    public function clearCryptoKey()
    {
        unset($this->crypto_key);
    }

    /**
     * Required. A [CryptoKey][google.cloud.kms.v1.CryptoKey] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Kms\V1\CryptoKey $var
     * @return $this
     */
    public function setCryptoKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKey::class);
        $this->crypto_key = $var;

        return $this;
    }

    /**
     * If set to true, the request will create a [CryptoKey][google.cloud.kms.v1.CryptoKey] without any
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]. You must manually call
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion] or
     * [ImportCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.ImportCryptoKeyVersion]
     * before you can use this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>bool skip_initial_version_creation = 5;</code>
     * @return bool
     */
    public function getSkipInitialVersionCreation()
    {
        return $this->skip_initial_version_creation;
    }

    /**
     * If set to true, the request will create a [CryptoKey][google.cloud.kms.v1.CryptoKey] without any
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]. You must manually call
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion] or
     * [ImportCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.ImportCryptoKeyVersion]
     * before you can use this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>bool skip_initial_version_creation = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipInitialVersionCreation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_initial_version_creation = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExternalProtectionLevelOptions stores a group of additional fields for
 * configuring a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that
 * are specific to the [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL]
 * protection level and
 * [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC] protection
 * levels.
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.ExternalProtectionLevelOptions</code>
 */
class ExternalProtectionLevelOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI for an external resource that this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents.
     *
     * Generated from protobuf field <code>string external_key_uri = 1;</code>
     */
    protected $external_key_uri = '';
    /**
     * The path to the external key material on the EKM when using
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] e.g., "v0/my/key". Set
     * this field instead of external_key_uri when using an
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string ekm_connection_key_path = 2;</code>
     */
    protected $ekm_connection_key_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $external_key_uri
     *           The URI for an external resource that this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents.
     *     @type string $ekm_connection_key_path
     *           The path to the external key material on the EKM when using
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection] e.g., "v0/my/key". Set
     *           this field instead of external_key_uri when using an
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI for an external resource that this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents.
     *
     * Generated from protobuf field <code>string external_key_uri = 1;</code>
     * @return string
     */
    public function getExternalKeyUri()
    {
        return $this->external_key_uri;
    }

    /**
     * The URI for an external resource that this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents.
     *
     * Generated from protobuf field <code>string external_key_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalKeyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_key_uri = $var;

        return $this;
    }

    /**
     * The path to the external key material on the EKM when using
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] e.g., "v0/my/key". Set
     * this field instead of external_key_uri when using an
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string ekm_connection_key_path = 2;</code>
     * @return string
     */
    public function getEkmConnectionKeyPath()
    {
        return $this->ekm_connection_key_path;
    }

    /**
     * The path to the external key material on the EKM when using
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] e.g., "v0/my/key". Set
     * this field instead of external_key_uri when using an
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string ekm_connection_key_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEkmConnectionKeyPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->ekm_connection_key_path = $var;

        return $this;
    }

}


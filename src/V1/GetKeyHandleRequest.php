<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/autokey.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GetKeyHandle][google.cloud.kms.v1.Autokey.GetKeyHandle].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.GetKeyHandleRequest</code>
 */
class GetKeyHandleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle] resource,
     * e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle] resource,
     *                     e.g.
     *                     `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`. Please see
     *                     {@see AutokeyClient::keyHandleName()} for help formatting this field.
     *
     * @return \Google\Cloud\Kms\V1\GetKeyHandleRequest
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
     *           Required. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle] resource,
     *           e.g.
     *           `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Autokey::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle] resource,
     * e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the [KeyHandle][google.cloud.kms.v1.KeyHandle] resource,
     * e.g.
     * `projects/{PROJECT_ID}/locations/{LOCATION}/keyHandles/{KEY_HANDLE_ID}`.
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

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [KeyRing][google.cloud.kms.v1.KeyRing] is a toplevel logical grouping of
 * [CryptoKeys][google.cloud.kms.v1.CryptoKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.KeyRing</code>
 */
class KeyRing extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for the
     * [KeyRing][google.cloud.kms.v1.KeyRing] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The time at which this [KeyRing][google.cloud.kms.v1.KeyRing]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for the
     *           [KeyRing][google.cloud.kms.v1.KeyRing] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this [KeyRing][google.cloud.kms.v1.KeyRing]
     *           was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for the
     * [KeyRing][google.cloud.kms.v1.KeyRing] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for the
     * [KeyRing][google.cloud.kms.v1.KeyRing] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this [KeyRing][google.cloud.kms.v1.KeyRing]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this [KeyRing][google.cloud.kms.v1.KeyRing]
     * was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}


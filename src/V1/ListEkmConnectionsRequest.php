<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/ekm_service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [EkmService.ListEkmConnections][google.cloud.kms.v1.EkmService.ListEkmConnections].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.ListEkmConnectionsRequest</code>
 */
class ListEkmConnectionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the location associated with the
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to list, in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Optional limit on the number of
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to include in the
     * response. Further [EkmConnections][google.cloud.kms.v1.EkmConnection] can
     * subsequently be obtained by including the
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token]
     * in a subsequent request. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Optional pagination token, returned earlier via
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token].
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Only include resources that match the filter in the response. For
     * more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Specify how the results should be sorted. If not specified, the
     * results will be sorted in the default order.  For more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The resource name of the location associated with the
     *                       [EkmConnections][google.cloud.kms.v1.EkmConnection] to list, in the format
     *                       `projects/&#42;/locations/*`. Please see
     *                       {@see EkmServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Kms\V1\ListEkmConnectionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the location associated with the
     *           [EkmConnections][google.cloud.kms.v1.EkmConnection] to list, in the format
     *           `projects/&#42;&#47;locations/&#42;`.
     *     @type int $page_size
     *           Optional. Optional limit on the number of
     *           [EkmConnections][google.cloud.kms.v1.EkmConnection] to include in the
     *           response. Further [EkmConnections][google.cloud.kms.v1.EkmConnection] can
     *           subsequently be obtained by including the
     *           [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token]
     *           in a subsequent request. If unspecified, the server will pick an
     *           appropriate default.
     *     @type string $page_token
     *           Optional. Optional pagination token, returned earlier via
     *           [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token].
     *     @type string $filter
     *           Optional. Only include resources that match the filter in the response. For
     *           more information, see
     *           [Sorting and filtering list
     *           results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *     @type string $order_by
     *           Optional. Specify how the results should be sorted. If not specified, the
     *           results will be sorted in the default order.  For more information, see
     *           [Sorting and filtering list
     *           results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\EkmService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the location associated with the
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to list, in the format
     * `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the location associated with the
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to list, in the format
     * `projects/&#42;&#47;locations/&#42;`.
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
     * Optional. Optional limit on the number of
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to include in the
     * response. Further [EkmConnections][google.cloud.kms.v1.EkmConnection] can
     * subsequently be obtained by including the
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token]
     * in a subsequent request. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Optional limit on the number of
     * [EkmConnections][google.cloud.kms.v1.EkmConnection] to include in the
     * response. Further [EkmConnections][google.cloud.kms.v1.EkmConnection] can
     * subsequently be obtained by including the
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token]
     * in a subsequent request. If unspecified, the server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Optional pagination token, returned earlier via
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token].
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Optional pagination token, returned earlier via
     * [ListEkmConnectionsResponse.next_page_token][google.cloud.kms.v1.ListEkmConnectionsResponse.next_page_token].
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Only include resources that match the filter in the response. For
     * more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Only include resources that match the filter in the response. For
     * more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Specify how the results should be sorted. If not specified, the
     * results will be sorted in the default order.  For more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Specify how the results should be sorted. If not specified, the
     * results will be sorted in the default order.  For more information, see
     * [Sorting and filtering list
     * results](https://cloud.google.com/kms/docs/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}


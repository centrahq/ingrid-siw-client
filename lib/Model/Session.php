<?php
/**
 * Session
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SIW API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Session Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Session implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'status' => 'string',
'customer_info' => '\Swagger\Client\Model\CustomerInfo',
'cart' => '\Swagger\Client\Model\Cart',
'selected_shipping_option' => '\Swagger\Client\Model\SelectedShippingOption',
'external_id' => 'string',
'shipping_price' => 'int',
'additional_information' => '\Swagger\Client\Model\AdditionalInfo',
'expires_at' => 'string',
'customer' => '\Swagger\Client\Model\CustomerInfo',
'search_address' => '\Swagger\Client\Model\Address',
'tos_id' => 'string',
'shipping_cost' => '\Swagger\Client\Model\ShippingCost',
'result' => '\Swagger\Client\Model\Result',
'experiment_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'status' => null,
'customer_info' => null,
'cart' => null,
'selected_shipping_option' => null,
'external_id' => null,
'shipping_price' => 'int32',
'additional_information' => null,
'expires_at' => null,
'customer' => null,
'search_address' => null,
'tos_id' => null,
'shipping_cost' => null,
'result' => null,
'experiment_id' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'status' => 'status',
'customer_info' => 'customer_info',
'cart' => 'cart',
'selected_shipping_option' => 'selected_shipping_option',
'external_id' => 'external_id',
'shipping_price' => 'shipping_price',
'additional_information' => 'additional_information',
'expires_at' => 'expires_at',
'customer' => 'customer',
'search_address' => 'search_address',
'tos_id' => 'tos_id',
'shipping_cost' => 'shipping_cost',
'result' => 'result',
'experiment_id' => 'experiment_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'customer_info' => 'setCustomerInfo',
'cart' => 'setCart',
'selected_shipping_option' => 'setSelectedShippingOption',
'external_id' => 'setExternalId',
'shipping_price' => 'setShippingPrice',
'additional_information' => 'setAdditionalInformation',
'expires_at' => 'setExpiresAt',
'customer' => 'setCustomer',
'search_address' => 'setSearchAddress',
'tos_id' => 'setTosId',
'shipping_cost' => 'setShippingCost',
'result' => 'setResult',
'experiment_id' => 'setExperimentId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'customer_info' => 'getCustomerInfo',
'cart' => 'getCart',
'selected_shipping_option' => 'getSelectedShippingOption',
'external_id' => 'getExternalId',
'shipping_price' => 'getShippingPrice',
'additional_information' => 'getAdditionalInformation',
'expires_at' => 'getExpiresAt',
'customer' => 'getCustomer',
'search_address' => 'getSearchAddress',
'tos_id' => 'getTosId',
'shipping_cost' => 'getShippingCost',
'result' => 'getResult',
'experiment_id' => 'getExperimentId'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['customer_info'] = isset($data['customer_info']) ? $data['customer_info'] : null;
        $this->container['cart'] = isset($data['cart']) ? $data['cart'] : null;
        $this->container['selected_shipping_option'] = isset($data['selected_shipping_option']) ? $data['selected_shipping_option'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['shipping_price'] = isset($data['shipping_price']) ? $data['shipping_price'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['search_address'] = isset($data['search_address']) ? $data['search_address'] : null;
        $this->container['tos_id'] = isset($data['tos_id']) ? $data['tos_id'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['experiment_id'] = isset($data['experiment_id']) ? $data['experiment_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id UUIDv4 identifier of the session. Generated when session is created. Used for updating, fetching and completing the session.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets customer_info
     *
     * @return \Swagger\Client\Model\CustomerInfo
     */
    public function getCustomerInfo()
    {
        return $this->container['customer_info'];
    }

    /**
     * Sets customer_info
     *
     * @param \Swagger\Client\Model\CustomerInfo $customer_info customer_info
     *
     * @return $this
     */
    public function setCustomerInfo($customer_info)
    {
        $this->container['customer_info'] = $customer_info;

        return $this;
    }

    /**
     * Gets cart
     *
     * @return \Swagger\Client\Model\Cart
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \Swagger\Client\Model\Cart $cart cart
     *
     * @return $this
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets selected_shipping_option
     *
     * @return \Swagger\Client\Model\SelectedShippingOption
     */
    public function getSelectedShippingOption()
    {
        return $this->container['selected_shipping_option'];
    }

    /**
     * Sets selected_shipping_option
     *
     * @param \Swagger\Client\Model\SelectedShippingOption $selected_shipping_option selected_shipping_option
     *
     * @return $this
     */
    public function setSelectedShippingOption($selected_shipping_option)
    {
        $this->container['selected_shipping_option'] = $selected_shipping_option;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id Can be used to store a unique identifier from the merchant. For example external order ID or external shipment ID.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets shipping_price
     *
     * @return int
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param int $shipping_price Price of currently selected (or pre-selected) shipping option.
     *
     * @return $this
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return \Swagger\Client\Model\AdditionalInfo
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param \Swagger\Client\Model\AdditionalInfo $additional_information additional_information
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string $expires_at Time at which some of the shipping options will be invalid. This is influenced by the cutoff times at the warehouse among other things. Session should be refreshed if this value is in the past.
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Swagger\Client\Model\CustomerInfo
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Swagger\Client\Model\CustomerInfo $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets search_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getSearchAddress()
    {
        return $this->container['search_address'];
    }

    /**
     * Sets search_address
     *
     * @param \Swagger\Client\Model\Address $search_address search_address
     *
     * @return $this
     */
    public function setSearchAddress($search_address)
    {
        $this->container['search_address'] = $search_address;

        return $this;
    }

    /**
     * Gets tos_id
     *
     * @return string
     */
    public function getTosId()
    {
        return $this->container['tos_id'];
    }

    /**
     * Sets tos_id
     *
     * @param string $tos_id tos_id
     *
     * @return $this
     */
    public function setTosId($tos_id)
    {
        $this->container['tos_id'] = $tos_id;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Swagger\Client\Model\ShippingCost
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Swagger\Client\Model\ShippingCost $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \Swagger\Client\Model\Result
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \Swagger\Client\Model\Result $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets experiment_id
     *
     * @return string
     */
    public function getExperimentId()
    {
        return $this->container['experiment_id'];
    }

    /**
     * Sets experiment_id
     *
     * @param string $experiment_id Identifier of an A/B testing experiment, which is related to the session. If the session is not related to any A/B testing experiment, this field is empty.
     *
     * @return $this
     */
    public function setExperimentId($experiment_id)
    {
        $this->container['experiment_id'] = $experiment_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

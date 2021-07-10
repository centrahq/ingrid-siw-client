<?php
/**
 * ResultDeliveryTime
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
 * ResultDeliveryTime Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResultDeliveryTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResultDeliveryTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_from_merchant' => '\Swagger\Client\Model\ResultDeliveryTimeRange',
'customer_delivery_promise' => '\Swagger\Client\Model\ResultDeliveryTimeRange',
'carrier_delivery_promise' => '\Swagger\Client\Model\ResultDeliveryTimeRange'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_from_merchant' => null,
'customer_delivery_promise' => null,
'carrier_delivery_promise' => null    ];

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
        'pickup_from_merchant' => 'pickup_from_merchant',
'customer_delivery_promise' => 'customer_delivery_promise',
'carrier_delivery_promise' => 'carrier_delivery_promise'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_from_merchant' => 'setPickupFromMerchant',
'customer_delivery_promise' => 'setCustomerDeliveryPromise',
'carrier_delivery_promise' => 'setCarrierDeliveryPromise'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_from_merchant' => 'getPickupFromMerchant',
'customer_delivery_promise' => 'getCustomerDeliveryPromise',
'carrier_delivery_promise' => 'getCarrierDeliveryPromise'    ];

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
        $this->container['pickup_from_merchant'] = isset($data['pickup_from_merchant']) ? $data['pickup_from_merchant'] : null;
        $this->container['customer_delivery_promise'] = isset($data['customer_delivery_promise']) ? $data['customer_delivery_promise'] : null;
        $this->container['carrier_delivery_promise'] = isset($data['carrier_delivery_promise']) ? $data['carrier_delivery_promise'] : null;
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
     * Gets pickup_from_merchant
     *
     * @return \Swagger\Client\Model\ResultDeliveryTimeRange
     */
    public function getPickupFromMerchant()
    {
        return $this->container['pickup_from_merchant'];
    }

    /**
     * Sets pickup_from_merchant
     *
     * @param \Swagger\Client\Model\ResultDeliveryTimeRange $pickup_from_merchant pickup_from_merchant
     *
     * @return $this
     */
    public function setPickupFromMerchant($pickup_from_merchant)
    {
        $this->container['pickup_from_merchant'] = $pickup_from_merchant;

        return $this;
    }

    /**
     * Gets customer_delivery_promise
     *
     * @return \Swagger\Client\Model\ResultDeliveryTimeRange
     */
    public function getCustomerDeliveryPromise()
    {
        return $this->container['customer_delivery_promise'];
    }

    /**
     * Sets customer_delivery_promise
     *
     * @param \Swagger\Client\Model\ResultDeliveryTimeRange $customer_delivery_promise customer_delivery_promise
     *
     * @return $this
     */
    public function setCustomerDeliveryPromise($customer_delivery_promise)
    {
        $this->container['customer_delivery_promise'] = $customer_delivery_promise;

        return $this;
    }

    /**
     * Gets carrier_delivery_promise
     *
     * @return \Swagger\Client\Model\ResultDeliveryTimeRange
     */
    public function getCarrierDeliveryPromise()
    {
        return $this->container['carrier_delivery_promise'];
    }

    /**
     * Sets carrier_delivery_promise
     *
     * @param \Swagger\Client\Model\ResultDeliveryTimeRange $carrier_delivery_promise carrier_delivery_promise
     *
     * @return $this
     */
    public function setCarrierDeliveryPromise($carrier_delivery_promise)
    {
        $this->container['carrier_delivery_promise'] = $carrier_delivery_promise;

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
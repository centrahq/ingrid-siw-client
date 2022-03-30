<?php
/**
 * Cart
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
 * Swagger Codegen version: 2.4.26
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @description Cart information from the e-commerce store. Information in here is used by the shipping rule engine to calculate the best shipping option for the customer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributes' => 'string[]',
        'cart_id' => 'string',
        'currency' => 'string',
        'items' => '\Swagger\Client\Model\CartItem[]',
        'pre_order' => 'bool',
        'shipping_date' => '\Swagger\Client\Model\ShippingDate',
        'total_discount' => 'int',
        'total_value' => 'int',
        'voucher' => 'string',
        'vouchers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attributes' => null,
        'cart_id' => null,
        'currency' => null,
        'items' => null,
        'pre_order' => null,
        'shipping_date' => null,
        'total_discount' => 'int32',
        'total_value' => 'int32',
        'voucher' => null,
        'vouchers' => null
    ];

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
        'attributes' => 'attributes',
        'cart_id' => 'cart_id',
        'currency' => 'currency',
        'items' => 'items',
        'pre_order' => 'pre_order',
        'shipping_date' => 'shipping_date',
        'total_discount' => 'total_discount',
        'total_value' => 'total_value',
        'voucher' => 'voucher',
        'vouchers' => 'vouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'cart_id' => 'setCartId',
        'currency' => 'setCurrency',
        'items' => 'setItems',
        'pre_order' => 'setPreOrder',
        'shipping_date' => 'setShippingDate',
        'total_discount' => 'setTotalDiscount',
        'total_value' => 'setTotalValue',
        'voucher' => 'setVoucher',
        'vouchers' => 'setVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'cart_id' => 'getCartId',
        'currency' => 'getCurrency',
        'items' => 'getItems',
        'pre_order' => 'getPreOrder',
        'shipping_date' => 'getShippingDate',
        'total_discount' => 'getTotalDiscount',
        'total_value' => 'getTotalValue',
        'voucher' => 'getVoucher',
        'vouchers' => 'getVouchers'
    ];

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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['pre_order'] = isset($data['pre_order']) ? $data['pre_order'] : null;
        $this->container['shipping_date'] = isset($data['shipping_date']) ? $data['shipping_date'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['total_value'] = isset($data['total_value']) ? $data['total_value'] : null;
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
        $this->container['vouchers'] = isset($data['vouchers']) ? $data['vouchers'] : null;
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
     * Gets attributes
     *
     * @return string[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id cart_id
     *
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\CartItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\CartItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets pre_order
     *
     * @return bool
     */
    public function getPreOrder()
    {
        return $this->container['pre_order'];
    }

    /**
     * Sets pre_order
     *
     * @param bool $pre_order pre_order
     *
     * @return $this
     */
    public function setPreOrder($pre_order)
    {
        $this->container['pre_order'] = $pre_order;

        return $this;
    }

    /**
     * Gets shipping_date
     *
     * @return \Swagger\Client\Model\ShippingDate
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param \Swagger\Client\Model\ShippingDate $shipping_date shipping_date
     *
     * @return $this
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return int
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param int $total_discount total_discount
     *
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return int
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param int $total_value total_value
     *
     * @return $this
     */
    public function setTotalValue($total_value)
    {
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return string
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param string $voucher voucher
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets vouchers
     *
     * @return string[]
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param string[] $vouchers vouchers
     *
     * @return $this
     */
    public function setVouchers($vouchers)
    {
        $this->container['vouchers'] = $vouchers;

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



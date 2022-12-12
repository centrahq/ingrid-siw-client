<?php
/**
 * SelectedShippingOption
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
 * Swagger Codegen version: 3.0.36
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
 * SelectedShippingOption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SelectedShippingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SelectedShippingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier' => 'string',
'category_tags' => '\Swagger\Client\Model\Tag[]',
'currency' => 'string',
'delivery_type' => 'string',
'external_method_id' => 'string',
'location' => '\Swagger\Client\Model\PickupLocation',
'meta' => 'map[string,string]',
'price' => 'int',
'product' => 'string',
'routes' => '\Swagger\Client\Model\Route[]',
'shipping_category' => 'string',
'shipping_method' => 'string',
'time_slot' => '\Swagger\Client\Model\TimeSlot'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier' => null,
'category_tags' => null,
'currency' => null,
'delivery_type' => null,
'external_method_id' => null,
'location' => null,
'meta' => null,
'price' => 'int32',
'product' => null,
'routes' => null,
'shipping_category' => null,
'shipping_method' => null,
'time_slot' => null    ];

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
        'carrier' => 'carrier',
'category_tags' => 'category_tags',
'currency' => 'currency',
'delivery_type' => 'delivery_type',
'external_method_id' => 'external_method_id',
'location' => 'location',
'meta' => 'meta',
'price' => 'price',
'product' => 'product',
'routes' => 'routes',
'shipping_category' => 'shipping_category',
'shipping_method' => 'shipping_method',
'time_slot' => 'time_slot'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier' => 'setCarrier',
'category_tags' => 'setCategoryTags',
'currency' => 'setCurrency',
'delivery_type' => 'setDeliveryType',
'external_method_id' => 'setExternalMethodId',
'location' => 'setLocation',
'meta' => 'setMeta',
'price' => 'setPrice',
'product' => 'setProduct',
'routes' => 'setRoutes',
'shipping_category' => 'setShippingCategory',
'shipping_method' => 'setShippingMethod',
'time_slot' => 'setTimeSlot'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier' => 'getCarrier',
'category_tags' => 'getCategoryTags',
'currency' => 'getCurrency',
'delivery_type' => 'getDeliveryType',
'external_method_id' => 'getExternalMethodId',
'location' => 'getLocation',
'meta' => 'getMeta',
'price' => 'getPrice',
'product' => 'getProduct',
'routes' => 'getRoutes',
'shipping_category' => 'getShippingCategory',
'shipping_method' => 'getShippingMethod',
'time_slot' => 'getTimeSlot'    ];

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
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['category_tags'] = isset($data['category_tags']) ? $data['category_tags'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['external_method_id'] = isset($data['external_method_id']) ? $data['external_method_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
        $this->container['shipping_category'] = isset($data['shipping_category']) ? $data['shipping_category'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['time_slot'] = isset($data['time_slot']) ? $data['time_slot'] : null;
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
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets category_tags
     *
     * @return \Swagger\Client\Model\Tag[]
     */
    public function getCategoryTags()
    {
        return $this->container['category_tags'];
    }

    /**
     * Sets category_tags
     *
     * @param \Swagger\Client\Model\Tag[] $category_tags category_tags
     *
     * @return $this
     */
    public function setCategoryTags($category_tags)
    {
        $this->container['category_tags'] = $category_tags;

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
     * Gets delivery_type
     *
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string $delivery_type delivery_type
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets external_method_id
     *
     * @return string
     */
    public function getExternalMethodId()
    {
        return $this->container['external_method_id'];
    }

    /**
     * Sets external_method_id
     *
     * @param string $external_method_id External method identifier that can be used for custom shipping methods mappings, eg overriding a shipping product id from Ingrid by merchant's own. This mapping needs to be setup in the Merchant Admin tool.
     *
     * @return $this
     */
    public function setExternalMethodId($external_method_id)
    {
        $this->container['external_method_id'] = $external_method_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\PickupLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\PickupLocation $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return map[string,string]
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param map[string,string] $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets routes
     *
     * @return \Swagger\Client\Model\Route[]
     */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
     * Sets routes
     *
     * @param \Swagger\Client\Model\Route[] $routes Routes represent a list of delivery steps. This is used for so called chained deliveries where there are more than two deliveries involved to deliver a package to the customer. For example from central warehouse to the service point and then from a service point to customer's house. For a non-chained delivery this will contain only one step.
     *
     * @return $this
     */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;

        return $this;
    }

    /**
     * Gets shipping_category
     *
     * @return string
     */
    public function getShippingCategory()
    {
        return $this->container['shipping_category'];
    }

    /**
     * Sets shipping_category
     *
     * @param string $shipping_category Shipping category under which the selected shipping options are grouped. Shipping categories are setup and configured in the merchant admin tool.
     *
     * @return $this
     */
    public function setShippingCategory($shipping_category)
    {
        $this->container['shipping_category'] = $shipping_category;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets time_slot
     *
     * @return \Swagger\Client\Model\TimeSlot
     */
    public function getTimeSlot()
    {
        return $this->container['time_slot'];
    }

    /**
     * Sets time_slot
     *
     * @param \Swagger\Client\Model\TimeSlot $time_slot time_slot
     *
     * @return $this
     */
    public function setTimeSlot($time_slot)
    {
        $this->container['time_slot'] = $time_slot;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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

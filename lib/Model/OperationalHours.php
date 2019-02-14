<?php
/**
 * OperationalHours
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
 * Swagger Codegen version: 3.0.4
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
 * OperationalHours Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationalHours implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OperationalHours';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mon' => 'string',
'tue' => 'string',
'wed' => 'string',
'thu' => 'string',
'fri' => 'string',
'sat' => 'string',
'sun' => 'string',
'free_text' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mon' => null,
'tue' => null,
'wed' => null,
'thu' => null,
'fri' => null,
'sat' => null,
'sun' => null,
'free_text' => null    ];

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
        'mon' => 'mon',
'tue' => 'tue',
'wed' => 'wed',
'thu' => 'thu',
'fri' => 'fri',
'sat' => 'sat',
'sun' => 'sun',
'free_text' => 'free_text'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mon' => 'setMon',
'tue' => 'setTue',
'wed' => 'setWed',
'thu' => 'setThu',
'fri' => 'setFri',
'sat' => 'setSat',
'sun' => 'setSun',
'free_text' => 'setFreeText'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mon' => 'getMon',
'tue' => 'getTue',
'wed' => 'getWed',
'thu' => 'getThu',
'fri' => 'getFri',
'sat' => 'getSat',
'sun' => 'getSun',
'free_text' => 'getFreeText'    ];

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
        $this->container['mon'] = isset($data['mon']) ? $data['mon'] : null;
        $this->container['tue'] = isset($data['tue']) ? $data['tue'] : null;
        $this->container['wed'] = isset($data['wed']) ? $data['wed'] : null;
        $this->container['thu'] = isset($data['thu']) ? $data['thu'] : null;
        $this->container['fri'] = isset($data['fri']) ? $data['fri'] : null;
        $this->container['sat'] = isset($data['sat']) ? $data['sat'] : null;
        $this->container['sun'] = isset($data['sun']) ? $data['sun'] : null;
        $this->container['free_text'] = isset($data['free_text']) ? $data['free_text'] : null;
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

        return true;
    }


    /**
     * Gets mon
     *
     * @return string
     */
    public function getMon()
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param string $mon mon
     *
     * @return $this
     */
    public function setMon($mon)
    {
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return string
     */
    public function getTue()
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param string $tue tue
     *
     * @return $this
     */
    public function setTue($tue)
    {
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return string
     */
    public function getWed()
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param string $wed wed
     *
     * @return $this
     */
    public function setWed($wed)
    {
        $this->container['wed'] = $wed;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return string
     */
    public function getThu()
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param string $thu thu
     *
     * @return $this
     */
    public function setThu($thu)
    {
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return string
     */
    public function getFri()
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param string $fri fri
     *
     * @return $this
     */
    public function setFri($fri)
    {
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return string
     */
    public function getSat()
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param string $sat sat
     *
     * @return $this
     */
    public function setSat($sat)
    {
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return string
     */
    public function getSun()
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param string $sun sun
     *
     * @return $this
     */
    public function setSun($sun)
    {
        $this->container['sun'] = $sun;

        return $this;
    }

    /**
     * Gets free_text
     *
     * @return string[]
     */
    public function getFreeText()
    {
        return $this->container['free_text'];
    }

    /**
     * Sets free_text
     *
     * @param string[] $free_text free_text
     *
     * @return $this
     */
    public function setFreeText($free_text)
    {
        $this->container['free_text'] = $free_text;

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

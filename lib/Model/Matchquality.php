<?php
/**
 * Matchquality
 *
 * PHP version 5
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LocationIQ
 *
 * LocationIQ provides flexible enterprise-grade location based solutions. We work with developers, startups and enterprises worldwide serving billions of requests everyday. This page provides an overview of the technical aspects of our API and will help you get started.
 *
 * The version of the OpenAPI document: 1.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LocationIq\Model;

use \ArrayAccess;
use \LocationIq\ObjectSerializer;

/**
 * Matchquality Class Doc Comment
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Matchquality implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'matchquality';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'matchcode' => 'string',
        'matchtype' => 'string',
        'matchlevel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'matchcode' => null,
        'matchtype' => null,
        'matchlevel' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'matchcode' => 'matchcode',
        'matchtype' => 'matchtype',
        'matchlevel' => 'matchlevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'matchcode' => 'setMatchcode',
        'matchtype' => 'setMatchtype',
        'matchlevel' => 'setMatchlevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'matchcode' => 'getMatchcode',
        'matchtype' => 'getMatchtype',
        'matchlevel' => 'getMatchlevel'
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
        return self::$openAPIModelName;
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
        $this->container['matchcode'] = isset($data['matchcode']) ? $data['matchcode'] : null;
        $this->container['matchtype'] = isset($data['matchtype']) ? $data['matchtype'] : null;
        $this->container['matchlevel'] = isset($data['matchlevel']) ? $data['matchlevel'] : null;
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
     * Gets matchcode
     *
     * @return string|null
     */
    public function getMatchcode()
    {
        return $this->container['matchcode'];
    }

    /**
     * Sets matchcode
     *
     * @param string|null $matchcode matchcode
     *
     * @return $this
     */
    public function setMatchcode($matchcode)
    {
        $this->container['matchcode'] = $matchcode;

        return $this;
    }

    /**
     * Gets matchtype
     *
     * @return string|null
     */
    public function getMatchtype()
    {
        return $this->container['matchtype'];
    }

    /**
     * Sets matchtype
     *
     * @param string|null $matchtype matchtype
     *
     * @return $this
     */
    public function setMatchtype($matchtype)
    {
        $this->container['matchtype'] = $matchtype;

        return $this;
    }

    /**
     * Gets matchlevel
     *
     * @return string|null
     */
    public function getMatchlevel()
    {
        return $this->container['matchlevel'];
    }

    /**
     * Sets matchlevel
     *
     * @param string|null $matchlevel matchlevel
     *
     * @return $this
     */
    public function setMatchlevel($matchlevel)
    {
        $this->container['matchlevel'] = $matchlevel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



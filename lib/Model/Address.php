<?php
/**
 * Address
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
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.2.3
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'house_number' => 'string',
        'road' => 'string',
        'residential' => 'string',
        'village' => 'string',
        'county' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'house_number' => null,
        'road' => null,
        'residential' => null,
        'village' => null,
        'county' => null,
        'state' => null,
        'postcode' => null,
        'country' => null,
        'country_code' => null,
        'city' => null
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
        'house_number' => 'house_number',
        'road' => 'road',
        'residential' => 'residential',
        'village' => 'village',
        'county' => 'county',
        'state' => 'state',
        'postcode' => 'postcode',
        'country' => 'country',
        'country_code' => 'country_code',
        'city' => 'city'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'house_number' => 'setHouseNumber',
        'road' => 'setRoad',
        'residential' => 'setResidential',
        'village' => 'setVillage',
        'county' => 'setCounty',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'city' => 'setCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'house_number' => 'getHouseNumber',
        'road' => 'getRoad',
        'residential' => 'getResidential',
        'village' => 'getVillage',
        'county' => 'getCounty',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'city' => 'getCity'
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
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['road'] = isset($data['road']) ? $data['road'] : null;
        $this->container['residential'] = isset($data['residential']) ? $data['residential'] : null;
        $this->container['village'] = isset($data['village']) ? $data['village'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
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
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number house_number
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets road
     *
     * @return string|null
     */
    public function getRoad()
    {
        return $this->container['road'];
    }

    /**
     * Sets road
     *
     * @param string|null $road road
     *
     * @return $this
     */
    public function setRoad($road)
    {
        $this->container['road'] = $road;

        return $this;
    }

    /**
     * Gets residential
     *
     * @return string|null
     */
    public function getResidential()
    {
        return $this->container['residential'];
    }

    /**
     * Sets residential
     *
     * @param string|null $residential residential
     *
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->container['residential'] = $residential;

        return $this;
    }

    /**
     * Gets village
     *
     * @return string|null
     */
    public function getVillage()
    {
        return $this->container['village'];
    }

    /**
     * Sets village
     *
     * @param string|null $village village
     *
     * @return $this
     */
    public function setVillage($village)
    {
        $this->container['village'] = $village;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county county
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



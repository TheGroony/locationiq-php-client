<?php
/**
 * Location
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
 * Location Class Doc Comment
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'distance' => 'float',
        'place_id' => 'string',
        'licence' => 'string',
        'osm_type' => 'string',
        'osm_id' => 'string',
        'boundingbox' => 'string[]',
        'lat' => 'string',
        'lon' => 'string',
        'display_name' => 'string',
        'class' => 'string',
        'type' => 'string',
        'importance' => 'float',
        'address' => '\LocationIq\Model\Address',
        'namedetails' => '\LocationIq\Model\Namedetails',
        'matchquality' => '\LocationIq\Model\Matchquality'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'distance' => null,
        'place_id' => null,
        'licence' => null,
        'osm_type' => null,
        'osm_id' => null,
        'boundingbox' => null,
        'lat' => null,
        'lon' => null,
        'display_name' => null,
        'class' => null,
        'type' => null,
        'importance' => null,
        'address' => null,
        'namedetails' => null,
        'matchquality' => null
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
        'distance' => 'distance',
        'place_id' => 'place_id',
        'licence' => 'licence',
        'osm_type' => 'osm_type',
        'osm_id' => 'osm_id',
        'boundingbox' => 'boundingbox',
        'lat' => 'lat',
        'lon' => 'lon',
        'display_name' => 'display_name',
        'class' => 'class',
        'type' => 'type',
        'importance' => 'importance',
        'address' => 'address',
        'namedetails' => 'namedetails',
        'matchquality' => 'matchquality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distance' => 'setDistance',
        'place_id' => 'setPlaceId',
        'licence' => 'setLicence',
        'osm_type' => 'setOsmType',
        'osm_id' => 'setOsmId',
        'boundingbox' => 'setBoundingbox',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'display_name' => 'setDisplayName',
        'class' => 'setClass',
        'type' => 'setType',
        'importance' => 'setImportance',
        'address' => 'setAddress',
        'namedetails' => 'setNamedetails',
        'matchquality' => 'setMatchquality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distance' => 'getDistance',
        'place_id' => 'getPlaceId',
        'licence' => 'getLicence',
        'osm_type' => 'getOsmType',
        'osm_id' => 'getOsmId',
        'boundingbox' => 'getBoundingbox',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'display_name' => 'getDisplayName',
        'class' => 'getClass',
        'type' => 'getType',
        'importance' => 'getImportance',
        'address' => 'getAddress',
        'namedetails' => 'getNamedetails',
        'matchquality' => 'getMatchquality'
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
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['place_id'] = isset($data['place_id']) ? $data['place_id'] : null;
        $this->container['licence'] = isset($data['licence']) ? $data['licence'] : null;
        $this->container['osm_type'] = isset($data['osm_type']) ? $data['osm_type'] : null;
        $this->container['osm_id'] = isset($data['osm_id']) ? $data['osm_id'] : null;
        $this->container['boundingbox'] = isset($data['boundingbox']) ? $data['boundingbox'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['importance'] = isset($data['importance']) ? $data['importance'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['namedetails'] = isset($data['namedetails']) ? $data['namedetails'] : null;
        $this->container['matchquality'] = isset($data['matchquality']) ? $data['matchquality'] : null;
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
     * Gets distance
     *
     * @return float|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float|null $distance distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets place_id
     *
     * @return string|null
     */
    public function getPlaceId()
    {
        return $this->container['place_id'];
    }

    /**
     * Sets place_id
     *
     * @param string|null $place_id place_id
     *
     * @return $this
     */
    public function setPlaceId($place_id)
    {
        $this->container['place_id'] = $place_id;

        return $this;
    }

    /**
     * Gets licence
     *
     * @return string|null
     */
    public function getLicence()
    {
        return $this->container['licence'];
    }

    /**
     * Sets licence
     *
     * @param string|null $licence licence
     *
     * @return $this
     */
    public function setLicence($licence)
    {
        $this->container['licence'] = $licence;

        return $this;
    }

    /**
     * Gets osm_type
     *
     * @return string|null
     */
    public function getOsmType()
    {
        return $this->container['osm_type'];
    }

    /**
     * Sets osm_type
     *
     * @param string|null $osm_type osm_type
     *
     * @return $this
     */
    public function setOsmType($osm_type)
    {
        $this->container['osm_type'] = $osm_type;

        return $this;
    }

    /**
     * Gets osm_id
     *
     * @return string|null
     */
    public function getOsmId()
    {
        return $this->container['osm_id'];
    }

    /**
     * Sets osm_id
     *
     * @param string|null $osm_id osm_id
     *
     * @return $this
     */
    public function setOsmId($osm_id)
    {
        $this->container['osm_id'] = $osm_id;

        return $this;
    }

    /**
     * Gets boundingbox
     *
     * @return string[]|null
     */
    public function getBoundingbox()
    {
        return $this->container['boundingbox'];
    }

    /**
     * Sets boundingbox
     *
     * @param string[]|null $boundingbox boundingbox
     *
     * @return $this
     */
    public function setBoundingbox($boundingbox)
    {
        $this->container['boundingbox'] = $boundingbox;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return string|null
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param string|null $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return string|null
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param string|null $lon lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return float|null
     */
    public function getImportance()
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param float|null $importance importance
     *
     * @return $this
     */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \LocationIq\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \LocationIq\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets namedetails
     *
     * @return \LocationIq\Model\Namedetails|null
     */
    public function getNamedetails()
    {
        return $this->container['namedetails'];
    }

    /**
     * Sets namedetails
     *
     * @param \LocationIq\Model\Namedetails|null $namedetails namedetails
     *
     * @return $this
     */
    public function setNamedetails($namedetails)
    {
        $this->container['namedetails'] = $namedetails;

        return $this;
    }

    /**
     * Gets matchquality
     *
     * @return \LocationIq\Model\Matchquality|null
     */
    public function getMatchquality()
    {
        return $this->container['matchquality'];
    }

    /**
     * Sets matchquality
     *
     * @param \LocationIq\Model\Matchquality|null $matchquality matchquality
     *
     * @return $this
     */
    public function setMatchquality($matchquality)
    {
        $this->container['matchquality'] = $matchquality;

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



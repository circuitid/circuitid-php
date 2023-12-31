<?php
/**
 * Offices
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Circuit ID REST API
 *
 * # Introduction Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go.                  Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.   We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.22
 * Contact: support@circuitid.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\CircuitID;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Offices Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Offices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'offices';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'streetNumber' => 'string',
        'streetName' => 'string',
        'preDirection' => 'string',
        'streetSuffix' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipCode' => 'string',
        'address2' => 'string',
        'country' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'streetNumber' => null,
        'streetName' => null,
        'preDirection' => null,
        'streetSuffix' => null,
        'city' => null,
        'state' => null,
        'zipCode' => null,
        'address2' => null,
        'country' => null,
        'region' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'streetNumber' => false,
		'streetName' => false,
		'preDirection' => false,
		'streetSuffix' => false,
		'city' => false,
		'state' => false,
		'zipCode' => false,
		'address2' => false,
		'country' => false,
		'region' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'streetNumber' => 'streetNumber',
        'streetName' => 'streetName',
        'preDirection' => 'preDirection',
        'streetSuffix' => 'streetSuffix',
        'city' => 'city',
        'state' => 'state',
        'zipCode' => 'zipCode',
        'address2' => 'address2',
        'country' => 'country',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'streetNumber' => 'setStreetNumber',
        'streetName' => 'setStreetName',
        'preDirection' => 'setPreDirection',
        'streetSuffix' => 'setStreetSuffix',
        'city' => 'setCity',
        'state' => 'setState',
        'zipCode' => 'setZipCode',
        'address2' => 'setAddress2',
        'country' => 'setCountry',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'streetNumber' => 'getStreetNumber',
        'streetName' => 'getStreetName',
        'preDirection' => 'getPreDirection',
        'streetSuffix' => 'getStreetSuffix',
        'city' => 'getCity',
        'state' => 'getState',
        'zipCode' => 'getZipCode',
        'address2' => 'getAddress2',
        'country' => 'getCountry',
        'region' => 'getRegion'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('streetNumber', $data ?? [], null);
        $this->setIfExists('streetName', $data ?? [], null);
        $this->setIfExists('preDirection', $data ?? [], null);
        $this->setIfExists('streetSuffix', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 45)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['streetNumber'] === null) {
            $invalidProperties[] = "'streetNumber' can't be null";
        }
        if ((mb_strlen($this->container['streetNumber']) > 45)) {
            $invalidProperties[] = "invalid value for 'streetNumber', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['streetName'] === null) {
            $invalidProperties[] = "'streetName' can't be null";
        }
        if ((mb_strlen($this->container['streetName']) > 20)) {
            $invalidProperties[] = "invalid value for 'streetName', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['preDirection']) && (mb_strlen($this->container['preDirection']) > 2)) {
            $invalidProperties[] = "invalid value for 'preDirection', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['streetSuffix'] === null) {
            $invalidProperties[] = "'streetSuffix' can't be null";
        }
        if ((mb_strlen($this->container['streetSuffix']) > 4)) {
            $invalidProperties[] = "invalid value for 'streetSuffix', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['streetSuffix']) < 2)) {
            $invalidProperties[] = "invalid value for 'streetSuffix', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 45)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 45)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['zipCode']) && (mb_strlen($this->container['zipCode']) > 45)) {
            $invalidProperties[] = "invalid value for 'zipCode', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 45)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets streetNumber
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['streetNumber'];
    }

    /**
     * Sets streetNumber
     *
     * @param string $streetNumber streetNumber
     *
     * @return self
     */
    public function setStreetNumber($streetNumber)
    {
        if (is_null($streetNumber)) {
            throw new \InvalidArgumentException('non-nullable streetNumber cannot be null');
        }
        if ((mb_strlen($streetNumber) > 45)) {
            throw new \InvalidArgumentException('invalid length for $streetNumber when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['streetNumber'] = $streetNumber;

        return $this;
    }

    /**
     * Gets streetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     *
     * @param string $streetName streetName
     *
     * @return self
     */
    public function setStreetName($streetName)
    {
        if (is_null($streetName)) {
            throw new \InvalidArgumentException('non-nullable streetName cannot be null');
        }
        if ((mb_strlen($streetName) > 20)) {
            throw new \InvalidArgumentException('invalid length for $streetName when calling Offices., must be smaller than or equal to 20.');
        }

        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets preDirection
     *
     * @return string|null
     */
    public function getPreDirection()
    {
        return $this->container['preDirection'];
    }

    /**
     * Sets preDirection
     *
     * @param string|null $preDirection preDirection
     *
     * @return self
     */
    public function setPreDirection($preDirection)
    {
        if (is_null($preDirection)) {
            throw new \InvalidArgumentException('non-nullable preDirection cannot be null');
        }
        if ((mb_strlen($preDirection) > 2)) {
            throw new \InvalidArgumentException('invalid length for $preDirection when calling Offices., must be smaller than or equal to 2.');
        }

        $this->container['preDirection'] = $preDirection;

        return $this;
    }

    /**
     * Gets streetSuffix
     *
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->container['streetSuffix'];
    }

    /**
     * Sets streetSuffix
     *
     * @param string $streetSuffix streetSuffix
     *
     * @return self
     */
    public function setStreetSuffix($streetSuffix)
    {
        if (is_null($streetSuffix)) {
            throw new \InvalidArgumentException('non-nullable streetSuffix cannot be null');
        }
        if ((mb_strlen($streetSuffix) > 4)) {
            throw new \InvalidArgumentException('invalid length for $streetSuffix when calling Offices., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($streetSuffix) < 2)) {
            throw new \InvalidArgumentException('invalid length for $streetSuffix when calling Offices., must be bigger than or equal to 2.');
        }

        $this->container['streetSuffix'] = $streetSuffix;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 45)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['city'] = $city;

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
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        if ((mb_strlen($state) > 45)) {
            throw new \InvalidArgumentException('invalid length for $state when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string|null $zipCode zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            throw new \InvalidArgumentException('non-nullable zipCode cannot be null');
        }
        if ((mb_strlen($zipCode) > 45)) {
            throw new \InvalidArgumentException('invalid length for $zipCode when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        if ((mb_strlen($address2) > 45)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Offices., must be smaller than or equal to 45.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Offices., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Offices., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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



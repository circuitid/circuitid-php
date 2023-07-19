<?php
/**
 * Ratecenters
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Circuit ID REST API Documentation
 *
 * # Introduction Welcome to the documentation site for the Circuit ID REST API.<br><br>Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.                   Here, you will find comprehensive information about the available endpoints,authentication methods, expected request and response formats, any additional parameters or headers, and an interactive platform to test and experiment with the API.  We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.7
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
 * Ratecenters Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Ratecenters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ratecenters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'npa' => 'mixed',
        'nxx' => 'mixed',
        'lata' => 'mixed',
        'locState' => 'mixed',
        'rcAbbre' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'npa' => null,
        'nxx' => null,
        'lata' => null,
        'locState' => null,
        'rcAbbre' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'npa' => true,
		'nxx' => true,
		'lata' => true,
		'locState' => true,
		'rcAbbre' => true
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
        'npa' => 'npa',
        'nxx' => 'nxx',
        'lata' => 'lata',
        'locState' => 'locState',
        'rcAbbre' => 'rcAbbre'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'npa' => 'setNpa',
        'nxx' => 'setNxx',
        'lata' => 'setLata',
        'locState' => 'setLocState',
        'rcAbbre' => 'setRcAbbre'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'npa' => 'getNpa',
        'nxx' => 'getNxx',
        'lata' => 'getLata',
        'locState' => 'getLocState',
        'rcAbbre' => 'getRcAbbre'
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
        $this->setIfExists('npa', $data ?? [], null);
        $this->setIfExists('nxx', $data ?? [], null);
        $this->setIfExists('lata', $data ?? [], null);
        $this->setIfExists('locState', $data ?? [], null);
        $this->setIfExists('rcAbbre', $data ?? [], null);
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

        if ($this->container['npa'] === null) {
            $invalidProperties[] = "'npa' can't be null";
        }
        if ((mb_strlen($this->container['npa']) > 3)) {
            $invalidProperties[] = "invalid value for 'npa', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['npa']) < 3)) {
            $invalidProperties[] = "invalid value for 'npa', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['nxx'] === null) {
            $invalidProperties[] = "'nxx' can't be null";
        }
        if ((mb_strlen($this->container['nxx']) > 3)) {
            $invalidProperties[] = "invalid value for 'nxx', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['nxx']) < 3)) {
            $invalidProperties[] = "invalid value for 'nxx', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['lata'] === null) {
            $invalidProperties[] = "'lata' can't be null";
        }
        if ((mb_strlen($this->container['lata']) > 3)) {
            $invalidProperties[] = "invalid value for 'lata', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['lata']) < 3)) {
            $invalidProperties[] = "invalid value for 'lata', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['locState'] === null) {
            $invalidProperties[] = "'locState' can't be null";
        }
        if ((mb_strlen($this->container['locState']) > 2)) {
            $invalidProperties[] = "invalid value for 'locState', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['locState']) < 2)) {
            $invalidProperties[] = "invalid value for 'locState', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['rcAbbre'] === null) {
            $invalidProperties[] = "'rcAbbre' can't be null";
        }
        if ((mb_strlen($this->container['rcAbbre']) > 45)) {
            $invalidProperties[] = "invalid value for 'rcAbbre', the character length must be smaller than or equal to 45.";
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
     * Gets npa
     *
     * @return mixed
     */
    public function getNpa()
    {
        return $this->container['npa'];
    }

    /**
     * Sets npa
     *
     * @param mixed $npa npa
     *
     * @return self
     */
    public function setNpa($npa)
    {
        if (is_null($npa)) {
            array_push($this->openAPINullablesSetToNull, 'npa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('npa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($npa) && (mb_strlen($npa) > 3)) {
            throw new \InvalidArgumentException('invalid length for $npa when calling Ratecenters., must be smaller than or equal to 3.');
        }
        if (!is_null($npa) && (mb_strlen($npa) < 3)) {
            throw new \InvalidArgumentException('invalid length for $npa when calling Ratecenters., must be bigger than or equal to 3.');
        }

        $this->container['npa'] = $npa;

        return $this;
    }

    /**
     * Gets nxx
     *
     * @return mixed
     */
    public function getNxx()
    {
        return $this->container['nxx'];
    }

    /**
     * Sets nxx
     *
     * @param mixed $nxx nxx
     *
     * @return self
     */
    public function setNxx($nxx)
    {
        if (is_null($nxx)) {
            array_push($this->openAPINullablesSetToNull, 'nxx');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nxx', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nxx) && (mb_strlen($nxx) > 3)) {
            throw new \InvalidArgumentException('invalid length for $nxx when calling Ratecenters., must be smaller than or equal to 3.');
        }
        if (!is_null($nxx) && (mb_strlen($nxx) < 3)) {
            throw new \InvalidArgumentException('invalid length for $nxx when calling Ratecenters., must be bigger than or equal to 3.');
        }

        $this->container['nxx'] = $nxx;

        return $this;
    }

    /**
     * Gets lata
     *
     * @return mixed
     */
    public function getLata()
    {
        return $this->container['lata'];
    }

    /**
     * Sets lata
     *
     * @param mixed $lata lata
     *
     * @return self
     */
    public function setLata($lata)
    {
        if (is_null($lata)) {
            array_push($this->openAPINullablesSetToNull, 'lata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($lata) && (mb_strlen($lata) > 3)) {
            throw new \InvalidArgumentException('invalid length for $lata when calling Ratecenters., must be smaller than or equal to 3.');
        }
        if (!is_null($lata) && (mb_strlen($lata) < 3)) {
            throw new \InvalidArgumentException('invalid length for $lata when calling Ratecenters., must be bigger than or equal to 3.');
        }

        $this->container['lata'] = $lata;

        return $this;
    }

    /**
     * Gets locState
     *
     * @return mixed
     */
    public function getLocState()
    {
        return $this->container['locState'];
    }

    /**
     * Sets locState
     *
     * @param mixed $locState locState
     *
     * @return self
     */
    public function setLocState($locState)
    {
        if (is_null($locState)) {
            array_push($this->openAPINullablesSetToNull, 'locState');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locState', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($locState) && (mb_strlen($locState) > 2)) {
            throw new \InvalidArgumentException('invalid length for $locState when calling Ratecenters., must be smaller than or equal to 2.');
        }
        if (!is_null($locState) && (mb_strlen($locState) < 2)) {
            throw new \InvalidArgumentException('invalid length for $locState when calling Ratecenters., must be bigger than or equal to 2.');
        }

        $this->container['locState'] = $locState;

        return $this;
    }

    /**
     * Gets rcAbbre
     *
     * @return mixed
     */
    public function getRcAbbre()
    {
        return $this->container['rcAbbre'];
    }

    /**
     * Sets rcAbbre
     *
     * @param mixed $rcAbbre rcAbbre
     *
     * @return self
     */
    public function setRcAbbre($rcAbbre)
    {
        if (is_null($rcAbbre)) {
            array_push($this->openAPINullablesSetToNull, 'rcAbbre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rcAbbre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rcAbbre) && (mb_strlen($rcAbbre) > 45)) {
            throw new \InvalidArgumentException('invalid length for $rcAbbre when calling Ratecenters., must be smaller than or equal to 45.');
        }

        $this->container['rcAbbre'] = $rcAbbre;

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



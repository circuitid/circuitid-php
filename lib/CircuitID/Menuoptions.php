<?php
/**
 * Menuoptions
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
 * The version of the OpenAPI document: 0.47.21
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
 * Menuoptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Menuoptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'menuoptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'digit' => 'int',
        'menus' => 'mixed',
        'destinationType' => 'string',
        'destination' => 'string',
        'ref' => 'string',
        'callForwardingDestination' => 'string'
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
        'digit' => 'int32',
        'menus' => null,
        'destinationType' => null,
        'destination' => null,
        'ref' => null,
        'callForwardingDestination' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'digit' => false,
		'menus' => true,
		'destinationType' => false,
		'destination' => false,
		'ref' => false,
		'callForwardingDestination' => false
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
        'digit' => 'digit',
        'menus' => 'menus',
        'destinationType' => 'destinationType',
        'destination' => 'destination',
        'ref' => 'ref',
        'callForwardingDestination' => 'callForwardingDestination'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'digit' => 'setDigit',
        'menus' => 'setMenus',
        'destinationType' => 'setDestinationType',
        'destination' => 'setDestination',
        'ref' => 'setRef',
        'callForwardingDestination' => 'setCallForwardingDestination'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'digit' => 'getDigit',
        'menus' => 'getMenus',
        'destinationType' => 'getDestinationType',
        'destination' => 'getDestination',
        'ref' => 'getRef',
        'callForwardingDestination' => 'getCallForwardingDestination'
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

    public const DESTINATION_TYPE_ANNOUNCEMENTS = 'announcements';
    public const DESTINATION_TYPE_DIRECTORIES = 'directories';
    public const DESTINATION_TYPE_PARK = 'park';
    public const DESTINATION_TYPE_NUMBERS = 'numbers';
    public const DESTINATION_TYPE_MENUS = 'menus';
    public const DESTINATION_TYPE_USERS = 'users';
    public const DESTINATION_TYPE_SERVERS = 'servers';
    public const DESTINATION_TYPE_INBOUNDRULES = 'inboundrules';
    public const DESTINATION_TYPE_CALLQUEUES = 'callqueues';
    public const DESTINATION_TYPE_FAXACCOUNTS = 'faxaccounts';
    public const DESTINATION_TYPE_CALLFORWARDING = 'callforwarding';
    public const DESTINATION_TYPE_HANGUP = 'hangup';
    public const DESTINATION_TYPE_PHONEINBOUNDRULES = 'phoneinboundrules';
    public const DESTINATION_TYPE_VOICEMAILACCOUNTS = 'voicemailaccounts';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationTypeAllowableValues()
    {
        return [
            self::DESTINATION_TYPE_ANNOUNCEMENTS,
            self::DESTINATION_TYPE_DIRECTORIES,
            self::DESTINATION_TYPE_PARK,
            self::DESTINATION_TYPE_NUMBERS,
            self::DESTINATION_TYPE_MENUS,
            self::DESTINATION_TYPE_USERS,
            self::DESTINATION_TYPE_SERVERS,
            self::DESTINATION_TYPE_INBOUNDRULES,
            self::DESTINATION_TYPE_CALLQUEUES,
            self::DESTINATION_TYPE_FAXACCOUNTS,
            self::DESTINATION_TYPE_CALLFORWARDING,
            self::DESTINATION_TYPE_HANGUP,
            self::DESTINATION_TYPE_PHONEINBOUNDRULES,
            self::DESTINATION_TYPE_VOICEMAILACCOUNTS,
        ];
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
        $this->setIfExists('digit', $data ?? [], null);
        $this->setIfExists('menus', $data ?? [], null);
        $this->setIfExists('destinationType', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('callForwardingDestination', $data ?? [], null);
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

        if ($this->container['digit'] === null) {
            $invalidProperties[] = "'digit' can't be null";
        }
        if ($this->container['menus'] === null) {
            $invalidProperties[] = "'menus' can't be null";
        }
        if ($this->container['destinationType'] === null) {
            $invalidProperties[] = "'destinationType' can't be null";
        }
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($this->container['destinationType']) && !in_array($this->container['destinationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'destinationType', must be one of '%s'",
                $this->container['destinationType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) > 100)) {
            $invalidProperties[] = "invalid value for 'ref', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['ref']) && (mb_strlen($this->container['ref']) < 5)) {
            $invalidProperties[] = "invalid value for 'ref', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['callForwardingDestination']) && (mb_strlen($this->container['callForwardingDestination']) > 45)) {
            $invalidProperties[] = "invalid value for 'callForwardingDestination', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['callForwardingDestination']) && (mb_strlen($this->container['callForwardingDestination']) < 10)) {
            $invalidProperties[] = "invalid value for 'callForwardingDestination', the character length must be bigger than or equal to 10.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling Menuoptions., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets digit
     *
     * @return int
     */
    public function getDigit()
    {
        return $this->container['digit'];
    }

    /**
     * Sets digit
     *
     * @param int $digit digit
     *
     * @return self
     */
    public function setDigit($digit)
    {
        if (is_null($digit)) {
            throw new \InvalidArgumentException('non-nullable digit cannot be null');
        }
        $this->container['digit'] = $digit;

        return $this;
    }

    /**
     * Gets menus
     *
     * @return mixed
     */
    public function getMenus()
    {
        return $this->container['menus'];
    }

    /**
     * Sets menus
     *
     * @param mixed $menus menus
     *
     * @return self
     */
    public function setMenus($menus)
    {
        if (is_null($menus)) {
            array_push($this->openAPINullablesSetToNull, 'menus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('menus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['menus'] = $menus;

        return $this;
    }

    /**
     * Gets destinationType
     *
     * @return string
     */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
     * Sets destinationType
     *
     * @param string $destinationType destinationType
     *
     * @return self
     */
    public function setDestinationType($destinationType)
    {
        if (is_null($destinationType)) {
            throw new \InvalidArgumentException('non-nullable destinationType cannot be null');
        }
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!in_array($destinationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'destinationType', must be one of '%s'",
                    $destinationType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destinationType'] = $destinationType;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string|null $ref ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            throw new \InvalidArgumentException('non-nullable ref cannot be null');
        }
        if ((mb_strlen($ref) > 100)) {
            throw new \InvalidArgumentException('invalid length for $ref when calling Menuoptions., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($ref) < 5)) {
            throw new \InvalidArgumentException('invalid length for $ref when calling Menuoptions., must be bigger than or equal to 5.');
        }

        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets callForwardingDestination
     *
     * @return string|null
     */
    public function getCallForwardingDestination()
    {
        return $this->container['callForwardingDestination'];
    }

    /**
     * Sets callForwardingDestination
     *
     * @param string|null $callForwardingDestination callForwardingDestination
     *
     * @return self
     */
    public function setCallForwardingDestination($callForwardingDestination)
    {
        if (is_null($callForwardingDestination)) {
            throw new \InvalidArgumentException('non-nullable callForwardingDestination cannot be null');
        }
        if ((mb_strlen($callForwardingDestination) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callForwardingDestination when calling Menuoptions., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($callForwardingDestination) < 10)) {
            throw new \InvalidArgumentException('invalid length for $callForwardingDestination when calling Menuoptions., must be bigger than or equal to 10.');
        }

        $this->container['callForwardingDestination'] = $callForwardingDestination;

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



<?php
/**
 * UsersCommunication
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
 * UsersCommunication Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsersCommunication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'users_communication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notifications' => '\OpenAPI\Client\CircuitID\UsersCommunicationNotifications',
        'missedCalls' => '\OpenAPI\Client\CircuitID\UsersCommunicationNotifications',
        'callRecordings' => '\OpenAPI\Client\CircuitID\UsersCommunicationNotifications',
        'newsletters' => '\OpenAPI\Client\CircuitID\UsersCommunicationNotifications',
        'voicemails' => '\OpenAPI\Client\CircuitID\UsersCommunicationNotifications',
        'web' => '\OpenAPI\Client\CircuitID\UsersCommunicationWeb'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'notifications' => null,
        'missedCalls' => null,
        'callRecordings' => null,
        'newsletters' => null,
        'voicemails' => null,
        'web' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'notifications' => false,
		'missedCalls' => false,
		'callRecordings' => false,
		'newsletters' => false,
		'voicemails' => false,
		'web' => false
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
        'notifications' => 'notifications',
        'missedCalls' => 'missedCalls',
        'callRecordings' => 'callRecordings',
        'newsletters' => 'newsletters',
        'voicemails' => 'voicemails',
        'web' => 'web'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notifications' => 'setNotifications',
        'missedCalls' => 'setMissedCalls',
        'callRecordings' => 'setCallRecordings',
        'newsletters' => 'setNewsletters',
        'voicemails' => 'setVoicemails',
        'web' => 'setWeb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notifications' => 'getNotifications',
        'missedCalls' => 'getMissedCalls',
        'callRecordings' => 'getCallRecordings',
        'newsletters' => 'getNewsletters',
        'voicemails' => 'getVoicemails',
        'web' => 'getWeb'
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
        $this->setIfExists('notifications', $data ?? [], null);
        $this->setIfExists('missedCalls', $data ?? [], null);
        $this->setIfExists('callRecordings', $data ?? [], null);
        $this->setIfExists('newsletters', $data ?? [], null);
        $this->setIfExists('voicemails', $data ?? [], null);
        $this->setIfExists('web', $data ?? [], null);
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
     * Gets notifications
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null $notifications notifications
     *
     * @return self
     */
    public function setNotifications($notifications)
    {
        if (is_null($notifications)) {
            throw new \InvalidArgumentException('non-nullable notifications cannot be null');
        }
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets missedCalls
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null
     */
    public function getMissedCalls()
    {
        return $this->container['missedCalls'];
    }

    /**
     * Sets missedCalls
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null $missedCalls missedCalls
     *
     * @return self
     */
    public function setMissedCalls($missedCalls)
    {
        if (is_null($missedCalls)) {
            throw new \InvalidArgumentException('non-nullable missedCalls cannot be null');
        }
        $this->container['missedCalls'] = $missedCalls;

        return $this;
    }

    /**
     * Gets callRecordings
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null
     */
    public function getCallRecordings()
    {
        return $this->container['callRecordings'];
    }

    /**
     * Sets callRecordings
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null $callRecordings callRecordings
     *
     * @return self
     */
    public function setCallRecordings($callRecordings)
    {
        if (is_null($callRecordings)) {
            throw new \InvalidArgumentException('non-nullable callRecordings cannot be null');
        }
        $this->container['callRecordings'] = $callRecordings;

        return $this;
    }

    /**
     * Gets newsletters
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null
     */
    public function getNewsletters()
    {
        return $this->container['newsletters'];
    }

    /**
     * Sets newsletters
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null $newsletters newsletters
     *
     * @return self
     */
    public function setNewsletters($newsletters)
    {
        if (is_null($newsletters)) {
            throw new \InvalidArgumentException('non-nullable newsletters cannot be null');
        }
        $this->container['newsletters'] = $newsletters;

        return $this;
    }

    /**
     * Gets voicemails
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null
     */
    public function getVoicemails()
    {
        return $this->container['voicemails'];
    }

    /**
     * Sets voicemails
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationNotifications|null $voicemails voicemails
     *
     * @return self
     */
    public function setVoicemails($voicemails)
    {
        if (is_null($voicemails)) {
            throw new \InvalidArgumentException('non-nullable voicemails cannot be null');
        }
        $this->container['voicemails'] = $voicemails;

        return $this;
    }

    /**
     * Gets web
     *
     * @return \OpenAPI\Client\CircuitID\UsersCommunicationWeb|null
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param \OpenAPI\Client\CircuitID\UsersCommunicationWeb|null $web web
     *
     * @return self
     */
    public function setWeb($web)
    {
        if (is_null($web)) {
            throw new \InvalidArgumentException('non-nullable web cannot be null');
        }
        $this->container['web'] = $web;

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


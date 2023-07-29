<?php
/**
 * GetConferenceRoom200Response
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
 * The version of the OpenAPI document: 0.47.18
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
 * GetConferenceRoom200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetConferenceRoom200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getConferenceRoom_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'passcode' => 'string',
        'dialInPin' => 'int',
        'isUserRoom' => 'bool',
        'isChatRoom' => 'bool',
        'lobby' => 'int',
        'requirePasscode' => 'int',
        'share' => 'string',
        'chatroom' => 'string',
        'createdByUserId' => 'string',
        'updatedByUserId' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
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
        'passcode' => null,
        'dialInPin' => 'int32',
        'isUserRoom' => null,
        'isChatRoom' => null,
        'lobby' => 'int32',
        'requirePasscode' => 'int32',
        'share' => null,
        'chatroom' => null,
        'createdByUserId' => null,
        'updatedByUserId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'passcode' => false,
		'dialInPin' => false,
		'isUserRoom' => false,
		'isChatRoom' => false,
		'lobby' => false,
		'requirePasscode' => false,
		'share' => false,
		'chatroom' => false,
		'createdByUserId' => false,
		'updatedByUserId' => false,
		'createdAt' => false,
		'updatedAt' => false
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
        'passcode' => 'passcode',
        'dialInPin' => 'dialInPin',
        'isUserRoom' => 'isUserRoom',
        'isChatRoom' => 'isChatRoom',
        'lobby' => 'lobby',
        'requirePasscode' => 'requirePasscode',
        'share' => 'share',
        'chatroom' => 'chatroom',
        'createdByUserId' => 'createdByUserId',
        'updatedByUserId' => 'updatedByUserId',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'passcode' => 'setPasscode',
        'dialInPin' => 'setDialInPin',
        'isUserRoom' => 'setIsUserRoom',
        'isChatRoom' => 'setIsChatRoom',
        'lobby' => 'setLobby',
        'requirePasscode' => 'setRequirePasscode',
        'share' => 'setShare',
        'chatroom' => 'setChatroom',
        'createdByUserId' => 'setCreatedByUserId',
        'updatedByUserId' => 'setUpdatedByUserId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'passcode' => 'getPasscode',
        'dialInPin' => 'getDialInPin',
        'isUserRoom' => 'getIsUserRoom',
        'isChatRoom' => 'getIsChatRoom',
        'lobby' => 'getLobby',
        'requirePasscode' => 'getRequirePasscode',
        'share' => 'getShare',
        'chatroom' => 'getChatroom',
        'createdByUserId' => 'getCreatedByUserId',
        'updatedByUserId' => 'getUpdatedByUserId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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

    public const IS_USER_ROOM_TRUE = 'true';
    public const IS_USER_ROOM_FALSE = 'false';
    public const IS_CHAT_ROOM_TRUE = 'true';
    public const IS_CHAT_ROOM_FALSE = 'false';
    public const LOBBY_1 = 1;
    public const LOBBY_0 = 0;
    public const REQUIRE_PASSCODE_1 = 1;
    public const REQUIRE_PASSCODE_0 = 0;
    public const SHARE_GROUPS = 'groups';
    public const SHARE_CUSTOMERS = 'customers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsUserRoomAllowableValues()
    {
        return [
            self::IS_USER_ROOM_TRUE,
            self::IS_USER_ROOM_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsChatRoomAllowableValues()
    {
        return [
            self::IS_CHAT_ROOM_TRUE,
            self::IS_CHAT_ROOM_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLobbyAllowableValues()
    {
        return [
            self::LOBBY_1,
            self::LOBBY_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirePasscodeAllowableValues()
    {
        return [
            self::REQUIRE_PASSCODE_1,
            self::REQUIRE_PASSCODE_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShareAllowableValues()
    {
        return [
            self::SHARE_GROUPS,
            self::SHARE_CUSTOMERS,
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
        $this->setIfExists('passcode', $data ?? [], null);
        $this->setIfExists('dialInPin', $data ?? [], null);
        $this->setIfExists('isUserRoom', $data ?? [], null);
        $this->setIfExists('isChatRoom', $data ?? [], null);
        $this->setIfExists('lobby', $data ?? [], self::LOBBY_0);
        $this->setIfExists('requirePasscode', $data ?? [], self::REQUIRE_PASSCODE_0);
        $this->setIfExists('share', $data ?? [], null);
        $this->setIfExists('chatroom', $data ?? [], null);
        $this->setIfExists('createdByUserId', $data ?? [], null);
        $this->setIfExists('updatedByUserId', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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

        if (!is_null($this->container['passcode']) && (mb_strlen($this->container['passcode']) > 20)) {
            $invalidProperties[] = "invalid value for 'passcode', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['passcode']) && (mb_strlen($this->container['passcode']) < 6)) {
            $invalidProperties[] = "invalid value for 'passcode', the character length must be bigger than or equal to 6.";
        }

        $allowedValues = $this->getIsUserRoomAllowableValues();
        if (!is_null($this->container['isUserRoom']) && !in_array($this->container['isUserRoom'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'isUserRoom', must be one of '%s'",
                $this->container['isUserRoom'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsChatRoomAllowableValues();
        if (!is_null($this->container['isChatRoom']) && !in_array($this->container['isChatRoom'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'isChatRoom', must be one of '%s'",
                $this->container['isChatRoom'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLobbyAllowableValues();
        if (!is_null($this->container['lobby']) && !in_array($this->container['lobby'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lobby', must be one of '%s'",
                $this->container['lobby'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequirePasscodeAllowableValues();
        if (!is_null($this->container['requirePasscode']) && !in_array($this->container['requirePasscode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirePasscode', must be one of '%s'",
                $this->container['requirePasscode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShareAllowableValues();
        if (!is_null($this->container['share']) && !in_array($this->container['share'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'share', must be one of '%s'",
                $this->container['share'],
                implode("', '", $allowedValues)
            );
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
            throw new \InvalidArgumentException('invalid length for $name when calling GetConferenceRoom200Response., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets passcode
     *
     * @return string|null
     */
    public function getPasscode()
    {
        return $this->container['passcode'];
    }

    /**
     * Sets passcode
     *
     * @param string|null $passcode passcode
     *
     * @return self
     */
    public function setPasscode($passcode)
    {
        if (is_null($passcode)) {
            throw new \InvalidArgumentException('non-nullable passcode cannot be null');
        }
        if ((mb_strlen($passcode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $passcode when calling GetConferenceRoom200Response., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($passcode) < 6)) {
            throw new \InvalidArgumentException('invalid length for $passcode when calling GetConferenceRoom200Response., must be bigger than or equal to 6.');
        }

        $this->container['passcode'] = $passcode;

        return $this;
    }

    /**
     * Gets dialInPin
     *
     * @return int|null
     */
    public function getDialInPin()
    {
        return $this->container['dialInPin'];
    }

    /**
     * Sets dialInPin
     *
     * @param int|null $dialInPin dialInPin
     *
     * @return self
     */
    public function setDialInPin($dialInPin)
    {
        if (is_null($dialInPin)) {
            throw new \InvalidArgumentException('non-nullable dialInPin cannot be null');
        }
        $this->container['dialInPin'] = $dialInPin;

        return $this;
    }

    /**
     * Gets isUserRoom
     *
     * @return bool|null
     */
    public function getIsUserRoom()
    {
        return $this->container['isUserRoom'];
    }

    /**
     * Sets isUserRoom
     *
     * @param bool|null $isUserRoom isUserRoom
     *
     * @return self
     */
    public function setIsUserRoom($isUserRoom)
    {
        if (is_null($isUserRoom)) {
            throw new \InvalidArgumentException('non-nullable isUserRoom cannot be null');
        }
        $allowedValues = $this->getIsUserRoomAllowableValues();
        if (!in_array($isUserRoom, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'isUserRoom', must be one of '%s'",
                    $isUserRoom,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['isUserRoom'] = $isUserRoom;

        return $this;
    }

    /**
     * Gets isChatRoom
     *
     * @return bool|null
     */
    public function getIsChatRoom()
    {
        return $this->container['isChatRoom'];
    }

    /**
     * Sets isChatRoom
     *
     * @param bool|null $isChatRoom isChatRoom
     *
     * @return self
     */
    public function setIsChatRoom($isChatRoom)
    {
        if (is_null($isChatRoom)) {
            throw new \InvalidArgumentException('non-nullable isChatRoom cannot be null');
        }
        $allowedValues = $this->getIsChatRoomAllowableValues();
        if (!in_array($isChatRoom, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'isChatRoom', must be one of '%s'",
                    $isChatRoom,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['isChatRoom'] = $isChatRoom;

        return $this;
    }

    /**
     * Gets lobby
     *
     * @return int|null
     */
    public function getLobby()
    {
        return $this->container['lobby'];
    }

    /**
     * Sets lobby
     *
     * @param int|null $lobby lobby
     *
     * @return self
     */
    public function setLobby($lobby)
    {
        if (is_null($lobby)) {
            throw new \InvalidArgumentException('non-nullable lobby cannot be null');
        }
        $allowedValues = $this->getLobbyAllowableValues();
        if (!in_array($lobby, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lobby', must be one of '%s'",
                    $lobby,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lobby'] = $lobby;

        return $this;
    }

    /**
     * Gets requirePasscode
     *
     * @return int|null
     */
    public function getRequirePasscode()
    {
        return $this->container['requirePasscode'];
    }

    /**
     * Sets requirePasscode
     *
     * @param int|null $requirePasscode requirePasscode
     *
     * @return self
     */
    public function setRequirePasscode($requirePasscode)
    {
        if (is_null($requirePasscode)) {
            throw new \InvalidArgumentException('non-nullable requirePasscode cannot be null');
        }
        $allowedValues = $this->getRequirePasscodeAllowableValues();
        if (!in_array($requirePasscode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requirePasscode', must be one of '%s'",
                    $requirePasscode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirePasscode'] = $requirePasscode;

        return $this;
    }

    /**
     * Gets share
     *
     * @return string|null
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param string|null $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        if (is_null($share)) {
            throw new \InvalidArgumentException('non-nullable share cannot be null');
        }
        $allowedValues = $this->getShareAllowableValues();
        if (!in_array($share, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'share', must be one of '%s'",
                    $share,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets chatroom
     *
     * @return string|null
     */
    public function getChatroom()
    {
        return $this->container['chatroom'];
    }

    /**
     * Sets chatroom
     *
     * @param string|null $chatroom ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setChatroom($chatroom)
    {
        if (is_null($chatroom)) {
            throw new \InvalidArgumentException('non-nullable chatroom cannot be null');
        }
        $this->container['chatroom'] = $chatroom;

        return $this;
    }

    /**
     * Gets createdByUserId
     *
     * @return string|null
     */
    public function getCreatedByUserId()
    {
        return $this->container['createdByUserId'];
    }

    /**
     * Sets createdByUserId
     *
     * @param string|null $createdByUserId ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setCreatedByUserId($createdByUserId)
    {
        if (is_null($createdByUserId)) {
            throw new \InvalidArgumentException('non-nullable createdByUserId cannot be null');
        }
        $this->container['createdByUserId'] = $createdByUserId;

        return $this;
    }

    /**
     * Gets updatedByUserId
     *
     * @return string|null
     */
    public function getUpdatedByUserId()
    {
        return $this->container['updatedByUserId'];
    }

    /**
     * Sets updatedByUserId
     *
     * @param string|null $updatedByUserId ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setUpdatedByUserId($updatedByUserId)
    {
        if (is_null($updatedByUserId)) {
            throw new \InvalidArgumentException('non-nullable updatedByUserId cannot be null');
        }
        $this->container['updatedByUserId'] = $updatedByUserId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

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



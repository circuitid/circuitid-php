<?php
/**
 * GetPhoneOutboundRuleAction200Response
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
 * The version of the OpenAPI document: 0.47.20
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
 * GetPhoneOutboundRuleAction200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPhoneOutboundRuleAction200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPhoneOutbound_Rule_Action_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'group' => 'string',
        'phoneoutboundrule' => 'string',
        'status' => 'int',
        'priority' => 'int',
        'startingChars' => 'string',
        'contains' => 'string',
        'lengthType' => 'string',
        'length' => 'int',
        'appendChars' => 'string',
        'prependChars' => 'string',
        'rangeStart' => 'int',
        'rangeEnd' => 'int',
        'removeStartingChars' => 'int',
        'removeEndingChars' => 'int',
        'route' => 'string',
        'routingType' => 'string',
        'id' => 'string',
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
        'group' => null,
        'phoneoutboundrule' => null,
        'status' => 'int32',
        'priority' => 'int32',
        'startingChars' => null,
        'contains' => null,
        'lengthType' => null,
        'length' => 'int32',
        'appendChars' => null,
        'prependChars' => null,
        'rangeStart' => 'int32',
        'rangeEnd' => 'int32',
        'removeStartingChars' => 'int32',
        'removeEndingChars' => 'int32',
        'route' => null,
        'routingType' => null,
        'id' => null,
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
		'group' => false,
		'phoneoutboundrule' => false,
		'status' => false,
		'priority' => false,
		'startingChars' => false,
		'contains' => false,
		'lengthType' => true,
		'length' => false,
		'appendChars' => false,
		'prependChars' => false,
		'rangeStart' => false,
		'rangeEnd' => false,
		'removeStartingChars' => false,
		'removeEndingChars' => false,
		'route' => false,
		'routingType' => false,
		'id' => false,
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
        'group' => 'group',
        'phoneoutboundrule' => 'phoneoutboundrule',
        'status' => 'status',
        'priority' => 'priority',
        'startingChars' => 'startingChars',
        'contains' => 'contains',
        'lengthType' => 'lengthType',
        'length' => 'length',
        'appendChars' => 'appendChars',
        'prependChars' => 'prependChars',
        'rangeStart' => 'rangeStart',
        'rangeEnd' => 'rangeEnd',
        'removeStartingChars' => 'removeStartingChars',
        'removeEndingChars' => 'removeEndingChars',
        'route' => 'route',
        'routingType' => 'routingType',
        'id' => '__id',
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
        'group' => 'setGroup',
        'phoneoutboundrule' => 'setPhoneoutboundrule',
        'status' => 'setStatus',
        'priority' => 'setPriority',
        'startingChars' => 'setStartingChars',
        'contains' => 'setContains',
        'lengthType' => 'setLengthType',
        'length' => 'setLength',
        'appendChars' => 'setAppendChars',
        'prependChars' => 'setPrependChars',
        'rangeStart' => 'setRangeStart',
        'rangeEnd' => 'setRangeEnd',
        'removeStartingChars' => 'setRemoveStartingChars',
        'removeEndingChars' => 'setRemoveEndingChars',
        'route' => 'setRoute',
        'routingType' => 'setRoutingType',
        'id' => 'setId',
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
        'group' => 'getGroup',
        'phoneoutboundrule' => 'getPhoneoutboundrule',
        'status' => 'getStatus',
        'priority' => 'getPriority',
        'startingChars' => 'getStartingChars',
        'contains' => 'getContains',
        'lengthType' => 'getLengthType',
        'length' => 'getLength',
        'appendChars' => 'getAppendChars',
        'prependChars' => 'getPrependChars',
        'rangeStart' => 'getRangeStart',
        'rangeEnd' => 'getRangeEnd',
        'removeStartingChars' => 'getRemoveStartingChars',
        'removeEndingChars' => 'getRemoveEndingChars',
        'route' => 'getRoute',
        'routingType' => 'getRoutingType',
        'id' => 'getId',
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

    public const STATUS_1 = 1;
    public const STATUS_0 = 0;
    public const LENGTH_TYPE_ATLEAST = 'atleast';
    public const LENGTH_TYPE_EXACTLY = 'exactly';
    public const LENGTH_TYPE_RANGE = 'range';
    public const LENGTH_TYPE_ANY = 'any';
    public const ROUTE__DEFAULT = 'default';
    public const ROUTE_GROUP = 'group';
    public const ROUTE_PSTN = 'pstn';
    public const ROUTING_TYPE_PRIORITY = 'priority';
    public const ROUTING_TYPE_LB = 'lb';
    public const ROUTING_TYPE_SIMULTANEOUS = 'simultaneous';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLengthTypeAllowableValues()
    {
        return [
            self::LENGTH_TYPE_ATLEAST,
            self::LENGTH_TYPE_EXACTLY,
            self::LENGTH_TYPE_RANGE,
            self::LENGTH_TYPE_ANY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRouteAllowableValues()
    {
        return [
            self::ROUTE__DEFAULT,
            self::ROUTE_GROUP,
            self::ROUTE_PSTN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoutingTypeAllowableValues()
    {
        return [
            self::ROUTING_TYPE_PRIORITY,
            self::ROUTING_TYPE_LB,
            self::ROUTING_TYPE_SIMULTANEOUS,
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
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('phoneoutboundrule', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], self::STATUS_1);
        $this->setIfExists('priority', $data ?? [], 1);
        $this->setIfExists('startingChars', $data ?? [], null);
        $this->setIfExists('contains', $data ?? [], null);
        $this->setIfExists('lengthType', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('appendChars', $data ?? [], null);
        $this->setIfExists('prependChars', $data ?? [], null);
        $this->setIfExists('rangeStart', $data ?? [], null);
        $this->setIfExists('rangeEnd', $data ?? [], null);
        $this->setIfExists('removeStartingChars', $data ?? [], null);
        $this->setIfExists('removeEndingChars', $data ?? [], null);
        $this->setIfExists('route', $data ?? [], 'default');
        $this->setIfExists('routingType', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['phoneoutboundrule'] === null) {
            $invalidProperties[] = "'phoneoutboundrule' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if (!is_null($this->container['startingChars']) && (mb_strlen($this->container['startingChars']) > 20)) {
            $invalidProperties[] = "invalid value for 'startingChars', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['contains']) && (mb_strlen($this->container['contains']) > 20)) {
            $invalidProperties[] = "invalid value for 'contains', the character length must be smaller than or equal to 20.";
        }

        $allowedValues = $this->getLengthTypeAllowableValues();
        if (!is_null($this->container['lengthType']) && !in_array($this->container['lengthType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lengthType', must be one of '%s'",
                $this->container['lengthType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['appendChars']) && (mb_strlen($this->container['appendChars']) > 20)) {
            $invalidProperties[] = "invalid value for 'appendChars', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['prependChars']) && (mb_strlen($this->container['prependChars']) > 20)) {
            $invalidProperties[] = "invalid value for 'prependChars', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['route'] === null) {
            $invalidProperties[] = "'route' can't be null";
        }
        $allowedValues = $this->getRouteAllowableValues();
        if (!is_null($this->container['route']) && !in_array($this->container['route'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'route', must be one of '%s'",
                $this->container['route'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoutingTypeAllowableValues();
        if (!is_null($this->container['routingType']) && !in_array($this->container['routingType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'routingType', must be one of '%s'",
                $this->container['routingType'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling GetPhoneOutboundRuleAction200Response., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets phoneoutboundrule
     *
     * @return string
     */
    public function getPhoneoutboundrule()
    {
        return $this->container['phoneoutboundrule'];
    }

    /**
     * Sets phoneoutboundrule
     *
     * @param string $phoneoutboundrule ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setPhoneoutboundrule($phoneoutboundrule)
    {
        if (is_null($phoneoutboundrule)) {
            throw new \InvalidArgumentException('non-nullable phoneoutboundrule cannot be null');
        }
        $this->container['phoneoutboundrule'] = $phoneoutboundrule;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets startingChars
     *
     * @return string|null
     */
    public function getStartingChars()
    {
        return $this->container['startingChars'];
    }

    /**
     * Sets startingChars
     *
     * @param string|null $startingChars startingChars
     *
     * @return self
     */
    public function setStartingChars($startingChars)
    {
        if (is_null($startingChars)) {
            throw new \InvalidArgumentException('non-nullable startingChars cannot be null');
        }
        if ((mb_strlen($startingChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $startingChars when calling GetPhoneOutboundRuleAction200Response., must be smaller than or equal to 20.');
        }

        $this->container['startingChars'] = $startingChars;

        return $this;
    }

    /**
     * Gets contains
     *
     * @return string|null
     */
    public function getContains()
    {
        return $this->container['contains'];
    }

    /**
     * Sets contains
     *
     * @param string|null $contains contains
     *
     * @return self
     */
    public function setContains($contains)
    {
        if (is_null($contains)) {
            throw new \InvalidArgumentException('non-nullable contains cannot be null');
        }
        if ((mb_strlen($contains) > 20)) {
            throw new \InvalidArgumentException('invalid length for $contains when calling GetPhoneOutboundRuleAction200Response., must be smaller than or equal to 20.');
        }

        $this->container['contains'] = $contains;

        return $this;
    }

    /**
     * Gets lengthType
     *
     * @return string|null
     */
    public function getLengthType()
    {
        return $this->container['lengthType'];
    }

    /**
     * Sets lengthType
     *
     * @param string|null $lengthType lengthType
     *
     * @return self
     */
    public function setLengthType($lengthType)
    {
        if (is_null($lengthType)) {
            array_push($this->openAPINullablesSetToNull, 'lengthType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lengthType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getLengthTypeAllowableValues();
        if (!is_null($lengthType) && !in_array($lengthType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lengthType', must be one of '%s'",
                    $lengthType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lengthType'] = $lengthType;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets appendChars
     *
     * @return string|null
     */
    public function getAppendChars()
    {
        return $this->container['appendChars'];
    }

    /**
     * Sets appendChars
     *
     * @param string|null $appendChars appendChars
     *
     * @return self
     */
    public function setAppendChars($appendChars)
    {
        if (is_null($appendChars)) {
            throw new \InvalidArgumentException('non-nullable appendChars cannot be null');
        }
        if ((mb_strlen($appendChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $appendChars when calling GetPhoneOutboundRuleAction200Response., must be smaller than or equal to 20.');
        }

        $this->container['appendChars'] = $appendChars;

        return $this;
    }

    /**
     * Gets prependChars
     *
     * @return string|null
     */
    public function getPrependChars()
    {
        return $this->container['prependChars'];
    }

    /**
     * Sets prependChars
     *
     * @param string|null $prependChars prependChars
     *
     * @return self
     */
    public function setPrependChars($prependChars)
    {
        if (is_null($prependChars)) {
            throw new \InvalidArgumentException('non-nullable prependChars cannot be null');
        }
        if ((mb_strlen($prependChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $prependChars when calling GetPhoneOutboundRuleAction200Response., must be smaller than or equal to 20.');
        }

        $this->container['prependChars'] = $prependChars;

        return $this;
    }

    /**
     * Gets rangeStart
     *
     * @return int|null
     */
    public function getRangeStart()
    {
        return $this->container['rangeStart'];
    }

    /**
     * Sets rangeStart
     *
     * @param int|null $rangeStart rangeStart
     *
     * @return self
     */
    public function setRangeStart($rangeStart)
    {
        if (is_null($rangeStart)) {
            throw new \InvalidArgumentException('non-nullable rangeStart cannot be null');
        }
        $this->container['rangeStart'] = $rangeStart;

        return $this;
    }

    /**
     * Gets rangeEnd
     *
     * @return int|null
     */
    public function getRangeEnd()
    {
        return $this->container['rangeEnd'];
    }

    /**
     * Sets rangeEnd
     *
     * @param int|null $rangeEnd rangeEnd
     *
     * @return self
     */
    public function setRangeEnd($rangeEnd)
    {
        if (is_null($rangeEnd)) {
            throw new \InvalidArgumentException('non-nullable rangeEnd cannot be null');
        }
        $this->container['rangeEnd'] = $rangeEnd;

        return $this;
    }

    /**
     * Gets removeStartingChars
     *
     * @return int|null
     */
    public function getRemoveStartingChars()
    {
        return $this->container['removeStartingChars'];
    }

    /**
     * Sets removeStartingChars
     *
     * @param int|null $removeStartingChars removeStartingChars
     *
     * @return self
     */
    public function setRemoveStartingChars($removeStartingChars)
    {
        if (is_null($removeStartingChars)) {
            throw new \InvalidArgumentException('non-nullable removeStartingChars cannot be null');
        }
        $this->container['removeStartingChars'] = $removeStartingChars;

        return $this;
    }

    /**
     * Gets removeEndingChars
     *
     * @return int|null
     */
    public function getRemoveEndingChars()
    {
        return $this->container['removeEndingChars'];
    }

    /**
     * Sets removeEndingChars
     *
     * @param int|null $removeEndingChars removeEndingChars
     *
     * @return self
     */
    public function setRemoveEndingChars($removeEndingChars)
    {
        if (is_null($removeEndingChars)) {
            throw new \InvalidArgumentException('non-nullable removeEndingChars cannot be null');
        }
        $this->container['removeEndingChars'] = $removeEndingChars;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string $route route
     *
     * @return self
     */
    public function setRoute($route)
    {
        if (is_null($route)) {
            throw new \InvalidArgumentException('non-nullable route cannot be null');
        }
        $allowedValues = $this->getRouteAllowableValues();
        if (!in_array($route, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'route', must be one of '%s'",
                    $route,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets routingType
     *
     * @return string|null
     */
    public function getRoutingType()
    {
        return $this->container['routingType'];
    }

    /**
     * Sets routingType
     *
     * @param string|null $routingType routingType
     *
     * @return self
     */
    public function setRoutingType($routingType)
    {
        if (is_null($routingType)) {
            throw new \InvalidArgumentException('non-nullable routingType cannot be null');
        }
        $allowedValues = $this->getRoutingTypeAllowableValues();
        if (!in_array($routingType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'routingType', must be one of '%s'",
                    $routingType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['routingType'] = $routingType;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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



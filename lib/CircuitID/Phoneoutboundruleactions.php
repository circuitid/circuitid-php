<?php
/**
 * Phoneoutboundruleactions
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
 * The version of the OpenAPI document: 0.47.16
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
 * Phoneoutboundruleactions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Phoneoutboundruleactions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'phoneoutboundruleactions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'group' => 'mixed',
        'phoneoutboundrule' => 'mixed',
        'status' => 'mixed',
        'priority' => 'mixed',
        'startingChars' => 'mixed',
        'contains' => 'mixed',
        'lengthType' => 'mixed',
        'length' => 'mixed',
        'appendChars' => 'mixed',
        'prependChars' => 'mixed',
        'rangeStart' => 'mixed',
        'rangeEnd' => 'mixed',
        'removeStartingChars' => 'mixed',
        'removeEndingChars' => 'mixed',
        'route' => 'mixed',
        'routingType' => 'mixed'
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
        'routingType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'group' => true,
		'phoneoutboundrule' => true,
		'status' => true,
		'priority' => true,
		'startingChars' => true,
		'contains' => true,
		'lengthType' => true,
		'length' => true,
		'appendChars' => true,
		'prependChars' => true,
		'rangeStart' => true,
		'rangeEnd' => true,
		'removeStartingChars' => true,
		'removeEndingChars' => true,
		'route' => true,
		'routingType' => true
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
        'routingType' => 'routingType'
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
        'routingType' => 'setRoutingType'
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
        'routingType' => 'getRoutingType'
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

    public const STATUS__1 = '1';
    public const STATUS__0 = '0';
    public const LENGTH_TYPE_ATLEAST = 'atleast';
    public const LENGTH_TYPE_EXACTLY = 'exactly';
    public const LENGTH_TYPE_RANGE = 'range';
    public const LENGTH_TYPE_ANY = 'any';
    public const LENGTH_TYPE_NULL = 'null';
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
            self::STATUS__1,
            self::STATUS__0,
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
            self::LENGTH_TYPE_NULL,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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
        $this->setIfExists('route', $data ?? [], null);
        $this->setIfExists('routingType', $data ?? [], null);
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
     * @return mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Phoneoutboundruleactions., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group
     *
     * @return mixed|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param mixed|null $group ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            array_push($this->openAPINullablesSetToNull, 'group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets phoneoutboundrule
     *
     * @return mixed
     */
    public function getPhoneoutboundrule()
    {
        return $this->container['phoneoutboundrule'];
    }

    /**
     * Sets phoneoutboundrule
     *
     * @param mixed $phoneoutboundrule ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setPhoneoutboundrule($phoneoutboundrule)
    {
        if (is_null($phoneoutboundrule)) {
            array_push($this->openAPINullablesSetToNull, 'phoneoutboundrule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phoneoutboundrule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phoneoutboundrule'] = $phoneoutboundrule;

        return $this;
    }

    /**
     * Gets status
     *
     * @return mixed|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param mixed|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * @return mixed
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param mixed $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            array_push($this->openAPINullablesSetToNull, 'priority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('priority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets startingChars
     *
     * @return mixed|null
     */
    public function getStartingChars()
    {
        return $this->container['startingChars'];
    }

    /**
     * Sets startingChars
     *
     * @param mixed|null $startingChars startingChars
     *
     * @return self
     */
    public function setStartingChars($startingChars)
    {
        if (is_null($startingChars)) {
            array_push($this->openAPINullablesSetToNull, 'startingChars');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startingChars', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($startingChars) && (mb_strlen($startingChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $startingChars when calling Phoneoutboundruleactions., must be smaller than or equal to 20.');
        }

        $this->container['startingChars'] = $startingChars;

        return $this;
    }

    /**
     * Gets contains
     *
     * @return mixed|null
     */
    public function getContains()
    {
        return $this->container['contains'];
    }

    /**
     * Sets contains
     *
     * @param mixed|null $contains contains
     *
     * @return self
     */
    public function setContains($contains)
    {
        if (is_null($contains)) {
            array_push($this->openAPINullablesSetToNull, 'contains');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contains', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($contains) && (mb_strlen($contains) > 20)) {
            throw new \InvalidArgumentException('invalid length for $contains when calling Phoneoutboundruleactions., must be smaller than or equal to 20.');
        }

        $this->container['contains'] = $contains;

        return $this;
    }

    /**
     * Gets lengthType
     *
     * @return mixed|null
     */
    public function getLengthType()
    {
        return $this->container['lengthType'];
    }

    /**
     * Sets lengthType
     *
     * @param mixed|null $lengthType lengthType
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
     * @return mixed|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param mixed|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            array_push($this->openAPINullablesSetToNull, 'length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets appendChars
     *
     * @return mixed|null
     */
    public function getAppendChars()
    {
        return $this->container['appendChars'];
    }

    /**
     * Sets appendChars
     *
     * @param mixed|null $appendChars appendChars
     *
     * @return self
     */
    public function setAppendChars($appendChars)
    {
        if (is_null($appendChars)) {
            array_push($this->openAPINullablesSetToNull, 'appendChars');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('appendChars', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($appendChars) && (mb_strlen($appendChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $appendChars when calling Phoneoutboundruleactions., must be smaller than or equal to 20.');
        }

        $this->container['appendChars'] = $appendChars;

        return $this;
    }

    /**
     * Gets prependChars
     *
     * @return mixed|null
     */
    public function getPrependChars()
    {
        return $this->container['prependChars'];
    }

    /**
     * Sets prependChars
     *
     * @param mixed|null $prependChars prependChars
     *
     * @return self
     */
    public function setPrependChars($prependChars)
    {
        if (is_null($prependChars)) {
            array_push($this->openAPINullablesSetToNull, 'prependChars');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prependChars', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($prependChars) && (mb_strlen($prependChars) > 20)) {
            throw new \InvalidArgumentException('invalid length for $prependChars when calling Phoneoutboundruleactions., must be smaller than or equal to 20.');
        }

        $this->container['prependChars'] = $prependChars;

        return $this;
    }

    /**
     * Gets rangeStart
     *
     * @return mixed|null
     */
    public function getRangeStart()
    {
        return $this->container['rangeStart'];
    }

    /**
     * Sets rangeStart
     *
     * @param mixed|null $rangeStart rangeStart
     *
     * @return self
     */
    public function setRangeStart($rangeStart)
    {
        if (is_null($rangeStart)) {
            array_push($this->openAPINullablesSetToNull, 'rangeStart');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rangeStart', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rangeStart'] = $rangeStart;

        return $this;
    }

    /**
     * Gets rangeEnd
     *
     * @return mixed|null
     */
    public function getRangeEnd()
    {
        return $this->container['rangeEnd'];
    }

    /**
     * Sets rangeEnd
     *
     * @param mixed|null $rangeEnd rangeEnd
     *
     * @return self
     */
    public function setRangeEnd($rangeEnd)
    {
        if (is_null($rangeEnd)) {
            array_push($this->openAPINullablesSetToNull, 'rangeEnd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rangeEnd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rangeEnd'] = $rangeEnd;

        return $this;
    }

    /**
     * Gets removeStartingChars
     *
     * @return mixed|null
     */
    public function getRemoveStartingChars()
    {
        return $this->container['removeStartingChars'];
    }

    /**
     * Sets removeStartingChars
     *
     * @param mixed|null $removeStartingChars removeStartingChars
     *
     * @return self
     */
    public function setRemoveStartingChars($removeStartingChars)
    {
        if (is_null($removeStartingChars)) {
            array_push($this->openAPINullablesSetToNull, 'removeStartingChars');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('removeStartingChars', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['removeStartingChars'] = $removeStartingChars;

        return $this;
    }

    /**
     * Gets removeEndingChars
     *
     * @return mixed|null
     */
    public function getRemoveEndingChars()
    {
        return $this->container['removeEndingChars'];
    }

    /**
     * Sets removeEndingChars
     *
     * @param mixed|null $removeEndingChars removeEndingChars
     *
     * @return self
     */
    public function setRemoveEndingChars($removeEndingChars)
    {
        if (is_null($removeEndingChars)) {
            array_push($this->openAPINullablesSetToNull, 'removeEndingChars');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('removeEndingChars', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['removeEndingChars'] = $removeEndingChars;

        return $this;
    }

    /**
     * Gets route
     *
     * @return mixed
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param mixed $route route
     *
     * @return self
     */
    public function setRoute($route)
    {
        if (is_null($route)) {
            array_push($this->openAPINullablesSetToNull, 'route');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('route', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRouteAllowableValues();
        if (!is_null($route) && !in_array($route, $allowedValues, true)) {
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
     * @return mixed|null
     */
    public function getRoutingType()
    {
        return $this->container['routingType'];
    }

    /**
     * Sets routingType
     *
     * @param mixed|null $routingType routingType
     *
     * @return self
     */
    public function setRoutingType($routingType)
    {
        if (is_null($routingType)) {
            array_push($this->openAPINullablesSetToNull, 'routingType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('routingType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRoutingTypeAllowableValues();
        if (!is_null($routingType) && !in_array($routingType, $allowedValues, true)) {
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



<?php
/**
 * GetServer200Response
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
 * GetServer200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetServer200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getServer_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'host' => 'string',
        'port' => 'int',
        'callerId' => 'string',
        'type' => 'string',
        'inboundSipTrunkingOrder' => 'string',
        'outboundSipTrunkingOrder' => 'string',
        'noInstantRingBack' => 'int',
        'bypassMedia' => 'int',
        'disableRTPAutoAdjust' => 'int',
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
        'host' => null,
        'port' => 'int32',
        'callerId' => null,
        'type' => null,
        'inboundSipTrunkingOrder' => null,
        'outboundSipTrunkingOrder' => null,
        'noInstantRingBack' => 'int32',
        'bypassMedia' => 'int32',
        'disableRTPAutoAdjust' => 'int32',
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
		'host' => false,
		'port' => false,
		'callerId' => false,
		'type' => false,
		'inboundSipTrunkingOrder' => false,
		'outboundSipTrunkingOrder' => false,
		'noInstantRingBack' => false,
		'bypassMedia' => false,
		'disableRTPAutoAdjust' => false,
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
        'host' => 'host',
        'port' => 'port',
        'callerId' => 'callerId',
        'type' => 'type',
        'inboundSipTrunkingOrder' => 'inboundSipTrunkingOrder',
        'outboundSipTrunkingOrder' => 'outboundSipTrunkingOrder',
        'noInstantRingBack' => 'noInstantRingBack',
        'bypassMedia' => 'bypassMedia',
        'disableRTPAutoAdjust' => 'disableRTPAutoAdjust',
        'id' => '_id',
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
        'host' => 'setHost',
        'port' => 'setPort',
        'callerId' => 'setCallerId',
        'type' => 'setType',
        'inboundSipTrunkingOrder' => 'setInboundSipTrunkingOrder',
        'outboundSipTrunkingOrder' => 'setOutboundSipTrunkingOrder',
        'noInstantRingBack' => 'setNoInstantRingBack',
        'bypassMedia' => 'setBypassMedia',
        'disableRTPAutoAdjust' => 'setDisableRTPAutoAdjust',
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
        'host' => 'getHost',
        'port' => 'getPort',
        'callerId' => 'getCallerId',
        'type' => 'getType',
        'inboundSipTrunkingOrder' => 'getInboundSipTrunkingOrder',
        'outboundSipTrunkingOrder' => 'getOutboundSipTrunkingOrder',
        'noInstantRingBack' => 'getNoInstantRingBack',
        'bypassMedia' => 'getBypassMedia',
        'disableRTPAutoAdjust' => 'getDisableRTPAutoAdjust',
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

    public const TYPE_SIP = 'sip';
    public const TYPE_SKYPE = 'skype';
    public const NO_INSTANT_RING_BACK_1 = 1;
    public const NO_INSTANT_RING_BACK_0 = 0;
    public const BYPASS_MEDIA_1 = 1;
    public const BYPASS_MEDIA_0 = 0;
    public const DISABLE_RTP_AUTO_ADJUST_1 = 1;
    public const DISABLE_RTP_AUTO_ADJUST_0 = 0;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SIP,
            self::TYPE_SKYPE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoInstantRingBackAllowableValues()
    {
        return [
            self::NO_INSTANT_RING_BACK_1,
            self::NO_INSTANT_RING_BACK_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBypassMediaAllowableValues()
    {
        return [
            self::BYPASS_MEDIA_1,
            self::BYPASS_MEDIA_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisableRTPAutoAdjustAllowableValues()
    {
        return [
            self::DISABLE_RTP_AUTO_ADJUST_1,
            self::DISABLE_RTP_AUTO_ADJUST_0,
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
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('port', $data ?? [], 5060);
        $this->setIfExists('callerId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('inboundSipTrunkingOrder', $data ?? [], null);
        $this->setIfExists('outboundSipTrunkingOrder', $data ?? [], null);
        $this->setIfExists('noInstantRingBack', $data ?? [], null);
        $this->setIfExists('bypassMedia', $data ?? [], self::BYPASS_MEDIA_0);
        $this->setIfExists('disableRTPAutoAdjust', $data ?? [], self::DISABLE_RTP_AUTO_ADJUST_0);
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

        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ((mb_strlen($this->container['host']) > 45)) {
            $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['host']) < 5)) {
            $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if (!is_null($this->container['callerId']) && (mb_strlen($this->container['callerId']) > 45)) {
            $invalidProperties[] = "invalid value for 'callerId', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNoInstantRingBackAllowableValues();
        if (!is_null($this->container['noInstantRingBack']) && !in_array($this->container['noInstantRingBack'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'noInstantRingBack', must be one of '%s'",
                $this->container['noInstantRingBack'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBypassMediaAllowableValues();
        if (!is_null($this->container['bypassMedia']) && !in_array($this->container['bypassMedia'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bypassMedia', must be one of '%s'",
                $this->container['bypassMedia'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDisableRTPAutoAdjustAllowableValues();
        if (!is_null($this->container['disableRTPAutoAdjust']) && !in_array($this->container['disableRTPAutoAdjust'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'disableRTPAutoAdjust', must be one of '%s'",
                $this->container['disableRTPAutoAdjust'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling GetServer200Response., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return self
     */
    public function setHost($host)
    {
        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }
        if ((mb_strlen($host) > 45)) {
            throw new \InvalidArgumentException('invalid length for $host when calling GetServer200Response., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($host) < 5)) {
            throw new \InvalidArgumentException('invalid length for $host when calling GetServer200Response., must be bigger than or equal to 5.');
        }

        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return self
     */
    public function setPort($port)
    {
        if (is_null($port)) {
            throw new \InvalidArgumentException('non-nullable port cannot be null');
        }
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets callerId
     *
     * @return string|null
     */
    public function getCallerId()
    {
        return $this->container['callerId'];
    }

    /**
     * Sets callerId
     *
     * @param string|null $callerId callerId
     *
     * @return self
     */
    public function setCallerId($callerId)
    {
        if (is_null($callerId)) {
            throw new \InvalidArgumentException('non-nullable callerId cannot be null');
        }
        if ((mb_strlen($callerId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callerId when calling GetServer200Response., must be smaller than or equal to 45.');
        }

        $this->container['callerId'] = $callerId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets inboundSipTrunkingOrder
     *
     * @return string|null
     */
    public function getInboundSipTrunkingOrder()
    {
        return $this->container['inboundSipTrunkingOrder'];
    }

    /**
     * Sets inboundSipTrunkingOrder
     *
     * @param string|null $inboundSipTrunkingOrder ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setInboundSipTrunkingOrder($inboundSipTrunkingOrder)
    {
        if (is_null($inboundSipTrunkingOrder)) {
            throw new \InvalidArgumentException('non-nullable inboundSipTrunkingOrder cannot be null');
        }
        $this->container['inboundSipTrunkingOrder'] = $inboundSipTrunkingOrder;

        return $this;
    }

    /**
     * Gets outboundSipTrunkingOrder
     *
     * @return string|null
     */
    public function getOutboundSipTrunkingOrder()
    {
        return $this->container['outboundSipTrunkingOrder'];
    }

    /**
     * Sets outboundSipTrunkingOrder
     *
     * @param string|null $outboundSipTrunkingOrder ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setOutboundSipTrunkingOrder($outboundSipTrunkingOrder)
    {
        if (is_null($outboundSipTrunkingOrder)) {
            throw new \InvalidArgumentException('non-nullable outboundSipTrunkingOrder cannot be null');
        }
        $this->container['outboundSipTrunkingOrder'] = $outboundSipTrunkingOrder;

        return $this;
    }

    /**
     * Gets noInstantRingBack
     *
     * @return int|null
     */
    public function getNoInstantRingBack()
    {
        return $this->container['noInstantRingBack'];
    }

    /**
     * Sets noInstantRingBack
     *
     * @param int|null $noInstantRingBack noInstantRingBack
     *
     * @return self
     */
    public function setNoInstantRingBack($noInstantRingBack)
    {
        if (is_null($noInstantRingBack)) {
            throw new \InvalidArgumentException('non-nullable noInstantRingBack cannot be null');
        }
        $allowedValues = $this->getNoInstantRingBackAllowableValues();
        if (!in_array($noInstantRingBack, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'noInstantRingBack', must be one of '%s'",
                    $noInstantRingBack,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['noInstantRingBack'] = $noInstantRingBack;

        return $this;
    }

    /**
     * Gets bypassMedia
     *
     * @return int|null
     */
    public function getBypassMedia()
    {
        return $this->container['bypassMedia'];
    }

    /**
     * Sets bypassMedia
     *
     * @param int|null $bypassMedia bypassMedia
     *
     * @return self
     */
    public function setBypassMedia($bypassMedia)
    {
        if (is_null($bypassMedia)) {
            throw new \InvalidArgumentException('non-nullable bypassMedia cannot be null');
        }
        $allowedValues = $this->getBypassMediaAllowableValues();
        if (!in_array($bypassMedia, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bypassMedia', must be one of '%s'",
                    $bypassMedia,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bypassMedia'] = $bypassMedia;

        return $this;
    }

    /**
     * Gets disableRTPAutoAdjust
     *
     * @return int|null
     */
    public function getDisableRTPAutoAdjust()
    {
        return $this->container['disableRTPAutoAdjust'];
    }

    /**
     * Sets disableRTPAutoAdjust
     *
     * @param int|null $disableRTPAutoAdjust disableRTPAutoAdjust
     *
     * @return self
     */
    public function setDisableRTPAutoAdjust($disableRTPAutoAdjust)
    {
        if (is_null($disableRTPAutoAdjust)) {
            throw new \InvalidArgumentException('non-nullable disableRTPAutoAdjust cannot be null');
        }
        $allowedValues = $this->getDisableRTPAutoAdjustAllowableValues();
        if (!in_array($disableRTPAutoAdjust, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'disableRTPAutoAdjust', must be one of '%s'",
                    $disableRTPAutoAdjust,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['disableRTPAutoAdjust'] = $disableRTPAutoAdjust;

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



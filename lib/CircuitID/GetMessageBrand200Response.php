<?php
/**
 * GetMessageBrand200Response
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
 * GetMessageBrand200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetMessageBrand200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getMessageBrand_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'brandId' => 'string',
        'ein' => 'string',
        'user' => 'string',
        'order' => 'string',
        'status' => 'string',
        'brandRelationship' => 'string',
        'vertical' => 'string',
        'entityType' => 'string',
        'cspId' => 'string',
        'einIssuingCountry' => 'string',
        'universalEin' => 'string',
        'referenceId' => 'string',
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
        'brandId' => null,
        'ein' => null,
        'user' => null,
        'order' => null,
        'status' => null,
        'brandRelationship' => null,
        'vertical' => null,
        'entityType' => null,
        'cspId' => null,
        'einIssuingCountry' => null,
        'universalEin' => null,
        'referenceId' => null,
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
		'brandId' => false,
		'ein' => false,
		'user' => false,
		'order' => false,
		'status' => false,
		'brandRelationship' => false,
		'vertical' => false,
		'entityType' => false,
		'cspId' => false,
		'einIssuingCountry' => false,
		'universalEin' => false,
		'referenceId' => false,
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
        'brandId' => 'brandId',
        'ein' => 'ein',
        'user' => 'user',
        'order' => 'order',
        'status' => 'status',
        'brandRelationship' => 'brandRelationship',
        'vertical' => 'vertical',
        'entityType' => 'entityType',
        'cspId' => 'cspId',
        'einIssuingCountry' => 'einIssuingCountry',
        'universalEin' => 'universalEin',
        'referenceId' => 'referenceId',
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
        'brandId' => 'setBrandId',
        'ein' => 'setEin',
        'user' => 'setUser',
        'order' => 'setOrder',
        'status' => 'setStatus',
        'brandRelationship' => 'setBrandRelationship',
        'vertical' => 'setVertical',
        'entityType' => 'setEntityType',
        'cspId' => 'setCspId',
        'einIssuingCountry' => 'setEinIssuingCountry',
        'universalEin' => 'setUniversalEin',
        'referenceId' => 'setReferenceId',
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
        'brandId' => 'getBrandId',
        'ein' => 'getEin',
        'user' => 'getUser',
        'order' => 'getOrder',
        'status' => 'getStatus',
        'brandRelationship' => 'getBrandRelationship',
        'vertical' => 'getVertical',
        'entityType' => 'getEntityType',
        'cspId' => 'getCspId',
        'einIssuingCountry' => 'getEinIssuingCountry',
        'universalEin' => 'getUniversalEin',
        'referenceId' => 'getReferenceId',
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

    public const STATUS_VERIFIED = 'verified';
    public const STATUS_UNVERIFIED = 'unverified';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VERIFIED,
            self::STATUS_UNVERIFIED,
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
        $this->setIfExists('brandId', $data ?? [], null);
        $this->setIfExists('ein', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('brandRelationship', $data ?? [], null);
        $this->setIfExists('vertical', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('cspId', $data ?? [], null);
        $this->setIfExists('einIssuingCountry', $data ?? [], null);
        $this->setIfExists('universalEin', $data ?? [], null);
        $this->setIfExists('referenceId', $data ?? [], null);
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

        if (!is_null($this->container['brandId']) && (mb_strlen($this->container['brandId']) > 45)) {
            $invalidProperties[] = "invalid value for 'brandId', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['ein'] === null) {
            $invalidProperties[] = "'ein' can't be null";
        }
        if ((mb_strlen($this->container['ein']) > 20)) {
            $invalidProperties[] = "invalid value for 'ein', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['brandRelationship']) && (mb_strlen($this->container['brandRelationship']) > 45)) {
            $invalidProperties[] = "invalid value for 'brandRelationship', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['vertical']) && (mb_strlen($this->container['vertical']) > 45)) {
            $invalidProperties[] = "invalid value for 'vertical', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['entityType']) && (mb_strlen($this->container['entityType']) > 45)) {
            $invalidProperties[] = "invalid value for 'entityType', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['cspId']) && (mb_strlen($this->container['cspId']) > 45)) {
            $invalidProperties[] = "invalid value for 'cspId', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['einIssuingCountry']) && (mb_strlen($this->container['einIssuingCountry']) > 2)) {
            $invalidProperties[] = "invalid value for 'einIssuingCountry', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['universalEin']) && (mb_strlen($this->container['universalEin']) > 45)) {
            $invalidProperties[] = "invalid value for 'universalEin', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['referenceId']) && (mb_strlen($this->container['referenceId']) > 45)) {
            $invalidProperties[] = "invalid value for 'referenceId', the character length must be smaller than or equal to 45.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId brandId
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        if (is_null($brandId)) {
            throw new \InvalidArgumentException('non-nullable brandId cannot be null');
        }
        if ((mb_strlen($brandId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $brandId when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets ein
     *
     * @return string
     */
    public function getEin()
    {
        return $this->container['ein'];
    }

    /**
     * Sets ein
     *
     * @param string $ein ein
     *
     * @return self
     */
    public function setEin($ein)
    {
        if (is_null($ein)) {
            throw new \InvalidArgumentException('non-nullable ein cannot be null');
        }
        if ((mb_strlen($ein) > 20)) {
            throw new \InvalidArgumentException('invalid length for $ein when calling GetMessageBrand200Response., must be smaller than or equal to 20.');
        }

        $this->container['ein'] = $ein;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
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
     * Gets brandRelationship
     *
     * @return string|null
     */
    public function getBrandRelationship()
    {
        return $this->container['brandRelationship'];
    }

    /**
     * Sets brandRelationship
     *
     * @param string|null $brandRelationship brandRelationship
     *
     * @return self
     */
    public function setBrandRelationship($brandRelationship)
    {
        if (is_null($brandRelationship)) {
            throw new \InvalidArgumentException('non-nullable brandRelationship cannot be null');
        }
        if ((mb_strlen($brandRelationship) > 45)) {
            throw new \InvalidArgumentException('invalid length for $brandRelationship when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['brandRelationship'] = $brandRelationship;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return string|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param string|null $vertical vertical
     *
     * @return self
     */
    public function setVertical($vertical)
    {
        if (is_null($vertical)) {
            throw new \InvalidArgumentException('non-nullable vertical cannot be null');
        }
        if ((mb_strlen($vertical) > 45)) {
            throw new \InvalidArgumentException('invalid length for $vertical when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string|null $entityType entityType
     *
     * @return self
     */
    public function setEntityType($entityType)
    {
        if (is_null($entityType)) {
            throw new \InvalidArgumentException('non-nullable entityType cannot be null');
        }
        if ((mb_strlen($entityType) > 45)) {
            throw new \InvalidArgumentException('invalid length for $entityType when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets cspId
     *
     * @return string|null
     */
    public function getCspId()
    {
        return $this->container['cspId'];
    }

    /**
     * Sets cspId
     *
     * @param string|null $cspId cspId
     *
     * @return self
     */
    public function setCspId($cspId)
    {
        if (is_null($cspId)) {
            throw new \InvalidArgumentException('non-nullable cspId cannot be null');
        }
        if ((mb_strlen($cspId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $cspId when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['cspId'] = $cspId;

        return $this;
    }

    /**
     * Gets einIssuingCountry
     *
     * @return string|null
     */
    public function getEinIssuingCountry()
    {
        return $this->container['einIssuingCountry'];
    }

    /**
     * Sets einIssuingCountry
     *
     * @param string|null $einIssuingCountry einIssuingCountry
     *
     * @return self
     */
    public function setEinIssuingCountry($einIssuingCountry)
    {
        if (is_null($einIssuingCountry)) {
            throw new \InvalidArgumentException('non-nullable einIssuingCountry cannot be null');
        }
        if ((mb_strlen($einIssuingCountry) > 2)) {
            throw new \InvalidArgumentException('invalid length for $einIssuingCountry when calling GetMessageBrand200Response., must be smaller than or equal to 2.');
        }

        $this->container['einIssuingCountry'] = $einIssuingCountry;

        return $this;
    }

    /**
     * Gets universalEin
     *
     * @return string|null
     */
    public function getUniversalEin()
    {
        return $this->container['universalEin'];
    }

    /**
     * Sets universalEin
     *
     * @param string|null $universalEin universalEin
     *
     * @return self
     */
    public function setUniversalEin($universalEin)
    {
        if (is_null($universalEin)) {
            throw new \InvalidArgumentException('non-nullable universalEin cannot be null');
        }
        if ((mb_strlen($universalEin) > 45)) {
            throw new \InvalidArgumentException('invalid length for $universalEin when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['universalEin'] = $universalEin;

        return $this;
    }

    /**
     * Gets referenceId
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param string|null $referenceId referenceId
     *
     * @return self
     */
    public function setReferenceId($referenceId)
    {
        if (is_null($referenceId)) {
            throw new \InvalidArgumentException('non-nullable referenceId cannot be null');
        }
        if ((mb_strlen($referenceId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $referenceId when calling GetMessageBrand200Response., must be smaller than or equal to 45.');
        }

        $this->container['referenceId'] = $referenceId;

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



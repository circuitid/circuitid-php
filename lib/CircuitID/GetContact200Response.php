<?php
/**
 * GetContact200Response
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
 * GetContact200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetContact200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getContact_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'first' => 'string',
        'last' => 'string',
        'mobilePhone' => 'string',
        'businessPhone' => 'string',
        'faxPhone' => 'string',
        'extension' => 'int',
        'jobTitle' => 'string',
        'department' => 'string',
        'avatar' => 'string',
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
        'email' => null,
        'first' => null,
        'last' => null,
        'mobilePhone' => null,
        'businessPhone' => null,
        'faxPhone' => null,
        'extension' => 'int32',
        'jobTitle' => null,
        'department' => null,
        'avatar' => null,
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
        'email' => false,
		'first' => false,
		'last' => false,
		'mobilePhone' => false,
		'businessPhone' => false,
		'faxPhone' => false,
		'extension' => false,
		'jobTitle' => false,
		'department' => false,
		'avatar' => false,
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
        'email' => 'email',
        'first' => 'first',
        'last' => 'last',
        'mobilePhone' => 'mobilePhone',
        'businessPhone' => 'businessPhone',
        'faxPhone' => 'faxPhone',
        'extension' => 'extension',
        'jobTitle' => 'jobTitle',
        'department' => 'department',
        'avatar' => 'avatar',
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
        'email' => 'setEmail',
        'first' => 'setFirst',
        'last' => 'setLast',
        'mobilePhone' => 'setMobilePhone',
        'businessPhone' => 'setBusinessPhone',
        'faxPhone' => 'setFaxPhone',
        'extension' => 'setExtension',
        'jobTitle' => 'setJobTitle',
        'department' => 'setDepartment',
        'avatar' => 'setAvatar',
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
        'email' => 'getEmail',
        'first' => 'getFirst',
        'last' => 'getLast',
        'mobilePhone' => 'getMobilePhone',
        'businessPhone' => 'getBusinessPhone',
        'faxPhone' => 'getFaxPhone',
        'extension' => 'getExtension',
        'jobTitle' => 'getJobTitle',
        'department' => 'getDepartment',
        'avatar' => 'getAvatar',
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('first', $data ?? [], null);
        $this->setIfExists('last', $data ?? [], null);
        $this->setIfExists('mobilePhone', $data ?? [], null);
        $this->setIfExists('businessPhone', $data ?? [], null);
        $this->setIfExists('faxPhone', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
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

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 45)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['first'] === null) {
            $invalidProperties[] = "'first' can't be null";
        }
        if ((mb_strlen($this->container['first']) > 45)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['last']) && (mb_strlen($this->container['last']) > 45)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['businessPhone']) && (mb_strlen($this->container['businessPhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'businessPhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['faxPhone']) && (mb_strlen($this->container['faxPhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'faxPhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['jobTitle']) && (mb_strlen($this->container['jobTitle']) > 45)) {
            $invalidProperties[] = "invalid value for 'jobTitle', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['department']) && (mb_strlen($this->container['department']) > 45)) {
            $invalidProperties[] = "invalid value for 'department', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['avatar']) && (mb_strlen($this->container['avatar']) > 255)) {
            $invalidProperties[] = "invalid value for 'avatar', the character length must be smaller than or equal to 255.";
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 45)) {
            throw new \InvalidArgumentException('invalid length for $email when calling GetContact200Response., must be smaller than or equal to 45.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param string $first first
     *
     * @return self
     */
    public function setFirst($first)
    {
        if (is_null($first)) {
            throw new \InvalidArgumentException('non-nullable first cannot be null');
        }
        if ((mb_strlen($first) > 45)) {
            throw new \InvalidArgumentException('invalid length for $first when calling GetContact200Response., must be smaller than or equal to 45.');
        }

        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string|null $last last
     *
     * @return self
     */
    public function setLast($last)
    {
        if (is_null($last)) {
            throw new \InvalidArgumentException('non-nullable last cannot be null');
        }
        if ((mb_strlen($last) > 45)) {
            throw new \InvalidArgumentException('invalid length for $last when calling GetContact200Response., must be smaller than or equal to 45.');
        }

        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string|null $mobilePhone mobilePhone
     *
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        if (is_null($mobilePhone)) {
            throw new \InvalidArgumentException('non-nullable mobilePhone cannot be null');
        }
        if ((mb_strlen($mobilePhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $mobilePhone when calling GetContact200Response., must be smaller than or equal to 20.');
        }

        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets businessPhone
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->container['businessPhone'];
    }

    /**
     * Sets businessPhone
     *
     * @param string|null $businessPhone businessPhone
     *
     * @return self
     */
    public function setBusinessPhone($businessPhone)
    {
        if (is_null($businessPhone)) {
            throw new \InvalidArgumentException('non-nullable businessPhone cannot be null');
        }
        if ((mb_strlen($businessPhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $businessPhone when calling GetContact200Response., must be smaller than or equal to 20.');
        }

        $this->container['businessPhone'] = $businessPhone;

        return $this;
    }

    /**
     * Gets faxPhone
     *
     * @return string|null
     */
    public function getFaxPhone()
    {
        return $this->container['faxPhone'];
    }

    /**
     * Sets faxPhone
     *
     * @param string|null $faxPhone faxPhone
     *
     * @return self
     */
    public function setFaxPhone($faxPhone)
    {
        if (is_null($faxPhone)) {
            throw new \InvalidArgumentException('non-nullable faxPhone cannot be null');
        }
        if ((mb_strlen($faxPhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $faxPhone when calling GetContact200Response., must be smaller than or equal to 20.');
        }

        $this->container['faxPhone'] = $faxPhone;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return int|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param int|null $extension extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            throw new \InvalidArgumentException('non-nullable extension cannot be null');
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle jobTitle
     *
     * @return self
     */
    public function setJobTitle($jobTitle)
    {
        if (is_null($jobTitle)) {
            throw new \InvalidArgumentException('non-nullable jobTitle cannot be null');
        }
        if ((mb_strlen($jobTitle) > 45)) {
            throw new \InvalidArgumentException('invalid length for $jobTitle when calling GetContact200Response., must be smaller than or equal to 45.');
        }

        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        if (is_null($department)) {
            throw new \InvalidArgumentException('non-nullable department cannot be null');
        }
        if ((mb_strlen($department) > 45)) {
            throw new \InvalidArgumentException('invalid length for $department when calling GetContact200Response., must be smaller than or equal to 45.');
        }

        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (is_null($avatar)) {
            throw new \InvalidArgumentException('non-nullable avatar cannot be null');
        }
        if ((mb_strlen($avatar) > 255)) {
            throw new \InvalidArgumentException('invalid length for $avatar when calling GetContact200Response., must be smaller than or equal to 255.');
        }

        $this->container['avatar'] = $avatar;

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



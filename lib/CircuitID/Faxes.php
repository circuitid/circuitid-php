<?php
/**
 * Faxes
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
 * Faxes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Faxes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'faxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments' => 'string[]',
        'callerDestinations' => 'string[]',
        'callerIdNumber' => 'string',
        'callerDestination' => 'string',
        'pages' => 'int',
        'statusCode' => 'int',
        'transferedPages' => 'int',
        'status' => 'string',
        'error' => 'string',
        'type' => 'string',
        'order' => 'string',
        'file' => 'string',
        'contact' => 'string',
        'number' => 'string',
        'faxAccount' => 'string',
        'retries' => 'int',
        'invoice' => 'string',
        'senderEmail' => 'string',
        'senderName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments' => 'url',
        'callerDestinations' => null,
        'callerIdNumber' => null,
        'callerDestination' => null,
        'pages' => 'int32',
        'statusCode' => 'int32',
        'transferedPages' => 'int32',
        'status' => null,
        'error' => null,
        'type' => null,
        'order' => null,
        'file' => null,
        'contact' => null,
        'number' => null,
        'faxAccount' => null,
        'retries' => 'int32',
        'invoice' => null,
        'senderEmail' => null,
        'senderName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attachments' => false,
		'callerDestinations' => false,
		'callerIdNumber' => false,
		'callerDestination' => false,
		'pages' => false,
		'statusCode' => false,
		'transferedPages' => false,
		'status' => false,
		'error' => false,
		'type' => false,
		'order' => false,
		'file' => false,
		'contact' => false,
		'number' => false,
		'faxAccount' => false,
		'retries' => false,
		'invoice' => false,
		'senderEmail' => false,
		'senderName' => false
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
        'attachments' => 'attachments',
        'callerDestinations' => 'callerDestinations',
        'callerIdNumber' => 'callerIdNumber',
        'callerDestination' => 'callerDestination',
        'pages' => 'pages',
        'statusCode' => 'statusCode',
        'transferedPages' => 'transferedPages',
        'status' => 'status',
        'error' => 'error',
        'type' => 'type',
        'order' => 'order',
        'file' => 'file',
        'contact' => 'contact',
        'number' => 'number',
        'faxAccount' => 'faxAccount',
        'retries' => 'retries',
        'invoice' => 'invoice',
        'senderEmail' => 'senderEmail',
        'senderName' => 'senderName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'callerDestinations' => 'setCallerDestinations',
        'callerIdNumber' => 'setCallerIdNumber',
        'callerDestination' => 'setCallerDestination',
        'pages' => 'setPages',
        'statusCode' => 'setStatusCode',
        'transferedPages' => 'setTransferedPages',
        'status' => 'setStatus',
        'error' => 'setError',
        'type' => 'setType',
        'order' => 'setOrder',
        'file' => 'setFile',
        'contact' => 'setContact',
        'number' => 'setNumber',
        'faxAccount' => 'setFaxAccount',
        'retries' => 'setRetries',
        'invoice' => 'setInvoice',
        'senderEmail' => 'setSenderEmail',
        'senderName' => 'setSenderName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'callerDestinations' => 'getCallerDestinations',
        'callerIdNumber' => 'getCallerIdNumber',
        'callerDestination' => 'getCallerDestination',
        'pages' => 'getPages',
        'statusCode' => 'getStatusCode',
        'transferedPages' => 'getTransferedPages',
        'status' => 'getStatus',
        'error' => 'getError',
        'type' => 'getType',
        'order' => 'getOrder',
        'file' => 'getFile',
        'contact' => 'getContact',
        'number' => 'getNumber',
        'faxAccount' => 'getFaxAccount',
        'retries' => 'getRetries',
        'invoice' => 'getInvoice',
        'senderEmail' => 'getSenderEmail',
        'senderName' => 'getSenderName'
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

    public const STATUS_FAILED = 'failed';
    public const STATUS_SUCCESS = 'success';
    public const STATUS_PROCESSING = 'processing';
    public const TYPE_SEND = 'send';
    public const TYPE_RECEIVE = 'receive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FAILED,
            self::STATUS_SUCCESS,
            self::STATUS_PROCESSING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEND,
            self::TYPE_RECEIVE,
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
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('callerDestinations', $data ?? [], null);
        $this->setIfExists('callerIdNumber', $data ?? [], null);
        $this->setIfExists('callerDestination', $data ?? [], null);
        $this->setIfExists('pages', $data ?? [], 0);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('transferedPages', $data ?? [], 0);
        $this->setIfExists('status', $data ?? [], 'processing');
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('faxAccount', $data ?? [], null);
        $this->setIfExists('retries', $data ?? [], 0);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('senderEmail', $data ?? [], null);
        $this->setIfExists('senderName', $data ?? [], null);
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

        if ($this->container['callerDestinations'] === null) {
            $invalidProperties[] = "'callerDestinations' can't be null";
        }
        if ($this->container['callerIdNumber'] === null) {
            $invalidProperties[] = "'callerIdNumber' can't be null";
        }
        if ((mb_strlen($this->container['callerIdNumber']) > 45)) {
            $invalidProperties[] = "invalid value for 'callerIdNumber', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['callerDestination'] === null) {
            $invalidProperties[] = "'callerDestination' can't be null";
        }
        if ((mb_strlen($this->container['callerDestination']) > 45)) {
            $invalidProperties[] = "invalid value for 'callerDestination', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 255)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 255.";
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

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['faxAccount'] === null) {
            $invalidProperties[] = "'faxAccount' can't be null";
        }
        if (!is_null($this->container['senderEmail']) && (mb_strlen($this->container['senderEmail']) > 45)) {
            $invalidProperties[] = "invalid value for 'senderEmail', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['senderName']) && (mb_strlen($this->container['senderName']) > 45)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be smaller than or equal to 45.";
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
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets callerDestinations
     *
     * @return string[]
     */
    public function getCallerDestinations()
    {
        return $this->container['callerDestinations'];
    }

    /**
     * Sets callerDestinations
     *
     * @param string[] $callerDestinations callerDestinations
     *
     * @return self
     */
    public function setCallerDestinations($callerDestinations)
    {
        if (is_null($callerDestinations)) {
            throw new \InvalidArgumentException('non-nullable callerDestinations cannot be null');
        }
        $this->container['callerDestinations'] = $callerDestinations;

        return $this;
    }

    /**
     * Gets callerIdNumber
     *
     * @return string
     */
    public function getCallerIdNumber()
    {
        return $this->container['callerIdNumber'];
    }

    /**
     * Sets callerIdNumber
     *
     * @param string $callerIdNumber callerIdNumber
     *
     * @return self
     */
    public function setCallerIdNumber($callerIdNumber)
    {
        if (is_null($callerIdNumber)) {
            throw new \InvalidArgumentException('non-nullable callerIdNumber cannot be null');
        }
        if ((mb_strlen($callerIdNumber) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callerIdNumber when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['callerIdNumber'] = $callerIdNumber;

        return $this;
    }

    /**
     * Gets callerDestination
     *
     * @return string
     */
    public function getCallerDestination()
    {
        return $this->container['callerDestination'];
    }

    /**
     * Sets callerDestination
     *
     * @param string $callerDestination callerDestination
     *
     * @return self
     */
    public function setCallerDestination($callerDestination)
    {
        if (is_null($callerDestination)) {
            throw new \InvalidArgumentException('non-nullable callerDestination cannot be null');
        }
        if ((mb_strlen($callerDestination) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callerDestination when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['callerDestination'] = $callerDestination;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return int|null
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param int|null $pages pages
     *
     * @return self
     */
    public function setPages($pages)
    {
        if (is_null($pages)) {
            throw new \InvalidArgumentException('non-nullable pages cannot be null');
        }
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int|null $statusCode statusCode
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets transferedPages
     *
     * @return int|null
     */
    public function getTransferedPages()
    {
        return $this->container['transferedPages'];
    }

    /**
     * Sets transferedPages
     *
     * @param int|null $transferedPages transferedPages
     *
     * @return self
     */
    public function setTransferedPages($transferedPages)
    {
        if (is_null($transferedPages)) {
            throw new \InvalidArgumentException('non-nullable transferedPages cannot be null');
        }
        $this->container['transferedPages'] = $transferedPages;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
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
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        if ((mb_strlen($error) > 255)) {
            throw new \InvalidArgumentException('invalid length for $error when calling Faxes., must be smaller than or equal to 255.');
        }

        $this->container['error'] = $error;

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
     * Gets order
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order ObjectId (unique 12 bytes ID)
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
     * Gets file
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string|null $file ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            throw new \InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets faxAccount
     *
     * @return string
     */
    public function getFaxAccount()
    {
        return $this->container['faxAccount'];
    }

    /**
     * Sets faxAccount
     *
     * @param string $faxAccount ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setFaxAccount($faxAccount)
    {
        if (is_null($faxAccount)) {
            throw new \InvalidArgumentException('non-nullable faxAccount cannot be null');
        }
        $this->container['faxAccount'] = $faxAccount;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int|null $retries retries
     *
     * @return self
     */
    public function setRetries($retries)
    {
        if (is_null($retries)) {
            throw new \InvalidArgumentException('non-nullable retries cannot be null');
        }
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string|null $invoice ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (is_null($invoice)) {
            throw new \InvalidArgumentException('non-nullable invoice cannot be null');
        }
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets senderEmail
     *
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->container['senderEmail'];
    }

    /**
     * Sets senderEmail
     *
     * @param string|null $senderEmail senderEmail
     *
     * @return self
     */
    public function setSenderEmail($senderEmail)
    {
        if (is_null($senderEmail)) {
            throw new \InvalidArgumentException('non-nullable senderEmail cannot be null');
        }
        if ((mb_strlen($senderEmail) > 45)) {
            throw new \InvalidArgumentException('invalid length for $senderEmail when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['senderEmail'] = $senderEmail;

        return $this;
    }

    /**
     * Gets senderName
     *
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->container['senderName'];
    }

    /**
     * Sets senderName
     *
     * @param string|null $senderName senderName
     *
     * @return self
     */
    public function setSenderName($senderName)
    {
        if (is_null($senderName)) {
            throw new \InvalidArgumentException('non-nullable senderName cannot be null');
        }
        if ((mb_strlen($senderName) > 45)) {
            throw new \InvalidArgumentException('invalid length for $senderName when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['senderName'] = $senderName;

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



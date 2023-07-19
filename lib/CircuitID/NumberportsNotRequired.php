<?php
/**
 * NumberportsNotRequired
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
 * # Introduction                 Welcome to the Circuit ID REST API!                  Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go. Embrace the future of communication with Circuit ID, elevating your interactions to new heights.                  Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.   We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.8
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
 * NumberportsNotRequired Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NumberportsNotRequired implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'numberportsNotRequired';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'type' => 'mixed',
        'typeOfService' => 'mixed',
        'authorizedPerson' => 'mixed',
        'desiredDueDate' => 'mixed',
        'accountNumber' => 'mixed',
        'accountPhoneNumber' => 'mixed',
        'office' => 'mixed',
        'e911' => 'mixed',
        'invoice' => 'mixed',
        'status' => 'mixed',
        'destinationType' => 'mixed',
        'destination' => 'mixed',
        'ref' => 'mixed',
        'callForwardingDestination' => 'mixed'
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
        'type' => null,
        'typeOfService' => null,
        'authorizedPerson' => null,
        'desiredDueDate' => 'date-time',
        'accountNumber' => null,
        'accountPhoneNumber' => null,
        'office' => null,
        'e911' => 'int32',
        'invoice' => null,
        'status' => null,
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
        'name' => true,
		'type' => true,
		'typeOfService' => true,
		'authorizedPerson' => true,
		'desiredDueDate' => true,
		'accountNumber' => true,
		'accountPhoneNumber' => true,
		'office' => true,
		'e911' => true,
		'invoice' => true,
		'status' => true,
		'destinationType' => true,
		'destination' => true,
		'ref' => true,
		'callForwardingDestination' => true
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
        'type' => 'type',
        'typeOfService' => 'typeOfService',
        'authorizedPerson' => 'authorizedPerson',
        'desiredDueDate' => 'desiredDueDate',
        'accountNumber' => 'accountNumber',
        'accountPhoneNumber' => 'accountPhoneNumber',
        'office' => 'office',
        'e911' => 'e911',
        'invoice' => 'invoice',
        'status' => 'status',
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
        'type' => 'setType',
        'typeOfService' => 'setTypeOfService',
        'authorizedPerson' => 'setAuthorizedPerson',
        'desiredDueDate' => 'setDesiredDueDate',
        'accountNumber' => 'setAccountNumber',
        'accountPhoneNumber' => 'setAccountPhoneNumber',
        'office' => 'setOffice',
        'e911' => 'setE911',
        'invoice' => 'setInvoice',
        'status' => 'setStatus',
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
        'type' => 'getType',
        'typeOfService' => 'getTypeOfService',
        'authorizedPerson' => 'getAuthorizedPerson',
        'desiredDueDate' => 'getDesiredDueDate',
        'accountNumber' => 'getAccountNumber',
        'accountPhoneNumber' => 'getAccountPhoneNumber',
        'office' => 'getOffice',
        'e911' => 'getE911',
        'invoice' => 'getInvoice',
        'status' => 'getStatus',
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

    public const TYPE_IN = 'port in';
    public const TYPE_OUT = 'port out';
    public const TYPE_OF_SERVICE_BUSINESS = 'business';
    public const TYPE_OF_SERVICE_RESIDENCE = 'residence';
    public const E911__1 = '1';
    public const E911__0 = '0';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_FAILED = 'failed';
    public const STATUS_ERROR = 'error';
    public const STATUS_COMPLETED = 'completed';
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IN,
            self::TYPE_OUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfServiceAllowableValues()
    {
        return [
            self::TYPE_OF_SERVICE_BUSINESS,
            self::TYPE_OF_SERVICE_RESIDENCE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getE911AllowableValues()
    {
        return [
            self::E911__1,
            self::E911__0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_FAILED,
            self::STATUS_ERROR,
            self::STATUS_COMPLETED,
        ];
    }

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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('typeOfService', $data ?? [], null);
        $this->setIfExists('authorizedPerson', $data ?? [], null);
        $this->setIfExists('desiredDueDate', $data ?? [], null);
        $this->setIfExists('accountNumber', $data ?? [], null);
        $this->setIfExists('accountPhoneNumber', $data ?? [], null);
        $this->setIfExists('office', $data ?? [], null);
        $this->setIfExists('e911', $data ?? [], null);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 45)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 45.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeOfServiceAllowableValues();
        if (!is_null($this->container['typeOfService']) && !in_array($this->container['typeOfService'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'typeOfService', must be one of '%s'",
                $this->container['typeOfService'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['authorizedPerson']) && (mb_strlen($this->container['authorizedPerson']) > 45)) {
            $invalidProperties[] = "invalid value for 'authorizedPerson', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['accountNumber']) && (mb_strlen($this->container['accountNumber']) > 45)) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['accountPhoneNumber']) && (mb_strlen($this->container['accountPhoneNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'accountPhoneNumber', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['accountPhoneNumber']) && (mb_strlen($this->container['accountPhoneNumber']) < 10)) {
            $invalidProperties[] = "invalid value for 'accountPhoneNumber', the character length must be bigger than or equal to 10.";
        }

        $allowedValues = $this->getE911AllowableValues();
        if (!is_null($this->container['e911']) && !in_array($this->container['e911'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'e911', must be one of '%s'",
                $this->container['e911'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * @return mixed|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed|null $name name
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
            throw new \InvalidArgumentException('invalid length for $name when calling NumberportsNotRequired., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return mixed|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param mixed|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets typeOfService
     *
     * @return mixed|null
     */
    public function getTypeOfService()
    {
        return $this->container['typeOfService'];
    }

    /**
     * Sets typeOfService
     *
     * @param mixed|null $typeOfService typeOfService
     *
     * @return self
     */
    public function setTypeOfService($typeOfService)
    {
        if (is_null($typeOfService)) {
            array_push($this->openAPINullablesSetToNull, 'typeOfService');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('typeOfService', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTypeOfServiceAllowableValues();
        if (!is_null($typeOfService) && !in_array($typeOfService, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'typeOfService', must be one of '%s'",
                    $typeOfService,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['typeOfService'] = $typeOfService;

        return $this;
    }

    /**
     * Gets authorizedPerson
     *
     * @return mixed|null
     */
    public function getAuthorizedPerson()
    {
        return $this->container['authorizedPerson'];
    }

    /**
     * Sets authorizedPerson
     *
     * @param mixed|null $authorizedPerson authorizedPerson
     *
     * @return self
     */
    public function setAuthorizedPerson($authorizedPerson)
    {
        if (is_null($authorizedPerson)) {
            array_push($this->openAPINullablesSetToNull, 'authorizedPerson');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authorizedPerson', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($authorizedPerson) && (mb_strlen($authorizedPerson) > 45)) {
            throw new \InvalidArgumentException('invalid length for $authorizedPerson when calling NumberportsNotRequired., must be smaller than or equal to 45.');
        }

        $this->container['authorizedPerson'] = $authorizedPerson;

        return $this;
    }

    /**
     * Gets desiredDueDate
     *
     * @return mixed|null
     */
    public function getDesiredDueDate()
    {
        return $this->container['desiredDueDate'];
    }

    /**
     * Sets desiredDueDate
     *
     * @param mixed|null $desiredDueDate desiredDueDate
     *
     * @return self
     */
    public function setDesiredDueDate($desiredDueDate)
    {
        if (is_null($desiredDueDate)) {
            array_push($this->openAPINullablesSetToNull, 'desiredDueDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('desiredDueDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['desiredDueDate'] = $desiredDueDate;

        return $this;
    }

    /**
     * Gets accountNumber
     *
     * @return mixed|null
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param mixed|null $accountNumber accountNumber
     *
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        if (is_null($accountNumber)) {
            array_push($this->openAPINullablesSetToNull, 'accountNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($accountNumber) && (mb_strlen($accountNumber) > 45)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling NumberportsNotRequired., must be smaller than or equal to 45.');
        }

        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets accountPhoneNumber
     *
     * @return mixed|null
     */
    public function getAccountPhoneNumber()
    {
        return $this->container['accountPhoneNumber'];
    }

    /**
     * Sets accountPhoneNumber
     *
     * @param mixed|null $accountPhoneNumber accountPhoneNumber
     *
     * @return self
     */
    public function setAccountPhoneNumber($accountPhoneNumber)
    {
        if (is_null($accountPhoneNumber)) {
            array_push($this->openAPINullablesSetToNull, 'accountPhoneNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountPhoneNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($accountPhoneNumber) && (mb_strlen($accountPhoneNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $accountPhoneNumber when calling NumberportsNotRequired., must be smaller than or equal to 20.');
        }
        if (!is_null($accountPhoneNumber) && (mb_strlen($accountPhoneNumber) < 10)) {
            throw new \InvalidArgumentException('invalid length for $accountPhoneNumber when calling NumberportsNotRequired., must be bigger than or equal to 10.');
        }

        $this->container['accountPhoneNumber'] = $accountPhoneNumber;

        return $this;
    }

    /**
     * Gets office
     *
     * @return mixed|null
     */
    public function getOffice()
    {
        return $this->container['office'];
    }

    /**
     * Sets office
     *
     * @param mixed|null $office ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setOffice($office)
    {
        if (is_null($office)) {
            array_push($this->openAPINullablesSetToNull, 'office');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('office', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['office'] = $office;

        return $this;
    }

    /**
     * Gets e911
     *
     * @return mixed|null
     */
    public function getE911()
    {
        return $this->container['e911'];
    }

    /**
     * Sets e911
     *
     * @param mixed|null $e911 e911
     *
     * @return self
     */
    public function setE911($e911)
    {
        if (is_null($e911)) {
            array_push($this->openAPINullablesSetToNull, 'e911');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('e911', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getE911AllowableValues();
        if (!is_null($e911) && !in_array($e911, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'e911', must be one of '%s'",
                    $e911,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['e911'] = $e911;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return mixed|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param mixed|null $invoice ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (is_null($invoice)) {
            array_push($this->openAPINullablesSetToNull, 'invoice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice'] = $invoice;

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
     * Gets destinationType
     *
     * @return mixed|null
     */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
     * Sets destinationType
     *
     * @param mixed|null $destinationType destinationType
     *
     * @return self
     */
    public function setDestinationType($destinationType)
    {
        if (is_null($destinationType)) {
            array_push($this->openAPINullablesSetToNull, 'destinationType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destinationType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($destinationType) && !in_array($destinationType, $allowedValues, true)) {
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
     * @return mixed|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param mixed|null $destination ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            array_push($this->openAPINullablesSetToNull, 'destination');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return mixed|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param mixed|null $ref ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            array_push($this->openAPINullablesSetToNull, 'ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ref) && (mb_strlen($ref) > 100)) {
            throw new \InvalidArgumentException('invalid length for $ref when calling NumberportsNotRequired., must be smaller than or equal to 100.');
        }
        if (!is_null($ref) && (mb_strlen($ref) < 5)) {
            throw new \InvalidArgumentException('invalid length for $ref when calling NumberportsNotRequired., must be bigger than or equal to 5.');
        }

        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets callForwardingDestination
     *
     * @return mixed|null
     */
    public function getCallForwardingDestination()
    {
        return $this->container['callForwardingDestination'];
    }

    /**
     * Sets callForwardingDestination
     *
     * @param mixed|null $callForwardingDestination callForwardingDestination
     *
     * @return self
     */
    public function setCallForwardingDestination($callForwardingDestination)
    {
        if (is_null($callForwardingDestination)) {
            array_push($this->openAPINullablesSetToNull, 'callForwardingDestination');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('callForwardingDestination', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($callForwardingDestination) && (mb_strlen($callForwardingDestination) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callForwardingDestination when calling NumberportsNotRequired., must be smaller than or equal to 45.');
        }
        if (!is_null($callForwardingDestination) && (mb_strlen($callForwardingDestination) < 10)) {
            throw new \InvalidArgumentException('invalid length for $callForwardingDestination when calling NumberportsNotRequired., must be bigger than or equal to 10.');
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



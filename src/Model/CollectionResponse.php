<?php
/**
 * CollectionResponse
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.4
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maviance\S3PApiClient\Model;

use ArrayAccess;
use Maviance\S3PApiClient\ObjectSerializer;

/**
 * CollectionResponse Class Doc Comment
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CollectionResponse implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    public const STATUS_REVERSED = 'REVERSED';

    public const STATUS_PENDING = 'PENDING';

    public const STATUS_ERRORED = 'ERRORED';

    public const STATUS_UNDERINVESTIGATION = 'UNDERINVESTIGATION';

    public const STATUS_SUCCESS = 'SUCCESS';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CollectionResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ptn' => 'string',
        'timestamp' => '\DateTime',
        'agentBalance' => 'float',
        'receiptNumber' => 'string',
        'veriCode' => 'string',
        'priceLocalCur' => 'float',
        'priceSystemCur' => 'float',
        'localCur' => 'string',
        'systemCur' => 'string',
        'trid' => 'string',
        'pin' => 'string',
        'status' => 'string',
        'payItemId' => 'string',
        'payItemDescr' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ptn' => null,
        'timestamp' => 'date',
        'agentBalance' => 'float',
        'receiptNumber' => null,
        'veriCode' => null,
        'priceLocalCur' => 'float',
        'priceSystemCur' => 'float',
        'localCur' => null,
        'systemCur' => null,
        'trid' => null,
        'pin' => null,
        'status' => null,
        'payItemId' => null,
        'payItemDescr' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ptn' => 'ptn',
        'timestamp' => 'timestamp',
        'agentBalance' => 'agentBalance',
        'receiptNumber' => 'receiptNumber',
        'veriCode' => 'veriCode',
        'priceLocalCur' => 'priceLocalCur',
        'priceSystemCur' => 'priceSystemCur',
        'localCur' => 'localCur',
        'systemCur' => 'systemCur',
        'trid' => 'trid',
        'pin' => 'pin',
        'status' => 'status',
        'payItemId' => 'payItemId',
        'payItemDescr' => 'payItemDescr'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ptn' => 'setPtn',
        'timestamp' => 'setTimestamp',
        'agentBalance' => 'setAgentBalance',
        'receiptNumber' => 'setReceiptNumber',
        'veriCode' => 'setVeriCode',
        'priceLocalCur' => 'setPriceLocalCur',
        'priceSystemCur' => 'setPriceSystemCur',
        'localCur' => 'setLocalCur',
        'systemCur' => 'setSystemCur',
        'trid' => 'setTrid',
        'pin' => 'setPin',
        'status' => 'setStatus',
        'payItemId' => 'setPayItemId',
        'payItemDescr' => 'setPayItemDescr'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ptn' => 'getPtn',
        'timestamp' => 'getTimestamp',
        'agentBalance' => 'getAgentBalance',
        'receiptNumber' => 'getReceiptNumber',
        'veriCode' => 'getVeriCode',
        'priceLocalCur' => 'getPriceLocalCur',
        'priceSystemCur' => 'getPriceSystemCur',
        'localCur' => 'getLocalCur',
        'systemCur' => 'getSystemCur',
        'trid' => 'getTrid',
        'pin' => 'getPin',
        'status' => 'getStatus',
        'payItemId' => 'getPayItemId',
        'payItemDescr' => 'getPayItemDescr'];

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
    public function __construct(?array $data = null)
    {
        $this->container['ptn'] = isset($data['ptn']) ? $data['ptn'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['agentBalance'] = isset($data['agentBalance']) ? $data['agentBalance'] : null;
        $this->container['receiptNumber'] = isset($data['receiptNumber']) ? $data['receiptNumber'] : null;
        $this->container['veriCode'] = isset($data['veriCode']) ? $data['veriCode'] : null;
        $this->container['priceLocalCur'] = isset($data['priceLocalCur']) ? $data['priceLocalCur'] : null;
        $this->container['priceSystemCur'] = isset($data['priceSystemCur']) ? $data['priceSystemCur'] : null;
        $this->container['localCur'] = isset($data['localCur']) ? $data['localCur'] : null;
        $this->container['systemCur'] = isset($data['systemCur']) ? $data['systemCur'] : null;
        $this->container['trid'] = isset($data['trid']) ? $data['trid'] : null;
        $this->container['pin'] = isset($data['pin']) ? $data['pin'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payItemId'] = isset($data['payItemId']) ? $data['payItemId'] : null;
        $this->container['payItemDescr'] = isset($data['payItemDescr']) ? $data['payItemDescr'] : null;
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

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
        return self::$swaggerModelName;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REVERSED,
            self::STATUS_PENDING,
            self::STATUS_ERRORED,
            self::STATUS_UNDERINVESTIGATION,
            self::STATUS_SUCCESS,        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ptn'] === null) {
            $invalidProperties[] = "'ptn' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['agentBalance'] === null) {
            $invalidProperties[] = "'agentBalance' can't be null";
        }
        if ($this->container['receiptNumber'] === null) {
            $invalidProperties[] = "'receiptNumber' can't be null";
        }
        if ($this->container['veriCode'] === null) {
            $invalidProperties[] = "'veriCode' can't be null";
        }
        if ($this->container['priceLocalCur'] === null) {
            $invalidProperties[] = "'priceLocalCur' can't be null";
        }
        if ($this->container['priceSystemCur'] === null) {
            $invalidProperties[] = "'priceSystemCur' can't be null";
        }
        if ($this->container['localCur'] === null) {
            $invalidProperties[] = "'localCur' can't be null";
        }
        if ($this->container['systemCur'] === null) {
            $invalidProperties[] = "'systemCur' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets ptn
     *
     * @return string
     */
    public function getPtn()
    {
        return $this->container['ptn'];
    }

    /**
     * Sets ptn
     *
     * @param string $ptn Unique payment collection transaction number
     *
     * @return $this
     */
    public function setPtn($ptn)
    {
        $this->container['ptn'] = $ptn;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Timestamp of processing in  System (ISO 8601)
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets agentBalance
     *
     * @return float
     */
    public function getAgentBalance()
    {
        return $this->container['agentBalance'];
    }

    /**
     * Sets agentBalance
     *
     * @param float $agentBalance Current Balance of agent account AFTER collection in system currency
     *
     * @return $this
     */
    public function setAgentBalance($agentBalance)
    {
        $this->container['agentBalance'] = $agentBalance;

        return $this;
    }

    /**
     * Gets receiptNumber
     *
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->container['receiptNumber'];
    }

    /**
     * Sets receiptNumber
     *
     * @param string $receiptNumber Receipt number - alternative identifier of payment - bound to agent context and is NOT unique
     *
     * @return $this
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->container['receiptNumber'] = $receiptNumber;

        return $this;
    }

    /**
     * Gets veriCode
     *
     * @return string
     */
    public function getVeriCode()
    {
        return $this->container['veriCode'];
    }

    /**
     * Sets veriCode
     *
     * @param string $veriCode Verification code for receipt number
     *
     * @return $this
     */
    public function setVeriCode($veriCode)
    {
        $this->container['veriCode'] = $veriCode;

        return $this;
    }

    /**
     * Gets priceLocalCur
     *
     * @return float
     */
    public function getPriceLocalCur()
    {
        return $this->container['priceLocalCur'];
    }

    /**
     * Sets priceLocalCur
     *
     * @param float $priceLocalCur Price paid in local currency
     *
     * @return $this
     */
    public function setPriceLocalCur($priceLocalCur)
    {
        $this->container['priceLocalCur'] = $priceLocalCur;

        return $this;
    }

    /**
     * Gets priceSystemCur
     *
     * @return float
     */
    public function getPriceSystemCur()
    {
        return $this->container['priceSystemCur'];
    }

    /**
     * Sets priceSystemCur
     *
     * @param float $priceSystemCur Price paid in system currency
     *
     * @return $this
     */
    public function setPriceSystemCur($priceSystemCur)
    {
        $this->container['priceSystemCur'] = $priceSystemCur;

        return $this;
    }

    /**
     * Gets localCur
     *
     * @return string
     */
    public function getLocalCur()
    {
        return $this->container['localCur'];
    }

    /**
     * Sets localCur
     *
     * @param string $localCur Local currency of service. (Format: ISO 4217)
     *
     * @return $this
     */
    public function setLocalCur($localCur)
    {
        $this->container['localCur'] = $localCur;

        return $this;
    }

    /**
     * Gets systemCur
     *
     * @return string
     */
    public function getSystemCur()
    {
        return $this->container['systemCur'];
    }

    /**
     * Sets systemCur
     *
     * @param string $systemCur Currency of billing by  system (Format: ISO 4217)
     *
     * @return $this
     */
    public function setSystemCur($systemCur)
    {
        $this->container['systemCur'] = $systemCur;

        return $this;
    }

    /**
     * Gets trid
     *
     * @return string
     */
    public function getTrid()
    {
        return $this->container['trid'];
    }

    /**
     * Sets trid
     *
     * @param string $trid custom external transaction reference provided during payment collection
     *
     * @return $this
     */
    public function setTrid($trid)
    {
        $this->container['trid'] = $trid;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string $pin Only for VOUCHER services - field returning a PIN or digital code. Will return “null” otherwise.
     *
     * @return $this
     */
    public function setPin($pin)
    {
        $this->container['pin'] = $pin;

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
     * @param string $status payment processing status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payItemId
     *
     * @return string
     */
    public function getPayItemId()
    {
        return $this->container['payItemId'];
    }

    /**
     * Sets payItemId
     *
     * @param string $payItemId Unique  Payment Item ID for payment item identification
     *
     * @return $this
     */
    public function setPayItemId($payItemId)
    {
        $this->container['payItemId'] = $payItemId;

        return $this;
    }

    /**
     * Gets payItemDescr
     *
     * @return string
     */
    public function getPayItemDescr()
    {
        return $this->container['payItemDescr'];
    }

    /**
     * Sets payItemDescr
     *
     * @param string $payItemDescr Contains optional description about payment details (e.g. merchant provided bill types)
     *
     * @return $this
     */
    public function setPayItemDescr($payItemDescr)
    {
        $this->container['payItemDescr'] = $payItemDescr;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
     * @param int $offset Offset
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }
}

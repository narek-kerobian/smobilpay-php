<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    public const AMOUNT_TYPE_FIXED = 'FIXED';

    public const AMOUNT_TYPE_CUSTOM = 'CUSTOM';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Product';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'serviceid' => 'int',
        'merchant' => 'string',
        'payItemId' => 'string',
        'payItemDescr' => 'string',
        'amountType' => 'string',
        'localCur' => 'string',
        'name' => 'string',
        'amountLocalCur' => 'float',
        'description' => 'string',
        'optStrg' => 'string',
        'optNmb' => 'float'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'serviceid' => null,
        'merchant' => null,
        'payItemId' => null,
        'payItemDescr' => null,
        'amountType' => null,
        'localCur' => null,
        'name' => null,
        'amountLocalCur' => 'float',
        'description' => null,
        'optStrg' => null,
        'optNmb' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'serviceid' => 'serviceid',
        'merchant' => 'merchant',
        'payItemId' => 'payItemId',
        'payItemDescr' => 'payItemDescr',
        'amountType' => 'amountType',
        'localCur' => 'localCur',
        'name' => 'name',
        'amountLocalCur' => 'amountLocalCur',
        'description' => 'description',
        'optStrg' => 'optStrg',
        'optNmb' => 'optNmb'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceid' => 'setServiceid',
        'merchant' => 'setMerchant',
        'payItemId' => 'setPayItemId',
        'payItemDescr' => 'setPayItemDescr',
        'amountType' => 'setAmountType',
        'localCur' => 'setLocalCur',
        'name' => 'setName',
        'amountLocalCur' => 'setAmountLocalCur',
        'description' => 'setDescription',
        'optStrg' => 'setOptStrg',
        'optNmb' => 'setOptNmb'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceid' => 'getServiceid',
        'merchant' => 'getMerchant',
        'payItemId' => 'getPayItemId',
        'payItemDescr' => 'getPayItemDescr',
        'amountType' => 'getAmountType',
        'localCur' => 'getLocalCur',
        'name' => 'getName',
        'amountLocalCur' => 'getAmountLocalCur',
        'description' => 'getDescription',
        'optStrg' => 'getOptStrg',
        'optNmb' => 'getOptNmb'];

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
        $this->container['serviceid'] = isset($data['serviceid']) ? $data['serviceid'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['payItemId'] = isset($data['payItemId']) ? $data['payItemId'] : null;
        $this->container['payItemDescr'] = isset($data['payItemDescr']) ? $data['payItemDescr'] : null;
        $this->container['amountType'] = isset($data['amountType']) ? $data['amountType'] : null;
        $this->container['localCur'] = isset($data['localCur']) ? $data['localCur'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amountLocalCur'] = isset($data['amountLocalCur']) ? $data['amountLocalCur'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['optStrg'] = isset($data['optStrg']) ? $data['optStrg'] : null;
        $this->container['optNmb'] = isset($data['optNmb']) ? $data['optNmb'] : null;
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
    public function getAmountTypeAllowableValues()
    {
        return [
            self::AMOUNT_TYPE_FIXED,
            self::AMOUNT_TYPE_CUSTOM,        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceid'] === null) {
            $invalidProperties[] = "'serviceid' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['payItemId'] === null) {
            $invalidProperties[] = "'payItemId' can't be null";
        }
        if ($this->container['amountType'] === null) {
            $invalidProperties[] = "'amountType' can't be null";
        }
        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!is_null($this->container['amountType']) && !in_array($this->container['amountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'amountType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['localCur'] === null) {
            $invalidProperties[] = "'localCur' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets serviceid
     *
     * @return int
     */
    public function getServiceid()
    {
        return $this->container['serviceid'];
    }

    /**
     * Sets serviceid
     *
     * @param int $serviceid Unique  service Identifier. Identifies the service this product belongs to.
     *
     * @return $this
     */
    public function setServiceid($serviceid)
    {
        $this->container['serviceid'] = $serviceid;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string $merchant Unique  merchant code of associated merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

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
     * @param string $payItemId Unique  Payment Item ID identifying the product to be purchased
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
     * Gets amountType
     *
     * @return string
     */
    public function getAmountType()
    {
        return $this->container['amountType'];
    }

    /**
     * Sets amountType
     *
     * @param string $amountType 'Supported amount type for the payment of this product:' '\"FIXED\" -> Product needs to be paid in full by the amount provided in “amount”' '\"CUSTOM\" -> Amount must be freely entered'
     *
     * @return $this
     */
    public function setAmountType($amountType)
    {
        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!in_array($amountType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'amountType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['amountType'] = $amountType;

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
     * @param string $name Customer friendly name for product to used for presentation
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amountLocalCur
     *
     * @return float
     */
    public function getAmountLocalCur()
    {
        return $this->container['amountLocalCur'];
    }

    /**
     * Sets amountLocalCur
     *
     * @param float $amountLocalCur Cost of product in local currency – only set for FIXED amounts.
     *
     * @return $this
     */
    public function setAmountLocalCur($amountLocalCur)
    {
        $this->container['amountLocalCur'] = $amountLocalCur;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Optional description of product
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets optStrg
     *
     * @return string
     */
    public function getOptStrg()
    {
        return $this->container['optStrg'];
    }

    /**
     * Sets optStrg
     *
     * @param string $optStrg Optional string field
     *
     * @return $this
     */
    public function setOptStrg($optStrg)
    {
        $this->container['optStrg'] = $optStrg;

        return $this;
    }

    /**
     * Gets optNmb
     *
     * @return float
     */
    public function getOptNmb()
    {
        return $this->container['optNmb'];
    }

    /**
     * Sets optNmb
     *
     * @param float $optNmb Optional number field
     *
     * @return $this
     */
    public function setOptNmb($optNmb)
    {
        $this->container['optNmb'] = $optNmb;

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

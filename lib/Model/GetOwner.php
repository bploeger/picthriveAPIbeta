<?php
/**
 * GetOwner
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PicThrive Internal API
 *
 * Detailed docs about our API, including hidden fields not publicly displayed.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GetOwner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetOwner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOwner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'created' => 'int',
        'stripe_sub_status' => 'string',
        'current_period_end' => 'int',
        'card_details' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'email' => 'string',
        'primary_brand' => 'string',
        'timezone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'created' => 'seconds',
        'stripe_sub_status' => null,
        'current_period_end' => 'seconds',
        'card_details' => null,
        'last_name' => null,
        'first_name' => null,
        'email' => null,
        'primary_brand' => null,
        'timezone' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'owner_id' => 'OwnerId',
        'created' => 'Created',
        'stripe_sub_status' => 'StripeSubStatus',
        'current_period_end' => 'CurrentPeriodEnd',
        'card_details' => 'CardDetails',
        'last_name' => 'LastName',
        'first_name' => 'FirstName',
        'email' => 'Email',
        'primary_brand' => 'PrimaryBrand',
        'timezone' => 'Timezone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'created' => 'setCreated',
        'stripe_sub_status' => 'setStripeSubStatus',
        'current_period_end' => 'setCurrentPeriodEnd',
        'card_details' => 'setCardDetails',
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'email' => 'setEmail',
        'primary_brand' => 'setPrimaryBrand',
        'timezone' => 'setTimezone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'created' => 'getCreated',
        'stripe_sub_status' => 'getStripeSubStatus',
        'current_period_end' => 'getCurrentPeriodEnd',
        'card_details' => 'getCardDetails',
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'email' => 'getEmail',
        'primary_brand' => 'getPrimaryBrand',
        'timezone' => 'getTimezone'
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
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['stripe_sub_status'] = isset($data['stripe_sub_status']) ? $data['stripe_sub_status'] : null;
        $this->container['current_period_end'] = isset($data['current_period_end']) ? $data['current_period_end'] : null;
        $this->container['card_details'] = isset($data['card_details']) ? $data['card_details'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['primary_brand'] = isset($data['primary_brand']) ? $data['primary_brand'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id The Root identifier for your account.
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created The unix time this account was created at.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets stripe_sub_status
     *
     * @return string|null
     */
    public function getStripeSubStatus()
    {
        return $this->container['stripe_sub_status'];
    }

    /**
     * Sets stripe_sub_status
     *
     * @param string|null $stripe_sub_status Your account status. Eg. active, canceled.
     *
     * @return $this
     */
    public function setStripeSubStatus($stripe_sub_status)
    {
        $this->container['stripe_sub_status'] = $stripe_sub_status;

        return $this;
    }

    /**
     * Gets current_period_end
     *
     * @return int|null
     */
    public function getCurrentPeriodEnd()
    {
        return $this->container['current_period_end'];
    }

    /**
     * Sets current_period_end
     *
     * @param int|null $current_period_end The end of your next \"Billing\" cycle.
     *
     * @return $this
     */
    public function setCurrentPeriodEnd($current_period_end)
    {
        $this->container['current_period_end'] = $current_period_end;

        return $this;
    }

    /**
     * Gets card_details
     *
     * @return string|null
     */
    public function getCardDetails()
    {
        return $this->container['card_details'];
    }

    /**
     * Sets card_details
     *
     * @param string|null $card_details Basic details about your card on file.
     *
     * @return $this
     */
    public function setCardDetails($card_details)
    {
        $this->container['card_details'] = $card_details;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The name last of the root customer.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name last of the root customer.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
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
     * @param string|null $email The email of the root customer. Also where invoices will be sent to.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets primary_brand
     *
     * @return string|null
     */
    public function getPrimaryBrand()
    {
        return $this->container['primary_brand'];
    }

    /**
     * Sets primary_brand
     *
     * @param string|null $primary_brand The \"Primary\" Store/Brand to use. Eg, when creating a new Group and no BrandId is specified.
     *
     * @return $this
     */
    public function setPrimaryBrand($primary_brand)
    {
        $this->container['primary_brand'] = $primary_brand;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The Timezone of this account.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}


<?php
/**
 * AddPhotosToGroupResponseAddedPhotos
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
 * AddPhotosToGroupResponseAddedPhotos Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddPhotosToGroupResponseAddedPhotos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddPhotosToGroupResponse_AddedPhotos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'photo_id' => 'string',
        'upload_url' => 'string',
        'expires' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'photo_id' => null,
        'upload_url' => null,
        'expires' => 'int32'
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
        'photo_id' => 'PhotoId',
        'upload_url' => 'UploadUrl',
        'expires' => 'Expires'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'photo_id' => 'setPhotoId',
        'upload_url' => 'setUploadUrl',
        'expires' => 'setExpires'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'photo_id' => 'getPhotoId',
        'upload_url' => 'getUploadUrl',
        'expires' => 'getExpires'
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
        $this->container['photo_id'] = isset($data['photo_id']) ? $data['photo_id'] : null;
        $this->container['upload_url'] = isset($data['upload_url']) ? $data['upload_url'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets photo_id
     *
     * @return string|null
     */
    public function getPhotoId()
    {
        return $this->container['photo_id'];
    }

    /**
     * Sets photo_id
     *
     * @param string|null $photo_id The UUID of the newly created Photo.
     *
     * @return $this
     */
    public function setPhotoId($photo_id)
    {
        $this->container['photo_id'] = $photo_id;

        return $this;
    }

    /**
     * Gets upload_url
     *
     * @return string|null
     */
    public function getUploadUrl()
    {
        return $this->container['upload_url'];
    }

    /**
     * Sets upload_url
     *
     * @param string|null $upload_url The URL to upload the photo to. See S3 uploading docs.
     *
     * @return $this
     */
    public function setUploadUrl($upload_url)
    {
        $this->container['upload_url'] = $upload_url;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return int|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param int|null $expires the time the upload link will expire at.
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

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



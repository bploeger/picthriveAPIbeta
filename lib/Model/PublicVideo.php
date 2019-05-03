<?php
/**
 * PublicVideo
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
 * PublicVideo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PublicVideo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicVideo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'group_id' => 'string',
        'video_id' => 'string',
        'created' => 'int',
        'sort_order' => 'string',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'string',
        'resolution_name' => 'string',
        'static_watermark_small' => 'string',
        'static_watermark_medium' => 'string',
        'watermark_small' => 'string',
        'watermark_medium' => 'string',
        'watermark_small_gif' => 'string',
        'watermark_medium_gif' => 'string',
        'is360' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'group_id' => null,
        'video_id' => null,
        'created' => 'int32',
        'sort_order' => null,
        'width' => 'int32',
        'height' => 'int32',
        'duration' => null,
        'resolution_name' => null,
        'static_watermark_small' => null,
        'static_watermark_medium' => null,
        'watermark_small' => null,
        'watermark_medium' => null,
        'watermark_small_gif' => null,
        'watermark_medium_gif' => null,
        'is360' => null
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
        'group_id' => 'GroupId',
        'video_id' => 'VideoId',
        'created' => 'Created',
        'sort_order' => 'SortOrder',
        'width' => 'Width',
        'height' => 'Height',
        'duration' => 'Duration',
        'resolution_name' => 'ResolutionName',
        'static_watermark_small' => 'StaticWatermarkSmall',
        'static_watermark_medium' => 'StaticWatermarkMedium',
        'watermark_small' => 'WatermarkSmall',
        'watermark_medium' => 'WatermarkMedium',
        'watermark_small_gif' => 'WatermarkSmallGif',
        'watermark_medium_gif' => 'WatermarkMediumGif',
        'is360' => 'Is360'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'group_id' => 'setGroupId',
        'video_id' => 'setVideoId',
        'created' => 'setCreated',
        'sort_order' => 'setSortOrder',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'duration' => 'setDuration',
        'resolution_name' => 'setResolutionName',
        'static_watermark_small' => 'setStaticWatermarkSmall',
        'static_watermark_medium' => 'setStaticWatermarkMedium',
        'watermark_small' => 'setWatermarkSmall',
        'watermark_medium' => 'setWatermarkMedium',
        'watermark_small_gif' => 'setWatermarkSmallGif',
        'watermark_medium_gif' => 'setWatermarkMediumGif',
        'is360' => 'setIs360'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'group_id' => 'getGroupId',
        'video_id' => 'getVideoId',
        'created' => 'getCreated',
        'sort_order' => 'getSortOrder',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'duration' => 'getDuration',
        'resolution_name' => 'getResolutionName',
        'static_watermark_small' => 'getStaticWatermarkSmall',
        'static_watermark_medium' => 'getStaticWatermarkMedium',
        'watermark_small' => 'getWatermarkSmall',
        'watermark_medium' => 'getWatermarkMedium',
        'watermark_small_gif' => 'getWatermarkSmallGif',
        'watermark_medium_gif' => 'getWatermarkMediumGif',
        'is360' => 'getIs360'
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
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['resolution_name'] = isset($data['resolution_name']) ? $data['resolution_name'] : null;
        $this->container['static_watermark_small'] = isset($data['static_watermark_small']) ? $data['static_watermark_small'] : null;
        $this->container['static_watermark_medium'] = isset($data['static_watermark_medium']) ? $data['static_watermark_medium'] : null;
        $this->container['watermark_small'] = isset($data['watermark_small']) ? $data['watermark_small'] : null;
        $this->container['watermark_medium'] = isset($data['watermark_medium']) ? $data['watermark_medium'] : null;
        $this->container['watermark_small_gif'] = isset($data['watermark_small_gif']) ? $data['watermark_small_gif'] : null;
        $this->container['watermark_medium_gif'] = isset($data['watermark_medium_gif']) ? $data['watermark_medium_gif'] : null;
        $this->container['is360'] = isset($data['is360']) ? $data['is360'] : null;
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
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['video_id'] === null) {
            $invalidProperties[] = "'video_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['sort_order'] === null) {
            $invalidProperties[] = "'sort_order' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
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
     * @param string $owner_id The UUID of the owning account.
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id The UUID of the group this photo is in.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets video_id
     *
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     *
     * @param string $video_id The UUID of the video
     *
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

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
     * @param int $created The unix timestamp this video was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param string $sort_order The original filename of the video.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width The Width of the original video
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height The Height of the original video
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration A string describing the duration of the video. Extract from video metadata data.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets resolution_name
     *
     * @return string|null
     */
    public function getResolutionName()
    {
        return $this->container['resolution_name'];
    }

    /**
     * Sets resolution_name
     *
     * @param string|null $resolution_name A human readable name for this video.
     *
     * @return $this
     */
    public function setResolutionName($resolution_name)
    {
        $this->container['resolution_name'] = $resolution_name;

        return $this;
    }

    /**
     * Gets static_watermark_small
     *
     * @return string|null
     */
    public function getStaticWatermarkSmall()
    {
        return $this->container['static_watermark_small'];
    }

    /**
     * Sets static_watermark_small
     *
     * @param string|null $static_watermark_small An image thumbnail of the video. Contains a watermark.
     *
     * @return $this
     */
    public function setStaticWatermarkSmall($static_watermark_small)
    {
        $this->container['static_watermark_small'] = $static_watermark_small;

        return $this;
    }

    /**
     * Gets static_watermark_medium
     *
     * @return string|null
     */
    public function getStaticWatermarkMedium()
    {
        return $this->container['static_watermark_medium'];
    }

    /**
     * Sets static_watermark_medium
     *
     * @param string|null $static_watermark_medium An image thumbnail (Medium Sized) of the video. Contains a watermark.
     *
     * @return $this
     */
    public function setStaticWatermarkMedium($static_watermark_medium)
    {
        $this->container['static_watermark_medium'] = $static_watermark_medium;

        return $this;
    }

    /**
     * Gets watermark_small
     *
     * @return string|null
     */
    public function getWatermarkSmall()
    {
        return $this->container['watermark_small'];
    }

    /**
     * Sets watermark_small
     *
     * @param string|null $watermark_small An MP4 watermarked preview of the video. Thumbnail sized. Preferabbly use this instead of a GIF.
     *
     * @return $this
     */
    public function setWatermarkSmall($watermark_small)
    {
        $this->container['watermark_small'] = $watermark_small;

        return $this;
    }

    /**
     * Gets watermark_medium
     *
     * @return string|null
     */
    public function getWatermarkMedium()
    {
        return $this->container['watermark_medium'];
    }

    /**
     * Sets watermark_medium
     *
     * @param string|null $watermark_medium An MP4 watermarked preview of the video. Medium sized. Preferabbly use this instead of a GIF.
     *
     * @return $this
     */
    public function setWatermarkMedium($watermark_medium)
    {
        $this->container['watermark_medium'] = $watermark_medium;

        return $this;
    }

    /**
     * Gets watermark_small_gif
     *
     * @return string|null
     */
    public function getWatermarkSmallGif()
    {
        return $this->container['watermark_small_gif'];
    }

    /**
     * Sets watermark_small_gif
     *
     * @param string|null $watermark_small_gif An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4.
     *
     * @return $this
     */
    public function setWatermarkSmallGif($watermark_small_gif)
    {
        $this->container['watermark_small_gif'] = $watermark_small_gif;

        return $this;
    }

    /**
     * Gets watermark_medium_gif
     *
     * @return string|null
     */
    public function getWatermarkMediumGif()
    {
        return $this->container['watermark_medium_gif'];
    }

    /**
     * Sets watermark_medium_gif
     *
     * @param string|null $watermark_medium_gif An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4.
     *
     * @return $this
     */
    public function setWatermarkMediumGif($watermark_medium_gif)
    {
        $this->container['watermark_medium_gif'] = $watermark_medium_gif;

        return $this;
    }

    /**
     * Gets is360
     *
     * @return bool|null
     */
    public function getIs360()
    {
        return $this->container['is360'];
    }

    /**
     * Sets is360
     *
     * @param bool|null $is360 Is this Video a 360 Video
     *
     * @return $this
     */
    public function setIs360($is360)
    {
        $this->container['is360'] = $is360;

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



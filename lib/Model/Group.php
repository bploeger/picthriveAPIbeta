<?php
/**
 * Group
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
 * Group Class Doc Comment
 *
 * @category Class
 * @description A Group.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Group implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'brand_id' => 'string',
        'group_id' => 'string',
        'name' => 'string',
        'token' => 'string',
        'count' => 'int',
        'video_count' => 'int',
        'thumb' => 'string',
        'thumb_region' => '\OpenAPI\Client\Model\Region',
        'thumb1' => 'string',
        'thumb1_region' => '\OpenAPI\Client\Model\Region',
        'thumb2' => 'string',
        'thumb2_region' => '\OpenAPI\Client\Model\Region',
        'when_unix' => 'int',
        'deleted' => 'bool',
        'last_updated_unix' => 'int',
        'created_by' => 'string',
        'hide_from_store' => 'bool',
        'pricing_id' => 'string',
        'formatted_time' => 'string',
        'time_of_tour' => 'int',
        'interaction_count' => 'int',
        'uploading_unix' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'brand_id' => null,
        'group_id' => null,
        'name' => null,
        'token' => null,
        'count' => 'int32',
        'video_count' => 'int32',
        'thumb' => null,
        'thumb_region' => null,
        'thumb1' => null,
        'thumb1_region' => null,
        'thumb2' => null,
        'thumb2_region' => null,
        'when_unix' => 'int32',
        'deleted' => null,
        'last_updated_unix' => 'int32',
        'created_by' => null,
        'hide_from_store' => null,
        'pricing_id' => null,
        'formatted_time' => null,
        'time_of_tour' => 'int32',
        'interaction_count' => 'int32',
        'uploading_unix' => 'int32'
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
        'brand_id' => 'BrandId',
        'group_id' => 'GroupId',
        'name' => 'Name',
        'token' => 'Token',
        'count' => 'Count',
        'video_count' => 'VideoCount',
        'thumb' => 'Thumb',
        'thumb_region' => 'ThumbRegion',
        'thumb1' => 'Thumb1',
        'thumb1_region' => 'Thumb1Region',
        'thumb2' => 'Thumb2',
        'thumb2_region' => 'Thumb2Region',
        'when_unix' => 'WhenUnix',
        'deleted' => 'Deleted',
        'last_updated_unix' => 'LastUpdatedUnix',
        'created_by' => 'CreatedBy',
        'hide_from_store' => 'HideFromStore',
        'pricing_id' => 'PricingId',
        'formatted_time' => 'FormattedTime',
        'time_of_tour' => 'TimeOfTour',
        'interaction_count' => 'InteractionCount',
        'uploading_unix' => 'UploadingUnix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'brand_id' => 'setBrandId',
        'group_id' => 'setGroupId',
        'name' => 'setName',
        'token' => 'setToken',
        'count' => 'setCount',
        'video_count' => 'setVideoCount',
        'thumb' => 'setThumb',
        'thumb_region' => 'setThumbRegion',
        'thumb1' => 'setThumb1',
        'thumb1_region' => 'setThumb1Region',
        'thumb2' => 'setThumb2',
        'thumb2_region' => 'setThumb2Region',
        'when_unix' => 'setWhenUnix',
        'deleted' => 'setDeleted',
        'last_updated_unix' => 'setLastUpdatedUnix',
        'created_by' => 'setCreatedBy',
        'hide_from_store' => 'setHideFromStore',
        'pricing_id' => 'setPricingId',
        'formatted_time' => 'setFormattedTime',
        'time_of_tour' => 'setTimeOfTour',
        'interaction_count' => 'setInteractionCount',
        'uploading_unix' => 'setUploadingUnix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'brand_id' => 'getBrandId',
        'group_id' => 'getGroupId',
        'name' => 'getName',
        'token' => 'getToken',
        'count' => 'getCount',
        'video_count' => 'getVideoCount',
        'thumb' => 'getThumb',
        'thumb_region' => 'getThumbRegion',
        'thumb1' => 'getThumb1',
        'thumb1_region' => 'getThumb1Region',
        'thumb2' => 'getThumb2',
        'thumb2_region' => 'getThumb2Region',
        'when_unix' => 'getWhenUnix',
        'deleted' => 'getDeleted',
        'last_updated_unix' => 'getLastUpdatedUnix',
        'created_by' => 'getCreatedBy',
        'hide_from_store' => 'getHideFromStore',
        'pricing_id' => 'getPricingId',
        'formatted_time' => 'getFormattedTime',
        'time_of_tour' => 'getTimeOfTour',
        'interaction_count' => 'getInteractionCount',
        'uploading_unix' => 'getUploadingUnix'
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
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['video_count'] = isset($data['video_count']) ? $data['video_count'] : null;
        $this->container['thumb'] = isset($data['thumb']) ? $data['thumb'] : null;
        $this->container['thumb_region'] = isset($data['thumb_region']) ? $data['thumb_region'] : null;
        $this->container['thumb1'] = isset($data['thumb1']) ? $data['thumb1'] : null;
        $this->container['thumb1_region'] = isset($data['thumb1_region']) ? $data['thumb1_region'] : null;
        $this->container['thumb2'] = isset($data['thumb2']) ? $data['thumb2'] : null;
        $this->container['thumb2_region'] = isset($data['thumb2_region']) ? $data['thumb2_region'] : null;
        $this->container['when_unix'] = isset($data['when_unix']) ? $data['when_unix'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['last_updated_unix'] = isset($data['last_updated_unix']) ? $data['last_updated_unix'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['hide_from_store'] = isset($data['hide_from_store']) ? $data['hide_from_store'] : null;
        $this->container['pricing_id'] = isset($data['pricing_id']) ? $data['pricing_id'] : null;
        $this->container['formatted_time'] = isset($data['formatted_time']) ? $data['formatted_time'] : null;
        $this->container['time_of_tour'] = isset($data['time_of_tour']) ? $data['time_of_tour'] : null;
        $this->container['interaction_count'] = isset($data['interaction_count']) ? $data['interaction_count'] : null;
        $this->container['uploading_unix'] = isset($data['uploading_unix']) ? $data['uploading_unix'] : null;
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
        if ($this->container['brand_id'] === null) {
            $invalidProperties[] = "'brand_id' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['video_count'] === null) {
            $invalidProperties[] = "'video_count' can't be null";
        }
        if ($this->container['when_unix'] === null) {
            $invalidProperties[] = "'when_unix' can't be null";
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
     * Gets brand_id
     *
     * @return string
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string $brand_id The UUID of the brand this album is for.
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

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
     * @param string $group_id The UUID of the Group
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the album
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token A unique short code for this album.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The number of photos in this album
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets video_count
     *
     * @return int
     */
    public function getVideoCount()
    {
        return $this->container['video_count'];
    }

    /**
     * Sets video_count
     *
     * @param int $video_count The number of videos in this album
     *
     * @return $this
     */
    public function setVideoCount($video_count)
    {
        $this->container['video_count'] = $video_count;

        return $this;
    }

    /**
     * Gets thumb
     *
     * @return string|null
     */
    public function getThumb()
    {
        return $this->container['thumb'];
    }

    /**
     * Sets thumb
     *
     * @param string|null $thumb A preview thumbnail for this album.
     *
     * @return $this
     */
    public function setThumb($thumb)
    {
        $this->container['thumb'] = $thumb;

        return $this;
    }

    /**
     * Gets thumb_region
     *
     * @return \OpenAPI\Client\Model\Region|null
     */
    public function getThumbRegion()
    {
        return $this->container['thumb_region'];
    }

    /**
     * Sets thumb_region
     *
     * @param \OpenAPI\Client\Model\Region|null $thumb_region thumb_region
     *
     * @return $this
     */
    public function setThumbRegion($thumb_region)
    {
        $this->container['thumb_region'] = $thumb_region;

        return $this;
    }

    /**
     * Gets thumb1
     *
     * @return string|null
     */
    public function getThumb1()
    {
        return $this->container['thumb1'];
    }

    /**
     * Sets thumb1
     *
     * @param string|null $thumb1 A second preview thumbnail for this album.
     *
     * @return $this
     */
    public function setThumb1($thumb1)
    {
        $this->container['thumb1'] = $thumb1;

        return $this;
    }

    /**
     * Gets thumb1_region
     *
     * @return \OpenAPI\Client\Model\Region|null
     */
    public function getThumb1Region()
    {
        return $this->container['thumb1_region'];
    }

    /**
     * Sets thumb1_region
     *
     * @param \OpenAPI\Client\Model\Region|null $thumb1_region thumb1_region
     *
     * @return $this
     */
    public function setThumb1Region($thumb1_region)
    {
        $this->container['thumb1_region'] = $thumb1_region;

        return $this;
    }

    /**
     * Gets thumb2
     *
     * @return string|null
     */
    public function getThumb2()
    {
        return $this->container['thumb2'];
    }

    /**
     * Sets thumb2
     *
     * @param string|null $thumb2 A third preview thumbnail for this album.
     *
     * @return $this
     */
    public function setThumb2($thumb2)
    {
        $this->container['thumb2'] = $thumb2;

        return $this;
    }

    /**
     * Gets thumb2_region
     *
     * @return \OpenAPI\Client\Model\Region|null
     */
    public function getThumb2Region()
    {
        return $this->container['thumb2_region'];
    }

    /**
     * Sets thumb2_region
     *
     * @param \OpenAPI\Client\Model\Region|null $thumb2_region thumb2_region
     *
     * @return $this
     */
    public function setThumb2Region($thumb2_region)
    {
        $this->container['thumb2_region'] = $thumb2_region;

        return $this;
    }

    /**
     * Gets when_unix
     *
     * @return int
     */
    public function getWhenUnix()
    {
        return $this->container['when_unix'];
    }

    /**
     * Sets when_unix
     *
     * @param int $when_unix The time this album exists in.
     *
     * @return $this
     */
    public function setWhenUnix($when_unix)
    {
        $this->container['when_unix'] = $when_unix;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted If this album has been deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets last_updated_unix
     *
     * @return int|null
     */
    public function getLastUpdatedUnix()
    {
        return $this->container['last_updated_unix'];
    }

    /**
     * Sets last_updated_unix
     *
     * @param int|null $last_updated_unix The last time this album was modified
     *
     * @return $this
     */
    public function setLastUpdatedUnix($last_updated_unix)
    {
        $this->container['last_updated_unix'] = $last_updated_unix;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by A description of which app created this album
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets hide_from_store
     *
     * @return bool|null
     */
    public function getHideFromStore()
    {
        return $this->container['hide_from_store'];
    }

    /**
     * Sets hide_from_store
     *
     * @param bool|null $hide_from_store If this album should be hidden from the online store.
     *
     * @return $this
     */
    public function setHideFromStore($hide_from_store)
    {
        $this->container['hide_from_store'] = $hide_from_store;

        return $this;
    }

    /**
     * Gets pricing_id
     *
     * @return string|null
     */
    public function getPricingId()
    {
        return $this->container['pricing_id'];
    }

    /**
     * Sets pricing_id
     *
     * @param string|null $pricing_id If present, which Special override pricing this album has.
     *
     * @return $this
     */
    public function setPricingId($pricing_id)
    {
        $this->container['pricing_id'] = $pricing_id;

        return $this;
    }

    /**
     * Gets formatted_time
     *
     * @return string|null
     */
    public function getFormattedTime()
    {
        return $this->container['formatted_time'];
    }

    /**
     * Sets formatted_time
     *
     * @param string|null $formatted_time A formated version of the time we thing this album was at. It gets generated by examining the album name.
     *
     * @return $this
     */
    public function setFormattedTime($formatted_time)
    {
        $this->container['formatted_time'] = $formatted_time;

        return $this;
    }

    /**
     * Gets time_of_tour
     *
     * @return int|null
     */
    public function getTimeOfTour()
    {
        return $this->container['time_of_tour'];
    }

    /**
     * Sets time_of_tour
     *
     * @param int|null $time_of_tour The time we we think this album is at. This gets generated by examining the album name.
     *
     * @return $this
     */
    public function setTimeOfTour($time_of_tour)
    {
        $this->container['time_of_tour'] = $time_of_tour;

        return $this;
    }

    /**
     * Gets interaction_count
     *
     * @return int|null
     */
    public function getInteractionCount()
    {
        return $this->container['interaction_count'];
    }

    /**
     * Sets interaction_count
     *
     * @param int|null $interaction_count The number of Emails and Orders made from this album.
     *
     * @return $this
     */
    public function setInteractionCount($interaction_count)
    {
        $this->container['interaction_count'] = $interaction_count;

        return $this;
    }

    /**
     * Gets uploading_unix
     *
     * @return int|null
     */
    public function getUploadingUnix()
    {
        return $this->container['uploading_unix'];
    }

    /**
     * Sets uploading_unix
     *
     * @param int|null $uploading_unix The last time we know we uploaded to this album at. Reported by the client and a set interval.
     *
     * @return $this
     */
    public function setUploadingUnix($uploading_unix)
    {
        $this->container['uploading_unix'] = $uploading_unix;

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


<?php
/**
 * Photo
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
 * Photo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Photo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Photo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'group_id' => 'string',
        'photo_id' => 'string',
        'created' => 'int',
        'medium' => 'string',
        'original' => 'string',
        'region' => 'string',
        'small' => 'string',
        'watermark' => 'string',
        'watermark_small' => 'string',
        'deleted' => 'bool',
        'sort_order' => 'string',
        'ratio' => 'float',
        'last_updated_unix' => 'int',
        'width' => 'int',
        'height' => 'int',
        'megapixels' => 'float',
        'hue' => 'string',
        'watermark_square' => 'string',
        'square' => 'string',
        'is_souvenir' => 'bool',
        'download_link' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'group_id' => null,
        'photo_id' => null,
        'created' => 'int32',
        'medium' => null,
        'original' => null,
        'region' => null,
        'small' => null,
        'watermark' => null,
        'watermark_small' => null,
        'deleted' => null,
        'sort_order' => null,
        'ratio' => null,
        'last_updated_unix' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'megapixels' => null,
        'hue' => null,
        'watermark_square' => null,
        'square' => null,
        'is_souvenir' => null,
        'download_link' => null
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
        'photo_id' => 'PhotoId',
        'created' => 'Created',
        'medium' => 'Medium',
        'original' => 'Original',
        'region' => 'Region',
        'small' => 'Small',
        'watermark' => 'Watermark',
        'watermark_small' => 'WatermarkSmall',
        'deleted' => 'Deleted',
        'sort_order' => 'SortOrder',
        'ratio' => 'Ratio',
        'last_updated_unix' => 'LastUpdatedUnix',
        'width' => 'Width',
        'height' => 'Height',
        'megapixels' => 'Megapixels',
        'hue' => 'Hue',
        'watermark_square' => 'WatermarkSquare',
        'square' => 'Square',
        'is_souvenir' => 'IsSouvenir',
        'download_link' => 'DownloadLink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'group_id' => 'setGroupId',
        'photo_id' => 'setPhotoId',
        'created' => 'setCreated',
        'medium' => 'setMedium',
        'original' => 'setOriginal',
        'region' => 'setRegion',
        'small' => 'setSmall',
        'watermark' => 'setWatermark',
        'watermark_small' => 'setWatermarkSmall',
        'deleted' => 'setDeleted',
        'sort_order' => 'setSortOrder',
        'ratio' => 'setRatio',
        'last_updated_unix' => 'setLastUpdatedUnix',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'megapixels' => 'setMegapixels',
        'hue' => 'setHue',
        'watermark_square' => 'setWatermarkSquare',
        'square' => 'setSquare',
        'is_souvenir' => 'setIsSouvenir',
        'download_link' => 'setDownloadLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'group_id' => 'getGroupId',
        'photo_id' => 'getPhotoId',
        'created' => 'getCreated',
        'medium' => 'getMedium',
        'original' => 'getOriginal',
        'region' => 'getRegion',
        'small' => 'getSmall',
        'watermark' => 'getWatermark',
        'watermark_small' => 'getWatermarkSmall',
        'deleted' => 'getDeleted',
        'sort_order' => 'getSortOrder',
        'ratio' => 'getRatio',
        'last_updated_unix' => 'getLastUpdatedUnix',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'megapixels' => 'getMegapixels',
        'hue' => 'getHue',
        'watermark_square' => 'getWatermarkSquare',
        'square' => 'getSquare',
        'is_souvenir' => 'getIsSouvenir',
        'download_link' => 'getDownloadLink'
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

    const REGION_DYN = 'picthrive-dyn';
    const REGION_DYN_DYNAMIC = 'picthrive-dyn-dynamic';
    const REGION_DYN_VIRGINIA = 'picthrive-dyn-virginia';
    const REGION_DYN_IRELAND = 'picthrive-dyn-ireland';
    const REGION_DYN_SYDNEY = 'picthrive-dyn-sydney';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_DYN,
            self::REGION_DYN_DYNAMIC,
            self::REGION_DYN_VIRGINIA,
            self::REGION_DYN_IRELAND,
            self::REGION_DYN_SYDNEY,
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
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['photo_id'] = isset($data['photo_id']) ? $data['photo_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['small'] = isset($data['small']) ? $data['small'] : null;
        $this->container['watermark'] = isset($data['watermark']) ? $data['watermark'] : null;
        $this->container['watermark_small'] = isset($data['watermark_small']) ? $data['watermark_small'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
        $this->container['last_updated_unix'] = isset($data['last_updated_unix']) ? $data['last_updated_unix'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['megapixels'] = isset($data['megapixels']) ? $data['megapixels'] : null;
        $this->container['hue'] = isset($data['hue']) ? $data['hue'] : null;
        $this->container['watermark_square'] = isset($data['watermark_square']) ? $data['watermark_square'] : null;
        $this->container['square'] = isset($data['square']) ? $data['square'] : null;
        $this->container['is_souvenir'] = isset($data['is_souvenir']) ? $data['is_souvenir'] : null;
        $this->container['download_link'] = isset($data['download_link']) ? $data['download_link'] : null;
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
        if ($this->container['photo_id'] === null) {
            $invalidProperties[] = "'photo_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'region', must be one of '%s'",
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
     * Gets photo_id
     *
     * @return string
     */
    public function getPhotoId()
    {
        return $this->container['photo_id'];
    }

    /**
     * Sets photo_id
     *
     * @param string $photo_id The UUID of the photo.
     *
     * @return $this
     */
    public function setPhotoId($photo_id)
    {
        $this->container['photo_id'] = $photo_id;

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
     * @param int $created The unix timestamp this photo was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return string|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string|null $medium Path to the Medium sized this photo
     *
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets original
     *
     * @return string|null
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string|null $original Path to the Original for this photo
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The S3 region this content is from
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets small
     *
     * @return string|null
     */
    public function getSmall()
    {
        return $this->container['small'];
    }

    /**
     * Sets small
     *
     * @param string|null $small Path to the Thumbnail of this photo
     *
     * @return $this
     */
    public function setSmall($small)
    {
        $this->container['small'] = $small;

        return $this;
    }

    /**
     * Gets watermark
     *
     * @return string|null
     */
    public function getWatermark()
    {
        return $this->container['watermark'];
    }

    /**
     * Sets watermark
     *
     * @param string|null $watermark Path to Medium sized Watermark photo.
     *
     * @return $this
     */
    public function setWatermark($watermark)
    {
        $this->container['watermark'] = $watermark;

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
     * @param string|null $watermark_small Path to Thumbnail sized Watermark photo.
     *
     * @return $this
     */
    public function setWatermarkSmall($watermark_small)
    {
        $this->container['watermark_small'] = $watermark_small;

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
     * @param bool|null $deleted If this photo has been deleted or not.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param string|null $sort_order The original filename of the photo.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets ratio
     *
     * @return float|null
     */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
     * Sets ratio
     *
     * @param float|null $ratio The w / h  ratio of the photo
     *
     * @return $this
     */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;

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
     * @param int|null $last_updated_unix The last time this photo was updated
     *
     * @return $this
     */
    public function setLastUpdatedUnix($last_updated_unix)
    {
        $this->container['last_updated_unix'] = $last_updated_unix;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width The width of the original photo.
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
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height The height of the original photo.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets megapixels
     *
     * @return float|null
     */
    public function getMegapixels()
    {
        return $this->container['megapixels'];
    }

    /**
     * Sets megapixels
     *
     * @param float|null $megapixels The estimated Megapixels of the photo.
     *
     * @return $this
     */
    public function setMegapixels($megapixels)
    {
        $this->container['megapixels'] = $megapixels;

        return $this;
    }

    /**
     * Gets hue
     *
     * @return string|null
     */
    public function getHue()
    {
        return $this->container['hue'];
    }

    /**
     * Sets hue
     *
     * @param string|null $hue The overall Hue of this photo. Used for displaying the background before loading the photo.
     *
     * @return $this
     */
    public function setHue($hue)
    {
        $this->container['hue'] = $hue;

        return $this;
    }

    /**
     * Gets watermark_square
     *
     * @return string|null
     */
    public function getWatermarkSquare()
    {
        return $this->container['watermark_square'];
    }

    /**
     * Sets watermark_square
     *
     * @param string|null $watermark_square Path to the Square cropped Watermark photo.
     *
     * @return $this
     */
    public function setWatermarkSquare($watermark_square)
    {
        $this->container['watermark_square'] = $watermark_square;

        return $this;
    }

    /**
     * Gets square
     *
     * @return string|null
     */
    public function getSquare()
    {
        return $this->container['square'];
    }

    /**
     * Sets square
     *
     * @param string|null $square Path to the Square cropped photo.
     *
     * @return $this
     */
    public function setSquare($square)
    {
        $this->container['square'] = $square;

        return $this;
    }

    /**
     * Gets is_souvenir
     *
     * @return bool|null
     */
    public function getIsSouvenir()
    {
        return $this->container['is_souvenir'];
    }

    /**
     * Sets is_souvenir
     *
     * @param bool|null $is_souvenir If this is a Souvenir copied photo
     *
     * @return $this
     */
    public function setIsSouvenir($is_souvenir)
    {
        $this->container['is_souvenir'] = $is_souvenir;

        return $this;
    }

    /**
     * Gets download_link
     *
     * @return string|null
     */
    public function getDownloadLink()
    {
        return $this->container['download_link'];
    }

    /**
     * Sets download_link
     *
     * @param string|null $download_link A time limited download link for the original. This is a pre-signed url that forces the download header on S3.
     *
     * @return $this
     */
    public function setDownloadLink($download_link)
    {
        $this->container['download_link'] = $download_link;

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


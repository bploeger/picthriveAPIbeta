<?php
/**
 * Brand
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
 * Brand Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Brand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Brand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'brand_id' => 'string',
        'vanity_url' => 'string',
        'name' => 'string',
        'website' => 'string',
        'booking_link' => 'string',
        'description' => 'string',
        'social' => '\OpenAPI\Client\Model\BrandSocial',
        'review' => '\OpenAPI\Client\Model\BrandReview',
        'banner300' => 'string',
        'banner1280' => 'string',
        'logo100' => 'string',
        'logo150' => 'string',
        'logo300' => 'string',
        'google_analytics' => 'string',
        'pricing' => 'object',
        'default_pricing_id' => 'string',
        'campaign' => 'object',
        'ads' => 'object[]',
        'ads_updated' => 'int',
        'custom_gallery_domain' => 'string',
        'custom_store_prefix' => 'string',
        'google_remarketing_code' => 'string',
        'google_remarketing_label_code' => 'string',
        'facebook_remarketing_code' => 'string',
        'remarketing_updated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'brand_id' => null,
        'vanity_url' => '[a-z0-9_]',
        'name' => null,
        'website' => null,
        'booking_link' => null,
        'description' => null,
        'social' => null,
        'review' => null,
        'banner300' => null,
        'banner1280' => null,
        'logo100' => null,
        'logo150' => null,
        'logo300' => null,
        'google_analytics' => null,
        'pricing' => null,
        'default_pricing_id' => null,
        'campaign' => null,
        'ads' => null,
        'ads_updated' => 'int32',
        'custom_gallery_domain' => null,
        'custom_store_prefix' => null,
        'google_remarketing_code' => null,
        'google_remarketing_label_code' => null,
        'facebook_remarketing_code' => null,
        'remarketing_updated' => 'seconds'
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
        'vanity_url' => 'VanityUrl',
        'name' => 'Name',
        'website' => 'Website',
        'booking_link' => 'BookingLink',
        'description' => 'Description',
        'social' => 'Social',
        'review' => 'Review',
        'banner300' => 'Banner300',
        'banner1280' => 'Banner1280',
        'logo100' => 'Logo100',
        'logo150' => 'Logo150',
        'logo300' => 'Logo300',
        'google_analytics' => 'GoogleAnalytics',
        'pricing' => 'Pricing',
        'default_pricing_id' => 'DefaultPricingId',
        'campaign' => 'Campaign',
        'ads' => 'Ads',
        'ads_updated' => 'AdsUpdated',
        'custom_gallery_domain' => 'CustomGalleryDomain',
        'custom_store_prefix' => 'CustomStorePrefix',
        'google_remarketing_code' => 'GoogleRemarketingCode',
        'google_remarketing_label_code' => 'GoogleRemarketingLabelCode',
        'facebook_remarketing_code' => 'FacebookRemarketingCode',
        'remarketing_updated' => 'RemarketingUpdated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'brand_id' => 'setBrandId',
        'vanity_url' => 'setVanityUrl',
        'name' => 'setName',
        'website' => 'setWebsite',
        'booking_link' => 'setBookingLink',
        'description' => 'setDescription',
        'social' => 'setSocial',
        'review' => 'setReview',
        'banner300' => 'setBanner300',
        'banner1280' => 'setBanner1280',
        'logo100' => 'setLogo100',
        'logo150' => 'setLogo150',
        'logo300' => 'setLogo300',
        'google_analytics' => 'setGoogleAnalytics',
        'pricing' => 'setPricing',
        'default_pricing_id' => 'setDefaultPricingId',
        'campaign' => 'setCampaign',
        'ads' => 'setAds',
        'ads_updated' => 'setAdsUpdated',
        'custom_gallery_domain' => 'setCustomGalleryDomain',
        'custom_store_prefix' => 'setCustomStorePrefix',
        'google_remarketing_code' => 'setGoogleRemarketingCode',
        'google_remarketing_label_code' => 'setGoogleRemarketingLabelCode',
        'facebook_remarketing_code' => 'setFacebookRemarketingCode',
        'remarketing_updated' => 'setRemarketingUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'brand_id' => 'getBrandId',
        'vanity_url' => 'getVanityUrl',
        'name' => 'getName',
        'website' => 'getWebsite',
        'booking_link' => 'getBookingLink',
        'description' => 'getDescription',
        'social' => 'getSocial',
        'review' => 'getReview',
        'banner300' => 'getBanner300',
        'banner1280' => 'getBanner1280',
        'logo100' => 'getLogo100',
        'logo150' => 'getLogo150',
        'logo300' => 'getLogo300',
        'google_analytics' => 'getGoogleAnalytics',
        'pricing' => 'getPricing',
        'default_pricing_id' => 'getDefaultPricingId',
        'campaign' => 'getCampaign',
        'ads' => 'getAds',
        'ads_updated' => 'getAdsUpdated',
        'custom_gallery_domain' => 'getCustomGalleryDomain',
        'custom_store_prefix' => 'getCustomStorePrefix',
        'google_remarketing_code' => 'getGoogleRemarketingCode',
        'google_remarketing_label_code' => 'getGoogleRemarketingLabelCode',
        'facebook_remarketing_code' => 'getFacebookRemarketingCode',
        'remarketing_updated' => 'getRemarketingUpdated'
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
        $this->container['vanity_url'] = isset($data['vanity_url']) ? $data['vanity_url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['booking_link'] = isset($data['booking_link']) ? $data['booking_link'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['social'] = isset($data['social']) ? $data['social'] : null;
        $this->container['review'] = isset($data['review']) ? $data['review'] : null;
        $this->container['banner300'] = isset($data['banner300']) ? $data['banner300'] : null;
        $this->container['banner1280'] = isset($data['banner1280']) ? $data['banner1280'] : null;
        $this->container['logo100'] = isset($data['logo100']) ? $data['logo100'] : null;
        $this->container['logo150'] = isset($data['logo150']) ? $data['logo150'] : null;
        $this->container['logo300'] = isset($data['logo300']) ? $data['logo300'] : null;
        $this->container['google_analytics'] = isset($data['google_analytics']) ? $data['google_analytics'] : null;
        $this->container['pricing'] = isset($data['pricing']) ? $data['pricing'] : null;
        $this->container['default_pricing_id'] = isset($data['default_pricing_id']) ? $data['default_pricing_id'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['ads'] = isset($data['ads']) ? $data['ads'] : null;
        $this->container['ads_updated'] = isset($data['ads_updated']) ? $data['ads_updated'] : null;
        $this->container['custom_gallery_domain'] = isset($data['custom_gallery_domain']) ? $data['custom_gallery_domain'] : null;
        $this->container['custom_store_prefix'] = isset($data['custom_store_prefix']) ? $data['custom_store_prefix'] : null;
        $this->container['google_remarketing_code'] = isset($data['google_remarketing_code']) ? $data['google_remarketing_code'] : null;
        $this->container['google_remarketing_label_code'] = isset($data['google_remarketing_label_code']) ? $data['google_remarketing_label_code'] : null;
        $this->container['facebook_remarketing_code'] = isset($data['facebook_remarketing_code']) ? $data['facebook_remarketing_code'] : null;
        $this->container['remarketing_updated'] = isset($data['remarketing_updated']) ? $data['remarketing_updated'] : null;
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
        if ($this->container['vanity_url'] === null) {
            $invalidProperties[] = "'vanity_url' can't be null";
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
     * @param string $owner_id The UUID of the Owner account this Brand belongs to.
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
     * @param string $brand_id The UUID of this Brand/Store
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets vanity_url
     *
     * @return string
     */
    public function getVanityUrl()
    {
        return $this->container['vanity_url'];
    }

    /**
     * Sets vanity_url
     *
     * @param string $vanity_url A unique short prefix for this Brand. Used for display on the online store, and for other short prefix needs.
     *
     * @return $this
     */
    public function setVanityUrl($vanity_url)
    {
        $this->container['vanity_url'] = $vanity_url;

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
     * @param string|null $name The name of this Store
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website The website of your Tour. Used to direct guests to your website.
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets booking_link
     *
     * @return string|null
     */
    public function getBookingLink()
    {
        return $this->container['booking_link'];
    }

    /**
     * Sets booking_link
     *
     * @param string|null $booking_link booking_link
     *
     * @return $this
     */
    public function setBookingLink($booking_link)
    {
        $this->container['booking_link'] = $booking_link;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A brief description of your tour.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets social
     *
     * @return \OpenAPI\Client\Model\BrandSocial|null
     */
    public function getSocial()
    {
        return $this->container['social'];
    }

    /**
     * Sets social
     *
     * @param \OpenAPI\Client\Model\BrandSocial|null $social social
     *
     * @return $this
     */
    public function setSocial($social)
    {
        $this->container['social'] = $social;

        return $this;
    }

    /**
     * Gets review
     *
     * @return \OpenAPI\Client\Model\BrandReview|null
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     *
     * @param \OpenAPI\Client\Model\BrandReview|null $review review
     *
     * @return $this
     */
    public function setReview($review)
    {
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets banner300
     *
     * @return string|null
     */
    public function getBanner300()
    {
        return $this->container['banner300'];
    }

    /**
     * Sets banner300
     *
     * @param string|null $banner300 The path to a Banner image to display on the Online Store. Mobile optimized
     *
     * @return $this
     */
    public function setBanner300($banner300)
    {
        $this->container['banner300'] = $banner300;

        return $this;
    }

    /**
     * Gets banner1280
     *
     * @return string|null
     */
    public function getBanner1280()
    {
        return $this->container['banner1280'];
    }

    /**
     * Sets banner1280
     *
     * @param string|null $banner1280 The path to a Banner image to display on the Online Store. Desktop optimized.
     *
     * @return $this
     */
    public function setBanner1280($banner1280)
    {
        $this->container['banner1280'] = $banner1280;

        return $this;
    }

    /**
     * Gets logo100
     *
     * @return string|null
     */
    public function getLogo100()
    {
        return $this->container['logo100'];
    }

    /**
     * Sets logo100
     *
     * @param string|null $logo100 The path to your Logo. 100x100px.
     *
     * @return $this
     */
    public function setLogo100($logo100)
    {
        $this->container['logo100'] = $logo100;

        return $this;
    }

    /**
     * Gets logo150
     *
     * @return string|null
     */
    public function getLogo150()
    {
        return $this->container['logo150'];
    }

    /**
     * Sets logo150
     *
     * @param string|null $logo150 The path to your Logo. 150x150px.
     *
     * @return $this
     */
    public function setLogo150($logo150)
    {
        $this->container['logo150'] = $logo150;

        return $this;
    }

    /**
     * Gets logo300
     *
     * @return string|null
     */
    public function getLogo300()
    {
        return $this->container['logo300'];
    }

    /**
     * Sets logo300
     *
     * @param string|null $logo300 The path to your Logo. 300x300px.
     *
     * @return $this
     */
    public function setLogo300($logo300)
    {
        $this->container['logo300'] = $logo300;

        return $this;
    }

    /**
     * Gets google_analytics
     *
     * @return string|null
     */
    public function getGoogleAnalytics()
    {
        return $this->container['google_analytics'];
    }

    /**
     * Sets google_analytics
     *
     * @param string|null $google_analytics Your GA code to inject on the Online Store and Guest Gallery.
     *
     * @return $this
     */
    public function setGoogleAnalytics($google_analytics)
    {
        $this->container['google_analytics'] = $google_analytics;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return object|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param object|null $pricing pricing
     *
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets default_pricing_id
     *
     * @return string|null
     */
    public function getDefaultPricingId()
    {
        return $this->container['default_pricing_id'];
    }

    /**
     * Sets default_pricing_id
     *
     * @param string|null $default_pricing_id The UUID of the default pricing to use for this account.
     *
     * @return $this
     */
    public function setDefaultPricingId($default_pricing_id)
    {
        $this->container['default_pricing_id'] = $default_pricing_id;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return object|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param object|null $campaign campaign
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets ads
     *
     * @return object[]|null
     */
    public function getAds()
    {
        return $this->container['ads'];
    }

    /**
     * Sets ads
     *
     * @param object[]|null $ads ads
     *
     * @return $this
     */
    public function setAds($ads)
    {
        $this->container['ads'] = $ads;

        return $this;
    }

    /**
     * Gets ads_updated
     *
     * @return int|null
     */
    public function getAdsUpdated()
    {
        return $this->container['ads_updated'];
    }

    /**
     * Sets ads_updated
     *
     * @param int|null $ads_updated ads_updated
     *
     * @return $this
     */
    public function setAdsUpdated($ads_updated)
    {
        $this->container['ads_updated'] = $ads_updated;

        return $this;
    }

    /**
     * Gets custom_gallery_domain
     *
     * @return string|null
     */
    public function getCustomGalleryDomain()
    {
        return $this->container['custom_gallery_domain'];
    }

    /**
     * Sets custom_gallery_domain
     *
     * @param string|null $custom_gallery_domain The Domain name to use for Galleries.
     *
     * @return $this
     */
    public function setCustomGalleryDomain($custom_gallery_domain)
    {
        $this->container['custom_gallery_domain'] = $custom_gallery_domain;

        return $this;
    }

    /**
     * Gets custom_store_prefix
     *
     * @return string|null
     */
    public function getCustomStorePrefix()
    {
        return $this->container['custom_store_prefix'];
    }

    /**
     * Sets custom_store_prefix
     *
     * @param string|null $custom_store_prefix The Domain name or prefix for a custom store domain.
     *
     * @return $this
     */
    public function setCustomStorePrefix($custom_store_prefix)
    {
        $this->container['custom_store_prefix'] = $custom_store_prefix;

        return $this;
    }

    /**
     * Gets google_remarketing_code
     *
     * @return string|null
     */
    public function getGoogleRemarketingCode()
    {
        return $this->container['google_remarketing_code'];
    }

    /**
     * Sets google_remarketing_code
     *
     * @param string|null $google_remarketing_code The Google Remarketing code to use on Stores and galleries.
     *
     * @return $this
     */
    public function setGoogleRemarketingCode($google_remarketing_code)
    {
        $this->container['google_remarketing_code'] = $google_remarketing_code;

        return $this;
    }

    /**
     * Gets google_remarketing_label_code
     *
     * @return string|null
     */
    public function getGoogleRemarketingLabelCode()
    {
        return $this->container['google_remarketing_label_code'];
    }

    /**
     * Sets google_remarketing_label_code
     *
     * @param string|null $google_remarketing_label_code The Google remarketing label to use.
     *
     * @return $this
     */
    public function setGoogleRemarketingLabelCode($google_remarketing_label_code)
    {
        $this->container['google_remarketing_label_code'] = $google_remarketing_label_code;

        return $this;
    }

    /**
     * Gets facebook_remarketing_code
     *
     * @return string|null
     */
    public function getFacebookRemarketingCode()
    {
        return $this->container['facebook_remarketing_code'];
    }

    /**
     * Sets facebook_remarketing_code
     *
     * @param string|null $facebook_remarketing_code The Facebook remarketing code to use on Stores and galleries.
     *
     * @return $this
     */
    public function setFacebookRemarketingCode($facebook_remarketing_code)
    {
        $this->container['facebook_remarketing_code'] = $facebook_remarketing_code;

        return $this;
    }

    /**
     * Gets remarketing_updated
     *
     * @return int|null
     */
    public function getRemarketingUpdated()
    {
        return $this->container['remarketing_updated'];
    }

    /**
     * Sets remarketing_updated
     *
     * @param int|null $remarketing_updated The last unix time the remarketing codes were updated
     *
     * @return $this
     */
    public function setRemarketingUpdated($remarketing_updated)
    {
        $this->container['remarketing_updated'] = $remarketing_updated;

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



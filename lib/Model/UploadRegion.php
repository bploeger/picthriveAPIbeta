<?php
/**
 * UploadRegion
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * UploadRegion Class Doc Comment
 *
 * @category Class
 * @description The S3 region this content is from
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UploadRegion
{
    /**
     * Possible values of this enum
     */
    const DYN = 'picthrive-dyn';
    const DYN_DYNAMIC = 'picthrive-dyn-dynamic';
    const DYN_VIRGINIA = 'picthrive-dyn-virginia';
    const DYN_IRELAND = 'picthrive-dyn-ireland';
    const DYN_SYDNEY = 'picthrive-dyn-sydney';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DYN,
            self::DYN_DYNAMIC,
            self::DYN_VIRGINIA,
            self::DYN_IRELAND,
            self::DYN_SYDNEY,
        ];
    }
}



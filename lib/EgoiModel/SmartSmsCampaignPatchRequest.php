<?php
/**
 * SmartSmsCampaignPatchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APIv3 (Beta)
 *
 * # Introduction Just a quick peek!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services. * <b><a href='https://github.com/E-goi/sdk-java'>Java</a></b> * <b><a href='https://github.com/E-goi/sdk-php'>PHP</a></b> * <b><a href='https://github.com/E-goi/sdk-python'>Python</a></b>  <security-definitions/>
 *
 * The version of the OpenAPI document: 3.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EgoiClient\EgoiModel;

use \ArrayAccess;
use \EgoiClient\ObjectSerializer;

/**
 * SmartSmsCampaignPatchRequest Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartSmsCampaignPatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartSmsCampaignPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'internal_name' => 'string',
        'campaign_content' => '\EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestCampaignContent',
        'page_content' => '\EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestPageContent',
        'sender_id' => 'int',
        'cname_id' => 'int',
        'options' => '\EgoiClient\EgoiModel\CampaignSmsOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'internal_name' => null,
        'campaign_content' => null,
        'page_content' => null,
        'sender_id' => null,
        'cname_id' => null,
        'options' => null
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
        'internal_name' => 'internal_name',
        'campaign_content' => 'campaign_content',
        'page_content' => 'page_content',
        'sender_id' => 'sender_id',
        'cname_id' => 'cname_id',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'internal_name' => 'setInternalName',
        'campaign_content' => 'setCampaignContent',
        'page_content' => 'setPageContent',
        'sender_id' => 'setSenderId',
        'cname_id' => 'setCnameId',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'internal_name' => 'getInternalName',
        'campaign_content' => 'getCampaignContent',
        'page_content' => 'getPageContent',
        'sender_id' => 'getSenderId',
        'cname_id' => 'getCnameId',
        'options' => 'getOptions'
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
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['campaign_content'] = isset($data['campaign_content']) ? $data['campaign_content'] : null;
        $this->container['page_content'] = isset($data['page_content']) ? $data['page_content'] : null;
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['cname_id'] = isset($data['cname_id']) ? $data['cname_id'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sender_id']) && ($this->container['sender_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'sender_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cname_id']) && ($this->container['cname_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'cname_id', must be bigger than or equal to 1.";
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
     * Gets internal_name
     *
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string|null $internal_name SMS campaign internal name
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets campaign_content
     *
     * @return \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestCampaignContent|null
     */
    public function getCampaignContent()
    {
        return $this->container['campaign_content'];
    }

    /**
     * Sets campaign_content
     *
     * @param \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestCampaignContent|null $campaign_content campaign_content
     *
     * @return $this
     */
    public function setCampaignContent($campaign_content)
    {
        $this->container['campaign_content'] = $campaign_content;

        return $this;
    }

    /**
     * Gets page_content
     *
     * @return \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestPageContent|null
     */
    public function getPageContent()
    {
        return $this->container['page_content'];
    }

    /**
     * Sets page_content
     *
     * @param \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequestPageContent|null $page_content page_content
     *
     * @return $this
     */
    public function setPageContent($page_content)
    {
        $this->container['page_content'] = $page_content;

        return $this;
    }

    /**
     * Gets sender_id
     *
     * @return int|null
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param int|null $sender_id sender_id
     *
     * @return $this
     */
    public function setSenderId($sender_id)
    {

        if (!is_null($sender_id) && ($sender_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $sender_id when calling SmartSmsCampaignPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets cname_id
     *
     * @return int|null
     */
    public function getCnameId()
    {
        return $this->container['cname_id'];
    }

    /**
     * Sets cname_id
     *
     * @param int|null $cname_id cname_id
     *
     * @return $this
     */
    public function setCnameId($cname_id)
    {

        if (!is_null($cname_id) && ($cname_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $cname_id when calling SmartSmsCampaignPatchRequest., must be bigger than or equal to 1.');
        }

        $this->container['cname_id'] = $cname_id;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \EgoiClient\EgoiModel\CampaignSmsOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \EgoiClient\EgoiModel\CampaignSmsOptions|null $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


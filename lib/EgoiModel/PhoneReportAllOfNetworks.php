<?php
/**
 * PhoneReportAllOfNetworks
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
 * # Introduction Just a quick peek!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services.  * <a href='https://github.com/E-goi/sdk-java'>Java</a>  * <a href='https://github.com/E-goi/sdk-php'>PHP</a>  * <a href='https://github.com/E-goi/sdk-python'>Python</a>  * <a href='https://github.com/E-goi/sdk-ruby'>Ruby</a>  * <a href='https://github.com/E-goi/sdk-javascript'>Javascript</a>  * <a href='https://github.com/E-goi/sdk-csharp'>C#</a>  # Stream Limits Stream limits are security mesures we have to make sure our API have a fair use policy, for this reason, any request that creates or modifies data (**POST**, **PATCH** and **PUT**) is limited to a maximum of **20MB** of content length. If you arrive to this limit in one of your request, you'll receive a HTTP code **413 (Request Entity Too Large)** and the request will be ignored. To avoid this error in importation's requests, it's advised the request's division in batches that have each one less than 20MB. <security-definitions/>
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
 * PhoneReportAllOfNetworks Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PhoneReportAllOfNetworks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PhoneReport_allOf_networks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'network' => 'string',
        'sends' => 'int',
        'delivered' => 'int',
        'error' => 'int',
        'invalid' => 'int',
        'pending' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'network' => null,
        'sends' => null,
        'delivered' => null,
        'error' => null,
        'invalid' => null,
        'pending' => null
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
        'network' => 'network',
        'sends' => 'sends',
        'delivered' => 'delivered',
        'error' => 'error',
        'invalid' => 'invalid',
        'pending' => 'pending'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'network' => 'setNetwork',
        'sends' => 'setSends',
        'delivered' => 'setDelivered',
        'error' => 'setError',
        'invalid' => 'setInvalid',
        'pending' => 'setPending'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'network' => 'getNetwork',
        'sends' => 'getSends',
        'delivered' => 'getDelivered',
        'error' => 'getError',
        'invalid' => 'getInvalid',
        'pending' => 'getPending'
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
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['sends'] = isset($data['sends']) ? $data['sends'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['invalid'] = isset($data['invalid']) ? $data['invalid'] : null;
        $this->container['pending'] = isset($data['pending']) ? $data['pending'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sends']) && ($this->container['sends'] < 0)) {
            $invalidProperties[] = "invalid value for 'sends', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['delivered']) && ($this->container['delivered'] < 0)) {
            $invalidProperties[] = "invalid value for 'delivered', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['error']) && ($this->container['error'] < 0)) {
            $invalidProperties[] = "invalid value for 'error', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['invalid']) && ($this->container['invalid'] < 0)) {
            $invalidProperties[] = "invalid value for 'invalid', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['pending']) && ($this->container['pending'] < 0)) {
            $invalidProperties[] = "invalid value for 'pending', must be bigger than or equal to 0.";
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
     * Gets network
     *
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string|null $network Network name
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets sends
     *
     * @return int|null
     */
    public function getSends()
    {
        return $this->container['sends'];
    }

    /**
     * Sets sends
     *
     * @param int|null $sends Total number of sent messages
     *
     * @return $this
     */
    public function setSends($sends)
    {

        if (!is_null($sends) && ($sends < 0)) {
            throw new \InvalidArgumentException('invalid value for $sends when calling PhoneReportAllOfNetworks., must be bigger than or equal to 0.');
        }

        $this->container['sends'] = $sends;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int|null
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int|null $delivered Total number of delivered messages
     *
     * @return $this
     */
    public function setDelivered($delivered)
    {

        if (!is_null($delivered) && ($delivered < 0)) {
            throw new \InvalidArgumentException('invalid value for $delivered when calling PhoneReportAllOfNetworks., must be bigger than or equal to 0.');
        }

        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets error
     *
     * @return int|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param int|null $error Total number of failed messages
     *
     * @return $this
     */
    public function setError($error)
    {

        if (!is_null($error) && ($error < 0)) {
            throw new \InvalidArgumentException('invalid value for $error when calling PhoneReportAllOfNetworks., must be bigger than or equal to 0.');
        }

        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets invalid
     *
     * @return int|null
     */
    public function getInvalid()
    {
        return $this->container['invalid'];
    }

    /**
     * Sets invalid
     *
     * @param int|null $invalid Total number of invalid messages
     *
     * @return $this
     */
    public function setInvalid($invalid)
    {

        if (!is_null($invalid) && ($invalid < 0)) {
            throw new \InvalidArgumentException('invalid value for $invalid when calling PhoneReportAllOfNetworks., must be bigger than or equal to 0.');
        }

        $this->container['invalid'] = $invalid;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return int|null
     */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param int|null $pending Total number of pending messages
     *
     * @return $this
     */
    public function setPending($pending)
    {

        if (!is_null($pending) && ($pending < 0)) {
            throw new \InvalidArgumentException('invalid value for $pending when calling PhoneReportAllOfNetworks., must be bigger than or equal to 0.');
        }

        $this->container['pending'] = $pending;

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



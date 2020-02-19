<?php
/**
 * SmsCampaignTemplate
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
 * SmsCampaignTemplate Class Doc Comment
 *
 * @category Class
 * @description Sms campaign template schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmsCampaignTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmsCampaignTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'template_id' => 'int',
        'template_hash' => 'string',
        'internal_name' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'message' => 'string',
        'sender' => 'string',
        'message_type' => 'string',
        'encoding' => 'string',
        'max_messages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'template_id' => null,
        'template_hash' => null,
        'internal_name' => null,
        'created' => null,
        'updated' => null,
        'message' => null,
        'sender' => null,
        'message_type' => null,
        'encoding' => null,
        'max_messages' => null
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
        'template_id' => 'template_id',
        'template_hash' => 'template_hash',
        'internal_name' => 'internal_name',
        'created' => 'created',
        'updated' => 'updated',
        'message' => 'message',
        'sender' => 'sender',
        'message_type' => 'message_type',
        'encoding' => 'encoding',
        'max_messages' => 'max_messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_id' => 'setTemplateId',
        'template_hash' => 'setTemplateHash',
        'internal_name' => 'setInternalName',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'message' => 'setMessage',
        'sender' => 'setSender',
        'message_type' => 'setMessageType',
        'encoding' => 'setEncoding',
        'max_messages' => 'setMaxMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_id' => 'getTemplateId',
        'template_hash' => 'getTemplateHash',
        'internal_name' => 'getInternalName',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'message' => 'getMessage',
        'sender' => 'getSender',
        'message_type' => 'getMessageType',
        'encoding' => 'getEncoding',
        'max_messages' => 'getMaxMessages'
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

    const MESSAGE_TYPE_NORMAL = 'normal';
    const MESSAGE_TYPE_FLASH = 'flash';
    const ENCODING_GSM = 'gsm';
    const ENCODING_UNICODE = 'unicode';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_NORMAL,
            self::MESSAGE_TYPE_FLASH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncodingAllowableValues()
    {
        return [
            self::ENCODING_GSM,
            self::ENCODING_UNICODE,
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
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['template_hash'] = isset($data['template_hash']) ? $data['template_hash'] : null;
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['max_messages'] = isset($data['max_messages']) ? $data['max_messages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['template_id']) && ($this->container['template_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'template_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['template_hash']) && !preg_match("/[a-zA-Z0-9_-]*/", $this->container['template_hash'])) {
            $invalidProperties[] = "invalid value for 'template_hash', must be conform to the pattern /[a-zA-Z0-9_-]*/.";
        }

        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($this->container['message_type']) && !in_array($this->container['message_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'message_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEncodingAllowableValues();
        if (!is_null($this->container['encoding']) && !in_array($this->container['encoding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'encoding', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['max_messages']) && ($this->container['max_messages'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_messages', must be bigger than or equal to 1.";
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
     * Gets template_id
     *
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int|null $template_id template_id
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {

        if (!is_null($template_id) && ($template_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $template_id when calling SmsCampaignTemplate., must be bigger than or equal to 1.');
        }

        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets template_hash
     *
     * @return string|null
     */
    public function getTemplateHash()
    {
        return $this->container['template_hash'];
    }

    /**
     * Sets template_hash
     *
     * @param string|null $template_hash template_hash
     *
     * @return $this
     */
    public function setTemplateHash($template_hash)
    {

        if (!is_null($template_hash) && (!preg_match("/[a-zA-Z0-9_-]*/", $template_hash))) {
            throw new \InvalidArgumentException("invalid value for $template_hash when calling SmsCampaignTemplate., must conform to the pattern /[a-zA-Z0-9_-]*/.");
        }

        $this->container['template_hash'] = $template_hash;

        return $this;
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
     * @param string|null $internal_name Campaign internal name
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender Sender number
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string|null $message_type Message type
     *
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($message_type) && !in_array($message_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'message_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding Message encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $allowedValues = $this->getEncodingAllowableValues();
        if (!is_null($encoding) && !in_array($encoding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'encoding', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets max_messages
     *
     * @return int|null
     */
    public function getMaxMessages()
    {
        return $this->container['max_messages'];
    }

    /**
     * Sets max_messages
     *
     * @param int|null $max_messages Maximum number of messages
     *
     * @return $this
     */
    public function setMaxMessages($max_messages)
    {

        if (!is_null($max_messages) && ($max_messages < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_messages when calling SmsCampaignTemplate., must be bigger than or equal to 1.');
        }

        $this->container['max_messages'] = $max_messages;

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


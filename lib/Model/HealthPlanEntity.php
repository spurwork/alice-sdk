<?php
/**
 * HealthPlanEntity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alice Payroll Provider API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HealthPlanEntity Class Doc Comment
 *
 * @category Class
 * @description Update HSA health plan
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HealthPlanEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HealthPlanEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'coverage_type' => 'string',
'meets_min_deductible' => 'bool',
'meets_max_out_of_pocket' => 'bool',
'image_url' => 'string',
'has_an_hsa' => 'bool',
'hsa_eligibility_determined' => 'bool',
'hsa_eligible' => 'bool',
'hsa_eligibility_determined_by_admin' => 'bool',
'review_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'coverage_type' => null,
'meets_min_deductible' => null,
'meets_max_out_of_pocket' => null,
'image_url' => null,
'has_an_hsa' => null,
'hsa_eligibility_determined' => null,
'hsa_eligible' => null,
'hsa_eligibility_determined_by_admin' => null,
'review_status' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'coverage_type' => 'coverage_type',
'meets_min_deductible' => 'meets_min_deductible',
'meets_max_out_of_pocket' => 'meets_max_out_of_pocket',
'image_url' => 'image_url',
'has_an_hsa' => 'has_an_hsa',
'hsa_eligibility_determined' => 'hsa_eligibility_determined',
'hsa_eligible' => 'hsa_eligible',
'hsa_eligibility_determined_by_admin' => 'hsa_eligibility_determined_by_admin',
'review_status' => 'review_status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'coverage_type' => 'setCoverageType',
'meets_min_deductible' => 'setMeetsMinDeductible',
'meets_max_out_of_pocket' => 'setMeetsMaxOutOfPocket',
'image_url' => 'setImageUrl',
'has_an_hsa' => 'setHasAnHsa',
'hsa_eligibility_determined' => 'setHsaEligibilityDetermined',
'hsa_eligible' => 'setHsaEligible',
'hsa_eligibility_determined_by_admin' => 'setHsaEligibilityDeterminedByAdmin',
'review_status' => 'setReviewStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'coverage_type' => 'getCoverageType',
'meets_min_deductible' => 'getMeetsMinDeductible',
'meets_max_out_of_pocket' => 'getMeetsMaxOutOfPocket',
'image_url' => 'getImageUrl',
'has_an_hsa' => 'getHasAnHsa',
'hsa_eligibility_determined' => 'getHsaEligibilityDetermined',
'hsa_eligible' => 'getHsaEligible',
'hsa_eligibility_determined_by_admin' => 'getHsaEligibilityDeterminedByAdmin',
'review_status' => 'getReviewStatus'    ];

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
        return self::$swaggerModelName;
    }

    const COVERAGE_TYPE_INDIVIDUAL = 'individual';
const COVERAGE_TYPE_FAMILY = 'family';
const REVIEW_STATUS_UNREVIEWED = 'unreviewed';
const REVIEW_STATUS_NEEDS_FOLLOW_UP = 'needs_follow_up';
const REVIEW_STATUS_REVIEWED = 'reviewed';
const REVIEW_STATUS_NEEDS_UPDATE = 'needs_update';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoverageTypeAllowableValues()
    {
        return [
            self::COVERAGE_TYPE_INDIVIDUAL,
self::COVERAGE_TYPE_FAMILY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReviewStatusAllowableValues()
    {
        return [
            self::REVIEW_STATUS_UNREVIEWED,
self::REVIEW_STATUS_NEEDS_FOLLOW_UP,
self::REVIEW_STATUS_REVIEWED,
self::REVIEW_STATUS_NEEDS_UPDATE,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['coverage_type'] = isset($data['coverage_type']) ? $data['coverage_type'] : 'individual';
        $this->container['meets_min_deductible'] = isset($data['meets_min_deductible']) ? $data['meets_min_deductible'] : true;
        $this->container['meets_max_out_of_pocket'] = isset($data['meets_max_out_of_pocket']) ? $data['meets_max_out_of_pocket'] : true;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : 'https://images-na.ssl-images-amazon.com/images/I/91tEcpXvx5L._SL1500_.jpg';
        $this->container['has_an_hsa'] = isset($data['has_an_hsa']) ? $data['has_an_hsa'] : null;
        $this->container['hsa_eligibility_determined'] = isset($data['hsa_eligibility_determined']) ? $data['hsa_eligibility_determined'] : true;
        $this->container['hsa_eligible'] = isset($data['hsa_eligible']) ? $data['hsa_eligible'] : true;
        $this->container['hsa_eligibility_determined_by_admin'] = isset($data['hsa_eligibility_determined_by_admin']) ? $data['hsa_eligibility_determined_by_admin'] : true;
        $this->container['review_status'] = isset($data['review_status']) ? $data['review_status'] : 'reviewed';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getCoverageTypeAllowableValues();
        if (!is_null($this->container['coverage_type']) && !in_array($this->container['coverage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'coverage_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReviewStatusAllowableValues();
        if (!is_null($this->container['review_status']) && !in_array($this->container['review_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'review_status', must be one of '%s'",
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Health plan ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Health plan name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets coverage_type
     *
     * @return string
     */
    public function getCoverageType()
    {
        return $this->container['coverage_type'];
    }

    /**
     * Sets coverage_type
     *
     * @param string $coverage_type coverage_type
     *
     * @return $this
     */
    public function setCoverageType($coverage_type)
    {
        $allowedValues = $this->getCoverageTypeAllowableValues();
        if (!is_null($coverage_type) && !in_array($coverage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'coverage_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coverage_type'] = $coverage_type;

        return $this;
    }

    /**
     * Gets meets_min_deductible
     *
     * @return bool
     */
    public function getMeetsMinDeductible()
    {
        return $this->container['meets_min_deductible'];
    }

    /**
     * Sets meets_min_deductible
     *
     * @param bool $meets_min_deductible meets_min_deductible
     *
     * @return $this
     */
    public function setMeetsMinDeductible($meets_min_deductible)
    {
        $this->container['meets_min_deductible'] = $meets_min_deductible;

        return $this;
    }

    /**
     * Gets meets_max_out_of_pocket
     *
     * @return bool
     */
    public function getMeetsMaxOutOfPocket()
    {
        return $this->container['meets_max_out_of_pocket'];
    }

    /**
     * Sets meets_max_out_of_pocket
     *
     * @param bool $meets_max_out_of_pocket meets_max_out_of_pocket
     *
     * @return $this
     */
    public function setMeetsMaxOutOfPocket($meets_max_out_of_pocket)
    {
        $this->container['meets_max_out_of_pocket'] = $meets_max_out_of_pocket;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets has_an_hsa
     *
     * @return bool
     */
    public function getHasAnHsa()
    {
        return $this->container['has_an_hsa'];
    }

    /**
     * Sets has_an_hsa
     *
     * @param bool $has_an_hsa has_an_hsa
     *
     * @return $this
     */
    public function setHasAnHsa($has_an_hsa)
    {
        $this->container['has_an_hsa'] = $has_an_hsa;

        return $this;
    }

    /**
     * Gets hsa_eligibility_determined
     *
     * @return bool
     */
    public function getHsaEligibilityDetermined()
    {
        return $this->container['hsa_eligibility_determined'];
    }

    /**
     * Sets hsa_eligibility_determined
     *
     * @param bool $hsa_eligibility_determined hsa_eligibility_determined
     *
     * @return $this
     */
    public function setHsaEligibilityDetermined($hsa_eligibility_determined)
    {
        $this->container['hsa_eligibility_determined'] = $hsa_eligibility_determined;

        return $this;
    }

    /**
     * Gets hsa_eligible
     *
     * @return bool
     */
    public function getHsaEligible()
    {
        return $this->container['hsa_eligible'];
    }

    /**
     * Sets hsa_eligible
     *
     * @param bool $hsa_eligible hsa_eligible
     *
     * @return $this
     */
    public function setHsaEligible($hsa_eligible)
    {
        $this->container['hsa_eligible'] = $hsa_eligible;

        return $this;
    }

    /**
     * Gets hsa_eligibility_determined_by_admin
     *
     * @return bool
     */
    public function getHsaEligibilityDeterminedByAdmin()
    {
        return $this->container['hsa_eligibility_determined_by_admin'];
    }

    /**
     * Sets hsa_eligibility_determined_by_admin
     *
     * @param bool $hsa_eligibility_determined_by_admin hsa_eligibility_determined_by_admin
     *
     * @return $this
     */
    public function setHsaEligibilityDeterminedByAdmin($hsa_eligibility_determined_by_admin)
    {
        $this->container['hsa_eligibility_determined_by_admin'] = $hsa_eligibility_determined_by_admin;

        return $this;
    }

    /**
     * Gets review_status
     *
     * @return string
     */
    public function getReviewStatus()
    {
        return $this->container['review_status'];
    }

    /**
     * Sets review_status
     *
     * @param string $review_status review_status
     *
     * @return $this
     */
    public function setReviewStatus($review_status)
    {
        $allowedValues = $this->getReviewStatusAllowableValues();
        if (!is_null($review_status) && !in_array($review_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'review_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['review_status'] = $review_status;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

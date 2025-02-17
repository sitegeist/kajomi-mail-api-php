<?php
/**
 * ExportUsersGet
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Overview  nextgen.kajomigenerator.de
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * ExportUsersGet Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportUsersGet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'exportUsersGet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'sex' => 'int',
        'street' => 'string',
        'street_number' => 'string',
        'city' => 'string',
        'country' => 'string',
        'area_code' => 'string',
        'postcode' => 'int',
        'phone_number' => 'int',
        'birthdate' => '\DateTime',
        'cellphone_area_code' => 'string',
        'cellphone_number' => 'int',
        'dateadd' => '\DateTime',
        'cnf' => 'string',
        'htmail' => 'bool',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user5' => 'string',
        'user6' => 'string',
        'user7' => 'string',
        'user8' => 'string',
        'user9' => 'string',
        'user10' => 'string',
        'ipaddr' => 'string',
        'refurl' => 'string',
        'bounces' => 'int',
        'id' => 'int',
        'uid' => 'string',
        'list' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'firstname' => null,
        'lastname' => null,
        'sex' => null,
        'street' => null,
        'street_number' => null,
        'city' => null,
        'country' => null,
        'area_code' => null,
        'postcode' => null,
        'phone_number' => null,
        'birthdate' => 'date',
        'cellphone_area_code' => null,
        'cellphone_number' => null,
        'dateadd' => 'date-time',
        'cnf' => null,
        'htmail' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user5' => null,
        'user6' => null,
        'user7' => null,
        'user8' => null,
        'user9' => null,
        'user10' => null,
        'ipaddr' => null,
        'refurl' => null,
        'bounces' => null,
        'id' => null,
        'uid' => null,
        'list' => null
    ];

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
        'email' => 'email',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'sex' => 'sex',
        'street' => 'street',
        'street_number' => 'street_number',
        'city' => 'city',
        'country' => 'country',
        'area_code' => 'area_code',
        'postcode' => 'postcode',
        'phone_number' => 'phone_number',
        'birthdate' => 'birthdate',
        'cellphone_area_code' => 'cellphone_area_code',
        'cellphone_number' => 'cellphone_number',
        'dateadd' => 'dateadd',
        'cnf' => 'cnf',
        'htmail' => 'htmail',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user5' => 'user5',
        'user6' => 'user6',
        'user7' => 'user7',
        'user8' => 'user8',
        'user9' => 'user9',
        'user10' => 'user10',
        'ipaddr' => 'ipaddr',
        'refurl' => 'refurl',
        'bounces' => 'bounces',
        'id' => 'id',
        'uid' => 'uid',
        'list' => 'list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'sex' => 'setSex',
        'street' => 'setStreet',
        'street_number' => 'setStreetNumber',
        'city' => 'setCity',
        'country' => 'setCountry',
        'area_code' => 'setAreaCode',
        'postcode' => 'setPostcode',
        'phone_number' => 'setPhoneNumber',
        'birthdate' => 'setBirthdate',
        'cellphone_area_code' => 'setCellphoneAreaCode',
        'cellphone_number' => 'setCellphoneNumber',
        'dateadd' => 'setDateadd',
        'cnf' => 'setCnf',
        'htmail' => 'setHtmail',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user5' => 'setUser5',
        'user6' => 'setUser6',
        'user7' => 'setUser7',
        'user8' => 'setUser8',
        'user9' => 'setUser9',
        'user10' => 'setUser10',
        'ipaddr' => 'setIpaddr',
        'refurl' => 'setRefurl',
        'bounces' => 'setBounces',
        'id' => 'setId',
        'uid' => 'setUid',
        'list' => 'setList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'sex' => 'getSex',
        'street' => 'getStreet',
        'street_number' => 'getStreetNumber',
        'city' => 'getCity',
        'country' => 'getCountry',
        'area_code' => 'getAreaCode',
        'postcode' => 'getPostcode',
        'phone_number' => 'getPhoneNumber',
        'birthdate' => 'getBirthdate',
        'cellphone_area_code' => 'getCellphoneAreaCode',
        'cellphone_number' => 'getCellphoneNumber',
        'dateadd' => 'getDateadd',
        'cnf' => 'getCnf',
        'htmail' => 'getHtmail',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user5' => 'getUser5',
        'user6' => 'getUser6',
        'user7' => 'getUser7',
        'user8' => 'getUser8',
        'user9' => 'getUser9',
        'user10' => 'getUser10',
        'ipaddr' => 'getIpaddr',
        'refurl' => 'getRefurl',
        'bounces' => 'getBounces',
        'id' => 'getId',
        'uid' => 'getUid',
        'list' => 'getList'
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
        return self::$swaggerModelName;
    }

    const CNF__0 = '0';
    const CNF__1 = '1';
    const CNF__2 = '2';
    const CNF__3 = '3';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCnfAllowableValues()
    {
        return [
            self::CNF__0,
            self::CNF__1,
            self::CNF__2,
            self::CNF__3,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['area_code'] = isset($data['area_code']) ? $data['area_code'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['cellphone_area_code'] = isset($data['cellphone_area_code']) ? $data['cellphone_area_code'] : null;
        $this->container['cellphone_number'] = isset($data['cellphone_number']) ? $data['cellphone_number'] : null;
        $this->container['dateadd'] = isset($data['dateadd']) ? $data['dateadd'] : null;
        $this->container['cnf'] = isset($data['cnf']) ? $data['cnf'] : null;
        $this->container['htmail'] = isset($data['htmail']) ? $data['htmail'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['user6'] = isset($data['user6']) ? $data['user6'] : null;
        $this->container['user7'] = isset($data['user7']) ? $data['user7'] : null;
        $this->container['user8'] = isset($data['user8']) ? $data['user8'] : null;
        $this->container['user9'] = isset($data['user9']) ? $data['user9'] : null;
        $this->container['user10'] = isset($data['user10']) ? $data['user10'] : null;
        $this->container['ipaddr'] = isset($data['ipaddr']) ? $data['ipaddr'] : null;
        $this->container['refurl'] = isset($data['refurl']) ? $data['refurl'] : null;
        $this->container['bounces'] = isset($data['bounces']) ? $data['bounces'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        $allowedValues = $this->getCnfAllowableValues();
        if (!is_null($this->container['cnf']) && !in_array($this->container['cnf'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cnf', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['list'] === null) {
            $invalidProperties[] = "'list' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return int
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param int $sex sex
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string $street_number street_number
     *
     * @return $this
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets area_code
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->container['area_code'];
    }

    /**
     * Sets area_code
     *
     * @param string $area_code area_code
     *
     * @return $this
     */
    public function setAreaCode($area_code)
    {
        $this->container['area_code'] = $area_code;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return int
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param int $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param int $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \DateTime $birthdate birthdate
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets cellphone_area_code
     *
     * @return string
     */
    public function getCellphoneAreaCode()
    {
        return $this->container['cellphone_area_code'];
    }

    /**
     * Sets cellphone_area_code
     *
     * @param string $cellphone_area_code cellphone_area_code
     *
     * @return $this
     */
    public function setCellphoneAreaCode($cellphone_area_code)
    {
        $this->container['cellphone_area_code'] = $cellphone_area_code;

        return $this;
    }

    /**
     * Gets cellphone_number
     *
     * @return int
     */
    public function getCellphoneNumber()
    {
        return $this->container['cellphone_number'];
    }

    /**
     * Sets cellphone_number
     *
     * @param int $cellphone_number cellphone_number
     *
     * @return $this
     */
    public function setCellphoneNumber($cellphone_number)
    {
        $this->container['cellphone_number'] = $cellphone_number;

        return $this;
    }

    /**
     * Gets dateadd
     *
     * @return \DateTime
     */
    public function getDateadd()
    {
        return $this->container['dateadd'];
    }

    /**
     * Sets dateadd
     *
     * @param \DateTime $dateadd dateadd
     *
     * @return $this
     */
    public function setDateadd($dateadd)
    {
        $this->container['dateadd'] = $dateadd;

        return $this;
    }

    /**
     * Gets cnf
     *
     * @return string
     */
    public function getCnf()
    {
        return $this->container['cnf'];
    }

    /**
     * Sets cnf
     *
     * @param string $cnf cnf
     *
     * @return $this
     */
    public function setCnf($cnf)
    {
        $allowedValues = $this->getCnfAllowableValues();
        if (!is_null($cnf) && !in_array($cnf, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cnf', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cnf'] = $cnf;

        return $this;
    }

    /**
     * Gets htmail
     *
     * @return bool
     */
    public function getHtmail()
    {
        return $this->container['htmail'];
    }

    /**
     * Sets htmail
     *
     * @param bool $htmail htmail
     *
     * @return $this
     */
    public function setHtmail($htmail)
    {
        $this->container['htmail'] = $htmail;

        return $this;
    }

    /**
     * Gets user1
     *
     * @return string
     */
    public function getUser1()
    {
        return $this->container['user1'];
    }

    /**
     * Sets user1
     *
     * @param string $user1 user1
     *
     * @return $this
     */
    public function setUser1($user1)
    {
        $this->container['user1'] = $user1;

        return $this;
    }

    /**
     * Gets user2
     *
     * @return string
     */
    public function getUser2()
    {
        return $this->container['user2'];
    }

    /**
     * Sets user2
     *
     * @param string $user2 user2
     *
     * @return $this
     */
    public function setUser2($user2)
    {
        $this->container['user2'] = $user2;

        return $this;
    }

    /**
     * Gets user3
     *
     * @return string
     */
    public function getUser3()
    {
        return $this->container['user3'];
    }

    /**
     * Sets user3
     *
     * @param string $user3 user3
     *
     * @return $this
     */
    public function setUser3($user3)
    {
        $this->container['user3'] = $user3;

        return $this;
    }

    /**
     * Gets user5
     *
     * @return string
     */
    public function getUser5()
    {
        return $this->container['user5'];
    }

    /**
     * Sets user5
     *
     * @param string $user5 user5
     *
     * @return $this
     */
    public function setUser5($user5)
    {
        $this->container['user5'] = $user5;

        return $this;
    }

    /**
     * Gets user6
     *
     * @return string
     */
    public function getUser6()
    {
        return $this->container['user6'];
    }

    /**
     * Sets user6
     *
     * @param string $user6 user6
     *
     * @return $this
     */
    public function setUser6($user6)
    {
        $this->container['user6'] = $user6;

        return $this;
    }

    /**
     * Gets user7
     *
     * @return string
     */
    public function getUser7()
    {
        return $this->container['user7'];
    }

    /**
     * Sets user7
     *
     * @param string $user7 user7
     *
     * @return $this
     */
    public function setUser7($user7)
    {
        $this->container['user7'] = $user7;

        return $this;
    }

    /**
     * Gets user8
     *
     * @return string
     */
    public function getUser8()
    {
        return $this->container['user8'];
    }

    /**
     * Sets user8
     *
     * @param string $user8 user8
     *
     * @return $this
     */
    public function setUser8($user8)
    {
        $this->container['user8'] = $user8;

        return $this;
    }

    /**
     * Gets user9
     *
     * @return string
     */
    public function getUser9()
    {
        return $this->container['user9'];
    }

    /**
     * Sets user9
     *
     * @param string $user9 user9
     *
     * @return $this
     */
    public function setUser9($user9)
    {
        $this->container['user9'] = $user9;

        return $this;
    }

    /**
     * Gets user10
     *
     * @return string
     */
    public function getUser10()
    {
        return $this->container['user10'];
    }

    /**
     * Sets user10
     *
     * @param string $user10 user10
     *
     * @return $this
     */
    public function setUser10($user10)
    {
        $this->container['user10'] = $user10;

        return $this;
    }

    /**
     * Gets ipaddr
     *
     * @return string
     */
    public function getIpaddr()
    {
        return $this->container['ipaddr'];
    }

    /**
     * Sets ipaddr
     *
     * @param string $ipaddr ipaddr
     *
     * @return $this
     */
    public function setIpaddr($ipaddr)
    {
        $this->container['ipaddr'] = $ipaddr;

        return $this;
    }

    /**
     * Gets refurl
     *
     * @return string
     */
    public function getRefurl()
    {
        return $this->container['refurl'];
    }

    /**
     * Sets refurl
     *
     * @param string $refurl refurl
     *
     * @return $this
     */
    public function setRefurl($refurl)
    {
        $this->container['refurl'] = $refurl;

        return $this;
    }

    /**
     * Gets bounces
     *
     * @return int
     */
    public function getBounces()
    {
        return $this->container['bounces'];
    }

    /**
     * Sets bounces
     *
     * @param int $bounces bounces
     *
     * @return $this
     */
    public function setBounces($bounces)
    {
        $this->container['bounces'] = $bounces;

        return $this;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets list
     *
     * @return int
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param int $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

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



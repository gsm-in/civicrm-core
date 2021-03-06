<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/SMS/Provider.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:31f5a6353dfc5b4630f3e0e9e82ce40e)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_SMS_DAO_Provider extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_sms_provider';
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * SMS Provider ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Provider internal name points to option_value of option_group sms_provider_name
   *
   * @var string
   */
  public $name;
  /**
   * Provider name visible to user
   *
   * @var string
   */
  public $title;
  /**
   *
   * @var string
   */
  public $username;
  /**
   *
   * @var string
   */
  public $password;
  /**
   * points to value in civicrm_option_value for group sms_api_type
   *
   * @var int unsigned
   */
  public $api_type;
  /**
   *
   * @var string
   */
  public $api_url;
  /**
   * the api params in xml, http or smtp format
   *
   * @var text
   */
  public $api_params;
  /**
   *
   * @var boolean
   */
  public $is_default;
  /**
   *
   * @var boolean
   */
  public $is_active;
  /**
   * class constructor
   *
   * @return civicrm_sms_provider
   */
  function __construct() {
    $this->__table = 'civicrm_sms_provider';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('SMS Provider ID') ,
          'description' => 'SMS Provider ID',
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SMS Provider Name') ,
          'description' => 'Provider internal name points to option_value of option_group sms_provider_name',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SMS Provider Title') ,
          'description' => 'Provider name visible to user',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'username' => array(
          'name' => 'username',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SMS Provider Username') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'password' => array(
          'name' => 'password',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SMS Provider Password') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'api_type' => array(
          'name' => 'api_type',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('SMS Provider API') ,
          'description' => 'points to value in civicrm_option_value for group sms_api_type',
          'required' => true,
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'api_url' => array(
          'name' => 'api_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SMS Provider API URL') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'api_params' => array(
          'name' => 'api_params',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('SMS Provider API Params') ,
          'description' => 'the api params in xml, http or smtp format',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'is_default' => array(
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('SMS Provider is Default?') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('SMS Provider is Active?') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sms_provider', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sms_provider', $prefix, array());
    return $r;
  }
}

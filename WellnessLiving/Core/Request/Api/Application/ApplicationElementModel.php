<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete applications.
 *
 * @method WlModelRequest delete() Deletes an application.
 * @method WlModelRequest get() Returns information about an application.
 * @method WlModelRequest post() Saves an application.
 */
class ApplicationElementModel extends WlModelAbstract
{
  /**
   * The array of keys of access groups of current application.
   * <tt>null</tt> when application doesn't have access groups.
   *
   * @get result
   * @post post
   * @var string[]|null
   */
  public $a_application_group;

  /**
   * A bot user which is a deemed actor in all API requests made by this application. 
   * Empty array if no bot user is assigned to this application.
   *
   * Here, an array is used instead of two separate fields because rendering a dropdown for user search
   * requires these two values, and in <tt>Core_Request_Api_Application_ApplicationEditor.editStructure</tt>,
   * only one value is passed through the variable name <var>s_field</var>.
   *
   * <dl>
   *   <dt>string `s_login`</dt>
   *   <dd>Bot login.</dd>
   * 
   *   <dt>string `uid_bot`</dt>
   *
   * </dl>
   * @get result
   * @var array
   */
  public $a_bot = [];

  /**
   * If an application is edited, its key is stored here.
   *
   * <tt>null</tt> if a new group should be created.
   * This value is required for edit and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_api_application;

  /**
   * Secret code to authorize application.
   * When editing, it is not displayed and can only be replaced with a new one.
   *
   * @post post
   * @var string
   */
  public $s_code;

  /**
   * Which groups this user belongs to.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_group = '';

  /**
   * Application identifier to authenticate application.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_id;

  /**
   * Name of application.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_application;

  /**
   * @post post
   * @var string
   */
  public $uid_bot = '';
}

?>
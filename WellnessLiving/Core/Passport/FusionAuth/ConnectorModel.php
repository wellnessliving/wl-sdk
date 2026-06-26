<?php

namespace WellnessLiving\Core\Passport\FusionAuth;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This class is used to get requests from the `FusionAuth`.
 *
 * @method WlModelRequest post()
 */
class ConnectorModel extends WlModelAbstract
{
  /**
   * The user data.
   *
   * The result is an array with all user fields and a registrations key containing an array of registration objects.
   *
   * Contains the result of merging two objects:
   *
   * <dl>
   *   <dt>array `user`</dt>
   *   <dd>Copy of result {@link \Core\Passport\FusionAuth\UserDto::asArray()}</dd>
   * 
   *   <dt>array `registrations`</dt>
   *   <dd>Registration is a copy of {@link \Core\Passport\FusionAuth\UserRegistrationDto::asArray()}</dd>
   * </dl>
   * @field user
   * @post result
   * @var array
   */
  public $a_user = [];

  /**
   * The application ID.
   *
   * This is used to identify the application in `FusionAuth`.
   *
   * @field applicationId
   * @post post
   * @var string
   */
  public $s_application_id = '';

  /**
   * The user login.
   *
   * @field loginId
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * The user password.
   *
   * @field password
   * @post post
   * @var string
   */
  public $s_password = '';
}

?>
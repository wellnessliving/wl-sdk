<?php

namespace WellnessLiving\Wl\Profile\Edit\Email;

use WellnessLiving\Wl\Profile\Edit\EditModel;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks if a user's email address is already used or changes a user’s login email address.
 *
 * This endpoint is rate limited. If the rate limit is exceeded, it won't return user information.
 *
 * While `get` request allows to check, whether user with the given email exists on the site, `post` allows to add it
 *   to the certain business, if it's not added yet. If client has all required by this business fields filled, it will
 *   be added right away. Otherwise it will add temporary access to this client, and you need to send all necessary fields
 *   with {@link EditModel} endpoint.
 */
class EditEmailModel extends WlModelAbstract
{
  /**
   * List of business keys where a user is already a member.
   *
   * @get result
   * @var array
   */
  public array $a_business_member_key = [];

  /**
   * Information about the user who occupies the specified email.
   * This will be empty if the email is free or if the rate limit has been reached.
   * Otherwise, has next keys:
   * <dl>
   *   <dt>
   *     string <var>text_firstname</var>
   *   </dt>
   *   <dd>
   *     First name.
   *   </dd>
   *   <dt>
   *     string <var>text_lastname</var>
   *   </dt>
   *   <dd>
   *     Last name.
   *   </dd>
   *   <dt>
   *     string <var>text_phone</var>
   *   </dt>
   *   <dd>
   *     Phone.
   *   </dd>
   *   <dt>
   *     string <var>url_photo</var>
   *   </dt>
   *   <dd>
   *     URL to photo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_user;

  /**
   * Shows, whether client was registered in the business: <tt>true</tt> if user was added to the business,
   * <tt>false</tt> if staff only received temporary access, because mandatory fields must be specified first.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $is_added = false;

  /**
   * If `true`, user is already a member of current business, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public bool $is_current_member = false;

  /**
   * If `true`, then the number of requests has exceeded the rate limit. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_limit;

  /**
   * If `true`, user, who has the specified email, is staff, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public bool $is_staff = false;

  /**
   * If `true`, then the specified email is in use. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_use;

  /**
   * The business key where the check must be performed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The email address to be checked.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * The key of user who has the specified email.
   * This will be `0` if the email is free or if the rate limit has been reached.
   *
   * @get result
   * @var string
   */
  public $uid_result;

  /**
   * The key of user whose email will be edited.
   * This will be `0` in the case of a new user creation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_want = '0';
}

?>
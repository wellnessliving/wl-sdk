<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Performs authorization from the Check In web application.
 *
 * This is a pretty special thing, because it's not really authorize user, it's just selects it for
 * Check In application only and allows only to check in to the location.
 *
 * That is why it can not require password. But also can require - this depends on the location settings.
 *
 * It also requires special secret string, which connects request to the certain Check In web application session.
 */
class ReceptionAuthorizeModel extends WlModelAbstract
{
  /**
   * List of the users, which can be authorized.
   *
   * Can be set only this field or {@link ReceptionAuthorizeModel::$uid}.
   * It depends, whether we found one user or multiple.
   *
   * @post result
   * @var array[]
   */
<dl>
  <dt>string `text_name_first`</dt>
  <dd>First name of the user.</dd>

  <dt>string `text_name_last`</dt>
  <dd>Last name of the user.</dd>

  <dt>string `uid`</dt>
  <dd>Key of the user.</dd>

  <dt>string `url_image`</dt>
  <dd>Link to the profile image.</dd>
</dl>
  public $a_select = [];

  /**
   * Key of the business, where Check In application is started.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the location, where Check In application is started.
   *
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * Key of the Check In application.
   *
   * 
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * Authorization value - it's a value, which client entered on authorization form.
   *
   * It can be client ID, email or phone number. Depends on the business settings.
   *
   * @post post
   * @var string
   */
  public $text_authorize = '';

  /**
   * Key of the authorized user.
   *
   * Can be set only this field or {@link ReceptionAuthorizeModel::$a_select}.
   * It depends, whether we found one user or multiple.
   *
   * @post result
   * @var string
   */
  public $uid = '';
}

?>
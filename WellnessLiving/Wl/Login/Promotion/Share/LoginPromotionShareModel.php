<?php

namespace WellnessLiving\Wl\Login\Promotion\Share;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of family members with whom the purchased promotion can be shared.
 *
 * @method WlModelRequest get()
 */
class LoginPromotionShareModel extends WlModelAbstract
{
  /**
   * List of family members with whom the purchased promotion can be shared. Each element has next structure:
   *
   * <dl>
   *   <dt>bool `is_share`</dt>
   *   <dd>Whether the login promotion was shared with user.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>User name.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_share_family;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Purchased promotion key.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion;
}

?>
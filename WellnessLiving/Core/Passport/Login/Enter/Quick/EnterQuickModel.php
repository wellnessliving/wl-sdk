<?php

namespace WellnessLiving\Core\Passport\Login\Enter\Quick;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class EnterQuickModel extends WlModelAbstract
{
  /**
   * Additional data, which can be sent to the listeners of the event "user signed in".
   *
   * Known optional keys: 
   * Other listener-specific keys may also be included.
   *
   * <dl>
   *   <dt>string `k_business_backend`</dt>
   *   <dd>Business key to set as the current backend business after sign in.</dd>
   * 
   *   <dt>string `k_business_frontend`</dt>
   *   <dd>Business key to set as the current frontend business after sign in.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_data;

  /**
   * Key of the user to be signed in.
   *
   * `null` to logout current user.
   *
   * @get get
   * @var string|null
   */
  public $uid;

  /**
   * Protected link to sign in.
   *
   * @get result
   * @var string
   */
  public $url_enter;

  /**
   * Link to redirect user after sign in.
   *
   * @get get
   * @var string
   */
  public $url_redirect;
}

?>
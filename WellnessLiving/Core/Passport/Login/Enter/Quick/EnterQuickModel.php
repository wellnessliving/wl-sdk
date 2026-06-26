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
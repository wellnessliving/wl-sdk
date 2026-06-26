<?php

namespace WellnessLiving\Wl\Integration\Autymate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called to enroll a business with Autymate.
 *
 * @method WlModelRequest get() Creates an Autymate enrollment for a business. Once an enrollment is created the user can make the initial visit to Autymate to continue the sign up process on Autymate's side.
 */
class AutymateEnrollModel extends WlModelAbstract
{
  /**
   * @get result
   * @var string
   */
  public $k_autymate_enroll = '';

  /**
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>
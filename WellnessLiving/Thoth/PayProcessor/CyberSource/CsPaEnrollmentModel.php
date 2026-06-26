<?php

namespace WellnessLiving\Thoth\PayProcessor\CyberSource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to Check Payer Authentication Enrollment request.
 *
 * @method WlModelRequest post()
 */
class CsPaEnrollmentModel extends WlModelAbstract
{
  /**
   * User device info: 
   *
   * <dl>
   *   <dt>int `i_browser_screen_height`</dt>
   *   <dd>User browser screen height.</dd>
   * 
   *   <dt>int `i_browser_screen_width`</dt>
   *   <dd>User browser screen width.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_device_info = [];

  /**
   * Key of payment transaction that was previously created with {@link CsPaSetupModel}.
   *
   * @post post
   * @var string
   */
  public $k_pay_transaction;

  /**
   * JSON Web Token to include into the request to the second frame.
   *
   * @post result
   * @var string|null
   */
  public $s_jwt;

  /**
   * URL for frontend interaction.
   * This normally means that payer needs to make further steps for the authentication.
   *
   * `null` if no interaction required, and we should proceed with the withdrawal.
   * This normally means that payer is authenticated.
   *
   * If payer is not authenticated, or there is an error occurred during check of the enrollment,
   * this API returns an exception.
   *
   * @post result
   * @var string|null
   */
  public $url_interact;
}

?>
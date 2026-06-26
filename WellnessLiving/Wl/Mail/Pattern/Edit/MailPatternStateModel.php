<?php

namespace WellnessLiving\Wl\Mail\Pattern\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for managing the state of a mail pattern (active or inactive).
 *
 * @method WlModelRequest post()
 */
class MailPatternStateModel extends WlModelAbstract
{
  /**
   * Determines if the mail pattern should be active.
   * `true` if the mail pattern is active, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_active = false;

  /**
   * Business key where the mail pattern is used.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Mail pattern key.
   *
   * @post post
   * @var string
   */
  public $k_mail_pattern = '';
}

?>
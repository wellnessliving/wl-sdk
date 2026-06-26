<?php

namespace WellnessLiving\Wl\Appointment\Change\Mail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get change appointment mail pattern.
 *
 * @method WlModelRequest get() Gets mail pattern.
 */
class DurationChangeMailModel extends WlModelAbstract
{
  /**
   * Html template that can be used to change mail template.
   *
   * @get result
   * @var string
   */
  public $html_mail_editor;

  /**
   * @get get
   * @var int|null
   */
  public $id_mail = null;

  /**
   * <tt>null</tt> if appointment not set.
   *
   * @get get
   * @var string|null
   */
  public $k_appointment = null;
}

?>
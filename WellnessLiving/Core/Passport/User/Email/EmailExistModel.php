<?php

namespace WellnessLiving\Core\Passport\User\Email;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks if the email address exists in the system.
 */
class EmailExistModel extends WlModelAbstract
{
  /**
   * Determines whether the email address exists.
   *
   * @get result
   * @var bool
   */
  public $is_exist = false;

  /**
   * The email address.
   *
   * @get get
   * @var string
   */
  public $text_email = '';
}

?>
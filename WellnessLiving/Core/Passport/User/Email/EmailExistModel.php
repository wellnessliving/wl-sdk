<?php

namespace WellnessLiving\Core\Passport\User\Email;

use WellnessLiving\WlModelAbstract;

/**
 * Checks if email address exists in our system.
 */
class EmailExistModel extends WlModelAbstract
{
  /**
   * Whether email address exist.
   *
   * @get result
   * @var bool
   */
  public $is_exist = false;

  /**
   * Email address.
   *
   * @get get
   * @var string
   */
  public $text_email = '';
}

?>
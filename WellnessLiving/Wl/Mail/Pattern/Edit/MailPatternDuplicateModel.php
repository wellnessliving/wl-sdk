<?php

namespace WellnessLiving\Wl\Mail\Pattern\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to duplicate mail pattern.
 *
 * @method WlModelRequest post() Duplicates the mail pattern.
 */
class MailPatternDuplicateModel extends WlModelAbstract
{
  /**
   * Business key within which duplicate operation is performed.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the mail pattern to duplicate.
   *
   * @post get
   * @var string
   */
  public $k_mail_pattern = '';

  /**
   *  Key of the duplicated mail pattern.
   *
   * @post get,result
   * @var string
   */
  public $k_pattern_mail_duplicate = '';
}

?>
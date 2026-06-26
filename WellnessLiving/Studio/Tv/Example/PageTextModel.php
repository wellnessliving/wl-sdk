<?php

namespace WellnessLiving\Studio\Tv\Example;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get example text data.
 *
 * @method WlModelRequest get() Get text data.
 */
class PageTextModel extends WlModelAbstract
{
  /**
   * Group ID.
   *
   * @get get
   * @var int
   */
  public $id_group = 0;

  /**
   * Key page.
   *
   * @get get
   * @var string
   */
  public $k_page = '';

  /**
   * Authorization password.
   *
   * @get get
   * @var string
   */
  public $s_password = '';

  /**
   * Backend text data.
   *
   * @get result
   * @var string
   */
  public $text_data = '';
}

?>
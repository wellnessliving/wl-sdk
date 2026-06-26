<?php

namespace WellnessLiving\Studio\Tv\Example;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get example table data.
 *
 * @method WlModelRequest get() Get text data.
 */
class PageTableModel extends WlModelAbstract
{
  /**
   * Table data.
   *
   * @get result
   * @var string[][][]
   */
  public $a_data;

  /**
   * Group ID.
   *
   * @get get
   * @var int
   */
  public $id_group = 0;

  /**
   * Authorization password.
   *
   * @get get
   * @var string
   */
  public $s_password = '';

  /**
   * Table description.
   *
   * @get result
   * @var string
   */
  public $text_title;
}

?>
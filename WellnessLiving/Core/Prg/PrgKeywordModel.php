<?php

namespace WellnessLiving\Core\Prg;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for generating keywords for php/sql editor on programmers page.
 *
 * @method WlModelRequest get()
 */
class PrgKeywordModel extends WlModelAbstract
{
  /**
   * List of keywords.
   *
   * @get result
   * @var array
   */
  public $a_keyword;

  /**
   * Mode for load keyword.
   *
   * @get get
   * @var int
   */
  public $id_mode = '';
}

?>
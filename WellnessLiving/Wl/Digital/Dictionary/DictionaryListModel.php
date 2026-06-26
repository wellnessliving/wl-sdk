<?php

namespace WellnessLiving\Wl\Digital\Dictionary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to work with list of words, which can mark that product is digital.
 *
 * @method WlModelRequest get() Returns list of words, which can mark that product is digital.
 */
class DictionaryListModel extends WlModelAbstract
{
  /**
   * A list of curves partner.
   *
   * @get result
   * @var array[]|null
   */
  public $a_list;
}

?>
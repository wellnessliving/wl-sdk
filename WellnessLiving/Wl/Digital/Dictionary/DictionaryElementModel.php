<?php

namespace WellnessLiving\Wl\Digital\Dictionary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to work with one word, which can mark that product is digital.
 *
 * @method WlModelRequest delete() Deletes word.
 * @method WlModelRequest get() Returns word value.
 * @method WlModelRequest post() Updates and adds word value.
 */
class DictionaryElementModel extends WlModelAbstract
{
  /**
   * Key of the word to get, change or remove.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_digital_dictionary;

  /**
   * Text of the word.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_word;
}

?>
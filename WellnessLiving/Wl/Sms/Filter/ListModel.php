<?php

namespace WellnessLiving\Wl\Sms\Filter;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns and updates information about sms filter keywords
 *
 * @method WlModelRequest get() Gets the blocked keyword list for the region.
 * @method WlModelRequest post() Saves the blocked keyword list for a region. Then After saving, {@link \Wl\Sms\Filter\ListApi::$text_keyword_list} Is sorted alphabetically.
 */
class ListModel extends WlModelAbstract
{
  /**
   * The ID of the region. One of {@link FilterMessage::REGION}
   *
   * @get get
   * @post get
   * @var null|int
   */
  public $id_locale = null;

  /**
   * List of keywords to block. The keywords are seperated by newlines.
   *
   * @get result
   * @post get,result
   * @var null|string
   */
  public $text_keyword_list = null;
}

?>
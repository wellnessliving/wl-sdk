<?php

namespace WellnessLiving\Wl\Hint;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages work of hints.
 *
 * @method WlModelRequest put() Stores that user has seen the hint and returns a flag allowing to show a hint if it has not yet been shown earlier.
 */
class HintModel extends WlModelAbstract
{
  /**
   * A list of hints that should be displayed sequentially.
   *
   * Template should be placed in <tt>Wl\Hint\Xml</tt> as a single xml file.
   *
   * @put post
   * @var array[]
   */
  public $a_template = [];

  /**
   * Key of the business to show the hint in.
   *
   * `null` means to show hint in the system business.
   *
   * @put post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Name of the hint`s xml to be shown. An empty string if none of the hints should be shown.
   *
   * @put result
   * @var bool
   */
  public $text_template_show = '';

  /**
   * The user who will be shown a hint.
   *
   * @put post
   * @var string
   */
  public $uid = '';
}

?>
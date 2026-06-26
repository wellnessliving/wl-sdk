<?php

namespace WellnessLiving\Wl\Book\Repeat\Panel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancel form panel template settings API.
 *
 * @method WlModelRequest get()
 */
class PanelModel extends WlModelAbstract
{
  /**
   * Output HTML content.
   *
   * @get result
   * @var string
   */
  public $html_content;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit;

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>
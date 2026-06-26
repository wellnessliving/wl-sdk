<?php

namespace WellnessLiving\Wl\Page\Backend\Header\ImportPopup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Import popup API.
 * This is a banner that can be enabled at the time of import.
 *
 * @method WlModelRequest get() Gives popup settings.
 * @method WlModelRequest put() Updates the content visibility flag.
 */
class ImportPopupModel extends WlModelAbstract
{
  /**
   * Content visibility flag.
   * <tt>true</tt> if the popup should be visible or <tt>false</tt> otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_visible = false;

  /**
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Should a popup be shown? <tt>true</tt> - show, <tt>false</tt> - do not show.
   *
   * @get result
   * @var array
   */
  public $show_import_popup;

  /**
   * Should full content be shown? <tt>true</tt> - show, <tt>false</tt> - do not show.
   *
   * @get result
   * @var bool
   */
  public $show_import_popup_full;
}

?>
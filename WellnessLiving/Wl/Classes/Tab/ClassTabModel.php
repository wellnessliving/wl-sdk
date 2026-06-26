<?php

namespace WellnessLiving\Wl\Classes\Tab;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for editing class tab.
 *
 * @method WlModelRequest delete() Hides the tab.
 * @method WlModelRequest post() Edits or creates new tab.
 */
class ClassTabModel extends WlModelAbstract
{
  /**
   * ID of class tab object. One of {@link TabSid} constants.
   * <tt>null</tt> to hide class tab.
   *
   * @post post
   * @var int|null
   */
  public $id_class_tab_object;

  /**
   * Id of class tab type if this class tab is system default. One of {@link TabSid} constants.
   * <tt>null</tt> to hide class tab or if class tab is not system default.
   *
   * @post post
   * @var int|null
   */
  public $id_class_tab_system;

  /**
   * Business key.
   * <tt>null</tt> to hide class tab.
   *
   * @post post
   * @var string|null
   */
  public $k_business;

  /**
   * Class tab key.
   * <tt>null</tt> to create new class tab.
   *
   * @delete get
   * @post get,result
   * @var string|null
   */
  public $k_class_tab;

  /**
   * Class tab title.
   * <tt>null</tt> to hide class tab.
   *
   * @post post
   * @var string|null
   */
  public $text_title;
}

?>
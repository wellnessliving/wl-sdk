<?php

namespace WellnessLiving\Wl\Toast;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to manage toast messages.
 *
*/
class ToastModel extends WlModelAbstract
{
  /**
   * Array of result toasts.
   *
   * @get result
   * @var array
    */
  public $a_toast;

  /**
   * @put post
   * @var string[]
   */
  public $a_toast_list;

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * @get get
   * @put get
   * @var string
   */
  public $uid;
}

?>
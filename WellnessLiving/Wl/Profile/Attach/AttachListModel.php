<?php

namespace WellnessLiving\Wl\Profile\Attach;

use WellnessLiving\WlModelAbstract;

/**
 * Manages client attachment list.
 */
class AttachListModel extends WlModelAbstract
{
  /**
   * List of client attach.
   *
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = true;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The filter phrase to filter attach by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>
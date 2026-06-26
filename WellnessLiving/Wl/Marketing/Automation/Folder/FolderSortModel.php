<?php

namespace WellnessLiving\Wl\Marketing\Automation\Folder;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class to work with sorting of automation folders.
 *
 * @method WlModelRequest post() Change the order of folders.
 */
class FolderSortModel extends WlModelAbstract
{
  /**
   * Sorted keys of folders.
   *
   * @post post
   * @var string[]
   */
  public $a_folder = [];

  /**
   * Business key.
   * `null` to use the system business.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;
}

?>
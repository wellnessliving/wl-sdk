<?php

namespace WellnessLiving\Wl\Marketing\Automation\Folder;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to work with moving the automation to the folder.
 *
 * @method WlModelRequest get() Retrieve list of folders where the automation can be moved. The list does not contain the folder where the automation is currently located. Also retrieves the title of the automation and the title of the folder where it is currently located.
 * @method WlModelRequest post() Move the automation to another folder. If the folder key is empty, the automation will be moved to the default folder.
 */
class FolderMapModel extends WlModelAbstract
{
  /**
   * List of folders where automation can be moved.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>string `k_folder`</dt>
   *   <dd>
   *     Folder key. Empty string for the default folder.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Folder title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_folder = [];

  /**
   * Automation key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_automation = '';

  /**
   * Business key.
   * `null` to use the system business.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Folder key where the automation should be moved.
   * If `null`, the automation will be moved to the default folder.
   *
   * @post get
   * @var string|null
   */
  public $k_folder_move = null;

  /**
   * Folder key where the automation is currently located.
   * `null` if the automation is in the default folder.
   *
   * @get result
   * @var string|null
   */
  public $k_folder_origin = null;

  /**
   * Title of the automation.
   *
   * @get result
   * @var string
   */
  public $text_automation = '';

  /**
   * Title of the folder in which the automation is located.
   *
   * @get result
   * @var string
   */
  public $text_folder_origin = '';
}

?>
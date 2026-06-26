<?php

namespace WellnessLiving\Wl\Marketing\Automation\Folder;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for managing automation folders.
 *
 * @method WlModelRequest delete() Delete a folder. Automations in the folder will be moved to another folder or to the default folder.
 * @method WlModelRequest get() Get list of folders in the business.
 * @method WlModelRequest post() Create or edit a folder.
 */
class AutomationFolderModel extends WlModelAbstract
{
  /**
   * List of custom folders in the business.
   * If <tt>k_folder</tt> is passed, the list not contains the folder with this key.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>string `k_folder`</dt>
   *   <dd>Folder key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Folder title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_folder = [];

  /**
   * Count of automations in the folder.
   * If <tt>k_folder</tt> is not passed, the value is always <tt>0</tt>.
   *
   * @get result
   * @var int
   */
  public $i_automation = 0;

  /**
   * Business key where the folder is managed.
   * `null` to use the system business of the current user.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Folder key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_folder = '';

  /**
   * Key of the folder where to move automations after deleting the current folder.
   * If not passed, automations are moved to the default folder.
   *
   * @delete get
   * @var string
   */
  public $k_folder_move = '';

  /**
   * Title of the folder.
   *
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>
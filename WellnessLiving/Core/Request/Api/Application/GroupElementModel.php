<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete group.
 *
 * @method WlModelRequest delete() Deletes a group.
 * @method WlModelRequest get() Returns information about a group.
 * @method WlModelRequest post() Saves a group.
 */
class GroupElementModel extends WlModelAbstract
{
  /**
   * If a group is edited, its key is stored here.
   *
   * <tt>null</tt> if a new group should be created.
   * This value is required for edit and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_application_group = null;

  /**
   * Title of the group.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_access = '';

  /**
   * Title of the group.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_privilege = '';

  /**
   * Title of the group.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>
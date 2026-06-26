<?php

namespace WellnessLiving\Wl\Profile\Merge;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to multiple merge of clients.
 *
 * @method WlModelRequest post() Executes merging of clients.
 */
class ProfileMergeModel extends WlModelAbstract
{
  /**
   * List of fields to save.
   *
   * Keys are keys of fields.
   * Values are keys of users from whose profile field value is needed save.
   *
   * @post get
   * @var array
   */
  public $a_field_save = [];

  /**
   * List of user keys to merge.
   *
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Key of current business.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of main user.
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var string|null
   */
  public $uid_main;
}

?>
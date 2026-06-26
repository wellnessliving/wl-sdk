<?php

namespace WellnessLiving\Core\Tool\Combobox;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Combobox management.
 *
 * @method WlModelRequest post()
 */
class ToolComboboxModel extends WlModelAbstract
{
  /**
   * A data additional.
   * Various parameters for comboboxes that depend on the specific combobox.
   *
   * @post post
   * @var array
   */
  public $a_data_additional = [];

  /**
   * A filter.
   * Various parameters for comboboxes that depend on the specific combobox.
   *
   * @post post
   * @var array
   */
  public $a_filter = [];

  /**
   * Search result.
   * The structure of the result depends on the specific combobox.
   *
   * @post result
   * @var array
   */
  public $a_list = [];

  /**
   * CID of a combobox class.
   * `null` until initialized.
   *
   * @post post
   * @var int|null
   */
  public $cid = null;

  /**
   * Count of non-service items in the list.
   *
   * @post result
   * @var int
   */
  public $i_count = 0;

  /**
   * CSS class for the comment.
   *
   * @post result
   * @var string
   */
  public $s_comment_class = '';

  /**
   * ID of the combobox.
   *
   * @max-length 128
   * @post post,result
   * @var string
   */
  public $s_id = '';

  /**
   * Combobox field name.
   *
   * @max-length 128
   * @post post
   * @var string
   */
  public $s_name = '';

  /**
   * Value to search.
   *
   * @max-length 32
   * @post post
   * @var string
   */
  public $s_value = '';
}

?>
<?php

namespace WellnessLiving\Core\Tool\Combobox;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Service functions for combobox management.
 *
 * @method WlModelRequest post()
 */
class ToolComboboxServiceModel extends WlModelAbstract
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
   * Filter data.
   * Various parameters for comboboxes that depend on the specific combobox.
   *
   * @post post
   * @var array
   */
  public $a_filter = [];

  /**
   * CID of a combobox class.
   * `null` until initialized.
   *
   * @post post
   * @var int|null
   */
  public $cid = null;

  /**
   * Title for input field.
   *
   * @post result
   * @var string
   */
  public $s_comment = '';

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
   * @post post
   * @var string
   */
  public $s_id = '';

  /**
   * Key of the combobox.
   *
   * @max-length 128
   * @post post,result
   * @var string
   */
  public $s_key = '';

  /**
   * The name of the combobox.
   *
   * @max-length 128
   * @post post
   * @var string
   */
  public $s_name = '';

  /**
   * Value of combobox.
   *
   * @max-length 32
   * @post post,result
   * @var string
   */
  public $s_value = '';
}

?>
<?php

namespace WellnessLiving\Wl\Profile\Attach;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to conduct attached files.
 *
 * @method WlModelRequest get() Gets user's attached files.
 * @method WlModelRequest post() Saves user's attaches.
 */
class ProfileAttachModel extends WlModelAbstract
{
  /**
   * List of attaches.
   *
   * @get result
   * @var array[]
   */
  public $a_attach;

  /**
   * Comments for exists attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field attach_comment
   * @post post
   * @var array
   */
  public $a_attach_comment = [];

  /**
   * New files for exists attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field attach_file
   * @post post
   * @var array
   */
  public $a_attach_file = [];

  /**
   * New names for exists attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field attach_name
   * @post post
   * @var array
   */
  public $a_attach_name = [];

  /**
   * Old attaches which must be kept.
   * If this field does not contain an attach, it will be removed with POST.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field attach_save
   * @post post
   * @var array
   */
  public $a_attach_save = [];

  /**
   * Comments for new attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field new_attach_comment
   * @post post
   * @var string[]
   */
  public $a_new_attach_comment = [];

  /**
   * Files for new attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field new_attach_file
   * @post post
   * @var array[]
   */
  public $a_new_attach_file = [];

  /**
   * Names for new attaches.
   *
   * Strange name for compatibility with old server side.
   *
   * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
   *
   * @field new_attach_name
   * @post post
   * @var string[]
   */
  public $a_new_attach_name = [];

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>
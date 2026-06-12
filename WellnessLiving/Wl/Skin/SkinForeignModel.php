<?php

namespace WellnessLiving\Wl\Skin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\RsSkinSid;

/**
 * Allows to create, update and remove foreign widgets.
 *
 * Requires a special privilege for the application. Contact WellnessLiving support to get it.
 */
class SkinForeignModel extends WlModelAbstract
{
  /**
   * Data specific for the skin type.
   *
   * All fields are optional and may be omitted if not needed.
   *
   * For Lead Capture widget it may contain:
   *
   * @post post
   * @put post
   * @var array
   */
  public $a_data_specific = [];

  /**
   * Profile fields, which should be shown on the widget and if they are required or optional.
   *
   * @post post
   * @put post
   * @var array
   */
  public $a_fields = [];

  /**
   * Skin type, one of {@link RsSkinSid} constants.
   *
   * @delete get
   * @post get
   * @put get
   * @var int
   */
  public $id_skin = 0;

  /**
   * Key of the business.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Skin key.
   *
   * @delete result
   * @post result
   * @put result
   * @var string
   */
  public $k_skin = '0';

  /**
   * Foreign skin key.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $s_foreign_id = '';

  /**
   * Name of the widget.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_name = '';
}

?>
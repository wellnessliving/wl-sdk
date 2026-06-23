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
   * <dl>
   *   <dt>bool `is_add_lead`</dt>
   *   <dd>`true` if it can be used in staff back office to add leads by staff member.</dd>
   * 
   *   <dt>bool `is_welcome_email`</dt>
   *   <dd>`true` if welcome email should be sent to each added lead.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>
   *     Key of the purchase option to be granted to each added lead for free.
   *   
   *   </dd>
   * 
   *   <dt>bool `is_redirect_self`</dt>
   *   <dd>`true` if redirection after lead is captured should be done in the same tab, `false` - in a new tab.</dd>
   * 
   *   <dt>string `url_redirect`</dt>
   *   <dd>URL for redirection after lead is captured.</dd>
   * 
   *   <dt>string `text_confirmation`</dt>
   *   <dd>Confirmation text to be shown after lead is added.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array
   */
  public $a_data_specific = [];

  /**
   * Profile fields, which should be shown on the widget and if they are required or optional.
   *
   * <dl>
   *   <dt>string `k_field`</dt>
   *   <dd>Field key. </dd>
   * 
   *   <dt>bool `is_required`</dt>
   *   <dd>`true` if field should be required, `false` - optional.</dd>
   * </dl>
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
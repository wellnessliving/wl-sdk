<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;

/**
 * Tool to get information for "Lead capture" widget and save user from this widget.
 */
class LeadModel extends WlModelAbstract
{
  /**
   * List of user's fields to save.
   * Keys - field keys (which are returned for every element of
   * {@link \WellnessLiving\Wl\Lead\LeadModel::$a_field_list}); values - field values.
   *
   * @post post
   * @var array
   */
  public $a_field_data = [];

  /**
   * List of profile fields in business. Every element has next keys:
   * <dl>
   *   <dt>
   *      array[] <var>a_item</var>
   *   </dt>
   *   <dd>
   *     List of possible options for a field value. Not empty for fields <tt>select</tt> only.
   *     Every element has next keys:
   *     <dl><dt>string <var>s_id</var></dt><dd>Option ID.</dd>
   *     <dt>string <var>text_title</var></dt><dd>Option title.</dd></dl>
   *   </dd>
   *   <dt>
   *     int <var>id_field_general</var>
   *   </dt>
   *   <dd>
   *     Type of general field. One of constants {@link \WellnessLiving\Wl\Field\WlFieldGeneralSid}.
   *     Not empty for fields <tt>general</tt> only.
   *   </dd>
   *   <dt>
   *     int <var>id_field_type</var>
   *   </dt>
   *   <dd>
   *     Field type. One of constants {@link \WellnessLiving\Wl\Field\RsFieldTypeSid}.
   *   </dd>
   *   <dt>
   *     bool <var>is_require</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if field is mandatory; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_field</var>
   *   </dt>
   *   <dd>
   *     Field key.
   *   </dd>
   *   <dt>
   *     string <var>text_field</var>
   *   </dt>
   *   <dd>
   *     Field title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_field_list = [];

  /**
   * Skin configuration:
   * <dl><dt>array <var>a_style</var></dt><dd>General style settings.</dd>
   * <dt>array <var>background</var></dt><dd>Background settings.</dd>
   * <dt>array <var>field-font</var></dt><dd>Font settings.</dd>
   * <dt>array <var>header-text</var></dt><dd>Header settings.</dd>
   * <dt>array <var>info-show</var></dt><dd>Information settings.</dd>
   * <dt>array <var>submit-background</var></dt><dd>Settings of submit button background.</dd>
   * <dt>array <var>submit-font</var></dt><dd>Settings of submit button font.</dd>
   * <dt>array <var>submit-text</var></dt><dd>Settings of submit button text.</dd></dl>
   *
   * @get result
   * @var array
   */
  public $a_skin = [];

  /**
   * Key of business to which new user must be captured.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of skin to use.
   * Empty to use system default skin.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_skin = '0';

  /**
   * Characters to pass captcha test.
   * Not necessary if GET method has returned empty {@link \WellnessLiving\Wl\Lead\LeadModel::$url_captcha}.
   *
   * @post post
   * @var string
   */
  public $s_captcha = '';

  /**
   * Key of captured user.
   *
   * @post result
   * @var string
   */
  public $uid;

  /**
   * URL to load image with captcha test.
   * Empty string if it is not necessary to pass captcha test.
   *
   * @get result
   * @var string
   */
  public $url_captcha = '';
}

?>
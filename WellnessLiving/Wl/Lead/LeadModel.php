<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information from the Lead Capture widget and saves a new user’s information.
 *
 * A user can be added to a second business by adding them first as a lead. If your business uses Enterprise Cloud,
 * there may be a restriction where clients can only be members in one enterprise location (travellers in all
 * other enterprise locations).
 *
 * This endpoint using captcha check.
 *  To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 *  For this API an action is `1072`.
 */
class LeadModel extends WlModelAbstract
{
  /**
   * A list of fields containing the lead information.
   * The keys are the field keys and values are field values.
   *
   * @post post
   * @var array
   */
  public $a_field_data = [];

  /**
   * A list of profile fields in the business. Every element has the following keys:
   * <dl>
   *   <dt>
   *      array[] <var>a_item</var>
   *   </dt>
   *   <dd>
   *     A list of possible options for an HTML select field. This value is only used if this field is an HTML select.
   *     Every element has the following keys:
   *     <dl>
   *       <dt>string <var>s_id</var></dt>
   *       <dd>The option ID.</dd>
   *       <dt>string <var>text_title</var></dt>
   *       <dd>The option title.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     int <var>id_field_general</var>
   *   </dt>
   *   <dd>
   *     The type of the general field. This is one of the {@link \WellnessLiving\RsFieldGeneralSid}.
   *     This value is only set if the field is one of the general fields.
   *   </dd>
   *   <dt>
   *     int <var>id_field_type</var>
   *   </dt>
   *   <dd>
   *     The field type. This is one of the {@link \WellnessLiving\RsFieldTypeSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_require</var>
   *   </dt>
   *   <dd>
   *     If `true`, then the field is mandatory. If `false`, then the field isn't mandatory.
   *   </dd>
   *   <dt>
   *     string <var>k_field</var>
   *   </dt>
   *   <dd>
   *     The field key.
   *   </dd>
   *   <dt>
   *     string <var>text_field</var>
   *   </dt>
   *   <dd>
   *     The field title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_field_list;

  /**
   * The skin configuration:
   * <dl>
   *   <dt>array <var>a_style</var></dt><dd>The general style settings.</dd>
   *   <dt>array <var>background</var></dt><dd>The background settings.</dd>
   *   <dt>array <var>field-font</var></dt><dd>The font settings.</dd>
   *   <dt>array <var>header-text</var></dt><dd>The header settings.</dd>
   *   <dt>array <var>info-show</var></dt><dd>The information settings.</dd>
   *   <dt>array <var>submit-background</var></dt><dd>The settings for the submit button background.</dd>
   *   <dt>array <var>submit-font</var></dt><dd>The settings for the submit button font.</dd>
   *   <dt>array <var>submit-text</var></dt><dd>The settings for the submit button text.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_skin;

  /**
   * The key of business to which the new user must be captured.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the widget skin. If left empty, then the default skin is used.
   * This will be the Lead Capture widget skin with "Use this widget for the Add Lead form" selected.
   * If your business doesn't have a skin selected, this endpoint will default to the system-wide default,
   * which may lack fields your business requires when adding a lead or a client.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_skin = '0';

  /**
   * The characters entered by the lead for the captcha test.
   * This isn't necessary if the GET method returned an empty {@link \WellnessLiving\Wl\Lead\LeadModel::$url_captcha}.
   * This field isn't necessary if the GET method returned an empty {@link \WellnessLiving\Wl\Lead\LeadModel::$url_captcha}.
   *
   * @post post
   * @var string
   */
  public $s_captcha = '';

  /**
   * The key of the new user.
   *
   * @post result
   * @var string
   */
  public $uid;

  /**
   * The URL to load the image with a captcha test.
   * This string is empty if it's not necessary to pass a captcha test.
   *
   * @get result
   * @var string
   */
  public $url_captcha;
}

?>
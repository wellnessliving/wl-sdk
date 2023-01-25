<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;

/**
 * Information of a certain business.
 */
class DataModel extends WlModelAbstract
{
  /**
   * The float values of predefined tips.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var float[]|null
   */
  public $a_tip_predefine = null;

  /**
   * Business category ID of the business.
   *
   * Constant from {@link BusinessCategorySid}.
   *
   * @get result
   * @var int
   */
  public $id_category;

  /**
   * The Locale ID, used to search geo items.
   *
   * @get result
   * @var int
  */
  public $id_locale = 0;

  /**
   * <tt>true</tt> if clients can enter progress log; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var bool|null
   */
  public $is_progress_client = null;

  /**
   * <tt>true</tt> if verification of the progress log by a staff member is required; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var bool|null
   */
  public $is_progress_verify = null;

  /**
   * <tt>true</tt> if tips are available in the business; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var bool|null
   */
  public $is_tip = null;

  /**
   * <tt>true</tt> if the business has the “No tip” option displayed; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var bool|null
   */
  public $is_tip_deny = null;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The business key obtained by the security token.
   *
   * @get result
   * @var string
   */
  public $k_business_token = '0';

  /**
   * The currency key of the given business or system currency if the business didn't pass.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $k_currency = null;

  /**
   * The reply-to email address.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_reply_mail = null;

  /**
   * The reply-to business name.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_reply_name = null;

  /**
   * The business address.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $text_office_address = null;

  /**
   * The authorization token.
   * May be used instead of {@link \WellnessLiving\Wl\Business\DataModel::$k_business}.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * The business title.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $text_title = null;

  /**
   * The Facebook page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_facebook = null;

  /**
   * The Google+ page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_google = null;

  /**
   * The logo URL.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_logo = null;

  /**
   * The Twitter page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_twitter = null;
}

?>
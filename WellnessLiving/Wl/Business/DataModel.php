<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;

/**
 * Information for a specified business.
 */
class DataModel extends WlModelAbstract
{
  /**
   * List of all business services and their availability data.
   * Array, where keys are sids from {@link \WellnessLiving\Wl\Service\ServiceSid} and values are boolean:
   * <tt>true</tt> - if service is enabled in the business, <tt>false</tt> otherwise.
   *
   * @get result
   * @var array
   */
  public $a_service_list;

  /**
   * The list of predefined tips in percentages.
   *
   * @get result
   * @var float[]
   */
  public $a_tip_predefine;

  /**
   * Maximum business image height.
   *
   * @get get
   * @var int
   */
  public $i_logo_height = 100;

  /**
   * Maximum business image width.
   *
   * @get get
   * @var int
   */
  public $i_logo_width = 220;

  /**
   * Business category ID of the business.
   *
   * @get result
   * @see \WellnessLiving\RsBusinessCategorySid
   * @var int
   */
  public $id_category;

  /**
   * The Locale ID, used to search geo items.
   *
   * @get result
   * @see \WellnessLiving\Core\Locale\LocaleSid
   * @var int
   */
  public $id_locale;

  /**
   * Rank type ID of the business.
   *
   * Constant from {@link \WellnessLiving\RsRankTypeSid}.
   *
   * <tt>null</tt> if business does not have a rank type.
   *
   * @get result
   * @var int|null
   */
  public $id_rank_type;

  /**
   * The region ID. This indicates the data center where the information about the business is stored.
   * One of the {@link \WellnessLiving\WlRegionSid} constants.
   *
   * Requests made to different regions can lead to known issues such as responses indicating that the
   * business (or its elements) doesn't exist. This is because databases on different data centers are
   * independent. For example, performing a request to the US cluster for a list of classes for an AU
   * cluster business will return an empty list.
   *
   * @get result
   * @var int
   */
  public $id_region;

  /**
   * Whether surcharges to client payments are enabled in the business.
   *
   * @get result
   * @var bool
   */
  public $is_apply_surcharge = false;

  /**
   * Whether business is multiple location.
   * Including inactive locations.
   *
   * @get result
   * @var bool
   */
  public $is_location_multiple;

  /**
   * <tt>true</tt> if clients can enter progress log; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_progress_client;

  /**
   * <tt>true</tt> if verification of the progress log by a staff member is required; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_progress_verify;

  /**
   * Whether quizzes available in the business.
   *
   * @get result
   * @var bool
   */
  public $is_quiz_available = false;

  /**
   * <tt>true</tt> if tips are available in the business; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_tip;

  /**
   * <tt>true</tt> if the business has the "No tip" option displayed; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_tip_deny;

  /**
   * <tt>true</tt> if client must to sign after selecting the tip; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_tip_sign;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The business key obtained by the security token {@link \WellnessLiving\Wl\Business\DataModel::$text_token}.
   * Client side can use this way if it does not know business key but knows authorization token.
   *
   * @get result
   * @var string
   */
  public $k_business_token;

  /**
   * The currency key of the given business or system currency if the business didn't pass.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * The reply-to email address.
   *
   * @get result
   * @var string
   */
  public $s_reply_mail;

  /**
   * The reply-to business name.
   *
   * @get result
   * @var string
   */
  public $s_reply_name;

  /**
   * The business address.
   *
   * @get result
   * @var string
   */
  public $text_office_address;

  /**
   * The business title.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * The authorization token.
   * This may be used instead of {@link \WellnessLiving\Wl\Business\DataModel::$k_business} to
   * identify a business.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * The Facebook page.
   *
   * @get result
   * @var string
   */
  public $url_facebook;

  /**
   * The Google+ page.
   *
   * @get result
   * @var string
   */
  public $url_google;

  /**
   * Instagram page.
   * {@link Wl\Business\BusinessInfo::$url_instagram}.
   *
   * @get result
   * @var string
   */
  public $url_instagram = '';

  /**
   * Linkedin profile.
   * {@link Wl\Business\BusinessInfo::$url_linkedin}.
   *
   * @get result
   * @var string
   */
  public $url_linkedin = '';

  /**
   * The logo URL.
   *
   * @get result
   * @var string
   */
  public $url_logo;

  /**
   * Image stub in case the business logo is not loaded.
   *
   * @get result
   * @var string
   */
  public $url_logo_empty;

  /**
   * The Twitter page.
   *
   * @get result
   * @var string
   */
  public $url_twitter;

  /**
   * Business website.
   *
   * @get result
   * @var string
   */
  public $url_website;

  /**
   * YouTube website.
   * {@link Wl\Business\BusinessInfo::$url_youtube}.
   *
   * @get result
   * @var string
   */
  public $url_youtube = '';
}

?>
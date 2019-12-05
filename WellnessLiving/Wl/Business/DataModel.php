<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;

/**
 * Information of a certain business.
 */
class DataModel extends WlModelAbstract
{
  /**
   * Float values of predefined tips.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var float[]|null
   */
  public $a_tip_predefine = null;

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
   * <tt>true</tt> if verification of progress log by staff member is required; <tt>false</tt> otherwise.
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
   * <tt>true</tt> if the business allow “No tip” option to display; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var bool|null
   */
  public $is_tip_deny = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Business key obtained by security token.
   *
   * @get result
   * @var string
   */
  public $k_business_token = '0';

  /**
   * Reply-to email address.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_reply_mail = null;

  /**
   * Reply-to business name.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_reply_name = null;

  /**
   * Business address.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $text_office_address = null;

  /**
   * Authorization token.
   * May be used instead of {@link \WellnessLiving\Wl\Business\DataModel::$k_business}.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * Business title.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $text_title = null;

  /**
   * Facebook page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_facebook = null;

  /**
   * Google+ page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_google = null;

  /**
   * Logo URL.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_logo = null;

  /**
   * Twitter page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_twitter = null;
}

?>
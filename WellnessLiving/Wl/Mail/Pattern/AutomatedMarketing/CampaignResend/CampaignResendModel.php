<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for resending of mail campaign.
 *
 * @method WlModelRequest get() Retrieves particular information about campaign.
 * @method WlModelRequest post() Performs resending of mail campaign.
 */
class CampaignResendModel extends WlModelAbstract
{
  /**
   * The mail pattern live data of the original sent campaign.
   * An array with the following structure:
   *
   * <dl>
   *   <dt>string `dtu_send`</dt>
   *   <dd>Date of sending the campaign.</dd>
   * 
   *   <dt>string `text_campaign`</dt>
   *   <dd>Body text of the campaign.</dd>
   * 
   *   <dt>string `text_subject`</dt>
   *   <dd>Subject of the campaign.</dd>
   * 
   *   <dt>string `text_preview`</dt>
   *   <dd>Preview of the mail body as rendered in the mail client (may be empty).</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_mail_pattern_live = [];

  /**
   * The time of the campaign resending, in the location's timezone.
   * An array with the following structure:
   *
   * <dl>
   *   <dt>int `i_hour`</dt>
   *   <dd>The hour component.</dd>
   * 
   *   <dt>int `i_minute`</dt>
   *   <dd>The minute component.</dd>
   * 
   *   <dt>bool `is_am`</dt>
   *   <dd>If `true` the visit is in the AM. If `false` it is in the PM.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_time = [];

  /**
   * The scheduled local date, without a time component in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dl_date = '';

  /**
   * Specifies whether the campaign should be sent immediately.
   * If `true`, the campaign will be sent immediately. If `false`, the campaign will be scheduled.
   *
   * @post post
   * @var bool
   */
  public $is_send_now = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Mail pattern live key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_mail_pattern_live = '';

  /**
   * Preview of the mail body as rendered in the mail client.
   *
   * @post post
   * @var string
   */
  public $text_preview = '';

  /**
   * Subject of the mail.
   *
   * @post post
   * @var string
   */
  public $text_subject = '';
}

?>
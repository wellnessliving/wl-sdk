<?php

namespace WellnessLiving\Wl\Business\Search;

use WellnessLiving\WlModelAbstract;

/**
 * API to search business keys by given name and given user email.
 *
 * This endpoint uses captcha check.
 * To pass a captcha you need to study the captcha API documentation, there you will find that you need to send a captcha for a specific action.
 * In this API the action is {@link BusinessSearchCaptcha::CID}.
 */
class BusinessSearchUserModel extends WlModelAbstract
{
  /**
   * Array with business keys that contain given name in their title.
   *
   * @get result
   * @var string[]
   */
  public $a_result = [];

  /**
   * If `true`, the return only active customers, `false` - all business.
   *
   * @get get
   * @var bool
   */
  public $is_customer = true;

  /**
   * User email to search business keys.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * Given business name to search by.
   *
   * @get get
   * @var string
   */
  public $text_name = '';
}

?>
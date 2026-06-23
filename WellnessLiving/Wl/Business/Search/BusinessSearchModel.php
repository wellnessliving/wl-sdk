<?php

namespace WellnessLiving\Wl\Business\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to search business keys by given name.
 *
 * This endpoint uses captcha check.
 * To pass a captcha you need to study the captcha API documentation, there you will find that you need to send a captcha for a specific action.
 * In this API the action is {@link BusinessSearchCaptcha::CID}.
 *
 * @method WlModelRequest get() Searches for businesses by name and returns matching business keys.  Used in internal tools and admin pages to find a business by name or key when only partial information is known. Protected by a captcha to prevent automated enumeration. In strict mode, the title must match exactly; otherwise partial word matches are returned sorted by relevance.
 */
class BusinessSearchModel extends WlModelAbstract
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
   * If `true`, returns only active customer businesses, if `false`, returns all businesses.
   *
   * @get get
   * @var bool
   */
  public $is_strict = false;

  /**
   * Given business name to search by.
   *
   * @get get
   * @var string
   */
  public $text_name = '';
}

?>
<?php

namespace WellnessLiving\Wl\Contact\Member\History\Report\Filter;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Provides list of available Name filter options for contact, mail, and SMS history reports.
 *
 * Options are generated from report history rows with active date and report-type restrictions.
 *
 * @method WlModelRequest get()
 */
class NameFilterOptionModel extends WlModelAbstract
{
  /**
   * Contact methods selected in filter.
   *
   * @get get
   * @var int[]
   */
  public $a_contact_method = [];

  /**
   * Mail types selected in filter.
   *
   * @get get
   * @var int[]
   */
  public $a_mail_type = [];

  /**
   * List of name filter options.
   *
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>string `text_title`</dt>
   *   <dd>Display title for the option.</dd>
   * 
   *   <dt>string `text_value`</dt>
   *   <dd>Value key for the option.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_option_list = [];

  /**
   * SMS direction filter values.
   *
   * @get get
   * @var int[]
   */
  public $a_sms_channel = [];

  /**
   * End date in local format.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start date in local format.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Report kind for which options should be loaded.
   *
   * Available values: `contact`, `mail`, `sms`.
   *
   * @get get
   * @var string
   */
  public $sid_report = 'contact';
}

?>
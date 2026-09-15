<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Report\Customization;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\Customization\CustomizationFormModel;

/**
 * Loads and saves customization form data scoped to a specific SQL query report.
 *
 * Extends {@link CustomizationFormModel} to add {@link ReportQueryCustomizationFormModel::$k_report_query}, which isolates
 *  customization settings (visible buttons, date range, report generation mode) per SQL query
 *  instead of sharing them across all SQL reports for the same business and user.
 *
 * When {@link ReportQueryCustomizationFormModel::$k_report_query} is set, the per-query customization row is loaded first;
 *  if no per-query row exists, the generic shared row is used as a fallback so existing
 *  settings are preserved after the first deployment.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class ReportQueryCustomizationFormModel extends WlModelAbstract
{
  /**
 * Customization form data keyed by report or page CID. Each value has the following structure: 
 *
 * <dl>
 *   <dt>array `a_element`</dt>
 *   <dd>
 *     Form elements keyed by element name. Each element has the following structure:
 *     <dl>
 *       <dt>array `a_field`</dt>
 *       <dd>
 *         Element fields keyed by field alias. Each field has the following structure:
 *         <dl>
 *           <dt>string `text_title`</dt>
 *           <dd>Localized field title.</dd>
 * 
 *           <dt>string `x_value`</dt>
 *           <dd>Current field value.</dd>
 *         </dl>
 *       </dd>
 * 
 *       <dt>int[] `a_report`</dt>
 *       <dd>Report CID list the element applies to.</dd>
 * 
 *       <dt>string `html_title`</dt>
 *       <dd>Localized element title.</dd>
 * 
 *       <dt>string `html_title_tooltip`</dt>
 *       <dd>Localized element tooltip.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `s_form`</dt>
 *   <dd>Form class identifier.</dd>
 * </dl>
 * @get result
 * @post post
 * @var array
 */
  public $a_customization_form = [];

  /**
 * Report page CID.
 *
 * @get get
 * @post get
 * @var int
 */
  public $cid_page = 0;

  /**
 * Report CID.
 *
 * @get get
 * @post get
 * @var int
 */
  public $cid_report = 0;

  /**
 * Business primary key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '0';

  /**
 * SQL query primary key.
 *
 * Scopes the customization record to a specific SQL query.
 * `null` loads the generic shared row as a backward-compatible fallback.
 *
 * @get get
 * @post get
 * @var string|null
 */
  public $k_report_query = null;

  /**
 * Primary key of a saved report.
 *
 * `null` means that report is not saved.
 *
 * @get get
 * @post get
 * @var string|null
 */
  public $k_report_save = null;

  /**
 * Report CID list to that page customization form must be converted. String separated with `,`.
 *
 * May be specified only if {@link CustomizationFormModel::$cid_page} in not empty.
 *
 * @get get
 * @var string
 */
  public $s_report = '';

  /**
 * Current user's primary key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $uid_actor = '0';
}

?>
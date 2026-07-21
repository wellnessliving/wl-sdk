<?php

namespace WellnessLiving\Wl\Report\Customization;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to load and save data for a report customization form.
 *
 * @method WlModelRequest get() Loads customization data of the customization form that corresponds to specified report / report page.  Populates {@link \Wl\Report\Customization\CustomizationFormApi::$a_customization_form} with the customization data of the requested report or report page, optionally converted to the reports listed in {@link \Wl\Report\Customization\CustomizationFormApi::$s_report}.
 * @method WlModelRequest post() Saves given data of a customization form into database.  Stores the customization data supplied in {@link \Wl\Report\Customization\CustomizationFormApi::$a_customization_form} for the requested report or report page and resets the related report configuration cache.
 */
class CustomizationFormModel extends WlModelAbstract
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
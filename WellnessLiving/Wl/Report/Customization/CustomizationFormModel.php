<?php

namespace WellnessLiving\Wl\Report\Customization;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to load data for a customization form.
 *
 * @method WlModelRequest get() Loads customization data of the customization form that corresponds to specified report / report page.
 * @method WlModelRequest post() Saves given data of a customization form into database.
 */
class CustomizationFormModel extends WlModelAbstract
{
  /**
   * Customization form data.
   *
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
   * Page CID.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_report = 0;

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * <tt>null</tt> means that report is not saved.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_report_save = null;

  /**
   * Report CID list to that page customization form must be converted. String separated with <tt>,</tt>.
   *
   * May be specified only if {@link CustomizationFormModel::$cid_page} in not empty.
   *
   * @get get
   * @var string
   */
  public $s_report = '';

  /**
   * @get get
   * @post get
   * @var string
   */
  public $uid_actor = '0';
}

?>
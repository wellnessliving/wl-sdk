<?php

namespace WellnessLiving\Wl\Report\Save;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to manipulate of the saving reports.
 *
 * @method WlModelRequest get() Returns information about saved report.
 * @method WlModelRequest post() Saves new saved report.
 * @method WlModelRequest put() Updates existing saved report.
 */
class ReportSaveModel extends WlModelAbstract
{
  /**
   * Filter raw data of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var array
   *
   * @deprecated Use {@link ReportSaveModel::$json_filter}.
   * This variable do not get empty values of filters from HTML forms.
   */
  public $a_filter;

  /**
   * View widget settings raw data of the saved report.
   *
   * @post post
   * @put post
   * @var array
   */
  public $a_settings;

  /**
   * CID of the controller class.
   *
   * @post post
   * @put post
   * @var int|ReportViewControllerAbstract
   */
  public $cid_controller;

  /**
   * Report category of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var int
   */
  public $id_report_category;

  /**
   * Filter raw data of the saved report. Uses to save empty filter values, actual when empty filter is the same as all
   * values are chosen.
   *
   * Use this value instead of {@lind \Wl\Report\Save\ReportSaveApi::$a_filter}.
   *
   * In this array, key is name of a filter field.
   *
   * Name of the property of that subclass corresponds key in this array.
   *
   * @post post
   * @put post
   * @var string
   */
  public $json_filter = '';

  /**
   * Business key of the saved report.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Report save key.
   *
   * @post post
   * @var string
   */
  public $k_report_config;

  /**
   * Report save key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_report_save;

  /**
   * Description of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_description;

  /**
   * Title of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_title;

  /**
   * UID user's key of the actor.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid_actor;
}

?>
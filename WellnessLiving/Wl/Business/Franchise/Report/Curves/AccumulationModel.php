<?php

namespace WellnessLiving\Wl\Business\Franchise\Report\Curves;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for Curves data files.
 *
 * @method WlModelRequest get() Returns accumulation data.
 * @method WlModelRequest post() Generates SABA files and uploads it to S3.
 */
class AccumulationModel extends WlModelAbstract
{
  /**
   * Progress value.
   *
   * @get result
   * @var float
   */
  public $f_progress;

  /**
   * <tt>true</tt> - accumulation reports exist; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_exists;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;

  /**
   * Link to download archive.
   *
   * @get result
   * @var string
   */
  public $url_download;
}

?>
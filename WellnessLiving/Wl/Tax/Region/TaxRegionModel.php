<?php

namespace WellnessLiving\Wl\Tax\Region;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for regional taxes.
 *
 * @method WlModelRequest get() Returns information for confirmation message in case editing tax for specified business.
 * @method WlModelRequest post() Update tax value and tax status in a region and in businesses in the region.
 */
class TaxRegionModel extends WlModelAbstract
{
  /**
   * Tax value.
   *
   * @get result
   * @post get
   * @var float|null
   */
  public $f_tax_region = null;

  /**
   * Status of tax region.
   *
   * @post get
   * @var bool|null
   */
  public $is_active = null;

  /**
   * <tt>true</tt> - changes of the tax value for the business must be confirmed.
   *
   * @get result
   * @var bool
   */
  public $is_confirm;

  /**
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * @post get
   * @var string
   */
  public $k_tax = '0';
}

?>
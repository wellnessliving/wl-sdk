<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;

/**
 * Information of a certain business.
 */
class DataModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Facebook page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_facebook = null;

  /**
   * Google+ page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_google = null;

  /**
   * Logo URL.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_logo = null;

  /**
   * Twitter page.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var string|null
   */
  public $url_twitter = null;
}

?>
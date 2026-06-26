<?php

namespace WellnessLiving\Wl\Business\NameList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of business names.
 *
 * @method WlModelRequest post() Retrieves names for given business keys.
 */
class NameListModel extends WlModelAbstract
{
  /**
   * List of business keys that are incorrect.
   *
   * @post result
   * @var array
   */
  public $a_business_error;

  /**
   * Each value is the business name.
   *
   * @post result
   * @var array
   */
  public $a_business_name;

  /**
   * Array of business keys, encoded to string to get names for.
   *
   * @post post
   * @var string
   */
  public $s_business = '';
}

?>
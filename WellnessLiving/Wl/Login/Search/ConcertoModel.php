<?php

namespace WellnessLiving\Wl\Login\Search;

use WellnessLiving\WlModelAbstract;

/**
 * Point for business Concerto to search a user by mail or phone.
 */
class ConcertoModel extends WlModelAbstract
{
  /**
   * Business to search user in.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Email to search.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone to search.
   *
   * @get get
   * @var string
   */
  public $text_phone = '';

  /**
   * @get result
   * @var string
   */
  public $uid;
}

?>
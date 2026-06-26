<?php

namespace WellnessLiving\Wl\Import\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for import photo for user.
 *
 * **Important!**
 * **This api used by foreign desktop application.**/
class PhotoModel extends WlModelAbstract
{
  /**
   * User photo.
   *
   * @post post
   * @var array
   */
  public $a_photo = [];

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Member id.
   *
   * @post post
   * @var string
   */
  public $s_member_id = '';
}

?>
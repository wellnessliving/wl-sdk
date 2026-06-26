<?php

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Removes tags from the business.
 *
 * @method WlModelRequest delete() Removes the tag.
 */
class TagModel extends WlModelAbstract
{
  /**
   * The business key of the tags.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * The tag key.
   *
   * @delete get
   * @var string
   */
  public $k_tag = '';
}

?>
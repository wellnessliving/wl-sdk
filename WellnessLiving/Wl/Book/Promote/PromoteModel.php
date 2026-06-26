<?php

namespace WellnessLiving\Wl\Book\Promote;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Book promote processing.
 *
 * @method WlModelRequest post() Promote visit.
 */
class PromoteModel extends WlModelAbstract
{
  /**
   * `null` if not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_mode = null;

  /**
   * ID of business.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Visit ID to promote.
   *
   * @post post
   * @var string
   */
  public $k_visit = '0';

  /**
   * Message about successful promote.
   *
   * @post result
   * @var string
   */
  public $text_message;
}

?>
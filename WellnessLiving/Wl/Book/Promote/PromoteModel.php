<?php

namespace WellnessLiving\Wl\Book\Promote;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Book promote processing.
 *
 * @method WlModelRequest post() Promotes a visit.  Confirms a client's booking for a class or event, or marks it as promoted when no explicit  confirmation is required. The visit must belong to the given business and must be a class  or event booking - appointments are not supported by this endpoint. Returns a message that  describes the outcome: confirmed, promoted, or promoted with a confirmation email pending.
 */
class PromoteModel extends WlModelAbstract
{
  /**
 * ID of the source where a visit was promoted, one of {@link ModeSid} constants.
 *
 * `null` if not initialized yet.
 *
 * @post post
 * @var int|null
 */
  public $id_mode = null;

  /**
 * The business key.
 *
 * @post post
 * @var string
 */
  public $k_business = '0';

  /**
 * The visit key to promote.
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
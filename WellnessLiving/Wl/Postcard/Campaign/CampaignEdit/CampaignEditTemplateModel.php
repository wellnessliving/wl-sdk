<?php

namespace WellnessLiving\Wl\Postcard\Campaign\CampaignEdit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for retrieving an existing postcard template images.
 *
 * @method WlModelRequest get()
 */
class CampaignEditTemplateModel extends WlModelAbstract
{
  /**
   * Postcard key.
   *
   * <tt>null</tt> if existing template not required.
   *
   * @get get
   * @var string
   */
  public $k_postcard;

  /**
   * Back image.
   *
   * @get result
   * @var string
   */
  public $url_back;

  /**
   * Front image.
   *
   * @get result
   * @var string
   */
  public $url_front;
}

?>
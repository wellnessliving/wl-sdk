<?php

namespace WellnessLiving\Wl\Lead\Source;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves Lead Source element.
 */
class LeadSourceElementModel extends WlModelAbstract
{
  /**
   * List of Lead Sources.
   *
   * @post post
   * @var array[]
   */
  public $a_lead_source = [];

  /**
   * Business key.
   *
   * @delete post
   * @post post
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the lead source.
   *
   * @delete post
   * @put result
   * @var string
   */
  public $k_lead_source = '';

  /**
   * Key of the lead source.
   *
   * @delete get
   * @var string
   */
  public $k_lead_source_replace = '';

  /**
   * Name of new lead source item.
   *
   * @put post
   * @var string
   */
  public $text_lead_source = '';
}

?>
<?php

namespace WellnessLiving\Wl\Lead\Stage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Sets the lead stage of a client.
 *
 * @method WlModelRequest post() Sets the lead stage of the client.  If the client is already in this stage, nothing is changed.
 */
class LeadStageUserModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the lead stage to move the client into.
   *
   * @post post
   * @var string
   */
  public $k_lead_stage = '';

  /**
   * Key of the client whose stage is set.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>
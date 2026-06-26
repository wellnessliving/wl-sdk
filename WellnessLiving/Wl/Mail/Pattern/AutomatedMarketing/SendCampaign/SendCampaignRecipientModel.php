<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets quantity of recipients to send notifications to within a campaign.
 *
 * @method WlModelRequest get() Gets quantity of recipients.
 */
class SendCampaignRecipientModel extends WlModelAbstract
{
  /**
   * UID's of recipients.
   *
   * @get result
   * @var string[]
   */
  public $a_uid = [];

  /**
   * ID of the mail form.
   *
   * @get get
   * @var int
   */
  public $id_mail_form = 0;

  /**
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>
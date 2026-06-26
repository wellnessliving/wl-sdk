<?php

namespace WellnessLiving\Wl\Mail\Pattern\Live;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to work with manual notification sending and marketing campaigns.
 *
 * @method WlModelRequest delete()
 */
class MailPatternLiveModel extends WlModelAbstract
{
  /**
   * ID of the form campaign.
   *
   * @delete get
   * @var int
   */
  public $id_mail_form = 1;

  /**
   * Key of the business to remove scheduled campaign from.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the mail pattern to remove scheduled campaign from.
   *
   * @delete get
   * @var string
   */
  public $k_mail_pattern_live = '';

  /**
   * Optional reason, why campaign was removed. Entered by the user.
   *
   * @delete post
   * @var string
   */
  public $text_reason = '';
}

?>
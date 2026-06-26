<?php

namespace WellnessLiving\Wl\Visit\Receipt;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for sending the Visit Receipt email notification.
 *
 * @method WlModelRequest post() Performs data checks, checks the availability of the mail, as well as the access policy. If the checks are successful, the mail will be sent, otherwise the client will see an error.
 */
class ReceiptMailModel extends WlModelAbstract
{
  /**
   * Key of the business in which the visit is located.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The visit key for which the menu buttons will be generated.
   *
   * @post get
   * @var string
   */
  public $k_visit = '0';
}

?>
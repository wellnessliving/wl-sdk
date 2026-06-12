<?php

namespace WellnessLiving\Wl\Pay\Bank\Card\Add;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Pay\Owner\OwnerModel;

/**
 * Adds a payment card to a user’s account.
 * The GET method retrieves an HTML code that contains the fields necessary to provide the information needed to
 * add the payment card.
 * The POST method will actually add the payment card.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 */
class AddModel extends WlModelAbstract
{
  /**
   * An array containing payment card information with the following fields:
   *
   * @post post
   * @var array
   */
  public $a_card_detail = [];

  /**
   * The HTML form containing the fields required to add a card.
   *
   * @get result
   * @var string
   */
  public $html_widget;

  /**
   * The business key number used internally by WellnessLiving.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Pay bank key to delete.
   *
   * @delete get
   * @var string
   */
  public $k_pay_bank = '0';

  /**
   * The payment owner ID. This is different from the user ID. It can be found with
   * the {@link OwnerModel}.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_pay_owner = '0';
}

?>
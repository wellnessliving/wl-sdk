<?php

namespace WellnessLiving\Wl\Zapier\Lead\Action;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Action for create new lead.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put()
 */
class CreateModel extends WlModelAbstract
{
  /**
   * Date of birth of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $dl_birth = '';

  /**
   * Business key for which trigger/action is performed.
   *
   * @delete get
   * @get get
   * @patch get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the lead source.
   *
   * {@link \Wl\Lead\Source\LeadSourceElementApi::LEAD_SOURCE_REPLACE_NONE} if Lead Source is
   * to be unselected for the user.
   *
   * @post post
   * @var string|null
   */
  public $k_lead_source = null;

  /**
   * Home address of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_address = '';

  /**
   * Email name of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * First name of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_name_first = '';

  /**
   * Last name of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_name_last = '';

  /**
   * Phone number of the lead.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_phone = '';

  /**
   * Captured user.
   *
   * @post result
   * @var string
   */
  public $uid = '';
}

?>
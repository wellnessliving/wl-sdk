<?php

namespace WellnessLiving\Wl\Integration\Curves\Partner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete partner.
 *
 * @method WlModelRequest delete() Deletes a partner.
 * @method WlModelRequest get() Returns information about a partner.
 * @method WlModelRequest post() Saves a partner.
 */
class PartnerEditModel extends WlModelAbstract
{
  /**
   * Channel type ID.
   *
   * @get result
   * @post post
   * @rule type-id {@link \Wl\Integration\Curves\ChannelTypeSid}
   * @var int
   */
  public $id_channel_type = null;

  /**
   * Curves country ID.
   *
   * @get result
   * @post post
   * @rule type-id {@link \Wl\Integration\Curves\CurvesCountrySid}
   * @var int
   */
  public $id_curves_country = null;

  /**
   * Deal type ID.
   *
   * @get result
   * @post post
   * @rule type-id {@link \Wl\Integration\Curves\DealTypeSid}
   * @var int
   */
  public $id_deal_type = null;

  /**
   * Reimbursement type ID.
   *
   * @get result
   * @post post
   * @rule type-id {@link \Wl\Insurance\Reimbursement\ReimbursementTypeSid}
   * @var int
   */
  public $id_reimbursement_type = null;

  /**
   * Determines whether the program is active.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_active = null;

  /**
   * Determines whether the ACH account is required.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_reimbursement_information_required = null;

  /**
   * If a partner is edited, its key is stored here.
   *
   * <tt>null</tt> if a new partner should be created.
   * This value is required for edit and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_partner = null;

  /**
   * Partner key in Curves. Need for update wellness program.
   *
   * @get result
   * @var string
   */
  public $s_partner;

  /**
   * Name of the curves partner.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_partner = null;
}

?>
<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Refuse;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete reimbursement refuse.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class ReimbursementRefuseEditModel extends WlModelAbstract
{
  /**
   * Insurance provider key. Primary key in {@link \Wl\Integration\Curves\PartnerSql} table,
   * <tt>null</tt> if field is not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_insurance_provider = null;

  /**
   * Reimbursement refuse key. Primary key in {@link \Wl\Insurance\Reimbursement\Refuse\ReimbursementRefuseSql} table,
   * <tt>null</tt> if field is not set.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_reimbursement_refuse = null;

  /**
   * Code of the reason, which should be unique per partner.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_code = '';

  /**
   * Description of the refuse from provider.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_description_provider = '';

  /**
   * Description of the refuse, which should be shown in reimbursement reports. This field is filled by franchise owner.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_display = '';
}

?>
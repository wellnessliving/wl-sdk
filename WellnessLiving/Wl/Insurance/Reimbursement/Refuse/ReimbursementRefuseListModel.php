<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Refuse;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of reimbursement refuse for editor.
 *
 * @method WlModelRequest get()
 */
class ReimbursementRefuseListModel extends WlModelAbstract
{
  /**
   * A list refuse translate message:
   *
   * <dl>
   *   <dt>string `k_reimbursement_refuse`</dt>
   *   <dd>
   *     Insurance reimbursement refuse key.
   *   </dd>
   * 
   *   <dt>string `text_code`</dt>
   *   <dd>Code of the reason, which should be unique per partner.</dd>
   * 
   *   <dt>string `text_description_provider`</dt>
   *   <dd>Description of the refuse from provider.</dd>
   * 
   *   <dt>string `text_display`</dt>
   *   <dd>
   *     Description of the refuse, which should be shown in reimbursement reports. This field is filled by franchise owner.
   *   </dd>
   * 
   *   <dt>string `text_insurance_provider`</dt>
   *   <dd>Insurance provider name.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_list;

  /**
   * Status of the refuse message.
   *
   * @get get
   * @var int
   */
  public $id_refuse_message = 3;

  /**
   * Insurance provider key.
   *
   * @get get
   * @var string|null
   */
  public $k_insurance_provider = null;

  /**
   * Code of the reason, which should be unique per partner.
   *
   * @get get
   * @var string
   */
  public $text_code = '';
}

?>
<?php

namespace WellnessLiving\Wl\Integration\Curves\Partner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of curves partner for editor.
 *
 * @method WlModelRequest get()
 */
class PartnerListModel extends WlModelAbstract
{
  /**
   * A list of curves partner.
   *
   * @get result
   * @var array[]|null
   */
  public $a_list;
}

?>
<?php

namespace WellnessLiving\Wl\Eml;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to edit EML (email marketing) settings.
 *
 * @method WlModelRequest put()
 */
class EmlEditModel extends WlModelAbstract
{
  /**
   * Eml system ID.
   *
   * @put get
   * @var int
   */
  public $id_eml = 0;

  /**
   * Business key for which eml settings are edited.
   *
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Eml list ID to be set as active.
   *
   * @put post
   * @var string
   */
  public $s_list_id = '';
}

?>
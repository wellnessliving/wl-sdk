<?php

namespace WellnessLiving\Studio\Personnel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for get data of the studio's personnel.
 *
 * @method WlModelRequest get()
 */
class PersonnelModel extends WlModelAbstract
{
  /**
   * A list of studio's personnel, where key is key of the personnel and value is name of the personnel.
   *
   * @get result
   * @var array
   */
  public $a_personnel = [];
}

?>
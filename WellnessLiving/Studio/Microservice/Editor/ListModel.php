<?php

namespace WellnessLiving\Studio\Microservice\Editor;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of microservices.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of microservices. One element contains:
   *
   * @get result
   * @var string[][]
   */
  public $a_list;

  /**
   * Specifies whether to show removed and/or not removed microservices.
   *
   * One of {@link AFlagSid} constants.
   *
   *  * {@link AFlagSid::ON} to show only not removed microservices.
   *  * {@link AFlagSid::OFF} to show only removed microservices.
   *  * {@link AFlagSid::ALL} to show all microservices (removed and not removed).
   *
   * @get get
   * @var int
   * @see AFlagSid
   */
  public $id_remove = 0;
}

?>
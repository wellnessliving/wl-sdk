<?php

namespace WellnessLiving\Wl\Tuition;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to get list of tuition, which gives access to a certain event from the microservice.
 *
 * @method WlModelRequest get()
 */
class TuitionListByEventModel extends WlModelAbstract
{
  /**
   * List of tuition.
   *
   * <dl>
   *   <dt>string `k_tuition`</dt>
   *   <dd>Key of the tuition.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the tuition.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_tuition_list = [];

  /**
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the event to get list of tuition for.
   *
   * @get get
   * @var string
   */
  public $k_event = '';
}

?>
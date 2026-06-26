<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets list of available services for quiz.
 *
 * @method WlModelRequest get()
 */
class ServiceListModel extends WlModelAbstract
{
  /**
   * List of services.
   *
   * @get result
   * @var array
   */
  public $a_service = [];

  /**
   * Business key within which quiz is managed.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Quiz login key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_quiz_login = '';
}

?>
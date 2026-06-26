<?php

namespace WellnessLiving\Wl\Quiz\Response;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for duplicate client response.
 *
 * @method WlModelRequest put()
 */
class ResponseCloneModel extends WlModelAbstract
{
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

  /**
   * Quiz response key.
   *
   * @put get,result
   * @var string
   */
  public $k_quiz_response = '';
}

?>
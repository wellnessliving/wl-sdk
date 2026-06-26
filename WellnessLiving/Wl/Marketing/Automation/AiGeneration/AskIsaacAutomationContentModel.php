<?php

namespace WellnessLiving\Wl\Marketing\Automation\AiGeneration;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for building the ISAAC marketing generation request payload from automation data.
 *
 * Prepares the request body that would be sent to the ISAAC API, but returns it to the client
 *  instead of making the actual API call. This allows the client-side ISAAC widget to send the
 *  request directly.
 *
 * @method WlModelRequest post() Build the ISAAC request payload from automation data without sending the request.
 */
class AskIsaacAutomationContentModel extends WlModelAbstract
{
  /**
   * Call to action data.
   *
   * @post post
   * @var array|null
   */
  public $a_action = null;

  /**
   * Request payload prepared for the ISAAC marketing generation API.
   *
   * @post result
   * @var array
   */
  public $a_request_payload = [];

  /**
   * List of automation steps.
   *
   * @post post
   * @var array
   */
  public $a_step = [];

  /**
   * ID of the trigger of the automation.
   *
   * @post post
   * @var int
   */
  public $id_trigger = 0;

  /**
   * Business key.
   * `null` to use the system business .
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Description of the automation.
   *
   * @post post
   * @var string
   */
  public $text_description = '';

  /**
   * Title of the automation.
   *
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>
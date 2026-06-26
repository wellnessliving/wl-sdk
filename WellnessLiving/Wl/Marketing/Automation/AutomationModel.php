<?php

namespace WellnessLiving\Wl\Marketing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Manages automation data.
 *
 * @method WlModelRequest delete() Removes the automation.
 * @method WlModelRequest get() Gets automation data.
 * @method WlModelRequest post() Create or edit an automation.
 * @method WlModelRequest put() Duplicate an automation.
 */
class AutomationModel extends WlModelAbstract
{
  /**
   * Call to action data.
   *
   * @get result
   * @post post
   * @var array|null
   */
  public $a_action = null;

  /**
   * List of service types connected to pre-built automations.
   *
   * @get result
   * @post post
   * @var array
   * @see WlServiceSid
   */
  public $a_action_service_type = [];

  /**
   * Automation data.
   *
   * @get result
   * @var array[]
   */
  public $a_automation = [];

  /**
   * List of business types connected to pre-built automations.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_business_type = [];

  /**
   * List of automation steps.
   *
   * @post post
   * @var array
   */
  public $a_step = [];

  /**
   * ID of the call to action in the automation.
   *
   * @post post
   * @var int|null
   */
  public $id_action = null;

  /**
   * ID of the label of the automation.
   *
   * @post post
   * @var int|null
   */
  public $id_label = null;

  /**
   * ID of the trigger of the automation.
   *
   * @post post
   * @var int
   */
  public $id_trigger = 0;

  /**
   * Whether the automation is active.
   *
   * @post post
   * @var bool
   */
  public $is_active = false;

  /**
   * Whether to save automation as draft.
   * `null` has different meanings for creation vs update:
   *  - On create: derive draft state from `is_active`.
   *  - On update: keep the current `is_draft` value in the database (do not change it).
   *
   * @post post
   * @var bool|null
   */
  public $is_draft = null;

  /**
   * Whether to duplicate the automation.
   *
   * @put get
   * @var bool
   */
  public $is_duplicate = false;

  /**
   * Whether to use AI (ISAAC) for generating automation message templates.
   * This setting for prebuild only.
   *
   * @post post
   * @var bool
   */
  public $is_isaac_use = false;

  /**
   * Whether retroactive eligibility is enabled for the automation.
   * When `true`, clients who already meet the trigger condition at activation time
   * will be included in the automation audience.
   *
   * @post post
   * @var bool
   */
  public $is_retroactive = false;

  /**
   * Automation key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get,result
   * @var string|null
   */
  public $k_automation = null;

  /**
   * Business key.
   * `null` to use the system business .
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Folder key. Only used when creating a new automation.
   * Ignored during editing - the folder is not changed.
   *
   * `null` to assign new automation to "Uncategorized" folder.
   *
   * @post post
   * @var string|null
   */
  public $k_folder = null;

  /**
   * Command for pre-built automation image save prepare.
   *
   * @post post
   * @var string
   */
  public $s_image_command = '';

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

  /**
   * URL of the pre-built automation image.
   * * `null` if the image is not set or in case of a business automation.
   *
   * @get result
   * @var string|null
   */
  public $url_image = null;
}

?>
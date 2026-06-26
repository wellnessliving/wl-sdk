<?php

namespace WellnessLiving\Wl\Mail\Pattern;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for retrieving available template variables for a given mail notification type and form mode.
 *
 * @method WlModelRequest get() Gets the list of available template variables.
 */
class PatternVariableModel extends WlModelAbstract
{
  /**
   * List of template variables. Each element is array:
   *
   * <dl>
   *   <dt>bool `is_global`</dt>
   *   <dd>Whether variable global or template specific.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Variable description.</dd>
   * 
   *   <dt>string `text_field`</dt>
   *   <dd>Variable field name.</dd>
   * 
   *   <dt>string `text_parameter`</dt>
   *   <dd>Variable name.</dd>
   * </dl>
   * @get result
   * @var bool[][]|string[][]
   */
  public $a_variable = null;

  /**
   * ID of the notification.
   *
   * @get get
   * @var int
   */
  public $id_mail = 0;

  /**
   * SID of the mail form.
   *
   * @get get
   * @var int
   */
  public $id_mail_form = 0;
}

?>
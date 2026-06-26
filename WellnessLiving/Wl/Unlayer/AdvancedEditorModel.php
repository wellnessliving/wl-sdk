<?php

namespace WellnessLiving\Wl\Unlayer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to manage email design preview.
 *
 * @method WlModelRequest get() Gets email variables for merge-tags feature of Unlayer editor. {@link https://docs.unlayer.com/docs/merge-tags}
 */
class AdvancedEditorModel extends WlModelAbstract
{
  /**
   * Array with all mail variables.
   * An array with help data for global and template-specific variables:
   *
   * <dl>
   *   <dt>array[] `a_help_global`</dt>
   *   <dd>
   *     An array with help data for global variables {@link \Wl\Mail\Pattern\MailPattern::variablesHelpData()}:
   *     <dl>
   *       <dt>string `text_description`</dt>
   *       <dd>A variable description.</dd>
   * 
   *       <dt>string `text_parameter`</dt>
   *       <dd>A variable name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_help`</dt>
   *   <dd>
   *     An array with help data for template-specific variables {@link \Wl\Mail\Pattern\MailPattern::variablesHelpData()}:
   *     <dl>
   *       <dt>string `text_description`</dt>
   *       <dd>A variable description.</dd>
   * 
   *       <dt>string `text_parameter`</dt>
   *       <dd>A variable name.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_mail_variables = [];

  /**
   * @get get
   * @var string|null
   */
  public $id_mail = null;

  /**
   * Key of mail pattern.
   *
   * @get get
   * @var string|null
   */
  public $k_mail_pattern = null;
}

?>
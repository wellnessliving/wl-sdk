<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages automation data.
 *
 * @method WlModelRequest get() Gets pre-built automation template data.
 */
class TriggerListModel extends WlModelAbstract
{
  /**
   * A list of available pre-built automation template types and the count of templates in each type.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Count of pre-built automation templates in this folder.</dd>
   * 
   *   <dt>string `k_folder`</dt>
   *   <dd>
   *     Folder key of the pre-built automation.
   *   </dd>
   * 
   *   <dt>string `text_folder`</dt>
   *   <dd>Title of the pre-built automation template type.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_prebuilt_filter = [];

  /**
   * A list of available pre-built automation flows.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_step`</dt>
   *   <dd>List of steps in the pre-built automation flow.</dd>
   * 
   *   <dt>int|null `id_mail`</dt>
   *
   * 
   *   <dt>string `k_automation`</dt>
   *   <dd>Pre-built automation key.</dd>
   * 
   *   <dt>string `k_folder`</dt>
   *   <dd>
   *     Folder key of the pre-built automation.
   *   </dd>
   * 
   *   <dt>int `id_trigger`</dt>
   *
   * 
   *   <dt>bool `is_new`</dt>
   *   <dd>Whether the pre-built automation flow has 'New' label.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Description of the pre-built automation flow.</dd>
   * 
   *   <dt>string `text_folder`</dt>
   *   <dd>Title of the folder of the pre-built automation flow.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the pre-built automation flow.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>URL of the image preview of the pre-built automation flow.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_prebuilt_list = [];

  /**
   * A list of available trigger types and the count of triggers in each type.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>int `id_trigger`</dt>
   *
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>Count of triggers in this type.</dd>
   * 
   *   <dt>string `text_trigger_type`</dt>
   *   <dd>Title of the trigger type.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_trigger_filter = [];

  /**
   * A list of available triggers.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>int|null `id_mail`</dt>
   *   <dd>
   *  `null` if no mail is associated with the trigger.</dd>
   * 
   *   <dt>int `id_trigger`</dt>
   *
   * 
   *   <dt>int `id_trigger_type`</dt>
   *
   * 
   *   <dt>bool `is_coming_soon`</dt>
   *   <dd>
   *
   *   </dd>
   * 
   *   <dt>string `text_description_list`</dt>
   *   <dd>Description of the trigger for the list of all triggers.</dd>
   * 
   *   <dt>string `text_description_setup`</dt>
   *   <dd>Description of the trigger for the setup trigger view.</dd>
   * 
   *   <dt>string `text_icon`</dt>
   *   <dd>CSS class of the icon representing the trigger.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the trigger.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_trigger_list = [];

  /**
   * `null` to use the system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>
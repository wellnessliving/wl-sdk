<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of applications for editor.
 *
 * @method WlModelRequest get() Get applications data.
 */
class ApplicationListModel extends WlModelAbstract
{
  /**
   * A list of applications. Each element contains: 
   *
   * <dl>
   *   <dt>string `k_api_application`</dt>
   *   <dd>Application key.</dd>
   * 
   *   <dt>string `s_bot`</dt>
   *   <dd>A bot user which is a deemed actor in all API requests made by this application.</dd>
   * 
   *   <dt>string `s_group`</dt>
   *   <dd>Which groups this user belongs to.</dd>
   * 
   *   <dt>string `s_id`</dt>
   *   <dd>Application identifier to authenticate application.</dd>
   * 
   *   <dt>string `text_application`</dt>
   *   <dd>Description.</dd>
   * 
   *   <dt>string `text_application_group`</dt>
   *   <dd>Application groups concatenated names.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list;
}

?>
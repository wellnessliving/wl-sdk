<?php

namespace WellnessLiving\Studio\Microservice\Editor;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of microservices.
 *
 * @method WlModelRequest get() Gets a list of microservices.  Returns microservices accessible to the current user based on project roles and privileges.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of microservices. One element contains:
   *
   * <dl>
   *   <dt>bool `is_remove`</dt>
   *   <dd>Whether the microservice has been deleted. `true` is the microservice is removed, `false` otherwise.</dd>
   * 
   *   <dt>string `json_path`</dt>
   *   <dd>
   *     A list of repositories and paths of this microservice.
   * 
   *   </dd>
   * 
   *   <dt>string `k_project`</dt>
   *   <dd>Project key. </dd>
   * 
   *   <dt>string `s_file`</dt>
   *   <dd>File name.</dd>
   * 
   *   <dt>string `s_group`</dt>
   *   <dd>
   *     The group to which the microservice belongs.
   *   
   *   </dd>
   * 
   *   <dt>string `s_variable`</dt>
   *   <dd>
   *     Microservice-specific variables. A set of pairs key=value, separated by newlines.
   * 
   *   </dd>
   * 
   *   <dt>string `text_project`</dt>
   *   <dd>Title of the project.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the microservice.</dd>
   * 
   *   <dt>string `url_microservice_promoting`</dt>
   *   <dd>URL of the promoting page for this microservice.</dd>
   * </dl>
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
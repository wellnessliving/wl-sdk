<?php

namespace WellnessLiving\Studio\Microservice\Editor;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of microservices.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of microservices. One element contains:<dl>
   *   <dt>bool <var>is_remove</var></dt>
   *   <dd>Whether the microservice has been deleted. `true` is the microservice is removed, `false` otherwise.</dd>
   *   <dt>string <var>json_path</var></dt>
   *   <dd>
   *     A list of repositories and paths of this microservice.
   *
   *   </dd>
   *   <dt>string <var>k_project</var></dt>
   *   <dd>Project key.</dd>
   *   <dt>string <var>s_file</var></dt>
   *   <dd>File name.</dd>
   *   <dt>string <var>text_project</var></dt>
   *   <dd>Title of the project.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the microservice.</dd>
   * </dl>
   *
   * @get result
   * @var string[][]
   */
  public $a_list = [];

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
<?php

namespace WellnessLiving\Studio\Project\Component;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of project's components for editor.
 *
 * @method WlModelRequest get()
 */
class ComponentListModel extends WlModelAbstract
{
  /**
   * A list of project's components: 
   *
   * <dl>
   *   <dt>string `k_component`</dt>
   *   <dd>Component key.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Component description.</dd>
   * 
   *   <dt>string `text_project`</dt>
   *   <dd>Project title.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Component title.</dd>
   * 
   *   <dt>string `text_title_full`</dt>
   *   <dd>Component title with project title in the bracket.</dd>
   * 
   *   <dt>string `url_expert_list`</dt>
   *   <dd>A link to the page with experts list by the component.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Project key.
   *
   * <tt>null</tt> - when need to load all components for which the current personnel has access.
   *
   * @get get
   * @var string|null
   */
  public $k_project = null;
}

?>
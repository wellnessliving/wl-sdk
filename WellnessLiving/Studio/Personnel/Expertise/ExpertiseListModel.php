<?php

namespace WellnessLiving\Studio\Personnel\Expertise;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of expertise for personnel by projects components.
 *
 * @method WlModelRequest get()
 */
class ExpertiseListModel extends WlModelAbstract
{
  /**
   * A list of project's components: 
   *
   * <dl>
   *   <dt>string `k_component`</dt>
   *   <dd>Component key.</dd>
   * 
   *   <dt>string `k_personnel`</dt>
   *   <dd>Personnel key.</dd>
   * 
   *   <dt>bool `show_delete_button`</dt>
   *   <dd><tt>true</tt> - if need to show delete button for the record, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>bool `show_edit_button`</dt>
   *   <dd><tt>true</tt> - if need to show edit button for the record, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `text_component`</dt>
   *   <dd>Component title.</dd>
   * 
   *   <dt>string `text_project`</dt>
   *   <dd>Project title.</dd>
   * 
   *   <dt>string|float `x_expertise`</dt>
   *   <dd>
   *     The number of personnel expertise by component.
   * If a personnel in is expert in the component returns <tt>Expert</tt> string.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Personnel key.
   *
   * @get get
   * @var string
   */
  public $k_personnel;

  /**
   * Whether to show the create button. Default value <tt>true</tt>.
   *
   * <tt>true</tt> - is show, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_modify_button;
}

?>
<?php

namespace WellnessLiving\Studio\Personnel\Expertise;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete personnel expertise by a component.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class ExpertiseElementModel extends WlModelAbstract
{
  /**
   * The number of personnel expertise by a specific component.
   *
   * @get result
   * @post post
   * @var float
   */
  public $f_expertise = 0;

  /**
   * <tt>true</tt> - if the personnel is expert in the component, <tt>false</tt> - otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_expert;

  /**
   * Component key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_component;

  /**
   * Personnel key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_personnel;
}

?>
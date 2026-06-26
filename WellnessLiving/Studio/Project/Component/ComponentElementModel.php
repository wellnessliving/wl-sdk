<?php

namespace WellnessLiving\Studio\Project\Component;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete project's component of the studio.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class ComponentElementModel extends WlModelAbstract
{
  /**
   * Component key.
   *
   * <tt>null</tt> - if need to create new component.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_component = null;

  /**
   * Project key.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_project;

  /**
   * Description of the component.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_description = '';

  /**
   * Title of the component.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>
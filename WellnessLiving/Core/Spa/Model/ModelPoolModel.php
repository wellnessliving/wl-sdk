<?php

namespace WellnessLiving\Core\Spa\Model;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for mass synchronization of models.
 *
 * @method WlModelRequest post() Processes the requested model. Finds the appropriate API class and executes the get method.
 */
class ModelPoolModel extends WlModelAbstract
{
  /**
   * A set of model objects that need to be synchronized.
   *
   * Key - concatenate string(model class name, model registry key)
   * Value - model data.
   *
   * @post post
   * @var array
   */
  public $a_request = [];

  /**
   * Model result.
   *
   * @post result
   * @var array
   */
  public $a_result;

  /**
   * The method (get, post, put, delete) that will be called on all given models.
   *
   * Currently only the "get" method is supported
   *
   * @post post
   * @var string
   */
  public $s_method = '';
}

?>
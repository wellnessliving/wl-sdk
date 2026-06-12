<?php

namespace WellnessLiving\Studio\Stand;

use WellnessLiving\WlModelAbstract;

/**
 * Prepare creation a new stand.
 */
class StandModel extends WlModelAbstract
{
  /**
   * Information about entities necessary for the functioning of the stand.
   * Structure of an array is identical to the <var>z_stand_data</var>
   *
   * `string` if it needs to set an empty value.
   * `null` will not change.
   *
   * @get result
   * @post post
   * @put post
   * @var array|string|null
   */
  public $a_stand_data = null;

  /**
   * Stand status, one of {@link StandStatusSid}.
   *
   * `null` if not initialized and will be ignored.
   *
   * @get result
   * @put get
   * @var int|null
   */
  public $id_stand_status = null;

  /**
   * A microservice environment for create stand. Each element of the array contains 
   * `null` if the value is not defined. If the information is not provided as a request parameter, the stand will not be created.
   *
   * <dl>
   *   <dt>string `k_microservice`</dt>
   *   <dd>Microservice key.</dd>
   * 
   *   <dt>string `s_environment`</dt>
   *   <dd>Environment name.</dd>
   * </dl>
   * @post post
   * @var string|null
   */
  public $json_stand_environment = null;

  /**
   * Primary microservice for the stand.
   * The main microservice from which the stand is created; other microservices can be added
   * if they are compatible with the primary one, see {@link StandModel::$json_stand_environment}.
   * `null` if value is not defined. If the information is not provided as a request parameter, the stand will not be created.
   *
   * @post get
   * @var string|null
   */
  public $k_microservice_primary = null;

  /**
   * Task key within which a stand should be created.
   *
   * `null` if not defined, in this case the stand name must be specified manually in {@link StandModel::$s_stand}.
   *
   * @post get
   * @var string|null
   */
  public $k_task = null;

  /**
   * Stand name.
   *
   * If a task is specified when creating a stand (the {@link StandModel::$k_task} field),
   * then the name of the new stand is determined from the branch of this task and is linked to this task.
   * In all other cases, the stand name must be specified explicitly.
   * `null` if the value is not defined. If the stand name is not specified, stand management is not possible.
   *   When creating a stand, the stand name can also be obtained from the task key {@link StandModel::$k_task}.
   *   If neither the stand name nor the task key is specified, the stand cannot be created.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $s_stand = null;

  /**
   * Link to redirect for stand creation.
   *
   * @post result
   * @var string
   */
  public $url_redirect;
}

?>
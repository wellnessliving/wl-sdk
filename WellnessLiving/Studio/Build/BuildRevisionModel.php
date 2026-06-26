<?php

namespace WellnessLiving\Studio\Build;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get information about build revisions.
 *
 * @method WlModelRequest get()
 */
class BuildRevisionModel extends WlModelAbstract
{
  /**
   * The list of build revision.
   *
   * <dl>
   *   <dt>string `dtu_date`</dt>
   *   <dd>Date/time of revision in Mysql format.</dd>
   * 
   *   <dt>int `i_build`</dt>
   *   <dd>The number of build.</dd>
   * 
   *   <dt>string `k_build`</dt>
   *   <dd>The key of build.</dd>
   * 
   *   <dt>string `s_revision`</dt>
   *   <dd>Number of revision.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_build_revision;

  /**
   * The minimum date/time of the revision in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dtu_min;

  /**
   * Key of deployment instance.
   *
   * @get get
   * @var string
   */
  public $k_deploy_instance;
}

?>
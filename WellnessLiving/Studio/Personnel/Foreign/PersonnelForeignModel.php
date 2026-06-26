<?php

namespace WellnessLiving\Studio\Personnel\Foreign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage personnel aliases within integrations systems.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class PersonnelForeignModel extends WlModelAbstract
{
  /**
   * Id of the integration system.
   *
   * @get get
   * @post get
   * @var string
   */
  public $id_foreign = '';

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_personnel = '';

  /**
   * Alias af the personnel within specific integrations system.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_alias = '';
}

?>
<?php

namespace WellnessLiving\Wl\Import\Wizard\Step;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to work with additional tasks for the import step.
 *
 * @method WlModelRequest get() Returns count of the rows that are left to be imported via additional tasks.
 * @method WlModelRequest post() Cancels active rows that are left to be imported.
 */
class StepTaskModel extends WlModelAbstract
{
  /**
   * Count of rows that are left to be imported.
   *
   * @get result
   * @var int
   */
  public $i_left;

  /**
   * Import wizard step.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_import_wizard;

  /**
   * Key of the business where import goes.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>
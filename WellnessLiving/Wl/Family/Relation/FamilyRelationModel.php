<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns business' enabled relationship types.
 *
 * @method WlModelRequest get() Gets relationships list.  Returns all relationship types enabled for the given business, or all system-defined relationship types if no business key is provided.
 */
class FamilyRelationModel extends WlModelAbstract
{
  /**
   * The relationship types in the business.
   *
   * Key is ID, value is SID.
   *
   * @get result
   * @var array
   * @see WlFamilyRelationSid
   */
  public $a_business_relationships = [];

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>
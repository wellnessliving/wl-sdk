<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;

/**
 * Returns business' enabled relationship types.
 */
class FamilyRelationModel extends WlModelAbstract
{
    /**
     * The relationship types in the business.
     *
     * Key is ID, value is SID.
     *
     * @get result
     * @see \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid
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
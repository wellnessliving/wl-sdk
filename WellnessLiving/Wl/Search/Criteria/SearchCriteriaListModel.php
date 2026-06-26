<?php

namespace WellnessLiving\Wl\Search\Criteria;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Search entity API.
 *
 * @method WlModelRequest get() Gets default and saved criteria for the specified entities.
 */
class SearchCriteriaListModel extends WlModelAbstract
{
  /**
   * A list of criteria with default (empty) data. Used to display default criteria list.
   *
   * @get result
   * @var array
   */
  public $a_criteria_list_default;

  /**
   * Logic connection between criteria.
   *
   * @get result
   * @var string[][]|null
   */
  public $a_criteria_list_logic;

  /**
   * A list of saved criteria.
   *
   * @get result
   * @var array
   */
  public $a_criteria_list_save;

  /**
   * Indicates that there are disabled criteria in the saved search.
   *
   * @get result
   * @var bool
   */
  public $has_disable;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Key of existing template.
   *
   * Can be empty if template needs to be created.
   *
   * @get get
   * @var string
   */
  public $k_search_template = '';

  /**
   * Search entity CID list, separated by commas.
   *
   * @get get
   * @var string
   */
  public $s_search_entity = '';

  /**
   * Unique string identifying the name of the search group.
   *
   * @get get
   * @var string
   */
  public $s_search_group = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>
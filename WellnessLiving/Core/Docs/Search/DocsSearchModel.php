<?php

namespace WellnessLiving\Core\Docs\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Performs search in the docs library.
 *
 * @method WlModelRequest get() Performs search and returns list of found records.
 */
class DocsSearchModel extends WlModelAbstract
{
  /**
   * List of found docs.
   *
   * @get result
   * @var array[]
   */
  public $a_docs;

  /**
   * Max count of records to be returned.
   *
   * `null` means to use default limit.
   *
   * @get get
   * @var int|null
   */
  public $i_limit = null;

  /**
   * Search text.
   *
   * @get get
   * @var string
   */
  public $text_search;
}

?>
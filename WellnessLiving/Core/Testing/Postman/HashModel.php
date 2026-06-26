<?php

namespace WellnessLiving\Core\Testing\Postman;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The class get string and algorithm and encode current string by this algorithm.
 *
 * @method WlModelRequest post() Encode original string by algorithm that comes from the request. This method is used only for testing.
 */
class HashModel extends WlModelAbstract
{
  /**
   * Algorithm for encoding string from {@link HashModel::$s_original}. Default is `sha3-512`.
   *
   * @post get
   * @var string
   */
  public $s_algorithm = '';

  /**
   * Return hash of the string
   *
   * @post result
   * @var string
   */
  public $s_hash;

  /**
   * Original string
   *
   * @post get
   * @var string
   */
  public $s_original = '';
}

?>
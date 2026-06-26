<?php

namespace WellnessLiving\Wl\Quiz\Element;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that manages a single quiz.
 *
 * @method WlModelRequest post()
 */
class QuizXMLParseModel extends WlModelAbstract
{
  /**
   * Fields to be XML parsed.
   * Keys are field names that prefixed with xml_.
   * Values are XML strings to be parsed and converted to HTML.
   *
   * @post post
   * @var array
   */
  public $a_fields = [];

  /**
   * Fields that were XML parsed.
   * Keys are field names that prefixed with html_.
   * Values are HTML strings.
   *
   * @post result
   * @var array
   */
  public $a_results = [];
}

?>
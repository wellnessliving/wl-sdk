<?php

namespace WellnessLiving\Core\Locale\Message\InlineEditor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about translated messages.
 *
 * @method WlModelRequest post() Returns information about translated messages.
 */
class MessageDataModel extends WlModelAbstract
{
  /**
   * A list of sources of translated messages to retrieve information about.
   *
   * In a case there are many messages, JSON-encoded string can be passed here.
   *
   * @post post
   * @var string[]|string
   */
  public $a_source = [];

  /**
   * Information about translated messages. Key is source of translated message. Value is an array where key is language ID and value is translation into given language.
   *
   * @post result
   * @var array
   */
  public $a_translate;
}

?>
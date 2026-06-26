<?php

namespace WellnessLiving\Core\Locale\Message\InlineEditor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves new translation of a translated message.
 *
 * @method WlModelRequest put() Saves new translation of a translated message.
 */
class SaveModel extends WlModelAbstract
{
  /**
   * A list of translations to save.
   *
   * Each element of this array contains:
   *
   * <dl>
   *   <dt>array `a_translate`</dt>
   *   <dd>
   *     Translations to save. Key is language ID (one of {@link \Core\Locale\Language\LocaleLanguageSid} constants),
   *   value is either translation, or <tt>null</tt> to remove translation.
   *   </dd>
   * 
   *   <dt>bool `is_js`</dt>
   *   <dd>
   *     Whether this message is originated from JavaScript code.
   * 
   *   Setting this flag leads to that this source and all translations are added to
   *
   * 
   *   This flag is only considered if {@link \Core\Locale\Message\InlineEditor\SaveApi::FORWARD_GLOBAL} is set to
   *   <tt>true</tt>.
   *   </dd>
   * 
   *   <dt>string `text_source`</dt>
   *   <dd>Source of translated message.</dd>
   * </dl>
   * @put post
   * @var array[]
   */
  public $a_translate = [];

  /**
   * Name of the instance.
   *
   * @put post
   * @var string
   */
  public $text_instance;

  /**
   * Login of the user.
   *
   * @put post
   * @var string|null
   */
  public $text_login;
}

?>
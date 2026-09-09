<?php

namespace WellnessLiving\Core\Locale\Language;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Switches the language of the user who makes this request.
 *
 * The choice is remembered for this user in the context this user is currently in, which is the currently selected
 * It is also stored in the session,
 * which is the only place a user who is not signed in has, and which is where the language of the next request is taken
 *
 * This class does not redirect anywhere. The language is not a part of the URL of a page, so the caller only has to
 * reload the page it is on for the new language to take effect.
 *
 * @method WlModelRequest post() Switches the language.  Remembers the requested language for the user who makes this request, within the context this user is currently in, and stores it in the session and in the cookie so that the very next request is served in this language too. The language must be active in this installation, otherwise the request is rejected and nothing is stored.
 */
class LanguageSwitchModel extends WlModelAbstract
{
  /**
   * Language to switch to.
   *
   * @post post
   * @var int
   */
  public $id_language = 0;
}

?>
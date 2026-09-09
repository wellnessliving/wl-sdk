<?php

namespace WellnessLiving\Core\Template;

/**
 * A list of modes in which XML templates process variables.
 */
class TemplateParseVariableSid
{
  /**
   * Variables are inserted in HTML mode.
   *
   * In this case:
   *
   * * `html_` variables are inserted without any additional changes;
   * * Variables listed in {@link TemplateParse::VARIABLE_TEXT} are escaped with
   *   `htmlspecialchars()`;
   * * All other variables are prohibited.
   */
  const HTML = 1;

  /**
   * Variables are inserted in legacy mode.
   *
   * In this case all variables are allowed and are not escaped.
   */
  const LEGACY = 3;

  /**
   * Same as {@link TemplateParseVariableSid::LEGACY} but with one exception.
   */
  const LEGACY_XML = 4;

  /**
   * Variables are inserted in TEXT mode.
   *
   * In this case:
   *
   * * Variables listed in {@link TemplateParse::VARIABLE_TEXT} are inserted without additional changes;
   * * `html_` variables are prohibited;
   * * All other variables are prohibited.
   */
  const TEXT = 2;
}

?>
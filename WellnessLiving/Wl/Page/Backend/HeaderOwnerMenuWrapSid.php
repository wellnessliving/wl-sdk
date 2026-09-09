<?php

namespace WellnessLiving\Wl\Page\Backend;

/**
 * Layout modes of the main content wrapper on backend pages.
 *
 * The wrapper is the `<div>` that is opened by `rs.header.owner.menu` and closed by `rs.footer.owner`. Its set of CSS
 * classes depends on the page that is currently being rendered.
 *
 * Historically this selection was a cascade of `<if current="...">` / `<elseif this1="...">` branches inside
 * `rs.header.owner.menu.xml`. Those attributes compile into raw PHP (`$mp_info[...]`) regardless of the target
 * language, so they can not be used from a JavaScript template. The cascade lives here instead, so that both the PHP
 *
 * Last used ID: 5.
 */
abstract class HeaderOwnerMenuWrapSid
{
  /**
   * Backend dashboard. Standard wrapper with an additional container class.
   */
  const DASHBOARD = 3;

  /**
   * Mock of the business account. Standard wrapper with an additional `mock` class.
   */
  const MOCK = 4;

  /**
   * Regular backend page. The most common mode.
   */
  const NORMAL = 1;

  /**
   * A report page that renders its own wrapper. The `<div>` gets no classes at all.
   *
   * Note that a number of report pages are excluded from this mode, see
   */
  const REPORT = 5;

  /**
   * Schedule pages. They use an absolutely positioned content container instead of the fixed-header model, see
   * `template_backend_schedule_startup()` in `rs.footer.owner.xml`.
   */
  const SCHEDULE = 2;
}

?>
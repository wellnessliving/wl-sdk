<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Gets, deletes, and adds origins for the application.
 *
 * Origins are links on the sites where the API can be used sign CORS authorizations from a client's browser.
 * If the site isn't in the list, you can only use the API for requests between two servers. Requests directly from
 * a client's browser are restricted.
 *
 * Origins should appear as a full link in the same manner they appear on the site.
 *
 * It's important to understand that the application can add allowed sites only for itself and can't add sites for another application.
 * This means that you need to call this endpoint using only the application that you're using on the sites.
 */
class OriginModel extends WlModelAbstract
{
  /**
   * A list of origins.
   *
   * An associative array where the key is the origin URL of the site where API calls can be made,
   *  and the value is the additional API domain used to make API requests to the WellnessLiving server.
   * `null` if not yet initialized.
   *
   * @delete post
   * @get result
   * @put post
   * @var string[]|null
   */
  public $a_list;
}

?>
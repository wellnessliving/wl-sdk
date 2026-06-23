<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

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
 *
 * @method WlModelRequest delete() Restricts access to API for all sites, which are given in the list.  Accepts a list of origin URLs (with optional API domain overrides), validates each URL, and removes the matching entries from the allowed origins for the current application, then clears the origin cache.
 * @method WlModelRequest get() Gets list of all sites, where usage of the API is allowed for the current application.  Returns the list of allowed CORS origins for the current API application, where each key is an origin URL and each value is an optional API domain used to proxy requests from that origin.
 * @method WlModelRequest put() Allows access to API for all sites, which are given in the list.  Accepts a list of origin URLs (with optional API domain overrides), validates each URL and domain, inserts or updates the entries in the allowed origins for the current application, then clears the origin cache.
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
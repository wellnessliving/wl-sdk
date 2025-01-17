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
     * The key is the URL on the site where API calls can be made.
     *
     * The value is a domain used to make API requests.
     * This will be `null` in cases where the API requests are made directly to the WellnessLiving web server or if
     * it isn't initialized yet.
     *
     * @delete post
     * @get result
     * @put post
     * @var array|null
     */
  public $a_list;
}

?>
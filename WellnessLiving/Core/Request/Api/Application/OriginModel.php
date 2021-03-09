<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to get, delete and add origins for application.
 *
 * Origins are links on the sites, where API can be used sign CORS authorization - from client's browser.
 * If site is not in the list, you can use API only for requests between two servers. Requests directly from client's
 * browser are restricted.
 *
 * Origin should be exact full link on the site.
 *
 * Important to understand that application can add allowed sites only for itself and cannot add for another application.
 * This means that you need to call this API point using only the application, which you are going to use on the sites.
 */
class OriginModel extends WlModelAbstract
{
  /**
   * A list of origins.
   *
   * Key is link on the site, where API is allowed.
   *
   * Value is a domain which used to make API requests.
   * May be <tt>null</tt> and in this case the API requests are made directly to WL web server.</tt>
   *
   * <tt>null</tt> if is not initialized yet.
   *
   * @delete post
   * @get result
   * @put post
   * @var array|null
   */
  public $a_list;
}

?>
<?php

namespace WellnessLiving\Core\Request\Api\Application\Credential;

use WellnessLiving\WlModelAbstract;

/**
 * Manages credentials for the application.
 */
class CredentialModel extends WlModelAbstract
{
  /**
     * The CID of the credential.
     * Accepted values: <ul>
     *   <li>
     *     <tt>972</tt> - The Google credential.
     *
     *   </li>
     *   <li>
     *     <tt>973</tt> - The Facebook credential.
     *
     *   </li>
     * </ul>
     *
     * @delete get
     * @get get
     * @put get
     * @var int
     */
  public $cid_credential;

  /**
     * An array with the credential.
     *
     * @get result
     * @put post
     * @var array
     *
     */
  public $json_credential;
}

?>
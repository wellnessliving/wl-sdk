<?php

namespace WellnessLiving\Core\Request\Api\Application\Credential;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that manages credentials for the application.
 */
class CredentialModel extends WlModelAbstract
{
  /**
   * The CID of the credential.
   * Accepted values: <ul>
   *   <li>
   *     <tt>972</tt> - The Google credential.
   *     Use the {@link \WellnessLiving\Core\Request\Model\Application\Credential\GoogleCredentialData} object to send the credential.
   *   </li>
   *   <li>
   *     <tt>973</tt> - The Facebook credential.
   *     Use the {@link \WellnessLiving\Core\Request\Model\Application\Credential\FacebookCredentialData} object to send the credential.
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
   */
  public $json_credential;
}

?>
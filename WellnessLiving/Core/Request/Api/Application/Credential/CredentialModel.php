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
   * @var string
   */
  public $json_credential = '[]';
}

?>
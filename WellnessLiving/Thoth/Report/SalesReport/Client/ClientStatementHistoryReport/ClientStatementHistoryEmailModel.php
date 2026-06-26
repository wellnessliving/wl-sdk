<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Resends the New Account Statement email for a previously saved account statement.
 *
 * Sends the notification regardless of whether the client's email notification setting
 * is active or whether the email toggle is off in Account Management preferences.
 *
 * @method WlModelRequest post()
 */
class ClientStatementHistoryEmailModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Statement primary key.
   *
   * @post get
   * @var string|null
   */
  public $k_statement = null;

  /**
   * Email address to deliver the statement to.
   *
   * When empty, the client's profile email address is used.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';
}

?>
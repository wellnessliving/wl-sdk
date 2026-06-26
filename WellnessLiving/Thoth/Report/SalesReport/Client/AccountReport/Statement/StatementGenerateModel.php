<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\Statement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves a generated account statement to the statement history.
 *
 * When {@link StatementGenerateModel::$is_email} is `true`, triggers a New Account Statement
 * notification to the address provided in {@link StatementGenerateModel::$text_mail}.
 *
 * @method WlModelRequest post()
 */
class StatementGenerateModel extends WlModelAbstract
{
  /**
   * Period end date in MySQL date format.
   *
   * @post post
   * @var string
   */
  public $dl_end = '';

  /**
   * Period start date in MySQL date format.
   *
   * @post post
   * @var string
   */
  public $dl_start = '';

  /**
   * Sequential ordinal of this statement for the client at this business (1-based).
   *
   * Computed by {@link StatementDataModel}
   *  as `i_statement_next` and passed by the frontend without recomputation on save.
   *
   * @post post
   * @var int
   */
  public $i_statement_number = 1;

  /**
   * Whether to send a New Account Statement notification after saving.
   *
   * When `true`, sends an email notification to the address specified in {@link StatementGenerateModel::$text_mail}.
   *
   * @post post
   * @var bool
   */
  public $is_email = false;

  /**
   * Whether to include relationships account activity in the statement.
   *
   * @post post
   * @var bool
   */
  public $is_include_relationship = false;

  /**
   * Whether the mailing envelope address format was applied.
   *
   * @post post
   * @var bool
   */
  public $is_mail_format = false;

  /**
   * Business key.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Account method key of the selected account balance.
   *
   * `null` for the default account balance.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_method = null;

  /**
   * Statement key.
   *
   * @post result
   * @var string
   */
  public $k_statement = '0';

  /**
   * Email address to deliver the statement to.
   *
   * Empty string when {@link StatementGenerateModel::$is_email} is `false`.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * Client key.
   *
   * @post get
   * @var string|null
   */
  public $uid_client = null;
}

?>
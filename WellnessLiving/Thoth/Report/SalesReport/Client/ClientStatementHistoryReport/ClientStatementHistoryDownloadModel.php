<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns the PDF bytes of a previously generated account statement for download.
 *
 * The PDF is rendered by {@link StatementPdf} from the stored statement record in
 *
 * @method WlModelRequest get()
 */
class ClientStatementHistoryDownloadModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Statement primary key.
   *
   * @get get
   * @var string|null
   */
  public $k_statement = null;

  /**
   * Base64-encoded PDF binary content.
   *
   * Decode on the client side and use as a Blob URL for file download.
   *
   * @get result
   * @var string
   */
  public $s_pdf_base64 = '';

  /**
   * Suggested file name for the downloaded PDF.
   *
   * @get result
   * @var string
   */
  public $text_filename = '';
}

?>
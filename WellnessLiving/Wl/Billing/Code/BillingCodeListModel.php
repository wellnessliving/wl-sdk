<?php

namespace WellnessLiving\Wl\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves the billing code list of a business.
 *
 * The list is the single place a client asks for codes: it contains both the custom codes of the business and the
 * system (diagnostic) codes of the read-only ICD-10-CM reference library, and a row tells the two types apart.
 *
 * The library has about 75 000 codes, so a client that offers codes for selection searches in the list with
 * {@link BillingCodeListModel::$text_search} instead of asking for the whole list.
 *
 * A single custom code is added, read, edited and removed by {@link BillingCodeModel}.
 *
 * @method WlModelRequest get() Gets the billing code list of the business.  The list contains the custom codes of the business and the diagnostic codes of the read-only ICD-10-CM reference library, the descriptions of the latter in the language of the request. The diagnostic codes are returned only if the business has turned on ICD diagnostic codes. A search ranks the codes it has found, and a search that has found nothing gets the nearest codes instead. The answer is one page of the codes.
 */
class BillingCodeListModel extends WlModelAbstract
{
  /**
 * Billing codes of the business.
 *
 * Contains the custom codes of the business and the system codes of the ICD-10-CM reference library, which are
 * shared by all businesses. The system codes are returned only if the business has turned on ICD diagnostic
 * codes .
 *
 * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
 * and invoices they have already been applied to.
 *
 * The custom codes go first, then the system codes: the library has about 75 000 codes, and the business must
 * see its own codes on the first pages of the list. Only the codes that match
 * {@link BillingCodeListModel::$text_search} are returned, if it is given, and then each group is ranked by the
 * search, the best match first: the code value equal to the search, the code value beginning with it, the
 * description equal to it, the description beginning with it, the rest. Without a search each group is sorted by
 * the code value.
 *
 * The list is a page of the codes: {@link BillingCodeListModel::$i_limit} of them from the page
 * {@link BillingCodeListModel::$i_page}, out of the {@link BillingCodeListModel::$i_count} codes that answer the
 * request.
 *
 * <dl>
 *   <dt>string[] `a_service`</dt>
 *   <dd>
 *     List of services the code is applied to by default. Always empty for a system code: system codes are not
 * applied to services by default. 
 *   </dd>
 * 
 *   <dt>bool `is_custom`</dt>
 *   <dd>`true` for a custom code of the business, `false` for a system code of the ICD-10-CM reference library.</dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>
 *     Description of the code. The business typed it in for a custom code. For a system code it comes from the
 * reference library, in the language of the request.
 *   </dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code = [];

  /**
 * Filled only when {@link BillingCodeListModel::$text_search} is given and has found nothing, so that a client may
 * offer something instead of an empty list: the words of the search are matched by their first characters, and
 * one word matching is enough, so a word that is mistyped or cut short at its end still finds a code. Empty
 * while the search has found codes, while it is not given, or while nothing in the list comes close to it.
 *
 * The rows are the same as the rows of {@link BillingCodeListModel::$a_code}.
 *
 * <dl>
 *   <dt>string[] `a_service`</dt>
 *   <dd>
 *     List of services the code is applied to by default. Always empty for a system code: system codes are not
 * applied to services by default. 
 *   </dd>
 * 
 *   <dt>bool `is_custom`</dt>
 *   <dd>`true` for a custom code of the business, `false` for a system code of the ICD-10-CM reference library.</dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>
 *     Description of the code. The business typed it in for a custom code. For a system code it comes from the
 * reference library, in the language of the request.
 *   </dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code_similar = [];

  /**
 * Number of the codes that answer the request, the page not applied.
 *
 * A client knows by it how many pages the list has, see {@link BillingCodeListModel::$i_limit} and
 * {@link BillingCodeListModel::$i_page}. `0` while nothing answers the request.
 *
 * @get result
 * @var int
 */
  public $i_count = 0;

  /**
 * Number of the codes to return: the size of a page of the list.
 *
 * Not more than {@link \Wl\Billing\Code\BillingCodeListApi::LIMIT_MAX}, and
 *
 * @get get
 * @var int
 */
  public $i_limit = 50;

  /**
 * Number of the page of the list to return, `1` for the first one.
 *
 * A page holds {@link BillingCodeListModel::$i_limit} codes, so the page number 2 is the codes from the 51st to
 * the 100th while the limit is the default one. A page beyond the end of the list is empty, while
 * {@link BillingCodeListModel::$i_count} still tells how many codes answer the request.
 *
 * @get get
 * @var int
 */
  public $i_page = 1;

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';

  /**
 * Text to search for, in any case: the value of a code, a part of a description, or plain words. Empty string to
 * get the whole list.
 *
 * The search is split into words, and a code is returned while every word of the search occurs in its value or
 * in its description. So the words may come in any order, and `pain in left shoulder` finds the diagnostic code
 * `M25.512 Pain in left shoulder`. A search of a single word matches a part of a value or of a description as it
 * is: `99` matches `99213`. The case does not matter. A longer text than a description can not match anything,
 * so it is not accepted.
 *
 * A search that has found nothing gets the nearest codes in
 * {@link BillingCodeListModel::$a_code_similar} instead.
 *
 * @get get
 * @var string
 */
  public $text_search = '';
}

?>
<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\AI;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Generates a SELECT query and optional Totals JSON from a natural-language prompt.
 *
 * Accepts the user's prompt and the current form state (SQL and Totals), passes them
 *  to {@link ReportQueryAiClient} along with the conversation history, and returns
 *  AI-generated replacements for `s_sql` and `json_totals`.
 *
 * The caller is responsible for applying the returned values to the report form.
 *  This API does not persist anything to the database.
 *
 * @method WlModelRequest post()
 */
class ReportQueryAiModel extends WlModelAbstract
{
  /**
   * AI-generated Actions JSON string, or empty string if no change is needed.
   *
   * @post result
   * @var string
   */
  public $json_actions = '';

  /**
   * Current Actions JSON from the report form. Sent as context so the AI can
   *  refine existing actions rather than starting from scratch.
   * Empty string if the form has no actions configured.
   *
   * @post post
   * @var string
   */
  public $json_actions_in = '';

  /**
   * Conversation history as a JSON-encoded array of message objects.
   * Each element must have `s_role` ('user' or 'assistant') and `s_content` (string).
   * Empty string or omitted means no prior history (first request).
   *
   * @post post
   * @var string
   */
  public $json_history = '';

  /**
   * AI-generated Totals JSON string, or empty string if no totals are needed.
   *
   * @post result
   * @var string
   */
  public $json_totals = '';

  /**
   * Current Totals JSON from the report form. Sent as context so the AI can
   *  refine existing totals rather than starting from scratch.
   * Empty string if the form has no totals configured.
   *
   * @post post
   * @var string
   */
  public $json_totals_in = '';

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Optional key of the report query being edited. Empty string when the user is
   *  building a new report that has not been saved yet.
   * Used only to bind the AI prompt log entry to the corresponding registry record.
   *
   * @post get
   * @var string
   */
  public $k_report_query = '';

  /**
   * AI text answer for informational queries (capability questions, field explanations,
   *  responses when requested data is unavailable).
   * Empty string when the response is SQL-only or when no explanation is needed.
   *
   * @post result
   * @var string
   */
  public $s_answer = '';

  /**
   * Intent the AI model detected for this request. One of `'sql'` (SQL generation
   *  or modification), `'capabilities'` (user asked what data is available), or
   *  `'out_of_scope'` (request is outside the `QueryEngine` module).
   * Useful for client-side logging and optional history filtering.
   *
   * @post result
   * @var string
   */
  public $s_intent = '';

  /**
   * User's natural-language description of the desired report.
   * Example: "Show all users who paid more than 50 dollars this month".
   *
   * @post post
   * @var string
   */
  public $s_prompt = '';

  /**
   * Optional clarification question from the AI model.
   * Empty string when the model generated SQL without needing clarification.
   *
   * @post result
   * @var string
   */
  public $s_question = '';

  /**
   * Client-generated session identifier that groups all AI prompt log entries from a single
   *  conversation. Generated once when the AI panel opens and passed unchanged in every
   *  subsequent request within that session.
   * Empty string if the client did not supply one.
   *
   * @post post
   * @var string
   */
  public $s_session_ai = '';

  /**
   * AI-generated SELECT query. Empty string means "no change" -- current SQL is preserved.
   *
   * @post result
   * @var string
   */
  public $s_sql = '';

  /**
   * Current SQL query from the report editor. Sent as context so the AI can
   *  modify an existing query rather than starting from scratch.
   * Empty string for a new report.
   *
   * @post post
   * @var string
   */
  public $s_sql_in = '';
}

?>
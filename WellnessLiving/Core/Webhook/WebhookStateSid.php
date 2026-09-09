<?php

namespace WellnessLiving\Core\Webhook;

/**
 * Webhook URL statuses.
 *
 * Last used: 3.
 */
class WebhookStateSid
{
  /**
   * Active URL.
   *
   * Webhooks will be sent to this URL if they occur.
   * The URL can be moved to this state on the webhook editing page.
   *
   * The next state:<dl>
   *   <dt>{@link WebhookStateSid::INACTIVE}</dt><dd>The transition is performed by the user on
   *     the webhook editing page.
   *   </dd>
   *   <dt>{@link WebhookStateSid::DEACTIVATED}</dt><dd>The transition is performed automatically when
   *     the limit of failed webhook transmission attempts is reached.
   *   </dd>
   * </dl>
   */
  const ACTIVE = 1;

  /**
   * Deactivated URL.
   *
   * Webhooks will not be sent to this URL if they occur.
   * The URL can be automatically put into this state in case of several unsuccessful attempts to transmit the webhook.
   *
   * The next state:<dl>
   *   <dt>{@link WebhookStateSid::ACTIVE}</dt><dd>The transition is performed by the user on
   *     the webhook editing page.
   *   </dd>
   *   <dt>{@link WebhookStateSid::INACTIVE}</dt><dd>The transition is performed by the user on
   *     the webhook editing page.
   *   </dd>
   * </dl>
   */
  const DEACTIVATED = 3;

  /**
   * Inactive URL.
   *
   * Webhooks will not be sent to this URL if they occur.
   * The URL can be moved to this state on the webhook editing page.
   *
   * The next state:<dl>
   *   <dt>{@link WebhookStateSid::ACTIVE}</dt><dd>The transition is performed by the user on
   *     the webhook editing page.
   *   </dd>
   * </dl>
   */
  const INACTIVE = 2;
}

?>
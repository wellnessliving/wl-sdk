<?php

namespace WellnessLiving;

/**
 * This exception is thrown in a case of an error that should be fixed by programmer at client side, but may be shown to
 * end user in a case it was thrown.
 *
 * Example error: user entered a negative integer whereas only positive integers are allowed. This exception is thrown
 * because this error can be checked at client side. It is a good idea to check it at client side, and not send request
 * with data that is definitely incorrect. In a case of an error that can not be checked at client side,
 * {@link \WellnessLiving\WlUserException} is thrown.
 *
 * This exception contains a user-friendly message that can be shown to end user.
 *
 * @see \WellnessLiving\WlUserException
 */
class WlDebugException extends WlUserException
{
}
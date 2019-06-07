# How should application handle cookies?

Cookies should be handled in the same way as they are handled by any other browser.

There are two types of cookies may be set:

* With specified timeout. These cookies should be removed on specified time.
* Without specification of timeout. This cookie should be removed when user closes application.

The following cookies are important for API:

* `\WellnessLiving\Config\WlConfigAbstract::COOKIE_PERSISTENT`
  Note that this cookie is configuration-specific.
  Name is overridden for production.
* `\WellnessLiving\Config\WlConfigAbstract::COOKIE_TRANSIENT`
  Note that this cookie is configuration-specific.
  Name is overridden for production.
* `AWSELB`

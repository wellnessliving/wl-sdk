<?php

namespace WellnessLiving\Core\Testing\Selenium\WebEmulator;

/**
 * A list of selenium session states.
 */
class WebEmulatorSessionStateSid
{
  /**
   * The session is being used by the test.
   *
   * One session is used by only one test. Then it closes and restarts it.
   *
   * The next state could be:
   * * {@link WebEmulatorSessionStateSid::STARTING}. The transition of the session to this state is performed
   *   in the {@link \Core\Testing\Selenium\SeleniumDriverWebEmulator::sessionClose()} method;
   * * {@link WebEmulatorSessionStateSid::FAILED}. The transition of the session to this state is performed
   */
  const ACTIVE = 3;

  /**
   * Session cannot be used for tests.
   *
   * A session can be in this state if it is running on a server that is in the following state:
   * * {@link WebEmulatorServerStateSid::DISABLED};
   * * {@link WebEmulatorServerStateSid::DISABLING};
   * * {@link WebEmulatorServerStateSid::FAIL};
   * * {@link WebEmulatorServerStateSid::TERMINATING}.
   *
   * The next state could be {@link WebEmulatorSessionStateSid::STARTING} or the session slot
   * The transition of the session
   * to {@link WebEmulatorSessionStateSid::STARTING} state is performed
   */
  const FAILED = 4;

  /**
   * The session is ready for testing.
   *
   * The next state could be:
   * * {@link WebEmulatorSessionStateSid::ACTIVE}. The transition of the session to this state
   *   is performed in the {@link \Core\Testing\Selenium\SeleniumDriverWebEmulator::setUpSession()} method;
   * * {@link WebEmulatorSessionStateSid::FAILED}. The transition of the session to this state
   *   is performed in next methods: {@link \Core\Testing\Selenium\SeleniumDriverWebEmulator::serverFail()},
   *   {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerTerminating()},
   *   {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerDisabling()};
   */
  const READY = 2;

  /**
   * The session starts up.
   *
   * This is the initial state of the session.
   * Sessions are added to the {@link \Core\Testing\Selenium\WebEmulator\WebEmulatorSessionSql} table
   *
   * In the {@link WebEmulatorSessionStateSid::STARTING} state, there is only an entry
   * in the {@link \Core\Testing\Selenium\WebEmulator\WebEmulatorSessionSql} table,
   * but the session has not yet been created on the server.
   *
   * The next state could be:
   * * {@link WebEmulatorSessionStateSid::READY}. The transition of the session to this state
   *
   * * {@link WebEmulatorSessionStateSid::FAILED}. The transition of the session to this state
   *   is performed in next methods: {@link \Core\Testing\Selenium\SeleniumDriverWebEmulator::serverFail()},
   *   {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerTerminating()},
   *   {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerDisabling()};
   */
  const STARTING = 1;
}

?>
<?php

namespace WellnessLiving\Core\Testing\Selenium\WebEmulator;

/**
 * A list of selenium server states.
 *
 * Last used: 6.
 */
class WebEmulatorServerStateSid
{
  /**
   * The server is running and ready for use.
   *
   * Each session is used by the test only once.
   * The session is closed after its use
   *
   * The transition to this state is performed in
   * the {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerStartingActive()} method;
   *
   * The next state could be:
   * * {@link WebEmulatorServerStateSid::DISABLING} - if the server is taken out of control by the control system
   *
   * * {@link WebEmulatorServerStateSid::FAIL} - in case of errors while working with
   *   the server (methods {@link \Studio\Tests\WebEmulator\WebEmulatorCron::sessionStartSafe()},
   *
   * * {@link WebEmulatorServerStateSid::TERMINATING} - in the case when the server is no longer required
   */
  const ACTIVE = 2;

  /**
   * The server is not controlled by the management system.
   *
   * Sessions on the server in state {@link WebEmulatorServerStateSid::DISABLED} are not used by tests.
   * No new sessions are allocated for tests.
   * New sessions are not started.
   *
   * The server is transition to the {@link WebEmulatorServerStateSid::DISABLED} state only from
   * the {@link WebEmulatorServerStateSid::DISABLING} state in
   * the {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerDisabled()} method when there are no sessions
   * used by the tests in the {@link WebEmulatorSessionStateSid::ACTIVE} state on the server.
   *
   * The next step for this state is to remove it by calling
   */
  const DISABLED = 5;

  /**
   * The server is being taken out of control by the control system.
   *
   * Sessions can still be used for tests on the server in this state
   * (sessions in {@link WebEmulatorSessionStateSid::ACTIVE} state).
   * No new sessions are allocated for tests.
   * New sessions are not started.
   *
   * The server is manually transition to the {@link WebEmulatorServerStateSid::DISABLING} state by calling
   *
   * The next state could be:
   * * {@link WebEmulatorServerStateSid::DISABLED} - transition by
   *   the {@link \Studio\Tests\WebEmulator\WebEmulatorCron::cronServerDisabled()} method,
   *   when there are no sessions in the {@link WebEmulatorSessionStateSid::ACTIVE} state on the server.
   */
  const DISABLING = 4;

  /**
   * Server failure state.
   *
   * It is transferred to the {@link WebEmulatorServerStateSid::FAIL} state in case of errors while working with
   * the server using one of the methods:
   * * {@link \Studio\Tests\WebEmulator\WebEmulatorCron::sessionStartSafe};
   * * {@link \Studio\Tests\WebEmulator\WebEmulatorCron::sessionDeleteSafe};
   * *
   *
   * Sessions can still be used for tests on the server in this state
   * (sessions in {@link WebEmulatorSessionStateSid::ACTIVE} state).
   * No new sessions are allocated for tests.
   * New sessions are not started.
   *
   * When there are no sessions in the {@link WebEmulatorSessionStateSid::ACTIVE} state on the server,
   * such a server will be removed from the {@link \Core\Testing\Selenium\WebEmulator\WebEmulatorServerSql} table
   *
   * There is no transition from state {@link WebEmulatorServerStateSid::FAIL} to other states.
   */
  const FAIL = 3;

  /**
   * The server starts up.
   *
   * This is the first server state.
   * A new server in this state is added to the {@link \Core\Testing\Selenium\WebEmulator\WebEmulatorServerSql} table
   *
   * Waiting for the initialization of the Amazon EC2 instance in this server state is in progress.
   * The next state could be:
   * * {@link WebEmulatorServerStateSid::ACTIVE} - if the initialization of the Amazon EC2 instance is complete
   *
   * * {@link WebEmulatorServerStateSid::DISABLING} - transition manually by
   *
   * * {@link WebEmulatorServerStateSid::FAIL} - in case of errors while working with
   */
  const STARTING = 1;

  /**
   * The server is preparing to terminate.
   *
   * Sessions can still be used for tests on the server in this state
   * (sessions in {@link WebEmulatorSessionStateSid::ACTIVE} state).
   * No new sessions are allocated for tests.
   * New sessions are not started.
   *
   * When there are no sessions in the {@link WebEmulatorSessionStateSid::ACTIVE} state on the server,
   * such a server will be removed from the {@link \Core\Testing\Selenium\WebEmulator\WebEmulatorServerSql}
   *
   * There is no transition from state {@link WebEmulatorServerStateSid::TERMINATING} to other states.
   */
  const TERMINATING = 6;
}

?>
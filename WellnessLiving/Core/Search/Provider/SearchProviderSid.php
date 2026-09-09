<?php

namespace WellnessLiving\Core\Search\Provider;

/**
 * Types of indexing providers.
 *
 * Last used ID: 3.
 */
class SearchProviderSid
{
  /**
   * Indexing data through Amazon Cloud Search.
   */
  const AMAZON = 1;

  /**
   * Indexation of data in the MySQL databases.
   */
  const MYSQL = 2;

  /**
   * Indexation of data in the PostgreSQL databases.
   */
  const POSTGRES = 3;
}

?>
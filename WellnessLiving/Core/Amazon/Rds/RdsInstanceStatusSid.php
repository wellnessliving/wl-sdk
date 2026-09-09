<?php

namespace WellnessLiving\Core\Amazon\Rds;

/**
 * List of possible RDS instance statuses.
 *
 * Last used ID: 27
 *
 * @link https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/accessing-monitoring.html#Overview.DBInstance.Status
 */
class RdsInstanceStatusSid
{
  /**
   * The DB instance is healthy and available.
   *
   * Billed.
   */
  const AVAILABLE = 1;

  /**
   * The DB instance is currently being backed up.
   *
   * Billed.
   */
  const BACKING_UP = 2;

  /**
   * Enhanced Monitoring is being enabled or disabled for this DB instance.
   *
   * Billed.
   */
  const CONFIGURING_ENHANCED_MONITORING = 3;

  /**
   * AWS Identity and Access Management (IAM) database authentication is being enabled or disabled for this DB instance.
   *
   * Billed.
   */
  const CONFIGURING_IAM_DATABASE_AUTH = 4;

  /**
   * Publishing log files to <tt>Amazon CloudWatch</tt> Logs is being enabled or disabled for this DB instance.
   *
   * Billed.
   */
  const CONFIGURING_LOG_EXPORTS = 5;

  /**
   * The DB instance is being converted from a DB instance that is not in an Amazon Virtual Private Cloud (Amazon VPC)
   * to a DB instance that is in an Amazon VPC.
   *
   * Billed.
   */
  const CONVERTING_TO_VPC = 6;

  /**
   * The DB instance is being created. The DB instance is inaccessible while it is being created.
   *
   * Not billed.
   */
  const CREATING = 7;

  /**
   * The DB instance is being deleted.
   *
   * Not billed.
   */
  const DELETING = 8;

  /**
   * The DB instance has failed and Amazon RDS can't recover it. Perform a point-in-time restore to the latest
   * restorable time of the DB instance to recover the data.
   *
   * Not billed.
   */
  const FAILED = 9;

  /**
   * The AWS KMS key used to encrypt or decrypt the DB instance can't be accessed.
   *
   * Not billed.
   */
  const INACCESSIBLE_ENCRYPTION_CREDENTIALS = 10;

  /**
   * Amazon RDS is attempting to perform a recovery action on a DB instance but can't do so because the VPC is in a
   * state that prevents the action from being completed. This status can occur if, for example, all available IP
   * addresses in a subnet are in use and Amazon RDS can't get an IP address for the DB instance.
   *
   * Not billed.
   */
  const INCOMPATIBLE_NETWORK = 11;

  /**
   * Amazon RDS attempted to apply an option group change but can't do so, and Amazon RDS can't roll back to the
   * previous option group state. For more information, check the Recent Events list for the DB instance. This status
   * can occur if, for example, the option group contains an option such as TDE and the DB instance doesn't contain
   * encrypted information.
   *
   * Billed.
   */
  const INCOMPATIBLE_OPTION_GROUP = 12;

  /**
   * Amazon RDS can't start the DB instance because the parameters specified in the DB instance's DB parameter group
   * aren't compatible with the DB instance. Revert the parameter changes or make them compatible with the DB instance
   * to regain access to your DB instance. For more information about the incompatible parameters, check the Recent
   * Events list for the DB instance.
   *
   * Billed.
   */
  const INCOMPATIBLE_PARAMETERS = 13;

  /**
   * Amazon RDS can't do a point-in-time restore. Common causes for this status include using temp tables, using MyISAM
   * tables with MySQL, or using Aria tables with MariaDB.
   *
   * Not billed.
   */
  const INCOMPATIBLE_RESTORE = 14;

  /**
   * Amazon RDS is applying a maintenance update to the DB instance. This status is used for instance-level maintenance
   * that RDS schedules well in advance.
   *
   * Billed.
   */
  const MAINTENANCE = 15;

  /**
   * The DB instance is being modified because of a customer request to modify the DB instance.
   *
   * Billed.
   */
  const MODIFYING = 16;

  /**
   * The DB instance is being moved to a new Amazon Virtual Private Cloud (Amazon VPC).
   *
   * Billed.
   */
  const MOVING_TO_VPC = 17;

  /**
   * The DB instance is being rebooted because of a customer request or an Amazon RDS process that requires the
   * rebooting of the DB instance.
   *
   * Billed.
   */
  const REBOOTING = 18;

  /**
   * The DB instance is being renamed because of a customer request to rename it.
   *
   * Billed.
   */
  const RENAMING = 20;

  /**
   * The master credentials for the DB instance are being reset because of a customer request to reset them.
   *
   * Billed.
   */
  const RESETTING_MASTER_CREDENTIALS = 19;

  /**
   * The DB instance encountered an error attempting to restore to a point-in-time or from a snapshot.
   *
   * Billed.
   */
  const RESTORE_ERROR = 21;

  /**
   * The DB instance is starting.
   *
   * Billed for storage.
   */
  const STARTING = 22;

  /**
   * The DB instance is stopped.
   *
   * Billed for storage.
   */
  const STOPPED = 23;

  /**
   * The DB instance is being stopped.
   *
   * Billed for storage.
   */
  const STOPPING = 24;

  /**
   * The DB instance has reached its storage capacity allocation. This is a critical status, and we recommend that you
   * fix this issue immediately. To do so, scale up your storage by modifying the DB instance. To avoid this situation,
   * set <tt>Amazon CloudWatch</tt> alarms to warn you when storage space is getting low.
   *
   * Billed.
   */
  const STORAGE_FULL = 25;

  /**
   * Your DB instance is being modified to change the storage size or type. The DB instance is fully operational.
   * However, while the status of your DB instance is storage-optimization, you can't request any changes to the
   * storage of your DB instance. The storage optimization process is usually short, but can sometimes take up to and
   * even beyond 24 hours.
   *
   * Billed.
   */
  const STORAGE_OPTIMIZATION = 26;

  /**
   * The database engine version is being upgraded.
   *
   * Billed.
   */
  const UPGRADING = 27;
}

?>
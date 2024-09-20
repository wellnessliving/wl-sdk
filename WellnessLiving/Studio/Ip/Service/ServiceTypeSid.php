<?php

namespace WellnessLiving\Studio\Ip\Service;

/**
 * A list of service types to which access by IP address can be managed.
 */
abstract class ServiceTypeSid
{
  /**
   * Amazon security group.
   *
   * @title Amazon Security Group
   */
  const AMAZON_GROUP = 5;

  /**
   * Amazon IAM user.
   *
   * @title Amazon IAM user
   */
  const AMAZON_IAM = 6;

  /**
   * Amazon RDS security group.
   */
  const AMAZON_RDS = 1;

  /**
   * Access over SSH protocol.
   *
   * @title Access over SSH
   */
  const SSH = 2;

  /**
   * Access to SVN repository.
   *
   * @title Access to SVN repository
   */
  const SVN = 3;
}

?>
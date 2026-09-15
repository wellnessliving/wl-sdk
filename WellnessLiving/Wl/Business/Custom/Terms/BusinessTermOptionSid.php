<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

/**
 * Preset options for the {@link CustomTermSid::BUSINESS} custom term.
 *
 * `@group` references a {@link BusinessTermOptionGroupSid} sid string — the heading each option
 * is grouped under in the type-ahead list.
 *
 * Last used ID: 31.
 */
class BusinessTermOptionSid
{
  /**
   * Academy.
   *
   * @group childcare-education
   * @title Academy
   * @title-lower academy
   * @title-lower-plural academies
   * @title-lower-plural-possessive academies'
   * @title-lower-possessive academy's
   * @title-plural Academies
   * @title-plural-possessive Academies'
   * @title-possessive Academy's
   * @vowel-sound true
   */
  const ACADEMY = 23;

  /**
   * Barbershop.
   *
   * @group beauty
   * @title Barbershop
   * @title-lower barbershop
   * @title-lower-plural barbershops
   * @title-lower-plural-possessive barbershops'
   * @title-lower-possessive barbershop's
   * @title-plural Barbershops
   * @title-plural-possessive Barbershops'
   * @title-possessive Barbershop's
   * @vowel-sound false
   */
  const BARBERSHOP = 18;

  /**
   * Boutique.
   *
   * @group beauty
   * @title Boutique
   * @title-lower boutique
   * @title-lower-plural boutiques
   * @title-lower-plural-possessive boutiques'
   * @title-lower-possessive boutique's
   * @title-plural Boutiques
   * @title-plural-possessive Boutiques'
   * @title-possessive Boutique's
   * @vowel-sound false
   */
  const BOUTIQUE = 19;

  /**
   * Business.
   *
   * @group other
   * @title Business
   * @title-lower business
   * @title-lower-plural businesses
   * @title-lower-plural-possessive businesses'
   * @title-lower-possessive business's
   * @title-plural Businesses
   * @title-plural-possessive Businesses'
   * @title-possessive Business's
   * @vowel-sound false
   */
  const BUSINESS = 26;

  /**
   * Campus.
   *
   * @group childcare-education
   * @title Campus
   * @title-lower campus
   * @title-lower-plural campuses
   * @title-lower-plural-possessive campuses'
   * @title-lower-possessive campus's
   * @title-plural Campuses
   * @title-plural-possessive Campuses'
   * @title-possessive Campus's
   * @vowel-sound false
   */
  const CAMPUS = 25;

  /**
   * Center.
   *
   * @group other
   * @title Center
   * @title-lower center
   * @title-lower-plural centers
   * @title-lower-plural-possessive centers'
   * @title-lower-possessive center's
   * @title-plural Centers
   * @title-plural-possessive Centers'
   * @title-possessive Center's
   * @vowel-sound false
   */
  const CENTER = 27;

  /**
   * Childcare Center.
   *
   * @group childcare-education
   * @title Childcare Center
   * @title-lower childcare center
   * @title-lower-plural childcare centers
   * @title-lower-plural-possessive childcare centers'
   * @title-lower-possessive childcare center's
   * @title-plural Childcare Centers
   * @title-plural-possessive Childcare Centers'
   * @title-possessive Childcare Center's
   * @vowel-sound false
   */
  const CHILDCARE_CENTER = 20;

  /**
   * Clinic.
   *
   * @group medical-dental
   * @title Clinic
   * @title-lower clinic
   * @title-lower-plural clinics
   * @title-lower-plural-possessive clinics'
   * @title-lower-possessive clinic's
   * @title-plural Clinics
   * @title-plural-possessive Clinics'
   * @title-possessive Clinic's
   * @vowel-sound false
   */
  const CLINIC = 13;

  /**
   * Club.
   *
   * @group fitness
   * @title Club
   * @title-lower club
   * @title-lower-plural clubs
   * @title-lower-plural-possessive clubs'
   * @title-lower-possessive club's
   * @title-plural Clubs
   * @title-plural-possessive Clubs'
   * @title-possessive Club's
   * @vowel-sound false
   */
  const CLUB = 4;

  /**
   * Community Center.
   *
   * @group other
   * @title Community Center
   * @title-lower community center
   * @title-lower-plural community centers
   * @title-lower-plural-possessive community centers'
   * @title-lower-possessive community center's
   * @title-plural Community Centers
   * @title-plural-possessive Community Centers'
   * @title-possessive Community Center's
   * @vowel-sound false
   */
  const COMMUNITY_CENTER = 28;

  /**
   * Dance Studio.
   *
   * @group fitness
   * @title Dance Studio
   * @title-lower dance studio
   * @title-lower-plural dance studios
   * @title-lower-plural-possessive dance studios'
   * @title-lower-possessive dance studio's
   * @title-plural Dance Studios
   * @title-plural-possessive Dance Studios'
   * @title-possessive Dance Studio's
   * @vowel-sound false
   */
  const DANCE_STUDIO = 6;

  /**
   * Daycare.
   *
   * @group childcare-education
   * @title Daycare
   * @title-lower daycare
   * @title-lower-plural daycares
   * @title-lower-plural-possessive daycares'
   * @title-lower-possessive daycare's
   * @title-plural Daycares
   * @title-plural-possessive Daycares'
   * @title-possessive Daycare's
   * @vowel-sound false
   */
  const DAYCARE = 21;

  /**
   * Dental Office.
   *
   * @group medical-dental
   * @title Dental Office
   * @title-lower dental office
   * @title-lower-plural dental offices
   * @title-lower-plural-possessive dental offices'
   * @title-lower-possessive dental office's
   * @title-plural Dental Offices
   * @title-plural-possessive Dental Offices'
   * @title-possessive Dental Office's
   * @vowel-sound false
   */
  const DENTAL_OFFICE = 14;

  /**
   * Dojo.
   *
   * @group fitness
   * @title Dojo
   * @title-lower dojo
   * @title-lower-plural dojos
   * @title-lower-plural-possessive dojos'
   * @title-lower-possessive dojo's
   * @title-plural Dojos
   * @title-plural-possessive Dojos'
   * @title-possessive Dojo's
   * @vowel-sound false
   */
  const DOJO = 5;

  /**
   * Fitness Center.
   *
   * @group fitness
   * @title Fitness Center
   * @title-lower fitness center
   * @title-lower-plural fitness centers
   * @title-lower-plural-possessive fitness centers'
   * @title-lower-possessive fitness center's
   * @title-plural Fitness Centers
   * @title-plural-possessive Fitness Centers'
   * @title-possessive Fitness Center's
   * @vowel-sound false
   */
  const FITNESS_CENTER = 1;

  /**
   * Gym.
   *
   * @group fitness
   * @title Gym
   * @title-lower gym
   * @title-lower-plural gyms
   * @title-lower-plural-possessive gyms'
   * @title-lower-possessive gym's
   * @title-plural Gyms
   * @title-plural-possessive Gyms'
   * @title-possessive Gym's
   * @vowel-sound false
   */
  const GYM = 2;

  /**
   * Health Center.
   *
   * @group wellness-spa
   * @title Health Center
   * @title-lower health center
   * @title-lower-plural health centers
   * @title-lower-plural-possessive health centers'
   * @title-lower-possessive health center's
   * @title-plural Health Centers
   * @title-plural-possessive Health Centers'
   * @title-possessive Health Center's
   * @vowel-sound false
   */
  const HEALTH_CENTER = 12;

  /**
   * Learning Center.
   *
   * @group childcare-education
   * @title Learning Center
   * @title-lower learning center
   * @title-lower-plural learning centers
   * @title-lower-plural-possessive learning centers'
   * @title-lower-possessive learning center's
   * @title-plural Learning Centers
   * @title-plural-possessive Learning Centers'
   * @title-possessive Learning Center's
   * @vowel-sound false
   */
  const LEARNING_CENTER = 24;

  /**
   * Medical Office.
   *
   * @group medical-dental
   * @title Medical Office
   * @title-lower medical office
   * @title-lower-plural medical offices
   * @title-lower-plural-possessive medical offices'
   * @title-lower-possessive medical office's
   * @title-plural Medical Offices
   * @title-plural-possessive Medical Offices'
   * @title-possessive Medical Office's
   * @vowel-sound false
   */
  const MEDICAL_OFFICE = 15;

  /**
   * Med Spa.
   *
   * @group wellness-spa
   * @title Med Spa
   * @title-lower med spa
   * @title-lower-plural med spas
   * @title-lower-plural-possessive med spas'
   * @title-lower-possessive med spa's
   * @title-plural Med Spas
   * @title-plural-possessive Med Spas'
   * @title-possessive Med Spa's
   * @vowel-sound false
   */
  const MED_SPA = 10;

  /**
   * Office.
   *
   * @group other
   * @title Office
   * @title-lower office
   * @title-lower-plural offices
   * @title-lower-plural-possessive offices'
   * @title-lower-possessive office's
   * @title-plural Offices
   * @title-plural-possessive Offices'
   * @title-possessive Office's
   * @vowel-sound true
   */
  const OFFICE = 29;

  /**
   * Practice.
   *
   * @group medical-dental
   * @title Practice
   * @title-lower practice
   * @title-lower-plural practices
   * @title-lower-plural-possessive practices'
   * @title-lower-possessive practice's
   * @title-plural Practices
   * @title-plural-possessive Practices'
   * @title-possessive Practice's
   * @vowel-sound false
   */
  const PRACTICE = 16;

  /**
   * Preschool.
   *
   * @group childcare-education
   * @title Preschool
   * @title-lower preschool
   * @title-lower-plural preschools
   * @title-lower-plural-possessive preschools'
   * @title-lower-possessive preschool's
   * @title-plural Preschools
   * @title-plural-possessive Preschools'
   * @title-possessive Preschool's
   * @vowel-sound false
   */
  const PRESCHOOL = 22;

  /**
   * Recreation Center.
   *
   * @group other
   * @title Recreation Center
   * @title-lower recreation center
   * @title-lower-plural recreation centers
   * @title-lower-plural-possessive recreation centers'
   * @title-lower-possessive recreation center's
   * @title-plural Recreation Centers
   * @title-plural-possessive Recreation Centers'
   * @title-possessive Recreation Center's
   * @vowel-sound false
   */
  const RECREATION_CENTER = 30;

  /**
   * Salon.
   *
   * @group beauty
   * @title Salon
   * @title-lower salon
   * @title-lower-plural salons
   * @title-lower-plural-possessive salons'
   * @title-lower-possessive salon's
   * @title-plural Salons
   * @title-plural-possessive Salons'
   * @title-possessive Salon's
   * @vowel-sound false
   */
  const SALON = 17;

  /**
   * Shala.
   *
   * @group fitness
   * @title Shala
   * @title-lower shala
   * @title-lower-plural shalas
   * @title-lower-plural-possessive shalas'
   * @title-lower-possessive shala's
   * @title-plural Shalas
   * @title-plural-possessive Shalas'
   * @title-possessive Shala's
   * @vowel-sound false
   */
  const SHALA = 7;

  /**
   * Spa.
   *
   * @group wellness-spa
   * @title Spa
   * @title-lower spa
   * @title-lower-plural spas
   * @title-lower-plural-possessive spas'
   * @title-lower-possessive spa's
   * @title-plural Spas
   * @title-plural-possessive Spas'
   * @title-possessive Spa's
   * @vowel-sound false
   */
  const SPA = 9;

  /**
   * Studio.
   *
   * @group fitness
   * @title Studio
   * @title-lower studio
   * @title-lower-plural studios
   * @title-lower-plural-possessive studios'
   * @title-lower-possessive studio's
   * @title-plural Studios
   * @title-plural-possessive Studios'
   * @title-possessive Studio's
   * @vowel-sound false
   */
  const STUDIO = 8;

  /**
   * Training Center.
   *
   * @group fitness
   * @title Training Center
   * @title-lower training center
   * @title-lower-plural training centers
   * @title-lower-plural-possessive training centers'
   * @title-lower-possessive training center's
   * @title-plural Training Centers
   * @title-plural-possessive Training Centers'
   * @title-possessive Training Center's
   * @vowel-sound false
   */
  const TRAINING_CENTER = 3;

  /**
   * Venue.
   *
   * @group other
   * @title Venue
   * @title-lower venue
   * @title-lower-plural venues
   * @title-lower-plural-possessive venues'
   * @title-lower-possessive venue's
   * @title-plural Venues
   * @title-plural-possessive Venues'
   * @title-possessive Venue's
   * @vowel-sound false
   */
  const VENUE = 31;

  /**
   * Wellness Center.
   *
   * @group wellness-spa
   * @title Wellness Center
   * @title-lower wellness center
   * @title-lower-plural wellness centers
   * @title-lower-plural-possessive wellness centers'
   * @title-lower-possessive wellness center's
   * @title-plural Wellness Centers
   * @title-plural-possessive Wellness Centers'
   * @title-possessive Wellness Center's
   * @vowel-sound false
   */
  const WELLNESS_CENTER = 11;
}

?>
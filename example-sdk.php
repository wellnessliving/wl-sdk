<?php

namespace WlSdkExample;

use DateTime;
use WellnessLiving\Core\Passport\Login\Enter\EnterModel;
use WellnessLiving\Core\Passport\Login\Enter\NotepadModel;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;
use WellnessLiving\Wl\Field\WlFieldTypeSid;
use WellnessLiving\Wl\Profile\Edit\EditModel;
use WellnessLiving\Wl\Schedule\ClassView\ClassViewModel;
use WellnessLiving\WlAssertException;
use WellnessLiving\WlUserException;

require_once __DIR__.'/WellnessLiving/wl-autoloader.php';
require_once __DIR__.'/example-config.php';

try
{
  $o_config=new ExampleConfig();

  // Retrieve notepad (it is a separate step of user sign in process)
  $o_notepad=new NotepadModel($o_config);
  $o_notepad->s_login='1449191219@mail.com';
  $o_notepad->get();

  // Sign in a user
  $o_enter=new EnterModel($o_config);
  $o_enter->cookieSet($o_notepad->cookieGet()); // Keep cookies to keep session.
  $o_enter->s_login='1449191219@mail.com';
  $o_enter->s_notepad=$o_notepad->s_notepad;
  $o_enter->s_password=$o_notepad->hash('1111');
  $o_enter->post();

  $o_user = new EditModel($o_config);
  $o_user->cookieSet($o_notepad->cookieGet());
  $o_user->k_business = '1';
  $o_user->uid = '15';
  $o_user->get();

  $dl_birthday = null;
  foreach($o_user->a_structure as $a_field)
  {
    if($a_field['id_field_type']==WlFieldTypeSid::GENERAL&&$a_field['id_field_general']==WlFieldGeneralSid::BIRTHDAY)
    {
      $dl_birthday = $a_field['x_value'];
      break;
    }
  }

  if($dl_birthday&&$dl_birthday!=='0000-00-00')
  {
    $dt_now = new DateTime('now');
    $dt_birth = new DateTime($dl_birthday);

    $i_age = $dt_now->diff($dt_birth)->y;
  }
  else
  {
    $i_age = null;
  }

  $o_class = new ClassViewModel($o_config);
  $o_class->cookieSet($o_notepad->cookieGet());
  $o_class->dt_date = '2020-02-06 06:00:00';
  $o_class->k_class_period = '20';
  $o_class->uid = '15';
  $o_class->get();

  if(
    !$o_class->a_class['can_book']&&
    $o_class->a_class['i_age_from']!=null&&
    $o_class->a_class['i_age_to']!=null&&
    ($i_age==null||$i_age>$o_class->a_class['i_age_to']||$i_age<$o_class->a_class['i_age_from'])
  )
  {
    echo 'Your age is '.$i_age." years\n";
    echo 'Allowed age is from '.$o_class->a_class['i_age_from'].' to '.$o_class->a_class['i_age_to']." years\n";
  }
}
catch(WlAssertException $e)
{
  echo $e;
  return;
}
catch(WlUserException $e)
{
  echo $e;
  return;
}

?>
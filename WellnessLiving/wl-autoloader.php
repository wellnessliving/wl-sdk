<?php

spl_autoload_register(function (string $s_class)
{
  if(substr($s_class,0,15)==='WellnessLiving\\')
  {
    require __DIR__.'/'.str_replace('\\','/',substr($s_class,15)).'.php';
  }
}, true);


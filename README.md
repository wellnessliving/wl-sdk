# WellnessLiving SDK

## Register your application in our system

To register your application, we'll need the following information:

* Name of your application.
* Other information that may help us understand what your application will do.

Please, contact our support team and provide them information listed above to register your application. 

As a result of registration we'll provide you the following:

* Application ID;
* Secret code (authorization code).

We'll provide you with data for connecting our staging and production environments.
Application ID and secret code differs at staging and production.

## Download our SDK here:

  https://github.com/wellnessliving/wl-sdk

  Try to run example script that is placed in the root of WellnessLiving SDK.

  For this, follow instructions placed in the following chapter.

## How to run example script

To run example script, do the following:

1. Put application ID and secret key in `example-config.php`.
2. Put login/password of your example staff member in `example-sdk.php`.
3. Run the following command in command line:

       php example-sdk.php

## Embed our SDK in your code

To work in your code, you actually only need `WellnessLiving/` directory from the root of WellnessLiving SDK.

You may remove example files from your project.

Include our autoloader as it is made in our example:

    require_once __DIR__.'/WellnessLiving/wl-autoloader.php';

## When you are ready to switch to production

When you are ready to switch to production, change your connection configuration class to inherit from 
`\WellnessLiving\Config\WlConfigProduction` (by default it inherits `\WellnessLiving\Config\WlConfigStaging`) which
leads to staging.

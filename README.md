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

## Download 

 Our SDK is available for download here at https://github.com/wellnessliving/wl-sdk

 You could also use this bash one-liner to install the SDK with composer:
```shell
([ ! -f composer.json ] && echo '{"name":"sdk/project"}' > composer.json); composer config repositories.wellnessliving/wl-sdk git https://github.com/wellnessliving/wl-sdk && composer require 'wellnessliving/wl-sdk:>=1.0.0' && composer install
```

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
`\WellnessLiving\Config\WlConfigProduction` (by default it inherits `\WellnessLiving\Config\WlConfigDeveloper`) which
leads to staging.

## Notes about our release rollout process

We have three development branches:

* Trunk
* Staging
* Production

Trunk is where our development team develops new features. Most changes are made in the trunk.

For about 2 weeks before release to production, staging is recreated from the trunk.
Staging is used by our QA team to find bugs.
Also, we use staging to present our new features to our customers so that they may be sure that new features work as
they expect before those features come to production.

**Important note:** Our API and SDK is subject to change at any time without additional notices.

Look after changes in SDK repository to see if there are some incompatible changes.

It is required that you write integration tests so that you may be sure that your application is fully compatible with
our new version of SDK and staging.

Make sure that you get notifications about when a staging was recreated from trunk so that you can run your integration
tests and fix all incompatibilities.

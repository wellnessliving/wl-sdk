# WellnessLiving SDK

## Register your application in our system

To register your application, please contact WellnessLiving Support and provide the following information:

* The name of your application.
* Information about what your application does.

After registering, we'll send you the following information:

* The application ID
* The secret code (authorization code)
* An example staff member in staging
* Your staging business ID for testing

We'll also provide you with data to connect to our staging and production environments.
Unique application IDs and secret codes are required for both environments.

## Download 

Our SDK can be downloaded at https://github.com/wellnessliving/wl-sdk.

You can also use this bash one-liner to install the SDK with composer:
```shell
([ ! -f composer.json ] && echo '{"name":"sdk/project"}' > composer.json); composer config repositories.wellnessliving/wl-sdk git https://github.com/wellnessliving/wl-sdk && composer require 'wellnessliving/wl-sdk:>=1.0.0' && composer install
```

## How to run example script

After the SDK has been downloaded, try to run the example script placed in the root directory of the WellnessLiving SDK.

To run the example script, perform the following actions:

1. Put your application ID and secret key in `example-config.php`.
2. Put your login/password of your example staff member in `example-sdk.php`.
3. Run the following command using your command-line interface:

       php example-sdk.php

## Embed our SDK in your code

To work with our SDK in your code, you'll need the `WellnessLiving/` directory from the root directory of the WellnessLiving SDK.

You can remove example files from your project to suit your business needs.

We recommend using our autoloader that's included in our example:

    require_once __DIR__.'/WellnessLiving/wl-autoloader.php';

## Moving to production

When you're ready to switch to the production environment, change your connection configuration class in your config file to inherit from 
`\WellnessLiving\Config\WlConfigProduction`. By default, the connection configuration class inherits `\WellnessLiving\Config\WlConfigDeveloper`, which
points to the staging environment.

## Notes about our release process

We maintain three development branches:

* Trunk
* Staging
* Production

Trunk is where our Engineering Department develops new features. Most changes are made in the trunk.

For about two weeks before the release to production, staging is recreated from the trunk.
Staging is used by our QA Team to find bugs.
Also, we use staging to present our new features to our customers so that they can be sure new features work as
they expected before new features move to production.

### Versioning
The versioning scheme we use is based on [Semantic Versioning](https://semver.org), wherein version suffixes are added in accordance to [Composer's version stability protocols](https://getcomposer.org/doc/articles/versions.md#stabilities). 
* Trunk (development) releases are tagged with only numbers, without any special suffix (for example, v1.0.4).
* Staging releases are tagged with `rc` suffix (for example, v1.0.3-rc).
* Production releases are tagged with `stable` suffix (for example, v1.0.0-stable).
If you're checking out a version with a specific suffix, changes in the API code are only available on the proper backend server (demo, stable, or production respectively) or a lower one (staging version is auto-merged into development, but not vice versa).

**Note:** Our API and SDK is subject to change at any time without notice.

Review changes in the SDK repository to determine if there are any incompatible changes.

You must also write integration tests to be sure that your application is fully compatible with
our new version of SDK and staging.

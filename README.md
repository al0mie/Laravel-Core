Laravel Core
============


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/GrahamCampbell/Laravel-Core/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
[![Build Status](https://travis-ci.org/GrahamCampbell/Laravel-Core.png?branch=develop)](https://travis-ci.org/GrahamCampbell/Laravel-Core)
[![Coverage Status](https://coveralls.io/repos/GrahamCampbell/Laravel-Core/badge.png?branch=develop)](https://coveralls.io/r/GrahamCampbell/Laravel-Core)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Core/badges/quality-score.png?s=8b83d4d22d5af457e6313d26c037fffef76b85d0)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Core)
[![Latest Version](https://poser.pugx.org/graham-campbell/core/v/stable.png)](https://packagist.org/packages/graham-campbell/core)
[![Still Maintained](http://stillmaintained.com/GrahamCampbell/Laravel-Core.png)](http://stillmaintained.com/GrahamCampbell/Laravel-Core)


## What Is Laravel Core?

Laravel Core provides some extra functionality for [Laravel 4.1](http://laravel.com).  

* Laravel Core was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).  
* Laravel Core uses [Travis CI](https://travis-ci.org/GrahamCampbell/Laravel-Core) to run tests to check if it's working as it should.  
* Laravel Core uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Core) and [Coveralls](https://coveralls.io/r/GrahamCampbell/Laravel-Core) to run additional tests and checks.  
* Laravel Core uses [Composer](https://getcomposer.org) to load and manage dependencies.  
* Laravel Core provides a [change log](https://github.com/GrahamCampbell/Laravel-Core/blob/develop/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Core/releases), and a [wiki](https://github.com/GrahamCampbell/Laravel-Core/wiki).  
* Laravel Core is licensed under the Apache License, available [here](https://github.com/GrahamCampbell/Laravel-Core/blob/develop/LICENSE.md).  


## System Requirements

* PHP 5.4.7+ or PHP 5.5+ is required.  
* You will need [Laravel 4.1](http://laravel.com) because this package is designed for it.  
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of Laravel Core.  


## Installation

Please check the system requirements before installing Laravel Core.  

To get the latest version of Laravel Core, simply require it in your `composer.json` file.  

`"graham-campbell/core": "dev-master"`  

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.  

Once Laravel Core is installed, you can extend or implement the classes in this package to speed up writing Laravel packages further. There are no service providers to register.  


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/Laravel-Core
) for Laravel Core.  

You may see an example of implementation in [Laravel Queuing](https://github.com/GrahamCampbell/Laravel-Queuing) or [CMS Core](https://github.com/GrahamCampbell/CMS-Core).  


## Updating Your Fork

The latest and greatest source can be found on [GitHub](https://github.com/GrahamCampbell/Laravel-Core).  
Before submitting a pull request, you should ensure that your fork is up to date.  

You may fork Laravel Core:  

    git remote add upstream git://github.com/GrahamCampbell/Laravel-Core.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).  

You can then update the branch:  

    git pull --rebase upstream develop
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.  


## Pull Requests

Please submit pull requests against the develop branch.  

* Any pull requests made against the master branch will be closed immediately.  
* If you plan to fix a bug, please create a branch called `fix-`, followed by an appropriate name.  
* If you plan to add a feature, please create a branch called `feature-`, followed by an appropriate name.  
* Please follow PSR-2 standards except namespace declarations should be on the same line as `<?php`.  


## License

Apache License  

Copyright 2013 Graham Campbell  

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at  

 http://www.apache.org/licenses/LICENSE-2.0  

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.  

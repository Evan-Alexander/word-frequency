# Word Frequency with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Code Review, 2/17/2017

#### By Jason Brown

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Jason Brown

## License
* MIT

## Specifications
* Phase 1 - Dependencies, composer files and .gitignore.
* Phase 2 - Empty WordFrequency class.
* Phase 3 - Build Test cases and implement wordFrequency method.

* Behavior given a word, finds all occurrences of word in a sentence.

| Sentence              | Find Word      |  Occurrences | Description of Why |
|--------------|----------------------------|-----------|--------------------|
| Hello world.         |     world           |    1      | lowercase vs. lowercase. |
|  Hello Jason.      | jason          |  1       | capital vs. lowercase   |
|  He said he would be happy.  |     he       |      2    | word occurs twice with upper and lowercases. |
| My dad is the best dad.  Dad's are the best.  | dad | 3 | word occurs three times with apostrophe added.|
| Cats are in the cathedral. | cat | 0 |Tests for partial words. Answer should not recognize cats and cathedral. |




* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Twig template with a form that accepts a string and returns the result.

* End specifications

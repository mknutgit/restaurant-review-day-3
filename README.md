# Best Restaurants

#### _This app allows users to see the best restaurants in their area by cuisine. The app also enables them to add restaurants they think should be included._

#### By Matt Knutson and Aundra Miller

## Description

This application allows search for various restaurants in their area based on the cuisine served. The user may also add additional restaurants if the desired restaurant is not found in a cuisine's selection.

The application was developed using PHP, as well as Silex, Twig, and PHPUnit.

## Setup/Installation Requirements

To work properly, this application requires:

1. Composer.

2. Twig and Silex installation.

3. Local server.

4. MySQL database (included).

###Setup instructions:
* Clone this repository.
* Go to the root directory.
* Run 'composer install' in the terminal (to install Twig and Silex functionality).
* Open the database:

    1. Open your account on PHPMyAdmin.

    2. Go to the Import tab.

    3. Download the zip file for the database from the cloned repository.

* Run 'php -S localhost:8000' in the web folder to start the local server.

## Next Steps
Update method exists for the Cuisine class, but is not implimented. Remaining work required to create an update method for the Restaurants class, as well as delete methods for both classes. All will require front-end buildout with Twig and Silex.

## Known Bugs

No bugs known.

## Support and contact details

If you have any questions, concerns, or suggestions, contact us at:
Aundra Miller:
miller.aundra@gmail.com
GitHub: milleraundra

## Technologies Used

* PHP
* HTML
* Twig
* Silex
* PHPUnit

### License

The MIT License (MIT)

Copyright (c) 2016 Aundra Miller and Matt Knutson

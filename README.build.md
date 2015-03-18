Sonata Standard Edition
=======================

What's inside?
--------------

Sonata Standard Edition comes pre-configured with the following bundles:

* Bundles from Symfony Standard distribution
* Sonata Admin Bundles: Admin and Doctrine ORM Admin
* Sonata Ecommerce Bundles: Payment, Customer, Invoice, Order and Product
* Sonata Foundation Bundles: Core, Notification, Formatter, Intl, Cache, Seo and Easy Extends
* Sonata Feature Bundles: Page, Media, News, User, Block, Timeline
* Api Bundles: FOSRestBundle, BazingaHateoasBundle, NelmioApiDocBundle and JMSSerializerBundle
* all required vendors

Installation
------------

    1. Download the archive from github https://github.com/sonata-project/sandbox-build/archive/master.zip
    2. unzip the archive
    3. create a ``app/config/parameters.yml`` file based on the ``app/config/parameters.yml``
    4. load the data by running ``php bin/load_data.php``
    5. You should should be ready to go ...

Run
---

If you are running PHP5.4, you can use the built in server to start the demo:

    app/console server:run localhost:9090

Now open your browser and go to http://localhost:9090/admin

and use your user and password defined previously


### Unit testing

To run the Sonata test suites, you can run the command:

    bin/qa_client_ci.sh

Enjoy!

[link_behat]: http://docs.behat.org "the official Behat documentation"

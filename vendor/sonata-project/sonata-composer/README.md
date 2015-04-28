Sonata Project's Composer tools
===============================

Installation
------------

Add this line into the ``composer.json`` file.

    "sonata-project/sonata-composer": "dev-master",


MissingSCMPlugin
----------------

This plugin make sure you will not get ``The .git directory is missing from`` error message when you try to run ``composer update`` with a missing ``.git`` folder from a vendor.

How this situation might occurs ? If you have a build with the code with vendors and you want to update dependencies.


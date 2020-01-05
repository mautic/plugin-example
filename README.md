[![Build Status](https://travis-ci.org/mautic/plugin-example.svg?branch=master)](https://travis-ci.org/mautic/plugin-example)

# Mautic - Example Plugin

This plugin does basically nothing. It's used in functional tests for the Mautic Marketplace to ensure that installing, updating and removing plugins work.

This plugin can also be used as inspiration for your own plugin(s). The important parts are:

- The composer.json contains all information for the Marketplace to install it properly.
- It has good automated CI checks that would take you long days to configure otherwise.
- Uses plugin migrations based on the IntegrationsBundle.
- Mautic 3 ready.

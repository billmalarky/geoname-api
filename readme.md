## Geoname API

This API is built with Phalcon PHP and Sphinx search. It allows you to quickly integrate GeoNames lookups into your web app. It imports the GeoNames data into MySql using the [CodigoFuerte import script](https://github.com/codigofuerte/GeoNames-MySQL-DataImport), then sets up basic API routing to allow you to query the geonames data rapidly using Phalcon PHP and Sphinx.

### Setup

Install Virtualbox and Vagrant. Navigate to the project directory and run "Vagrant Up"

Vagrant provisioning script will automatically download the geonames data and import it into mysql.

Add the following line to your hosts file:
192.168.100.100 geonameapi.local

Navigate your browser to http://geonameapi.local and you should be good.
Try the following route to ensure everything is working correctly. http://geonameapi.local/api/primary/4526992/

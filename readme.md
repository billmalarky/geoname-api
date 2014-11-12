## GeoPhalcon

### GeoPhalcon is a fast basic GeoNames search API built with the Phalcon PHP framework.

GeoPhalcon allows you to quickly integrate GeoNames lookups into your web app. It imports the GeoNames data into MySql using the [CodigoFuerte import script](https://github.com/codigofuerte/GeoNames-MySQL-DataImport), then sets up basic API routing to allow you to query the geonames data rapidly using Phalcon PHP.

This was benchmarked against the Slim framework with OpCache and Node.js. The results can be found here.
http://reidmayo.com/2014/10/25/benchmarking-phalcon-php-vs-slim-framework-with-opcache-vs-node-js/

### Setup

Install Virtualbox and Vagrant. Navigate to the GeoPhalcon directory and run "Vagrant Up"

Vagrant provisioning script will automatically download the geonames data and import it into mysql.

Add the following line to your hosts file:
192.168.100.100 geophalcon.local

Navigate your browser to http://geophalcon.local and you should be good.
Try the following route to ensure everything is working correctly. http://geophalcon.local/api/primary/4526992/


### License

GeoPhalcon is open-source software licensed under the [MIT license](http://opensource.org/licenses/MIT)
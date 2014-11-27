#!/bin/bash
echo "ErrorDocument 404 404.php" > /var/www/CS252-master/.htaccess
echo "Page not found" > /var/www/CS252-master/404.php
service apache2 restart
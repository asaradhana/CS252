#!/bin/bash
echo "ErrorDocument 403 403.php" >> /var/www/CS252-master/.htaccess
echo "Sorry, you landed on a forbidden page!" > /var/www/CS252-master/403.php
service apache2 restart
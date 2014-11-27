#!/usr/bin/bash
echo "Enter the name of document root path var\/www\/your root name"
read rep;
#rep = $1
#echo $rep;
line="var\/www\/html"
sed -i "s/$line/$rep/" /etc/apache2/sites-available/000-default.conf

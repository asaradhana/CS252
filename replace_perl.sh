#!/usr/bin/bash
echo "enter your listen port ";
read portno;
sed -i "s/80/$portno/" /etc/apache2/ports.conf

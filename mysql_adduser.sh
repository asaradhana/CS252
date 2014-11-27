#!/bin/bash
#write username and password in inverted single comma in given two fields
user='user'
pass='password'
echo "enter your mysql password"
mysql -u root -p  << EOF
CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
GRANT ALL PRIVILEGES ON * . * TO '$user'@'localhost';
flush privileges;
EOF

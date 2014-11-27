#!/bin/bash
user= $1
pass= $2
mysql -u root -p  << EOF
CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
GRANT ALL PRIVILEGES ON * . * TO '$user'@'localhost';
flush privileges;
EOF

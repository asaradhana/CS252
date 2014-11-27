#!/bin/bash
pass1= $1
pass2= $2
mysql -u root -p '$pass1' << EOF
use mysql;
update user set password=PASSWORD('$pass2') where User='root';
flush privileges;
EOF

#!/bin/bash
#write your new mysql password in newpass entry in inverted commas
#oldpass='1234'
newpass='123456'
echo "Enter your current mysql password"
mysql -u root -p << EOF
use mysql;
update user set password=PASSWORD('$newpass') where User='root';
flush privileges;
EOF

#!/usr/bin/bash
rep="bind-address = 127.0.0.1"
bindad=$1
line="bind-address = '$bindad'"
sed -i "s/$rep/$line/" /etc/mysql/my.cnf

#! /bin/bash

ssh ubuntu@192.168.64.18  << EOF

cd /home/ubuntu/server/jenkins2

git pull origin master

EOF
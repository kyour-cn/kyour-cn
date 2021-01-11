#!/bin/bash

# /data/dev/kyour-cn/auto-git.sh

# vim /var/spool/cron/root
# systemctl restart crond

cd /data/dev/kyour-cn

git pull

php auto.php

git add .

git commit -m"sign-in"

git push

cd -

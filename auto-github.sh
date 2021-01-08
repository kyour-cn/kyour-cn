#!/bin/bash

# /data/dev/kyour-cn/auto-github.sh

# vim /var/spool/cron/root
# systemctl restart crond

git pull

php auto.php

git add .

git commit -m"sign-in"

git push

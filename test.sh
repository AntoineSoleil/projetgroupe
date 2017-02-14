#!/bin/bash

sudo apt-get update
sudo apt-get install -y mariadb-server mariadb-client git libapparmor1
sudo sed -i 's:bind-address		= 127.0.0.1:#bind-address		= 127.0.0.1:g' /etc/mysql/my.cnf
mysql -u root -p0000 -Bse "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '0000' WITH GRANT OPTION;"
mysql -u root -p0000 -Bse "CREATE DATABASE projetgroupe;"
sudo service mysql restart
sudo wget https://apt.dockerproject.org/repo/pool/main/d/docker-engine/docker-engine_1.9.1-0~jessie_amd64.deb -P /tmp/
sudo dpkg -i /tmp/docker-engine_1.9.1-0~jessie_amd64.deb
sudo docker build -t php7 -f Dockerfile.php7 .
#cd ~/Documents
#git clone $1 && cd projetgroupe
sudo docker run -dit -p 80:80 -v $(pwd):/var/www/html/ --name php7-test php7
#chmod 755 -R ../projetgroupe
#chmod -R o+w storage

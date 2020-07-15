service mysql start

# PERMISSIONS AND ACCESS
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# CREATE A FOLDER FOR FT_CAPUTCHAR && AN INDEX
mkdir /var/www/ft_caputchar && touch /var/www/ft_caputchar/index.php

# SSL SETUP
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/ft_caputchar.pem -keyout /etc/nginx/ssl/ft_caputchar.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=cmarteau/CN=ft_caputchar"

# NGINX SETUP
mv ./tmp/localhost /etc/nginx/sites-available/ft_caputchar
ln -s /etc/nginx/sites-available/ft_caputchar /etc/nginx/sites-enabled/ft_caputchar
rm -rf /etc/nginx/sites-enabled/default

# MYSQL SETUP
mysql -u root -e "CREATE DATABASE wordpress;"
mysql wordpress -e "CREATE USER cmarteau@localhost IDENTIFIED BY 'yo';"
mysql -e "GRANT ALL PRIVILEGES ON wordpress.* TO cmarteau@localhost;"

# phpmyadmin SETUP
mkdir /var/www/ft_caputchar/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1 -C /var/www/ft_caputchar/phpmyadmin
mv ./tmp/phpmyadmin.php /var/www/ft_caputchar/phpmyadmin/phpmyadmin.php

# wordpress SETUP
cd /tmp/
wget -c https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/ /var/www/ft_caputchar
mv /tmp/wp-config.php /var/www/ft_caputchar/wordpress

service php7.3-fpm start
nginx -g 'daemon off;'
bash

# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cmarteau <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/07/09 19:47:04 by cmarteau          #+#    #+#              #
#    Updated: 2020/07/15 18:23:58 by cmarteau         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	debian:buster

RUN apt-get update && apt-get install -y procps && apt-get install nano && apt-get install -y wget
RUN apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server

COPY ./srcs/entrypoint.sh ./
COPY ./srcs/localhost ./tmp/localhost
COPY ./srcs/phpmyadmin.php ./tmp/phpmyadmin.php
COPY ./srcs/wp-config.php ./tmp/wp-config.php
COPY ./srcs/mysql.sql ./tmp/mysql.sql

CMD bash entrypoint.sh


FROM nimmis/apache

RUN apt update && \
	apt upgrade -y && \
	apt install libapache2-mod-log-sql-mysql -y 

RUN a2enmod unique_id

ADD 000-default.conf /etc/apache2/sites-available
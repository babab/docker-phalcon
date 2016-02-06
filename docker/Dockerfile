# Copyright (c) 2016  Benjamin Althues <benjamin@babab.nl>
#
# Permission to use, copy, modify, and distribute this software for any
# purpose with or without fee is hereby granted, provided that the above
# copyright notice and this permission notice appear in all copies.
#
# THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
# WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
# MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
# ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
# WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
# ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
# OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.

# wdocker vars:

#wd# docker = docker
#wd# name = phalcon
#wd# vol = -v $PWD/../src:/var/www
#wd# ports = -p 127.0.0.1:80:80

#wd# build = {docker} build -t {name} .
#wd# run = {docker} run -d {vol} {ports} --name {name} {name}
#wd# stop = {docker} stop {name}
#wd# rm = {docker} rm {name}

# wdocker commands:

#wd# init: {build} && {run}
#wd# start: {docker} start {name}
#wd# stop: {stop}
#wd# shell: {docker} exec -it {name} bash
#wd# rm: {stop} && {rm}
#wd# rebuild: {stop} && {rm} && {build} && {run}

FROM ubuntu:trusty
MAINTAINER Benjamin Althues <benjamin@althu.es>
EXPOSE 80
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y \
    software-properties-common
RUN apt-add-repository ppa:phalcon/stable
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y \
    apache2 libapache2-mod-php5 php5-curl php5-mongo \
    php5-mysql php5-phalcon php5-sqlite
VOLUME /var/www
WORKDIR /var/www
RUN a2enmod rewrite
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf
CMD /usr/sbin/apache2ctl -D FOREGROUND

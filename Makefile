ARGS = $(filter-out $@,$(MAKECMDGOALS))
MAKEFLAGS += --silent

start:
	docker-compose up -d

stop:
	docker-compose stop

logs:
	docker-compose logs -f

composer:
	docker-compose exec client-php composer $(ARGS)
	docker-compose exec server-php composer $(ARGS)

bash-client:
	docker-compose exec client-php bash

bash-server:
	docker-compose exec server-php bash

cert:
	if [ ! -d ~/.dinghy/certs ]; then mkdir -p ~/.dinghy/certs; fi
	cd ~/.dinghy/certs; bash -c 'openssl req -x509 -newkey rsa:2048 -keyout t3am.docker -out t3am.docker -days 365 -nodes -subj "/C=US/ST=Oregon/L=Portland/O=Company Name/OU=Org/CN=t3am.docker" -config <(cat /etc/ssl/openssl.cnf <(printf "[SAN]\nsubjectAltName=DNS:t3am.docker")) -reqexts SAN -extensions SAN'

%:
	@:

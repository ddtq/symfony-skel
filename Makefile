.PHONY: up composer down appbash composer install-dev build-images

up:
	docker-compose up -d

down:
	docker-compose down

appbash:
	docker exec -e http_proxy=$(http_proxy) -e https_proxy=$(http_proxy) -it saude_app_1 bash

composer:
	docker exec -e http_proxy=$(http_proxy) -e https_proxy=$(http_proxy) -it saude_app_1 /bin/bash -c "curl -sS https://getcomposer.org/installer | php && php composer.phar install"

install-dev: build-images up composer

build-images:
	pwd=$(`pwd`) && cd .docker/dev/app && docker image build --build-arg http_proxy=$(http_proxy) --build-arg https_proxy=$(https_proxy) -t ddtq/saude_app:0.1 . && cd $(pwd)
	pwd=$(`pwd`) && cd .docker/dev/web && docker image build --build-arg http_proxy=$(http_proxy) --build-arg https_proxy=$(https_proxy) -t ddtq/saude_web:0.1 . && cd $(pwd)

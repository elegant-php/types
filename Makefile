-include .env

# Fallback

help:
	@make --help

# Image

envirenments:
	@cp .env.template .env

build:
	@docker build -t ${IMAGE_NAME} .

remove:
	@docker rm ${IMAGE_NAME}

run:
	@mkdir -p vendor && docker run --rm -d -it --name ${IMAGE_NAME} \
	-v ./src:/var/app/src \
	-v ./vendor:/var/app/vendor \
	-v ./composer.json:/var/app/composer.json \
	-v ./composer.lock:/var/app/composer.lock \
	${IMAGE_NAME}

stop:
	@docker stop ${IMAGE_NAME} 1> /dev/null

# Testing

test:
	@echo "\033[1;32m\n--- running editorconfig-checker ---\n\033[0m"
	@make -s ec
	@echo "\033[1;32m\n--- running phpstan ---\n\033[0m"
	@make -s phpstan
	@echo "\033[1;32m\n--- running phpunit ---\n\033[0m"
	@make -s phpunit

ec:
	@docker exec -t -u 1000 ${IMAGE_NAME} vendor/bin/ec | echo "\
	\e[42m                 \e[0m\n\
	\e[42m\e[1m [OK] No errors  \e[0m\n\
	\e[42m                 \e[0m"

phpstan:
	@docker exec -t -u 1000 ${IMAGE_NAME} vendor/bin/phpstan analyze --level max src

phpunit:
	@docker exec -t -u 1000 ${IMAGE_NAME} vendor/bin/phpunit --colors="always" --do-not-cache-result --testdox src \
		&& echo "" || echo ""

# Connection

shell:
	@docker exec -it -u 1000 ${IMAGE_NAME} /bin/sh

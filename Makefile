# Makefile for Docker Nginx PHP Composer MySQL

include .env

# MySQL
MYSQL_DUMPS_DIR=data/db/dumps
MYSQL_SCHEMA_DIR=config/docker/mysql

help:
	@echo ""
	@echo "usage: make COMMAND"
	@echo ""
	@echo "Commands:"
	@echo "  full-clean          Clean directories for reset"
	@echo "  clean               Clean directories for reset except db backups"
	@echo "  composer-up         Update PHP dependencies with composer"
	@echo "  docker-start        Create and start containers"
	@echo "  docker-stop         Stop and clear all services except db backups"
	@echo "  logs                Follow log output"
	@echo "  mysql-init          Create schema of unity database"
	@echo "  mysql-dump          Create backup of all databases"
	@echo "  mysql-restore       Restore backup of all databases"

init:
	@$(shell cp -n $(shell pwd)/web/composer.json.dist $(shell pwd)/web/composer.json 2> /dev/null)

full-clean:
	@rm -Rf data/db/mysql/*
	@make clean

clean:
	@rm -Rf www
	@rm -Rf web/vendor
	@rm -Rf web/composer.lock
	@rm -Rf web/doc
	@rm -Rf web/report
	@rm -Rf logs/*
	@rm -Rf etc/ssl/*

composer-up:
	@docker run --rm -v $(shell pwd)/web/app:/app composer update

docker-start: init
	docker-compose up -d
#	sleep 90
#	@make mysql-restore

docker-stop:
	@docker-compose down -v
	@make clean

logs:
	@docker-compose logs -f

mysql-init:
	@docker exec $(shell docker-compose ps -q mysql) mysql -u"$(MYSQL_ROOT_USER)" -p"$(MYSQL_ROOT_PASSWORD)" < $(MYSQL_SCHEMA_DIR)/createSchema.sql 2>/dev/null

mysql-dump:
	@mkdir -p $(MYSQL_DUMPS_DIR)
	@docker exec $(shell docker-compose ps -q mysql) mysqldump --all-databases -u"$(MYSQL_ROOT_USER)" -p"$(MYSQL_ROOT_PASSWORD)" > $(MYSQL_DUMPS_DIR)/db.sql 2>/dev/null
	@make resetOwner

mysql-restore:
	@docker exec -i $(shell docker-compose ps -q mysql) mysql -u"$(MYSQL_ROOT_USER)" -p"$(MYSQL_ROOT_PASSWORD)" < $(MYSQL_DUMPS_DIR)/db.sql 2>/dev/null

resetOwner:
	@$(shell chown -Rf $(SUDO_USER):$(shell id -g -n $(SUDO_USER)) $(MYSQL_DUMPS_DIR) "$(shell pwd)/etc/ssl" "$(shell pwd)/api" "$(shell pwd)/client" 2> /dev/null)

.PHONY: clean init
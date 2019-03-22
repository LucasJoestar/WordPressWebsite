.PHONY: server save

server:
	php -S localhost:8000 -d display_errors=1

save:
	php wp-cli.phar db export database/dump.sql --add-drop-table
	git add .
	git commit -m "test"
	git push origin master
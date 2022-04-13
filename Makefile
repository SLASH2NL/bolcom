default:
	rm -rf ./lib ./test ./docs
	openapi-generator-cli generate -g php -i v7.json -c config.yml --git-user-id=slash2nl --git-repo-id=bolcom --git-host=github.com
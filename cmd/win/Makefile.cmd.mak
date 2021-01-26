#================================================
all:
#================================================
# composer
composer_version:
	@composer --version 
composer_install:
	@if not exist $(GCOMPOSER_INSTALL_PATH) ( mkdir $(GCOMPOSER_INSTALL_PATH) )
	cd $(GCOMPOSER_INSTALL_PATH) && composer require $(GCOMPOSER_INSTALL_PKG)
php_start:
	@php -S localhost:8000 -t $(GPHP_SERVER_PATH)
#================================================
# git
git_status:
	@cd $(GPROJECT_PATH) && git status
git_push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin main
git_push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin main
git_clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
#================================================

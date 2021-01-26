#================================================
all:
#================================================
# git
git_status:
	@cd $(GPROJECT_PATH) && git status
git_push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin main && chmod -R 777 $(GPROJECT_PATH)
git_push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin main && chmod -R 777 $(GPROJECT_PATH)
git_pull:
	@cd $(GPROJECT_PATH) && git pull && chmod -R 777 $(GPROJECT_PATH)
git_clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
#================================================
# apache
apache_stop:
	sudo service apache2 stop
apache_restart:
	sudo service apache2 restart
#================================================

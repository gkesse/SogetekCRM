all:

status:
	@cd $(GPROJECT_PATH) && git status
push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin main && chmod -R 777 $(GPROJECT_PATH)
push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin main && chmod -R 777 $(GPROJECT_PATH)
pull:
	@cd $(GPROJECT_PATH) && git pull && chmod -R 777 $(GPROJECT_PATH)
clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 

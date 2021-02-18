#================================================
all:
#================================================
# git
git_status:
	@cd $(GPROJECT_PATH) && git status
git_push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin main && sudo chmod -R 777 $(GPROJECT_PATH)
git_push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin main && sudo chmod -R 777 $(GPROJECT_PATH)
git_pull:
	@cd $(GPROJECT_PATH) && git pull && sudo chmod -R 777 $(GPROJECT_PATH)
git_clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
#================================================
# apache
apache_stop:
	sudo service apache2 stop
apache_restart:
	sudo service apache2 restart
#================================================
# sqlite
sqlite_show_tables:
	sqlite3 $(GSQLITE_DB_PATH) "select name from sqlite_master"
sqlite_show_table:
	sqlite3 $(GSQLITE_DB_PATH) "select * from $(GSQLITE_TABLE)"
sqlite_select_where:
	sqlite3 $(GSQLITE_DB_PATH) "select * from $(GSQLITE_TABLE) $(GSQLITE_SELECT_WHERE)"
sqlite_delete_table:
	sqlite3 $(GSQLITE_DB_PATH) "drop table $(GSQLITE_TABLE)"
	sqlite3 $(GSQLITE_DB_PATH) "select name from sqlite_master"
sqlite_delete_where:
	sqlite3 $(GSQLITE_DB_PATH) "delete from $(GSQLITE_TABLE) $(GSQLITE_SELECT_WHERE)"
	sqlite3 $(GSQLITE_DB_PATH) "select * from $(GSQLITE_TABLE)"
#================================================

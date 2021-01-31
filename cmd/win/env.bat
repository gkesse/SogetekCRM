@echo off
::===============================================
set "PATH=C:\MinGW\bin;%PATH%" 
set "PATH=C:\Users\Admin\Downloads\Programs\ReadyLib\dev\sqlite\3.29.0\mingw\bin;%PATH%"
::===============================================
set "GPROJECT_ROOT=C:\Users\Admin\Downloads\Programs"
set "GPROJECT_PATH=%GPROJECT_ROOT%\SogetekCRM"
::===============================================
set "GDATA_PATH=%GPROJECT_PATH%\webroot\data"
::===============================================
set "GSQLITE_DB_PATH=%GDATA_PATH%\sqlite\config.dat"
set "GSQLITE_TABLE=view_data"
set "GSQLITE_SELECT_WHERE=where view_key = 'webroot/php/request/request.php'"
set "GSQLITE_DELETE_WHERE=where view_key = 'webroot/php/request/request.php'"
::===============================================
set "GCOMPOSER_INSTALL_PATH=C:\Users\Admin\Downloads\Programs\ReadyTest\php\p02\libs\phpspreadsheet"
set "GCOMPOSER_INSTALL_PATH=C:\Users\Admin\Downloads\Programs\ReadyTest\php\p03\libs"
set "GCOMPOSER_INSTALL_PKG=phpoffice/phpspreadsheet --prefer-source"
set "GCOMPOSER_INSTALL_PKG=dompdf/dompdf"
set "GCOMPOSER_INSTALL_PKG=amenadiel/jpgraph:^4"
::===============================================
set "GPHP_SERVER_PATH=C:\Users\Admin\Downloads\Programs\ReadyTest\php\p02\libs\phpspreadsheet\vendor\phpoffice\phpspreadsheet\samples"
set "GPHP_SERVER_PATH=C:\Users\Admin\Downloads\Compressed\jpgraph-master\jpgraph-master"
set "GPHP_SERVER_PATH=C:\Users\Admin\Downloads\Programs\ReadyTest\php\p03"
::===============================================
set "GGIT_URL=https://github.com/gkesse/SogetekCRM.git"
set "GGIT_NAME=SogetekCRM"
::===============================================

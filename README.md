rs_property_management
======================
App for NCHUSG Website

property_management system

* This repo DO NOT include the application/config/database.php of CI.There is a sample in doc/aes/rs_weekly/database.php. You need to copy one and modified by yourself. 

* Site address rewrite: We recommand user to hide the "/index.php/" by rewritting the address. The following is an example for .htaccess (if you are using appche as your web server):

		RewriteEngine on
		RewriteCond $1 !^(index\.php|data|robots\.txt)
		RewriteRule ^(.*)$ /index.php/$1 [L]
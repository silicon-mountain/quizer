# Quizer
Question and answer app for Silicon Mountain Question &amp; Answer Conference

###Setting up Quizer locally
Clone [https://github.com/silicon-mountain/quizer](https://github.com/silicon-mountain/quizer)

Set a virtual host with the url [http://quizer.dev](http://www.quizer.dev)

	<VirtualHost *:80>
		DocumentRoot /var/www/html/quizer/public
		ServerName quizer.dev
		ServerAlias quizer.dev
	</VirtualHost>

	
If you don not want to use a virtual host,
php -S localhost:8888 
will do, and config hosts file to map
quizer.dev to localhost:8888

1. Make sure composer is installed
2. PHP >= 5.4

cd to quizer root directory run:

1. composer update
2. Locate .env file in root directory and edit database config
3. DB_HOST=localhost<br/>
   DB_DATABASE=quizer<br/>
   DB_USERNAME=root<br/>
   DB_PASSWORD=root<br/>
4. Run php artisan migrate


With that, you ready to get your hands dirty.



******************************************************************************************************************************************************

Running the program

******************************************************************************************************************************************************


I. Requirements to run the program

PHP >=5.4 with Mcrypt Extension (constraint from laravel) and the corresponding compatible versions of Appache/IIS & MySQL. 

Ruby (2.1.5) with capybara/mechanize and capybara/cucumber gems installed


II. Changes to meet your environment configuration

- Locate the file: your_root_document_folder/internship/application/config/database.php
Update the following mysql connection attributes: username, password and database. You can use an existing database (i.e. test) or create a new one.

- Locate the file: your_root_document_folder/internship/public/features/support/env.rb
Update Capybara.app_host to match your web server configurations


III. Creating the users' table through laravel artisan command 

Open cmd and run the following commands:

- Change cmd current path to your_root_document_folder/internship
- Run the command: php artisan migrate


IV. Run the program: http://your_web_server_url/internship/public/





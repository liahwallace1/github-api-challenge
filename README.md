Boomtown API Challenge

I completed this challenge using Laravel. Using a framework like this is heavy handed for this size project, but I wanted to use the framework for the position. You can find the actual files I created/edited here:
- app/Http/Controllers/ApiDataController.php
- routes/web.php
- resources/views/(all views)
I chose not to create a database or any models because all of the data is returned dynamically from the Github API.

To run this program, first download the zip file and unzip. Remove .example from the .env filename - you will need the .env file to run the program and it is not uploaded to GitHub. 

In your terminal, cd into the main project folder. Run the following commands:

- `composer update`: This will download the dependencies for the project
- `php artisan key:generate`: This will add an application key to your .env file that is required to run the project
- `php artisan serve`: This will start your local server.

Laravel will provide the URL for your local server.  Enter the URL in your browser, and you should see this simple site.

 

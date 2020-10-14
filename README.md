## GES POSTING & PLACEMENT SYSTEM

### Description 
This system is designed to assist newly trained teachers who have completed Teacher
Training Colleges to apply for posting as professional teachers into the Ghana Education Service.

### Installation
- Unzip file and copy unzipped directory to your development environment mostly htdocs
- Open your cli and navigate to the root of your application

#### Pull in Dependencies
Make sure you have [composer](https://composer.com) and [npm](https://npm.org) installed and run the following commands:

> composer install
> npm install & npm run serve

#### Generate a new key for the application

Firstly, generate a new key for you application to make it unique

> php artisan key:generate

#### Create Twilio account

Visit the [Twilio Platform](https://twilio.com) and create a new free account. We'll be using it to send bulk SMS notifications to posted applicants

#### Copy Twilio Sid, Secret Key and Number to .env file

#### Set up database
Create a database with a name of your choice and update it in your .env file.
If file doesn't exist clone the .env.example file and rename it to .env.

Run this command when done.

> php artisan migrate --seed

This command will migrate all the database tables to your new database and insert default values from the files in your seeds directory

#### Boot Server
Now run:

> php artisan serve 

This will start the php server for your application. Navigate to the served URL to test the system.

__Done!!!__


## ROLES AND PERMISSIONS TABLE
| ROLES | PERMISSIONS | GATE |
------------------------------------
| Regional HR | CRUD Districts, CRU Schools, CRUD Teachers, PTTD | manage-region |
| District HR | CRUD Schools, RU Teachers, PTTS | manage-district |

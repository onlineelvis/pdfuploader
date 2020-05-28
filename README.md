## PDF uploader

One page .pdf uploader. You can upload only pdf files. Uploaded file will be added at then end of list. To open and view file just click on thumbnail.

## Installation
1.Clone the repository-

> git clone 

2.Then cd into the folder with this command-

> cd pdfstorage

3.Then do a composer install-

> composer install

4.Then create a environment file using this command-

> cp .env.example .env

5.link storage

> php artisan storage:link

6.migrate DB (make sure you have connected to your db in .env file)

> php artisan migrate


## Run server

> php artisan serve

## Optional 

In this project in addition possible to add modal window pop out with button delete.


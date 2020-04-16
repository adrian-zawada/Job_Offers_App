## Installation

We need composer to install all packages. Here the complete instruction to install composer https://getcomposer.org/doc/00-intro.md

Let's install all packages, by running this command from Terminal
```
composer install
```
Use .env.example for creating .env file by command(Linux, macOS):
```
cp .env.example .env
```
or if you use Windows Distribution use:
```
copy .env.example .env
```
Let's do make aplication key
```
php artisan key:generate
```
And run the web server
```
php artisan serve
```
Now, visit http://localhost:8000 to try the demo.


## Screenshot
![alt text](https://i.imgur.com/huJwPzG.png)

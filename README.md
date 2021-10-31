# Fatura PHP API Challenge Solution 


## Requirements
This project built using **laravel 8.0**, so your php version must be >= **8.0**


## Using laravel passport for api authentication


## Installation
1. Clone the source code. `git clone https://github.com/embabby/Fatura-task.git`
2. Go to inside the project. `cd Fatura-task`
3. Run `composer install` to install all the dependencies.
4. Copy configrations file. `cp .env.example .env`
5. Create a new database.
6. Open .env file and set database configrations
```php
      DB_DATABASE= YOUR_DATABASE_NAME_HERE
      DB_USERNAME= YOUR_USERNAME_HERE
      DB_PASSWORD= YOUR_PASSWORD_HERE
```
7. Migrate and Seed the tables `php artisan migrate --seed`   
   - seed command will creates two users in your database (check UserSeeder.php file)  
   - first user credentials is [`email` => `normal@user.com` , `password` => `normal`] and his role is normal user  
   - second user credentials is [`email` => `admin@user.com` , `password` => `admin`] and his role is admin  

8. Run `php artisan passport:install` to install all passport dependencies.
9. Run the project! `php artisan serve`
10. Run `/docs#endpoints`  to read all APIs documentaion (its a package called scribe used for api docs)
11. Run /api/login and pass email and password 
12. This api will respond by a JWT token, use it through your session and pass it in header section to authenticate this user {Authorization = Bearer $generated_JWT }
13. To check if logged user is permitted to do specific action or not try /api/admin
14. For login as an admin use this account (generated through the seeding process) 'admin@user.com' for email and 'admin' for password
15. DO NOT forget to put the generated token in the Headers section with key 'Authorization' and value `Bearer (generated token)`
16. Useful commands i think you may need it  
	- `php artisan optimize`  
	- `php artisan key:generate`  



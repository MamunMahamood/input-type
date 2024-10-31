# Input-type Laravel

**Project Creator:** Golam Mahamood Mamun

## Project Manual

1. First, you must install PHP and Composer on your device.
2. Then clone the main branch of this repository.
3. Open the project in VS Code, go to the terminal, and run the command `composer install`.
4. Go to the `.env` file and edit the database connection code:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_user_name
   DB_PASSWORD=your_password
5. Then write a command in the terminal to migrate the Database `php artisan migrate`.
6. Then write a command to start the server in terminal `php artisan serve`.

## About the Project

1. `localhost:8000/user/list`
<img src="https://github.com/MamunMahamood/input-type/blob/main/ss/user-listing.png" alt="User Listing">
2. `localhost:8000/user/create`
<img src="https://github.com/MamunMahamood/input-type/blob/main/ss/user-create.png" alt="User Create">
3. `localhost:8000/user/profile/1`
<img src="https://github.com/MamunMahamood/input-type/blob/main/ss/user-profile.png" alt="User Profile">
4. `localhost:8000/user/edit/1`
<img src="https://github.com/MamunMahamood/input-type/blob/main/ss/user-edit.png" alt="User Edit">
5. `localhost:8000/user/delete/1`
it's not a traditional delete, in the database I have a user table with an is_delete column value 0 or 1 if 0 then not delete if 1 then delete.

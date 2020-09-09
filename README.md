# Simple Login/Registration built using PHP and MySQLi.

## Installation
Import the SQL file into the MySQL database.

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

#### How to import?
> phpMyAdmin
> Access your database via phpMyAdmin (cPanel / Plesk / Managed WordPress).
> On the left, click the database you want to use.
> Select the Import tab.
> Click Browse, locate the SQL file on your computer, click Open, and then click Go.

### Config
Edit config.php and fill in the database information
```php
<?php
  $db_host = "your_host"; // Host
  $db_user = "username"; // User
  $db_pass = "password"; // Password
  $db_name = "database_name"; //  DB Name
  $con = new mysqli($db_host, $db_user, $db_pass, $db_name); // Connection to the database
  ...
?>
```
### What are the session variables?
There are only 2 session variables. And are accessed by the following.
```php
<?php
    $_SESSION['email']; //Email of the user that is logged in.
    $_SESSION['loggedIn']; // True or false to check whether the user is logged or not.
?>
```

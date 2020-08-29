# Simple Login/Registration built using PHP and MySQLi.

### Installation
Import the SQL file into the MySQL database.
# phpMyAdmin
> Access your database via phpMyAdmin (cPanel / Plesk / Managed WordPress).
> On the left, click the database you want to use.
> Select the Import tab.
> Click Browse, locate the SQL file on your computer, click Open, and then click Go.

# Config
Edit config.php and fill in the database information
```php
<?php
  $db_host = "your_host";
  $db_user = "username";
  $db_pass = "password";
  $db_name = "database_name";
  $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
  ...
?>
```

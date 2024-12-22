# UserCRUDApp

## Getting Started 

1. Intall the dependencies
```bash
sudo yum/dnf install php php-fpm php-mysqlnd php-pdo  # AlmaLinux, CentOS
sudo apt install php php-fpm php-mysql php-pdo # Ubuntu, Debian
```

2. Verfiy the php installation
```bash
php -v
```
3. Install Mariadb Server
```bash
sudo yum/dnf install mariadb-server   # AlmaLinux, CentOS
sudo apt install mariadb-server   # Ubuntu, Debian
```

4. Start and enable the Mariadb Server
```bash
systemctl enable mariadb --now
```

5. Initial setup of the Mariadb Server, make sure the mariadb service is runnig before this
```bash
mysql_secure_installation
```

6. Import the database and table using below
```bash
mysql -u root -p < ~/path-to/Import.sql
```

7. Install Nginx
```bash
sudo yum/dnf install nginx   # AlmaLinux, CentOS
sudo apt install nginx   # Ubuntu, Debian
```
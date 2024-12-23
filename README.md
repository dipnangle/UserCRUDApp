# UserCRUDApp

## Getting Started php-backend

1. Intall the dependencies
```bash
yum/dnf install php php-fpm php-mysqlnd php-pdo  # AlmaLinux, CentOS
apt install php php-fpm php-mysql php-pdo # Ubuntu, Debian
```

2. Verfiy the php installation
```bash
php -v
```
3. Install Mariadb Server
```bash
yum/dnf install mariadb-server   # AlmaLinux, CentOS
apt install mariadb-server   # Ubuntu, Debian
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
yum/dnf install nginx   # AlmaLinux, CentOS
apt install nginx   # Ubuntu, Debian
```

8. Configure nginx.conf as per below
```bash
server {
        listen 80;
        listen [::]:80;
        server_name _;

        location / {
            root /var/www/html/UserCRUDApp/react-app/dist;
            index index.html;
        }

        error_page 404 /404.html;
        location = /404.html {}

        error_page 500 502 503 504 /50x.html;
        location = /50x.html {}
    }

    server {
        listen 8080;
        listen [::]:8080;
        server_name _;

        root /var/www/html/UserCRUDApp/php-backend/public;

        location / {
            index index.php index.html;
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            include fastcgi_params;
            fastcgi_pass  unix:/run/php-fpm/www.sock; # Update to match your PHP-FPM configuration, now using unix socket
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        }

        error_page 404 /404.html;
        location = /404.html {}

        error_page 500 502 503 504 /50x.html;
        location = /50x.html {}
    }
```

## Getting Started react-app

1. Install git nodejs 
```bash
dnf module install nodejs:20 # AlmaLinux, CentOS
yum/dnf install git # AlmaLinux, CentOS
apt install git nodejs # Ubuntu, Debian
```

2. Clone the repo
```bash
cd /var/www/html/
git clone https://github.com/Vishwakarma-Shubham/UserCRUDApp.git
```

2. Install Project dependencies using npm
```bash
cd /var/www/html/UserCRUDApp/react-app/
npm install
```
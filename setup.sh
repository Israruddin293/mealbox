#!/bin/bash

# Exit on error
set -e

echo "Updating system and installing required packages..."
sudo dnf update -y

echo "Installing Apache, PHP, MariaDB, and Git..."
sudo dnf install -y httpd php mariadb105-server php-mysqlnd git

echo "Enabling and starting Apache and MariaDB..."
sudo systemctl enable --now httpd
sudo systemctl enable --now mariadb

# Configure MariaDB root password
DB_ROOT_PASSWORD="rootpassword"
DB_NAME="mealbox3"
DB_USER="root"
DB_PASS="password"

echo "Securing MariaDB and setting up database..."
sudo mysqladmin -u root password "$DB_ROOT_PASS"

# Set up MySQL database and user
sudo mysql -u root -p"$DB_ROOT_PASS" <<MYSQL_SCRIPT
CREATE DATABASE IF NOT EXISTS $DB_NAME;
CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

echo "Downloading and applying database schema..."
# SCHEMA_URL="https://raw.githubusercontent.com/Israruddin293/BuyandSell/main/mealbox3.sql"
SCHEMA_URL="https://raw.githubusercontent.com/Israruddin293/mealbox/main/mealbox3.sql";
wget $SCHEMA_URL -O /tmp/mealbox3.sql
sudo mysql -u $DB_USER -p"$DB_PASS" $DB_NAME < /tmp/mealbox3.sql || echo "Schema import failed!"

echo "Deploying PHP application..."
APP_DIR="/var/www/html"
sudo rm -rf $APP_DIR/*
sudo git clone https://github.com/Israruddin293/mealbox $APP_DIR/

# Set proper permissions
sudo chown -R apache:apache $APP_DIR
sudo chmod -R 755 $APP_DIR

echo "Restarting Apache to apply changes..."
sudo systemctl restart httpd

echo "Deployment completed successfully!"

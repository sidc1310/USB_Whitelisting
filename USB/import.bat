@echo off
cd C:\xampp\mysql\bin
mysqladmin -u root -p drop ab
mysqladmin -u root -p create ab
mysql -u root -p ab < J:\database\ab.sql
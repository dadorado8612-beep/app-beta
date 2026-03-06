postgres=# create database app_beta;
CREATE DATABASE
postgres=# \c app_beta
Ahora está conectado a la base de datos «app_beta» con el usuario «postgres».
app_beta=# create table users (nombre varchar(100),apellido varchar(100),telefono varchar(20), email varchar(100));
CREATE TABLE
app_beta=# alter table users add column contraseña varchar(100);
ALTER TABLE
app_beta=# alter table users add column id char(100);
ALTER TABLE
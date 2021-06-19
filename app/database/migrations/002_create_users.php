<?php
return [
    'create table cms_users (
        id int auto_increment primary key,
        firstName varchar(80),
        lastName varchar(80),
        email varchar(80) UNIQUE,
        password varchar(80),
        accessLevel varchar(10),
        date_created datetime,
        date_deleted datetime default null,
        perm_delete_date datetime default null
    )'
];

<?php
return [
    'create table cms_users (
        id int auto_increment primary key,
        firstName varchar(80),
        lastName varchar(80),
        email varchar(80) UNIQUE,
        password varchar(80),
        authType varchar(8),
        codeCreation int default 0
    )'
];

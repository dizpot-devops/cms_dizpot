<?php
return [
    'create table media_mapper (
        id int auto_increment primary key,
        mediaId int,
        used text,
        dateAdded datetime default null,
        dateDeleted datetime default null
    )'
];

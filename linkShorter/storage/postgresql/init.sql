create database if not exist linkShortener;
use linkShortener;
create table if not exists links
(
    id int identity(1,1),
    old_link varchar() not null,
    short_link varchar() not null
);
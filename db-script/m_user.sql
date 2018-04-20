drop table if exists m_user;

create table  m_user
(
    M_UserID int not null auto_increment primary key,
    M_UserLogin varchar(10) not null,
    M_UserName varchar(100) not null,
    M_UserPassword varchar(32) not null,
    M_UserIsAdmin varchar(1) default 'N',
    M_UserIsActive char(1) default 'Y',
    M_UserLastUpdated datetime default current_timestamp on update current_timestamp,

    key (M_UserLogin),
    key (M_UserName),
    key (M_UserPassword),
    key (M_UserIsAdmin)
);

INSERT INTO m_user (M_UserLogin, M_UserName, M_UserPassword)
VALUES ('admin', 'admin', md5('admin'));
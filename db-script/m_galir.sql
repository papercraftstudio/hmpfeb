drop table if exists m_galir;

create table  m_galir
(
    M_GalirID int not null auto_increment primary key,
    M_GalirName varchar(100) not null,
    M_GalirCode VARCHAR(10) NOT NULL,
    M_GalirSemester int not null,
    M_GalirIsActive VARCHAR(1) NOT NULL DEFAULT 'Y',
    M_GalirLastUpdate DATETIME NOT NULL DEFAULT current_timestamp ON UPDATE current_timestamp,
    M_GalirM_UserID INT,

    key (M_GalirName),
    key (M_GalirCode),
    key (M_GalirSemester)
);
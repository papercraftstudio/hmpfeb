DROP TABLE IF EXISTS m_event;

CREATE TABLE m_event
(
    M_EventID INT NOT NULL auto_increment PRIMARY KEY,
    M_EventName VARCHAR(32) NOT NULL,
    M_EventInformation VARCHAR(255),
    M_EventLink VARCHAR(100) NOT NULL,
    M_EventImage BLOB NOT NULL,
    M_EventIsActive VARCHAR(1) NOT NULL DEFAULT 'Y',
    M_EventLastUpdate DATETIME NOT NULL DEFAULT current_timestamp ON UPDATE current_timestamp,
    M_EventM_UserID INT,

    KEY (M_EventName),
    KEY (M_EventLink)
);
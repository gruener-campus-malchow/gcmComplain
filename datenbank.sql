datenbank

CREATE TABLE
    nachricht
        id INTEGER AUTO_INCREMENT PRIMARY KEY,
        zeit TIMESTAMP NOW,
        text VARCHAR(200) NOT NULL,
        FOREIGN KEY (mail) REFERENCES person(mail),
        FOREIGN KEY (id) REFERENCES beschwerde(id);



CREATE TABLE
    nachricht
        id INTEGER AUTO_INCREMENT PRIMARY KEY,
        zeit TIMESTAMP NOW,
        text VARCHAR(200) NOT NULL,
        FOREIGN KEY (mail) REFERENCES person(mail),
        FOREIGN KEY (id) REFERENCES beschwerde(id);

CREATE TABLE datei (
  id varchar(100) NOT NULL,
  datum datetime NOT NULL,
  url varchar(100) NOT NULL,
  typ varchar(100) NOT NULL,
  endung varchar(100) NOT NULL,
  name varchar(100) NOT NULL,
  nachricht_id varchar(100) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (nachricht_id) REFERENCES nachricht(id)
);
   



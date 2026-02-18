CREATE TABLE IF NOT EXISTS person (
    person_email VARCHAR(100) NOT NULL,
    PRIMARY KEY (person_email)
);

CREATE TABLE beschwerde(
    id varchar(100) NOT NULL,
    titel VARCHAR(100) NOT NULL,
    zeit TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    reaktionszeit INT NOT NULL,
    person_email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (person_email)
        REFERENCES person(person_email)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE person_beschwerde (
    person_email VARCHAR(100) NOT NULL,
    beschwerde_id INT NOT NULL,
    PRIMARY KEY (person_email, beschwerde_id),
    FOREIGN KEY (person_email) REFERENCES person(person_email),
    FOREIGN KEY (beschwerde_id) REFERENCES beschwerde(id)
    );

CREATE TABLE nachricht (
        id INTEGER AUTO_INCREMENT PRIMARY KEY,
        zeit TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        txt VARCHAR(200) NOT NULL,
    	mail VARCHAR(200) NOT NULL,
        FOREIGN KEY mail REFERENCES person(person_email),
        FOREIGN KEY id REFERENCES beschwerde(id)
);

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

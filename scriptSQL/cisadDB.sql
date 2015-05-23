DROP DATABASE IF EXISTS cisadnetwork;
CREATE DATABASE cisadnetwork;
USE cisadnetwork;

CREATE TABLE roles (
    idroles INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) ENGINE=INNODB;

CREATE TABLE users (
    idusers INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(250) NOT NULL,
    name VARCHAR(30),
    lastname VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    idroles INT NOT NULL,
    activemail BINARY DEFAULT 0,
    active BINARY DEFAULT 1,
    userKey VARCHAR(250) NOT NULL,
    privacity VARCHAR(30) DEFAULT "private",
    FOREIGN KEY (idroles)
        REFERENCES roles (idroles)
) ENGINE=INNODB;

CREATE TABLE friends (
    idusers INT,
    idusersfriends INT,
    FOREIGN KEY (idusers)
            REFERENCES users (idusers),
    FOREIGN KEY (idusersfriends)
            REFERENCES users (idusers),
    PRIMARY KEY (idusers, idusersfriends)
) ENGINE=INNODB;

CREATE TABLE messages (
    idmessages INT PRIMARY KEY AUTO_INCREMENT,
    sender INT,
    receiver INT,
    readed BINARY DEFAULT 0,
    message VARCHAR(250) NOT NULL,
    FOREIGN KEY (sender)
            REFERENCES users (idusers),
    FOREIGN KEY (receiver)
            REFERENCES users (idusers)
) ENGINE=INNODB;

CREATE TABLE states (
    idstates INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) ENGINE=INNODB;

CREATE TABLE groups (
    idgroups INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE groupsmembers (
    idgroupsmembers INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    name VARCHAR(50) NOT NULL,
    imageurl VARCHAR(250),
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
) ENGINE=INNODB;

CREATE TABLE cds (
    idcds INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    name VARCHAR(30) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
) ENGINE=INNODB;

CREATE TABLE songs (
    idsongs INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    idcds INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups),
    FOREIGN KEY (idcds)
        REFERENCES cds (idcds)
) ENGINE=INNODB;

CREATE TABLE singers (
    idsingers INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
) ENGINE=INNODB;

CREATE TABLE actors (
    idactors INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png"
) ENGINE=INNODB;

CREATE TABLE directors (
    iddirectors INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png"
) ENGINE=INNODB;

CREATE TABLE movies (
    idmovies INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE series (
    idseries INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    seasons INT NOT NULL DEFAULT 0,
    totalchapters INT NOT NULL DEFAULT 0,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE chapters (
    idchapters INT AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    numberchapter INT NOT NULL,
    seasonnumber INT NOT NULL,
    idseries INT NOT NULL,
    FOREIGN KEY (idseries)
            REFERENCES series (idseries)
            ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (idchapters, numberchapter, seasonnumber, idseries)
) ENGINE=INNODB;

CREATE TABLE actorsmovies (
    idmovies INT,
    idactors INT,
    PRIMARY KEY (idmovies , idactors),
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idactors)
        REFERENCES actors (idactors)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE directorsmovies (
    idmovies INT,
    iddirectors INT,
    PRIMARY KEY (idmovies , iddirectors),
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iddirectors)
        REFERENCES directors (iddirectors)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE actorsseries (
    idseries INT,
    idactors INT,
    PRIMARY KEY (idseries , idactors),
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idactors)
        REFERENCES actors (idactors)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE directorsseries (
    idseries INT,
    iddirectors INT,
    PRIMARY KEY (idseries , iddirectors),
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iddirectors)
        REFERENCES directors (iddirectors)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;


CREATE TABLE authors (
    idauthors INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png"
) ENGINE=INNODB;

CREATE TABLE books (
    idbooks INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(250) DEFAULT "error.png",
    isbn VARCHAR(20) UNIQUE NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE authorsbooks (
    idbooks INT,
    idauthors INT,
    PRIMARY KEY (idbooks , idauthors),
    FOREIGN KEY (idbooks)
        REFERENCES books (idbooks)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idauthors)
        REFERENCES authors (idauthors)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE news (
    idnews INT PRIMARY KEY AUTO_INCREMENT,
    idusers INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    imageurl VARCHAR(250) NOT NULL DEFAULT "error.png",
    description TEXT NOT NULL,
    date VARCHAR(10) NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
) ENGINE=INNODB;

CREATE TABLE recipes (
    idrecipes INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    imageurl VARCHAR(250) NOT NULL DEFAULT "error.png",
    description TEXT NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE statesseries (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idseries INT NOT NULL,
    PRIMARY KEY (idusers , idstates , idseries),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE statesgroups (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idgroups INT NOT NULL,
    PRIMARY KEY (idusers , idstates , idgroups),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE statesmovies (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idmovies INT NOT NULL,
    PRIMARY KEY (idusers , idstates , idmovies),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE statesbooks (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idbooks INT NOT NULL,
    PRIMARY KEY (idusers, idstates , idbooks),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbooks)
        REFERENCES books (idbooks)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE statesnews (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idbooks INT NOT NULL,
    PRIMARY KEY (idusers, idstates , idbooks),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbooks)
        REFERENCES books (idbooks)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE statesrecipes (
    idusers INT NOT NULL,
    idstates INT NOT NULL,
    idrecipes INT NOT NULL,
    PRIMARY KEY (idusers, idstates , idrecipes),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstates)
        REFERENCES states (idstates)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idrecipes)
        REFERENCES recipes (idrecipes)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE genres (
    idgenres INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    music BINARY DEFAULT 0,
    description VARCHAR(255)
) ENGINE=INNODB;

CREATE TABLE genresseries (
    idgenres INT,
    idseries INT,
    PRIMARY KEY (idgenres , idseries),
    FOREIGN KEY (idgenres)
        REFERENCES genres (idgenres)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE genresmovies (
    idgenres INT,
    idmovies INT,
    PRIMARY KEY (idgenres , idmovies),
    FOREIGN KEY (idgenres)
        REFERENCES genres (idgenres)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE genresbook (
    idgenres INT,
    idbooks INT,
    PRIMARY KEY (idgenres , idbooks),
    FOREIGN KEY (idgenres)
        REFERENCES genres (idgenres)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbooks)
        REFERENCES books (idbooks)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE genresgroup (
    idgenres INT,
    idgroups INT,
    PRIMARY KEY (idgenres , idgroups),
    FOREIGN KEY (idgenres)
        REFERENCES genres (idgenres)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsmovies (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idmovies INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsmovies (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsmovies (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsseries (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idseries INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsseries (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsseries (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsgroups (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsgroups (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsgroups (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsbooks (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idbooks INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idbooks)
        REFERENCES books (idbooks)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsbooks (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsbooks (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsnews (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idnews INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idnews)
        REFERENCES news (idnews)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsnews (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsnews (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE commentsrecipes (
    idcomments INT PRIMARY KEY AUTO_INCREMENT,
    idrecipes INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    comment TEXT NOT NULL,
    FOREIGN KEY (idrecipes)
        REFERENCES recipes (idrecipes)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE votescommentsrecipes (
    idcomments INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomments, idusers),
    FOREIGN KEY (idcomments)
        REFERENCES commentsrecipes (idcomments)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

INSERT INTO roles (name) VALUES ('ADMIN');
INSERT INTO roles (name) VALUES ('USER');

INSERT INTO users (username, password, name, lastname, email, idroles, userKey, activeMail) VALUES("decalion", "cisad", "ismael", "caballero", "icaballerohernandez@gmail.com", 1, "", 1);
INSERT INTO users (username, password, name, lastname, email, idroles, userKey, activeMail) VALUES("ismael", "ismael", "Ismael", "Caballero", "ismae@gmail.com", 2, "", 1);
INSERT INTO users (username, password, name, lastname, email, idroles, userKey, activeMail, imageurl) VALUES("adrian", "a1b909ec1cc11cce40c28d3640eab600e582f833", "Adrian", "Garcia", "adriangarciamanchado@gmail.com", 1, "a1b909ec1cc11cce40c28d3640eab600e582f833", 1, "users/rajoy.png");
INSERT INTO users (username, password, name, lastname, email, idroles, userKey, activeMail, imageurl) VALUES("manolo", "0d18e2b6d68973f0f02c17c97e4765f716eca440", "Manolo", "Manolin", "manolo@gmail.com", 1, "0d18e2b6d68973f0f02c17c97e4765f716eca440", 1, "users/rajoy.png");

INSERT INTO friends VALUES (1, 3), (3, 1), (3, 4), (4, 3);

INSERT INTO genres (name) VALUES ('Scice Fiction'), ('Comedy'), ('Action'), ('Terror'), ('Adventure'), ('Biographical'), ('Erotic'), ('Musical');
INSERT INTO genres (name, music) VALUES ('Rock', 1), ('Pop', 1), ('Heavy Metal', 1), ('Reggae', 1), ('Classic', 1);

INSERT INTO actors(name) VALUES ('Robert Downey Jr');
INSERT INTO actors(name) VALUES ('Chris Evans');
INSERT INTO actors(name) VALUES ('Mark Ruffalo');
INSERT INTO actors(name) VALUES ('Chris Hemsworth');
INSERT INTO actors(name) VALUES ('Scarlett Johansson');
INSERT INTO actors(name) VALUES ('Jeremy Renner');
INSERT INTO actors(name) VALUES ('Arnold Schwarzenegger');
INSERT INTO actors(name) VALUES ('Michael Biehn');
INSERT INTO actors(name) VALUES ('Linda Hamilton');
INSERT INTO actors(name) VALUES ('Paul Winfield');
INSERT INTO actors(name) VALUES ('Lance Henriksen');

INSERT INTO movies(name,sinopsi,year) VALUES ('Los Vengadores', 'Era ser una vez', 2012);
INSERT INTO movies(name,sinopsi,year) VALUES ('The Terminator', 'El primo de pep', 1984);

INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,1);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,2);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,3);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,4);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,5);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (1,6);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (2,7);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (2,8);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (2,9);
INSERT INTO actorsmovies (idmovies,idactors) VALUES (2,10);

INSERT INTO directors (name) VALUES ('Joss Whedon');
INSERT INTO directorsmovies (idmovies,iddirectors) VALUES(1,1);
INSERT INTO directors (name) VALUES ('James Cameron');
INSERT INTO directorsmovies (idmovies,iddirectors) VALUES(2,2);

INSERT INTO series (name, sinopsi, year, imageurl, seasons, totalchapters, average, totalvotes) VALUES ('Stargate - SG1',  'Van a otros planetas',  '1999',  'error.png',  '10',  '355',  '99',  '99');
INSERT INTO series (name, sinopsi, year, imageurl, seasons, totalchapters, average, totalvotes) VALUES ('Stargate - Atlantis',  'Van a otros planetas pero en otra galaxia',  '2006',  'error.png',  '5',  '200',  '98',  '98');
INSERT INTO series (name, sinopsi, year, imageurl, seasons, totalchapters, average, totalvotes) VALUES ('Stargate - Universe',  'Van a otros planetas pero en otra galaxia y ademas en una nave de los antiguos',  '2010',  'error.png',  '5',  '200',  '45',  '45');

INSERT INTO actorsseries VALUES (1, 2), (2, 3), (2, 4);

INSERT INTO directorsseries VALUES (1, 1), (2, 2);

INSERT INTO chapters (name, numberchapter, seasonnumber, idseries) VALUES ('Capitulo 1', 1, 1, 1), ('Capitulo 2', 2, 1, 1), ('Capitulo 1', 1, 1, 2);

INSERT INTO recipes (name, description) VALUES ('Bocadillo de ladrillos', 'Es un bocadillo de ladrillos'), ('Sopa de tornillos', 'Es una sopa de tornillos'), ('Pastel de mierda', 'Pastel hecho con mierda');

INSERT INTO books (name, sinopsi, year, isbn) VALUES ('Las 3 mellizas', 'Son 3 niñas que toman drogas', '1995', '1000-5555-4447*84758'), ('La mujer del carro', 'Es una mujer que mata zombies con un carro de la compra', '2015', '8547-6666-4120*89658');

INSERT INTO groups (name, year) VALUES ('Cantos luterianos', '1258'), ('Unga Unga', '0'), ('Sonidos indescifrables', '2010');

INSERT INTO cds (idgroups, name, year) VALUES (1, 'Un verano en la playa', '2006'), (2, 'Desde el cielo', 2001), (2, 'Bajo tus pies', 2004);

INSERT INTO songs (idgroups, idcds, name) VALUES (1, 1, 'La cancion mas bonita del mundo'), (2, 2, 'Dulce, bella durmiente'), (2, 3, 'Anochecer en el desierto');

INSERT INTO singers (idgroups, name) VALUES (1, 'David Bisbal'), (2, 'Paquirrin'), (2, 'Ramoncin'), (3, 'Mierdendri');

INSERT INTO authors (name) VALUES ('Jose Ignario Rancio'), ('Manuel el del bombo');

INSERT INTO authorsbooks VALUES (1, 1), (2, 2);

INSERT INTO chapters (name, numberchapter, seasonnumber, idseries) VALUES ('Capitulo 1', 1, 2, 1);
INSERT INTO chapters (name, numberchapter, seasonnumber, idseries) VALUES ('Capitulo 2', 2, 2, 1);
INSERT INTO chapters (name, numberchapter, seasonnumber, idseries) VALUES ('Capitulo 3', 3, 1, 1);
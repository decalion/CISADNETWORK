DROP DATABASE IF EXISTS cisadnetwork;
CREATE DATABASE cisadnetwork;
USE cisadnetwork;

CREATE TABLE role (
    idrole INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE users (
    idusers INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(250) NOT NULL,
    name VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(30) NOT NULL,
    avatarurl VARCHAR(200),
    idrole INT NOT NULL,
    activemail BINARY DEFAULT 0,
    active BINARY DEFAULT 1,
    userKey VARCHAR(250) NOT NULL,
    FOREIGN KEY (idrole)
        REFERENCES role (idrole)
)  ENGINE=INNODB;

CREATE TABLE state (
    idstate INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE series (
    idseries INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    image VARCHAR(200),
    season INT NOT NULL DEFAULT 0,
    totalchapters INT NOT NULL DEFAULT 0,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE chapter (
    idchapter INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    numberchapter INT NOT NULL
)  ENGINE=INNODB;

CREATE TABLE chapterseries (
    idseries INT NOT NULL,
    idchapter INT NOT NULL,
    seasonnumber INT NOT NULL,
    PRIMARY KEY (idseries , idchapter , seasonnumber),
    FOREIGN KEY (idseries)
        REFERENCES series (idseries),
    FOREIGN KEY (idchapter)
        REFERENCES chapter (idchapter)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE groups (
    idgroups INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    image VARCHAR(200),
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE singers (
    idsingers INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    name VARCHAR(30) NOT NULL,
    FOREIGN KEY (idgroups)
            REFERENCES groups (idgroups)
            ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE songs (
    idsongs INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    idsinger INT NOT NULL,
    FOREIGN KEY (idsinger)
        REFERENCES singers (idsingers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE movies (
    idmovies INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    year INT NOT NULL,
    imageurl VARCHAR(200),
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE author (
    idauthor INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(60) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE books (
    idbook INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    imageurl VARCHAR(100),
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE news (
    idnews INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(40) NOT NULL,
    imageurl VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE recipes (
    idrecipes INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(40) NOT NULL,
    imageurl VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE ingredients (
    idingredient INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    description VARCHAR(255)
)  ENGINE=INNODB;

CREATE TABLE actors (
    idactor INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE stateseries (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idseries INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idseries),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE stategroups (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idgroups INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idgroups),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statemovies (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idmovies INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idmovies),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statebook (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idbook INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idbook),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statenews (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idbook INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idbook),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE staterecipes (
    idusers INT NOT NULL,
    idstate INT NOT NULL,
    idrecipes INT NOT NULL,
    PRIMARY KEY (idusers , idstate , idrecipes),
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idrecipes)
        REFERENCES recipes (idrecipes)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE songsgroups (
    idsongsgroups INT AUTO_INCREMENT NOT NULL,
    idgroups INT NOT NULL,
    idsongs INT NOT NULL,
    PRIMARY KEY (idsongsgroups , idgroups , idsongs),
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idsongs)
        REFERENCES songs (idsongs)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE recipesingredient (
    idrecipes INT,
    idingredient INT,
    PRIMARY KEY (idrecipes , idingredient),
    FOREIGN KEY (idrecipes)
        REFERENCES recipes (idrecipes)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idingredient)
        REFERENCES ingredients (idingredient)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE actorseries (
    idseries INT,
    idactor INT,
    ifdirector BINARY NOT NULL,
    PRIMARY KEY (idseries , idactor),
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idactor)
        REFERENCES actors (idactor)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE actormovies (
    idmovies INT,
    idactor INT,
    ifdirector BINARY NOT NULL,
    PRIMARY KEY (idmovies , idactor),
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idactor)
        REFERENCES actors (idactor)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE authorbooks (
    idbook INT,
    idauthor INT,
    ifdirector BINARY NOT NULL,
    PRIMARY KEY (idbook , idauthor),
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idauthor)
        REFERENCES author (idauthor)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE genres (
    idgenres INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
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
)  ENGINE=INNODB;

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
)  ENGINE=INNODB;

CREATE TABLE genresbook (
    idgenres INT,
    idbook INT,
    PRIMARY KEY (idgenres , idbook),
    FOREIGN KEY (idgenres)
        REFERENCES genres (idgenres)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

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
)  ENGINE=INNODB;

CREATE TABLE commentsmovies (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idmovies INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentmovies (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentsmovies (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE commentseries (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idseries INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idseries)
        REFERENCES series (idseries)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentseries (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentseries (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE commentgroups (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idgroups INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idgroups)
        REFERENCES groups (idgroups)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentgroups (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentgroups (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE commentbook (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idbook INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentbook (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentbook (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE commentnews (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idnews INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idnews)
        REFERENCES news (idnews)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentnews (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentnews (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE commentrecipes (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idrecipes INT NOT NULL,
    idusers INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idrecipes)
        REFERENCES recipes (idrecipes)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

CREATE TABLE votescommentrecipes (
    idcomment INT NOT NULL,
    idusers INT NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (idcomment , idusers),
    FOREIGN KEY (idcomment)
        REFERENCES commentrecipes (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idusers)
        REFERENCES users (idusers)
)  ENGINE=INNODB;

INSERT INTO role (name) VALUES('ADMIN');
INSERT INTO role (name) VALUES('USER');
INSERT INTO users (username,password,name,lastname,email,avatarurl,idrole,userKey,activeMail) VALUES("decalion","cisad","ismael","caballero","icaballerohernandez@gmail.com","",1,"", 1);
INSERT INTO users (username,password,name,lastname,email,avatarurl,idrole,userKey,activeMail) VALUES("adrian","a1b909ec1cc11cce40c28d3640eab600e582f833","Adrian","Garcia","adriangarciamanchado@gmail.com","",1,"a1b909ec1cc11cce40c28d3640eab600e582f833", 1);

INSERT INTO genres (idgenres, name, description) VALUES (NULL, 'Scice Fiction', NULL), (NULL, 'Comedy', NULL), (NULL, 'Action', NULL), (NULL, 'Terror', NULL), (NULL, 'Adventure', NULL), (NULL, 'Biographical', NULL), (NULL, 'Erotic', NULL), (NULL, 'Musical', NULL);

SELECT name FROM genres INNER JOIN genresmovies WHERE genres.idgenres = genresmovies.idgenres GROUP BY genres.idgenres;
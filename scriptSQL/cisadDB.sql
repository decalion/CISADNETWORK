DROP DATABASE IF EXISTS cisadnetwork;
CREATE DATABASE cisadnetwork;
USE cisadnetwork;


CREATE TABLE role (
    idrole INT PRIMARY KEY AUTO_INCREMENT,
    namerole VARCHAR(20) NOT NULL
)  ENGINE=INNODB;


CREATE TABLE user (
    iduser INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(30)  NOT NULL,
    name VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(30) NOT NULL,
    avatarurl VARCHAR(200),
    idrole INT NOT NULL,
	activemail BINARY DEFAULT 0,
	active BINARY DEFAULT 1,
    FOREIGN KEY (idrole)
        REFERENCES role (idrole)
)  ENGINE=INNODB;

CREATE TABLE state (
    idstate INT PRIMARY KEY AUTO_INCREMENT,
    namestate VARCHAR(20) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE serie (
    idserie INT PRIMARY KEY AUTO_INCREMENT,
    nameserie VARCHAR(20) NOT NULL,
    image VARCHAR(200),
    season INT NOT NULL,
    totalchapters INT NOT NULL,
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;

CREATE TABLE chapter (
    idchapter INT PRIMARY KEY AUTO_INCREMENT,
    namechapter VARCHAR(30) NOT NULL,
    numberchapter INT NOT NULL
)  ENGINE=INNODB;



CREATE TABLE chapterserie (
    idserie INT NOT NULL,
    idchapter INT NOT NULL,
    seasonnumber INT NOT NULL,
    PRIMARY KEY (idserie , idchapter , seasonnumber),
    FOREIGN KEY (idserie)
        REFERENCES serie (idserie),
    FOREIGN KEY (idchapter)
        REFERENCES chapter (idchapter)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE genre (
    idgenre INT PRIMARY KEY AUTO_INCREMENT,
    namegenre VARCHAR(40) NOT NULL,
    description VARCHAR(255)
)  ENGINE=INNODB;



CREATE TABLE singer (
    idsinger INT PRIMARY KEY AUTO_INCREMENT,
    namesinger VARCHAR(30) NOT NULL
)  ENGINE=INNODB;


CREATE TABLE music (
    idmusic INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    artist VARCHAR(30) NOT NULL,
    image VARCHAR(200),
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0,
    idsinger INT NOT NULL,
    FOREIGN KEY (idsinger)
        REFERENCES singer (idsinger)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE style (
    idstyle INT PRIMARY KEY AUTO_INCREMENT,
    namestyle VARCHAR(40) NOT NULL,
    description VARCHAR(255)
)  ENGINE=INNODB;



CREATE TABLE songs (
    idsong INT PRIMARY KEY AUTO_INCREMENT,
    namesong VARCHAR(30) NOT NULL,
    idsinger INT NOT NULL,
    FOREIGN KEY (idsinger)
        REFERENCES singer (idsinger)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE movies (
    idmovies INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    sinopsi VARCHAR(250) NOT NULL,
    imageurl VARCHAR(200),
    average FLOAT DEFAULT 0,
    totalvotes INT DEFAULT 0
)  ENGINE=INNODB;



CREATE TABLE author (
    idauthor INT PRIMARY KEY AUTO_INCREMENT,
    nameauthor VARCHAR(60) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE books (
    idbook INT PRIMARY KEY AUTO_INCREMENT,
    namebook VARCHAR(30) NOT NULL,
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

CREATE TABLE cooksrecipe (
    idcookrecipe INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(40) NOT NULL,
    imageurl VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    average FLOAT
)  ENGINE=INNODB;


CREATE TABLE ingredients (
    idingredient INT PRIMARY KEY AUTO_INCREMENT,
    nameingredient VARCHAR(40) NOT NULL,
    description VARCHAR(255)
)  ENGINE=INNODB;

CREATE TABLE actors (
    idactor INT PRIMARY KEY AUTO_INCREMENT,
    nameactor VARCHAR(40) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE stateserie (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idserie INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idserie),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idserie)
        REFERENCES serie (idserie)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statemusic (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idmusic INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idmusic),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmusic)
        REFERENCES music (idmusic)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statemovies (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idmovies INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idmovies),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statebook (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idbook INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idbook),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statenews (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idbook INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idbook),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE statecookrecide (
    iduser INT NOT NULL,
    idstate INT NOT NULL,
    idcookrecipe INT NOT NULL,
    PRIMARY KEY (iduser , idstate , idcookrecipe),
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstate)
        REFERENCES state (idstate)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idcookrecipe)
        REFERENCES cooksrecipe (idcookrecipe)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE songsmusic (
    idsongmusic INT AUTO_INCREMENT NOT NULL,
    idmusic INT NOT NULL,
    idsong INT NOT NULL,
    PRIMARY KEY (idsongmusic , idmusic , idsong),
    FOREIGN KEY (idmusic)
        REFERENCES music (idmusic)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idsong)
        REFERENCES songs (idsong)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE musicstyle (
    idmusic INT,
    idstyle INT,
    PRIMARY KEY (idmusic , idstyle),
    FOREIGN KEY (idmusic)
        REFERENCES music (idmusic)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idstyle)
        REFERENCES style (idstyle)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE cooksrecideingredient (
    idcookrecipe INT,
    idingredient INT,
    PRIMARY KEY (idcookrecipe , idingredient),
    FOREIGN KEY (idcookrecipe)
        REFERENCES cooksrecipe (idcookrecipe)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idingredient)
        REFERENCES ingredients (idingredient)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE actorserie (
    idserie INT,
    idactor INT,
    ifdirector BINARY NOT NULL,
    PRIMARY KEY (idserie , idactor),
    FOREIGN KEY (idserie)
        REFERENCES serie (idserie)
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



CREATE TABLE genreserie (
    idgenre INT,
    idserie INT,
    PRIMARY KEY (idgenre , idserie),
    FOREIGN KEY (idgenre)
        REFERENCES genre (idgenre)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idserie)
        REFERENCES serie (idserie)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE genremovies (
    idgenre INT,
    idmovies INT,
    PRIMARY KEY (idgenre , idmovies),
    FOREIGN KEY (idgenre)
        REFERENCES genre (idgenre)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE genrebook (
    idgenre INT,
    idbook INT,
    PRIMARY KEY (idgenre , idbook),
    FOREIGN KEY (idgenre)
        REFERENCES genre (idgenre)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE commentsmovies (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idmovies INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idmovies)
        REFERENCES movies (idmovies)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentmovies (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentsmovies (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;

CREATE TABLE commentserie (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idserie INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idserie)
        REFERENCES serie (idserie)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentserie (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentserie (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;


CREATE TABLE commentmusic (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idmusic INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idmusic)
        REFERENCES music (idmusic)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;

CREATE TABLE votescommentmusic (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentmusic (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;



CREATE TABLE commentbook (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idbook INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idbook)
        REFERENCES books (idbook)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE votescommentbook (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentbook (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;



CREATE TABLE commentnews (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idnews INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idnews)
        REFERENCES news (idnews)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
        ON DELETE CASCADE ON UPDATE CASCADE
)  ENGINE=INNODB;


CREATE TABLE votescommentnews (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentnews (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;



CREATE TABLE commentcookrecipe (
    idcomment INT PRIMARY KEY AUTO_INCREMENT,
    idcookrecipe INT NOT NULL,
    iduser INT NOT NULL,
    date VARCHAR(30) NOT NULL,
    commentary VARCHAR(255) NOT NULL,
    FOREIGN KEY (idcookrecipe)
        REFERENCES cooksrecipe (idcookrecipe)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;


CREATE TABLE votescommentcookrecide (
    idcomment INT NOT NULL,
    iduser INT NOT NULL,
    vote INT NOT NULL,
    PRIMARY KEY (idcomment , iduser),
    FOREIGN KEY (idcomment)
        REFERENCES commentcookrecipe (idcomment)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (iduser)
        REFERENCES user (iduser)
)  ENGINE=INNODB;







INSERT INTO role (namerole) VALUES('ADMIN');
INSERT INTO role (namerole) VALUES('USER');
INSERT INTO user (username,password,name,lastname,email,avatarurl,idrole) VALUES("decalion","cisad","ismael","caballero","icaballerohernandez@gmail.com","",1);
INSERT INTO user (username,password,name,lastname,email,avatarurl,idrole) VALUES("adrian","adrian","Adrian","Garcia","adriangarciamanchado@gmail.com","",1);

CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
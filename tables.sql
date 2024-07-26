create table contacts (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    ordernumber int(11) not null,
    email varchar(300) not null,
    cmessage text not null,
    timest varchar(300) not null
);

create table users(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    email varchar(300) not null,
    pass varchar(300) not null,
    fname varchar(300) not null,
    lname varchar(300) not null,
    typ varchar(300) not null
);

INSERT INTO users(email, pass, fname, lname, typ) VALUES('thektutoring@gmail.com', '123karan', 'Karan', 'C', 'owner');

create table numberd(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    ordernumber int(11) not null
);

create table viewing(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    email varchar(300) not null,
    cmessage text not null,
    timest varchar(300) not null,
    starred varchar(300) not null
);

INSERT INTO viewing(email, cmessage, timest, starred) VALUES('jenniferthomas654@hotmail.com', 'Hello, Im a university student seekings course. Are there any tutors available who can help me Your response would be greatly appreciated', 'June 15, 2023, 1:22 pm', 'yes');
INSERT INTO viewing(email, cmessage, timest, starred) VALUES('sophialee876@yahoo.com', 'Hi, alf of my nephew who requires additionysics. Could you please le any experienced physics tutors available? I look forou.', 'June 15, 2023, 1:23 pm', 'yes');

create table archivedContacts (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    ordernumber int(11) not null,
    email varchar(300) not null,
    cmessage text not null,
    timest varchar(300) not null
);

INSERT INTO numberd(ordernumber) VALUES(1);


create table consultationTimes (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    email varchar(300) not null,
    pnumber varchar(300) not null,
    stname varchar(300) not null,
    edlevel varchar(300) not null,
    consultationTimeDate int(11) not null,
    extranotes text not null
);

create table viewingConsultation (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    email varchar(300) not null,
    pnumber varchar(300) not null,
    stname varchar(300) not null,
    edlevel varchar(300) not null,
    consultationTimeDate int(11) not null,
    extranotes text not null
);


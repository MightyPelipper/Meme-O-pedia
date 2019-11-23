

 
/*User table*/

create table Users (

    user_id int(11) not null Auto_increment,
    user_first char(26) not null,
    user_last char(26) not null,
    user_email varchar(56) not null,
    user_uid char(20) not null, 
    user_pwd char(15) not null,
    is_admin boolean,
    primary key (user_id)
);


/*real user table*/

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` char(26) NOT NULL,
  `user_last` char(26) NOT NULL,
  `user_email` tinytext NOT NULL,
  `user_uid` tinytext NOT NULL,
  `user_pwd` longtext NOT NULL,
  primary key (user_id)
  
);




insert into Users values( 1, 'samir', 'mahamed', '123big@gmail.com', 'admin', 'password', TRUE);

/*comments table*/

create table Comments (

    comment_id int(11) not null Auto_increment,
    comment char(128), 
    primary key (comment_id)
);


/*Meme table*/

create table Memes (

    meme_id int(11) not null Auto_increment,
    meme_catagory char(20),
    meme_text char(128),
    meme_pic blob, 
    user_id int(11),
    foreign key (user_id) references User(user_id),
    primary key (meme_id)


);

insert into Memes values ()

/*feedback table*/

create table Feedback (

    feed_id int(11) not null Auto_increment,
    feed_user char(20),
    feed_comm char(128),
    primary key (feed_id)

);
 



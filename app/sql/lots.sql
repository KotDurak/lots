create table lots
(
    id    int unsigned auto_increment,
    description TEXT,
    url   VARCHAR(255),
    price DECIMAL ,
    email VARCHAR(255),
    phone VARCHAR(255),
    inn VARCHAR(255),
    bankruptcy_number VARCHAR(255),
    date_auction date,
    constraint lots_pk
        primary key (id)
);
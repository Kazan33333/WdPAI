create table club
(
    id_club serial
        constraint club_pk
            primary key,
    name    varchar(255) not null
);

alter table club
    owner to fdsplyjnpcbvfr;

create unique index club_id_club_uindex
    on club (id_club);

create table logs
(
    id_logs  integer      not null
        constraint logs_pkey
            primary key,
    name     varchar(255) not null,
    surname  varchar(255) not null,
    browser  varchar(255),
    datetime date         not null,
    host     varchar(255),
    device   varchar(255)
);

alter table logs
    owner to fdsplyjnpcbvfr;

create table player
(
    id_player      serial
        constraint player_pkey
            primary key,
    first_name     varchar(255)      not null,
    name           varchar(255)      not null,
    points         integer default 0 not null,
    points_overall integer default 0 not null,
    image_url      varchar(255)
);

alter table player
    owner to fdsplyjnpcbvfr;

create table player_club
(
    id_player_club serial
        constraint player_club_pk
            primary key,
    id_player      integer not null
        constraint player_club_fk_1
            references player,
    id_club        integer not null
        constraint player_club_fk_2
            references club
);

alter table player_club
    owner to fdsplyjnpcbvfr;

create unique index player_club_id_player_club_uindex
    on player_club (id_player_club);

create table role
(
    id_role   serial
        constraint role_pk
            primary key,
    role_name varchar not null
);

alter table role
    owner to fdsplyjnpcbvfr;

create table team
(
    id_team serial
        constraint team_pkey
            primary key,
    name    varchar(255)      not null,
    points  integer default 0 not null
);

alter table team
    owner to fdsplyjnpcbvfr;

create table player_team
(
    id_player_team serial
        constraint player_team_pk
            primary key,
    id_player      integer not null
        constraint player_team_fk_1
            references player,
    id_team        integer not null
        constraint player_team_fk_2
            references team
);

alter table player_team
    owner to fdsplyjnpcbvfr;

create unique index player_team_id_player_team_uindex
    on player_team (id_player_team);

create table user_friendship
(
    id_user       integer not null,
    id_friendship integer not null,
    constraint user_friendship_pk
        primary key (id_friendship, id_user)
);

alter table user_friendship
    owner to fdsplyjnpcbvfr;

create table users
(
    id_user        integer default nextval('user_id_user_seq'::regclass) not null
        constraint user_pk
            primary key,
    password       varchar(255)                                          not null,
    email          varchar(255)                                          not null,
    name           varchar(255)                                          not null,
    surname        varchar(255)                                          not null,
    points         integer default 0                                     not null,
    points_overall integer default 0                                     not null,
    image_url      varchar(255)                                          not null
);

alter table users
    owner to fdsplyjnpcbvfr;

create table team_user
(
    id_team_user serial
        constraint team_user_pkey
            primary key,
    id_user      integer not null
        constraint team_user_fk_1
            references users,
    id_team      integer not null
        constraint team_user_fk_2
            references team
);

alter table team_user
    owner to fdsplyjnpcbvfr;

create table user_roles
(
    id_user integer not null
        constraint user_roles_id_users_fk
            references users
            on update cascade on delete cascade,
    id_role integer not null
        constraint user_roles_id_role_fk
            references role
            on update cascade on delete cascade,
    constraint user_roles_pk
        primary key (id_user, id_role)
);

alter table user_roles
    owner to fdsplyjnpcbvfr;

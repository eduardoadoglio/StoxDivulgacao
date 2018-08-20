create database db_contato;

use db_contato;

create table tb_mensagem(
cd_mensagem int auto_increment primary key,
nm_contato varchar(50) not null,
email_contato varchar(50) not null,
ds_mensagem varchar(300) not null
);


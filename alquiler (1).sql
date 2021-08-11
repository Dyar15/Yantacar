/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     9/8/2021 21:43:36                            */
/*==============================================================*/


drop table if exists CLIENTES;

drop table if exists FACTURA;

drop table if exists INCIDENCIA;

drop table if exists MODEL_V;

drop table if exists RESERVAS;

drop table if exists TIPO_CLIENTE;

drop table if exists USUARIOS;

drop table if exists VEHICULOS;

/*==============================================================*/
/* Table: CLIENTES                                              */
/*==============================================================*/
create table CLIENTES
(
   CED_CLI              varchar(13) not null,
   COD_TCLI             int,
   NOM_CLI              varchar(45),
   APE_CLI              varchar(45),
   DIR_CLI              varchar(60),
   TELF_CLIF            varchar(10),
   primary key (CED_CLI)
);

/*==============================================================*/
/* Table: FACTURA                                               */
/*==============================================================*/
create table FACTURA
(
   COD_FAC              int not null auto_increment,
   COD_RE               int,
   CED_USU              varchar(10),
   CED_CLI              varchar(13),
   FECHA_FAC            date,
   NOMBRE               varchar(45),
   DESCRIPCION          varchar(45),
   TOTAL_FAC            varchar(45),
   primary key (COD_FAC)
);

/*==============================================================*/
/* Table: INCIDENCIA                                            */
/*==============================================================*/
create table INCIDENCIA
(
   COD_INCI             int not null auto_increment,
   NUM_MAT_VE           varchar(10),
   DES_INCI             varchar(120),
   primary key (COD_INCI)
);

/*==============================================================*/
/* Table: MODEL_V                                               */
/*==============================================================*/
create table MODEL_V
(
   NOM_MOD              varchar(45) not null,
   MARCA_MOD            varchar(45),
   PRECIO_MOD           varchar(25),
   CONBUSTIBE           varchar(45),
   TRANSMISION          varchar(45),
   CAPACIDAD            varchar(45),
   primary key (NOM_MOD)
);

/*==============================================================*/
/* Table: RESERVAS                                              */
/*==============================================================*/
create table RESERVAS
(
   COD_RE               int not null auto_increment,
   NUM_MAT_VE           varchar(10),
   CED_CLI              varchar(13),
   FECHA_RE             date,
   FECHA_INI_RE         date,
   FECHA_FIN            date,
   primary key (COD_RE)
);

/*==============================================================*/
/* Table: TIPO_CLIENTE                                          */
/*==============================================================*/
create table TIPO_CLIENTE
(
   COD_TCLI             int not null auto_increment,
   NOM_CLI              varchar(45),
   primary key (COD_TCLI)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   CED_USU              varchar(10) not null,
   NOM_USE              varchar(45),
   PASS_USE             varchar(45),
   COR_USE              varchar(45),
   primary key (CED_USU)
);

/*==============================================================*/
/* Table: VEHICULOS                                             */
/*==============================================================*/
create table VEHICULOS
(
   NUM_MAT_VE           varchar(10) not null,
   NOM_MOD              varchar(45),
   KM_VE                varchar(45),
   COLOR_VE             varchar(45),
   IMG_VE               varchar(100),
   primary key (NUM_MAT_VE)
);

alter table CLIENTES add constraint FK_TIPO_CLI_CLI foreign key (COD_TCLI)
      references TIPO_CLIENTE (COD_TCLI) on delete restrict on update restrict;

alter table FACTURA add constraint FK_CLI_FAC foreign key (CED_CLI)
      references CLIENTES (CED_CLI) on delete restrict on update restrict;

alter table FACTURA add constraint FK_RELATIONSHIP_8 foreign key (COD_RE)
      references RESERVAS (COD_RE) on delete restrict on update restrict;

alter table FACTURA add constraint FK_USU_FAC foreign key (CED_USU)
      references USUARIOS (CED_USU) on delete restrict on update restrict;

alter table INCIDENCIA add constraint FK_VE_IN foreign key (NUM_MAT_VE)
      references VEHICULOS (NUM_MAT_VE) on delete restrict on update restrict;

alter table RESERVAS add constraint FK_CLI_RE foreign key (CED_CLI)
      references CLIENTES (CED_CLI) on delete restrict on update restrict;

alter table RESERVAS add constraint FK_RELATIONSHIP_10 foreign key (NUM_MAT_VE)
      references VEHICULOS (NUM_MAT_VE) on delete restrict on update restrict;

alter table VEHICULOS add constraint FK_MOD_VE foreign key (NOM_MOD)
      references MODEL_V (NOM_MOD) on delete restrict on update restrict;


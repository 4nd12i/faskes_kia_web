Create Table m_produk(
  id int NOT NULL AUTO_INCREMENT primary key,
  kodeproduk varchar(5),
  namaproduk varchar(255),
  id_bag varchar(10)
);

Create Table m_harga(
  id int NOT NULL AUTO_INCREMENT primary key,
  hargaproduk double,
  hargapcsrate double,
  potongan1 double,
  potongan2 double,
  potongan3 double,
  idproduk int,

  constraint FK_hargaproduk foreign key (idproduk) references m_produk(id)
);

-- Bagian Casting --
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Em','Emerald','B26');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Cr','Caribbean','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ar','Arabian','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Eu','Eureka','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Pre','Premio','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Sapp','Sapphira','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Rub','Ruby','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Lil','Lilac','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gar','Garnet','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tab','Tangki Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tak','Tangki Kecil','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Cov','Cover','');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Url','Urinal','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ves B.','Vessel Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ins B.','Insert Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('SD','Soap Dish','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Mang','Mangkok','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gel','Gelas','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('As','Asbak','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Toch','Tochi CD','');

-- Bagian Dry Body Inspection --
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Em','Emerald','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Cr','Caribbean','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ar','Arabian','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Eu','Eureka','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Pre','Premio','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Sapp','Sapphira','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Rub','Ruby','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Lil','Lilac','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gar','Garnet','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tab','Tangki Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tak','Tangki Kecil','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Cov','Cover','');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Url','Urinal','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ves B.','Vessel Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ins B.','Insert Besar','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('SD','Soap Dish','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Mang','Mangkok','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gel','Gelas','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('As','Asbak','B06');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Toch','Tochi CD','');

-- Bagian GLAZING --
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Em','Emerald','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Cr','Caribbean','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ar','Arabian','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Eu','Eureka','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Pre','Premio','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Sapp','Sapphira','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Rub','Ruby','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Lil','Lilac','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gar','Garnet','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tab','Tangki Besar','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Tak','Tangki Kecil','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Url','Urinal','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ves B.','Vessel Besar','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Ins B.','Insert Besar','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('SD','Soap Dish','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Mang','Mangkok','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('Gel','Gelas','B07');
insert into m_produk (kodeproduk, namaproduk, id_bag) values ('As','Asbak','B07');

  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','2');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');
  INSERT INTO `m_harga` (`jenisbarang`, `hargaproduk`, `hargapcsrate`, `potongan2`, `potongan3`, `idproduk`) VALUES ('KW 1','106000','1843','15500','31000','23');

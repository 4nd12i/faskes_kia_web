CREATE TABLE m_bidan(
  id_bidan int not null primary key AUTO_INCREMENT,
  nip varchar(20),
  no_str varchar(20),
  nama varchar(255),
  no_ktp varchar(20),
  tempat_lahir varchar(255),
  tgl_lahir date,
  alamat_ktp varchar(255),
  alamat_domisili varchar(255),
  lokasi_bidan varchar(255),
  tlp varchar(15),
  hp varchar(15),
  agama varchar(15),
  gol_darah varchar(3),
  pendidikan_terakhir varchar(10),
  nama_sekolah varchar(255),
  jurusan varchar(255),
  foto varchar(255),
  ST boolean
);

CREATE TABLE m_posyandu(
  id_posyandu int not null primary key AUTO_INCREMENT,
  nama varchar(255),
  alamat varchar(255),
  lokasi_posyandu varchar(255),
  ST boolean
);

CREATE TABLE m_karyawan(
  id_karyawan int not null primary key AUTO_INCREMENT,
  nip varchar(20),
  nama varchar(255),
  no_ktp varchar(20),
  tempat_lahir varchar(255),
  tgl_lahir date,
  alamat_ktp varchar(255),
  alamat_domisili varchar(255),
  tlp varchar(15),
  hp varchar(15),
  agama varchar(15),
  gol_darah varchar(3),
  pendidikan_terakhir varchar(10),
  nama_sekolah varchar(255),
  jurusan varchar(255),
  foto varchar(255),
  ST boolean
);

CREATE TABLE m_pasien_ibu(
  id_pasien_ibu int not null primary key AUTO_INCREMENT,
  nik varchar(20),
  nama varchar(255),
  tempat_lahir varchar(255),
  tgl_lahir varchar(255),
  kehamilan_ke int,
  usia int,
  agama varchar(20),
  pendidikan varchar(10),
  gol_darah varchar(3),
  pekerjaan varchar(255),
  no_jkn varchar(255),
  ST boolean
);

CREATE TABLE m_pasien_anak(
  id_pasien_anak int not null primary key AUTO_INCREMENT,
  nama varchar(255),
  nama_ayah varchar(255),
  nama_ibu varchar(255),
  jenis_kelamin varchar(255),
  usia int,
  anak_ke int,
  berat_lahir double,
  panjang_badan double,
  ST boolean
);

CREATE TABLE m_pengguna(
  username varchar(15) primary key,
  nik varchar(20),
  nama varchar(255),
  password varchar(255),
  hak varchar(50),
  foto varchar(255),
  ST boolean
);

CREATE TABLE t_kesehatan_ibu(
  id_cek int not null primary key AUTO_INCREMENT,
  id_pasien_ibu int,
  id_bidan int,
  hpht varchar(50),
  htp varchar(50),
  tinggi_badan double,
  berat_badan double,
  riwayat_penyakit varchar(255),
  tgl_periksa date,
  keluhan_sekarang varchar(255),
  tekanan_darah varchar(10),
  umur_kehamilan varchar(255),
  tinggi_fundus varchar(255),
  letak_janin varchar(255),
  denyut_jantung varchar(255),
  ST boolean
);

CREATE TABLE t_imunisasi_anak(
  id_cek int not null primary key AUTO_INCREMENT,
  id_pasien_anak int,
  id_bidan int,
  umur int,
  berat_badan double,
  jenis_imunisasi varchar(255),
  keterangan varchar(255),
  ST boolean
);

CREATE TABLE t_log(
  id_log int not null primary key AUTO_INCREMENT,
  id_bidan int,
  id_karyawan int,
  nama varchar(255),
  tanggal varchar(255),
  jabatan varchar(255),
  status varchar(50)
);

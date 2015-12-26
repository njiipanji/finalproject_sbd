CREATE TABLE WISMA (
  ID_WISMA CHAR(3) PRIMARY KEY NOT NULL,
  NAMA_WISMA VARCHAR(20),
  ALAMAT_WISMA VARCHAR(256),
  TELP_WISMA VARCHAR(15)
);

INSERT INTO WISMA VALUES('W01','Flamboyan','Jl. Hidrodinamika No. 1, Perumdos Kampus ITS, Keputih - Sukolilo, Surabaya','031-5947366');
INSERT INTO WISMA VALUES('W02','Bougenville','Jl. Teknik Arsitektur Blok H 8 - 12, Perumdos Kampus ITS, Keputih - Sukolilo, Surabaya','031-5915974');
INSERT INTO WISMA VALUES('W03','Yasmine','Jl. Teknik Sipil Blok I -19, Perumdos Kampus ITS, Keputih - Sukolilo, Surabaya','031-5938815');


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE JENIS_KAMAR (
  ID_JENIS_KAMAR CHAR(3) PRIMARY KEY NOT NULL,
  NAMA_JENIS_KAMAR VARCHAR(15),
  HARGA_JENIS_KAMAR INT
);

INSERT INTO JENIS_KAMAR VALUES('J01','Standard_F','150000');
INSERT INTO JENIS_KAMAR VALUES('J02','Eksekutif_F','225000');
INSERT INTO JENIS_KAMAR VALUES('J03','VIP_F','300000');
INSERT INTO JENIS_KAMAR VALUES('J04','Standard_B','125000');
INSERT INTO JENIS_KAMAR VALUES('J05','Eksekutif_B','175000');
INSERT INTO JENIS_KAMAR VALUES('J06','Rumah_J','400000');


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE KAMAR (
  ID_WISMA CHAR(3),
  ID_JENIS_KAMAR CHAR(3),
  NO_KAMAR CHAR(3) PRIMARY KEY NOT NULL,
  STATUS_KAMAR CHAR(1),
  CONSTRAINT ID_WISMA_FK FOREIGN KEY(ID_WISMA) REFERENCES WISMA(ID_WISMA),
  CONSTRAINT FK_ID_JENIS_KAMAR FOREIGN KEY(ID_JENIS_KAMAR) REFERENCES JENIS_KAMAR(ID_JENIS_KAMAR)
);

/* Flamboyan Standard */
INSERT INTO KAMAR VALUES('W01','J01','101','0');
INSERT INTO KAMAR VALUES('W01','J01','102','0');
INSERT INTO KAMAR VALUES('W01','J01','103','0');
INSERT INTO KAMAR VALUES('W01','J01','104','0');
INSERT INTO KAMAR VALUES('W01','J01','105','0');
INSERT INTO KAMAR VALUES('W01','J01','106','0');
INSERT INTO KAMAR VALUES('W01','J01','107','0');
INSERT INTO KAMAR VALUES('W01','J01','108','0');
INSERT INTO KAMAR VALUES('W01','J01','109','0');
INSERT INTO KAMAR VALUES('W01','J01','110','0');

/* Flamboyan Eksekutif */
INSERT INTO KAMAR VALUES('W01','J02','201','0');
INSERT INTO KAMAR VALUES('W01','J02','202','0');
INSERT INTO KAMAR VALUES('W01','J02','203','0');
INSERT INTO KAMAR VALUES('W01','J02','204','0');
INSERT INTO KAMAR VALUES('W01','J02','205','0');

/* Flamboyan VIP */
INSERT INTO KAMAR VALUES('W01','J03','301','0');
INSERT INTO KAMAR VALUES('W01','J03','302','0');

/* Bougenville Standard */
INSERT INTO KAMAR VALUES('W02','J04','S01','0');
INSERT INTO KAMAR VALUES('W02','J04','S02','0');
INSERT INTO KAMAR VALUES('W02','J04','S03','0');
INSERT INTO KAMAR VALUES('W02','J04','S04','0');
INSERT INTO KAMAR VALUES('W02','J04','S05','0');
INSERT INTO KAMAR VALUES('W02','J04','S06','0');
INSERT INTO KAMAR VALUES('W02','J04','S07','0');
INSERT INTO KAMAR VALUES('W02','J04','S08','0');
INSERT INTO KAMAR VALUES('W02','J04','S09','0');
INSERT INTO KAMAR VALUES('W02','J04','S10','0');
INSERT INTO KAMAR VALUES('W02','J04','S11','0');
INSERT INTO KAMAR VALUES('W02','J04','S12','0');
INSERT INTO KAMAR VALUES('W02','J04','S13','0');
INSERT INTO KAMAR VALUES('W02','J04','S14','0');
INSERT INTO KAMAR VALUES('W02','J04','S15','0');

/* Bougenville Eksekutif */
INSERT INTO KAMAR VALUES('W02','J05','E01','0');
INSERT INTO KAMAR VALUES('W02','J05','E02','0');
INSERT INTO KAMAR VALUES('W02','J05','E03','0');
INSERT INTO KAMAR VALUES('W02','J05','E04','0');
INSERT INTO KAMAR VALUES('W02','J05','E05','0');
INSERT INTO KAMAR VALUES('W02','J05','E06','0');
INSERT INTO KAMAR VALUES('W02','J05','E07','0');

/* Yasmine Rent House */
INSERT INTO KAMAR VALUES('W03','J06','Y01','0');


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE PETUGAS (
  ID_PETUGAS CHAR(6) PRIMARY KEY NOT NULL,
  NAMA_PETUGAS VARCHAR(50),
  ALAMAT_PETUGAS VARCHAR(256),
  TELP_PETUGAS VARCHAR(20)
);

INSERT INTO PETUGAS VALUES('PG_001','Yusuf Dimas Hermawan','Ketintang Permai','081217976154');
INSERT INTO PETUGAS VALUES('PG_002','Arya Putra Kurniawan','Singkawang, Kalimantan Barat','081234567891');
INSERT INTO PETUGAS VALUES('PG_003','Reynaldo Jones','Penele, Surabaya Pusat','085432765986');


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE FASILITAS_KAMAR (
  ID_JENIS_KAMAR CHAR(3),
  ID_FASILITAS CHAR(5) PRIMARY KEY NOT NULL,
  NAMA_FASILITAS_KAMAR VARCHAR(30),
  HARGA_FASILITAS_KAMAR INT,
  CONSTRAINT ID_JENIS_KAMAR_FK FOREIGN KEY(ID_JENIS_KAMAR) REFERENCES JENIS_KAMAR(ID_JENIS_KAMAR)
);

/* Fasilitas Flamboyan Standard */
INSERT INTO FASILITAS_KAMAR VALUES('J01','FFS01','Tempat Tidur','350000');
INSERT INTO FASILITAS_KAMAR VALUES('J01','FFS02','Lemari','200000');
INSERT INTO FASILITAS_KAMAR VALUES('J01','FFS03','Televisi','400000');
INSERT INTO FASILITAS_KAMAR VALUES('J01','FFS04','Kipas Angin','100000');

/* Fasilitas Flamboyan Eksekutif */
INSERT INTO FASILITAS_KAMAR VALUES('J02','FFE01','Tempat Tidur','400000');
INSERT INTO FASILITAS_KAMAR VALUES('J02','FFE02','Lemari','250000');
INSERT INTO FASILITAS_KAMAR VALUES('J02','FFE03','Televisi','500000');
INSERT INTO FASILITAS_KAMAR VALUES('J02','FFE04','Air Conditioner','500000');

/* Fasilitas Flamboyan VIP */
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV01','Tempat Tidur','550000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV02','Sofa','300000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV03','Lemari','300000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV04','Kulkas','1000000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV05','Televisi','750000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV06','VCD Player','250000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV07','Air Conditioner','600000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV08','Tempat Tidur','550000');
INSERT INTO FASILITAS_KAMAR VALUES('J03','FFV09','Pemanas/Pendingin Air','500000');

/* Fasilitas Bougenville Standard */
INSERT INTO FASILITAS_KAMAR VALUES('J04','FBS01','Tempat Tidur','300000');
INSERT INTO FASILITAS_KAMAR VALUES('J04','FBS02','Lemari','150000');
INSERT INTO FASILITAS_KAMAR VALUES('J04','FBS03','Kipas Angin','100000');

/* Fasilitas Bougenville Eksekutif */
INSERT INTO FASILITAS_KAMAR VALUES('J05','FBE01','Tempat Tidur','350000');
INSERT INTO FASILITAS_KAMAR VALUES('J05','FBE02','Lemari','200000');
INSERT INTO FASILITAS_KAMAR VALUES('J05','FBE03','Televisi','400000');
INSERT INTO FASILITAS_KAMAR VALUES('J05','FBE04','Air Conditioner','700000');

/* Fasilitas Yasmine */
INSERT INTO FASILITAS_KAMAR VALUES('J06','FYS01','Kamar Tidur','1000000');
INSERT INTO FASILITAS_KAMAR VALUES('J06','FYS02','Ruang Keluarga','3000000');
INSERT INTO FASILITAS_KAMAR VALUES('J06','FYS03','Ruang Makan','1000000');
INSERT INTO FASILITAS_KAMAR VALUES('J06','FYS04','Kamar Mandi','1750000');
INSERT INTO FASILITAS_KAMAR VALUES('J06','FYS05','Dapur','1750000');


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE TAMU (
  ID_TAMU CHAR(17) PRIMARY KEY NOT NULL,
  NAMA_TAMU VARCHAR(50),
  TTL_TAMU TIMESTAMP,
  ALAMAT_TAMU VARCHAR(256),
  TELP_TAMU VARCHAR(20)
);



/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE TRANSAKSI_SEWA_KAMAR
(
  ID_TRANSAKSI CHAR(6) PRIMARY KEY NOT NULL,
  ID_PETUGAS CHAR(6),
  ID_TAMU CHAR(17),
  TGL_TRANSAKSI TIMESTAMP,
  TGL_CHECKIN TIMESTAMP,
  TGL_CHECKOUT TIMESTAMP,
  LAMA_INAP INTEGER,
  TGL_BAYAR TIMESTAMP,
  DENDA INT,
  TOTAL INT,
  CONSTRAINT ID_PETUGAS_FK FOREIGN KEY(ID_PETUGAS) REFERENCES PETUGAS(ID_PETUGAS),
  CONSTRAINT ID_TAMU_FK FOREIGN KEY(ID_TAMU) REFERENCES TAMU(ID_TAMU)
);


/*-----------------------------------------------------------------------------------------------------------------------------*/
CREATE TABLE MENYEWA (
  NO_KAMAR CHAR(3) NOT NULL,
  ID_TRANSAKSI CHAR(6) NOT NULL,
  CONSTRAINT NO_KAMAR_FK FOREIGN KEY(NO_KAMAR) REFERENCES KAMAR(NO_KAMAR),
  CONSTRAINT ID_TRANSAKSI_FK FOREIGN KEY(ID_TRANSAKSI) REFERENCES TRANSAKSI_SEWA_KAMAR(ID_TRANSAKSI)
);
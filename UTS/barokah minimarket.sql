create table barang
(
   id_barang            char(20) not null,
   nama_barang          varchar(50) not null,
   kategori          	varchar(10) not null,
   jumlah_barang     	char(20) not null,
   harga_barang    		float(8),
   primary key (id_barang)
);

insert into Menu values
('1','pensil','atk','100','1500'),
('2','bulpen','atk','100','3000'),
('3','roti','makanan','50','15000'),
('4','superstar','makanan','50','500'),
('5','yakult','minuman','30','1500');

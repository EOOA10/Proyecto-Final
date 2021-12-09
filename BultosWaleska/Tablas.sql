Create Table 'categorias'
(
id_Cat int auto_increment primary key,
Nombre_Cat  nvarchar(50),
Descripcion  nvarchar(150)
)
ENGINE = INNODB;

Create Table 'Productos'
(
id_producto int auto_increment primary key,
Nombre_producto nvarchar(50) not null,
Descripcion  nvarchar(100),
id_Cat int  not null,
imagen varchar(255),
FOREIGN KEY (id_Cat) REFERENCES categorias(id_Cat)
)
ENGINE = INNODB;

create Table 'Ventas'
( 
ID int auto_increment primary key,
ClaveTransaccion varchar(250),
PaypalDatos Text,
Fecha Datetime,
Correo Varchar(5000),
Total Decimal(60,2),
Status varchar(200)
);

create Table 'DetalleVenta'
( 
ID int auto_increment primary key,
IDVENTA INT,
IDPRODUCTO INT,
PRECIOUNITARIO DECIMAL(20,2),
CANTIDAD INT,
DESCARGADO INT,
FOREIGN KEY (IDVENTA) REFERENCES Ventas(ID),
FOREIGN KEY (IDPRODUCTO) REFERENCES Productos(id_producto)
);

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correo` varchar(250) NOT NULL, 
  `usuario` varchar(250) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) 
create database Potencia\_Digital\_SQL;

create table usuarios(

 	idUsuario smallint primary key identity,

 	nombre varchar(100) not null,

 	telefono char(9) unique not null

);

create table charlas(

 	idCharlas smallint primary key identity,

 	nombre varchar(80) not null,

 	puntuacion\_media decimal(4,2) not null,

 	descripcion varchar(500) not null,

 	idLugar tinyint not null,

 	constraint CK\_descripcion check(puntuacion\_media between 1 and 10)

 	constraint FK\_idLugar foreign key (idLugar) references lugares(idLugar)

);

create table lugares(

 	idLugar tinyint primary key identity,

 	nombre varchar(50) not null

);

create table fechas(

 	fecha smalldatetime primary key

);

create table ponentes(

 	idPonente smallint primary key identity,

 	nombre varchar(100) not null,

 	telefono char(9) unique not null,

 	pago smallmoney not null default 1,

 	constraint CK\_pago check (pago > 0)

);

create table asistencias(

 	idUsuario smallint not null,

 	idCharlas smallint not null,

 	primary key(idUsuario,idCharlas),

 	constraint FK\_idUsuario foreign key (idUsuario) references usuarios(idUsuario),

 	constraint FK\_idCharlas foreign key (idCharlas) references charlas(idCharlas)

);



create table fechas\_charlas(

 	idCharla smallint not null,

 	fecha smalldatetime not null,

 	primary key (idCharla,fecha),

 	constraint FK\_idCharla foreign key (idCharla) references charlas(idCharlas),

 	constraint FK\_fecha foreign key (fecha) references fechas(fecha)

);

create table ponentes\_charlas(

 	idPonente smallint not null,

 	idCharla smallint not null,

 	primary key(idPonente,idCharla),

 	constraint FK\_idPonente foreign key (idPonente) references ponentes(idPonente),

 	constraint FK\_idCharla2 foreign key (idCharla) references charlas(idCharlas)

);





-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Pruebas /////////////////

-- Hay instrucciones que causan error adrede para comprobar las restricciones.



use Potencia\_Digital\_SQL;

insert into ponentes values

 	('Gustavo','666666666',5),  -- Identity pone automáticamente 1

 	('Melquiades','777666777'), -- Sin pago explícito, pone 1 por defecto

-- \[poner (nombre,telefono) tras el nombre de la tabla para que deje omitir el pago]



 	('Manolo','666666666',10), -- No deja, teléfono está repetido

-- \[Infracción de la restricción UNIQUE KEY 'UQ\_\_ponentes\_\_2A16D9455F545524'. No se puede insertar una clave duplicada en el objeto 'dbo.ponentes'. El valor de la clave duplicada es (666666666).]

 

 	('Gamer300','918273645',0); -- No deja, pago no es mayor que 0

-- \[Instrucción INSERT en conflicto con la restricción CHECK 'CK\_pago'. El conflicto ha aparecido en la base de datos 'Potencia\_Digital\_SQL', tabla 'dbo.ponentes', column 'pago'.]



use Potencia\_Digital\_SQL;

insert into lugares values

 	('lugar1'),

 	('lugar2'),

 	('lugar3');



insert into charlas values

&nbsp;	('charla1',5,'charla guay',1),

&nbsp;	('charla2',7,'charla interesante',2),

&nbsp;	('charla3',9,'charla ciberseguridad',4);  -- No deja porque idLugar 4 no existe (después pondré 3 en vez de 4)

-- \[Instrucción INSERT en conflicto con la restricción FOREIGN KEY 'FK\_idLugar'. El conflicto ha aparecido en la base de datos 'Potencia\_Digital\_SQL', tabla 'dbo.lugares', column 'idLugar'.]



insert into ponentes\_charlas values

&nbsp;	(1,8), -- 8 porque ya hice pruebas con filas anteriores que borré y tal y ahí se quedó el autocontador. Fila válida.

&nbsp;	(1,1), -- No válida, no existe idCharlas "1"

-- \[Instrucción INSERT en conflicto con la restricción FOREIGN KEY 'FK\_idCharla2'. El conflicto ha aparecido en la base de datos 'Potencia\_Digital\_SQL', tabla 'dbo.charlas', column 'idCharlas'.]

&nbsp;	(2,9),

&nbsp;	(2,8),

&nbsp;	(3,8); -- Error, no existe idPonente 3

-- \[Instrucción INSERT en conflicto con la restricción FOREIGN KEY 'FK\_idPonente'. El conflicto ha aparecido en la base de datos 'Potencia\_Digital\_SQL', tabla 'dbo.ponentes', column 'idPonente'.]



&nbsp;	






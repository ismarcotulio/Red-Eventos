INSERT INTO WEB VALUES(1,'Impactec','https://impactec.tk','185.28.20.43','Marco Ruiz','20-01-2016',null,null);
INSERT INTO WEB VALUES(2,'Seedeep','www.seedeep.com','31.1376.68','Marco Ruiz','20-01-2016',null,null);
INSERT INTO WEB VALUES(3,'Magitec','www.magitec.es','127.0.0.1','Marco Ruiz','20-01-2016',null,null);
INSERT INTO WEB VALUES(4,'Magitec2','www.magitec.com','127.0.0.1','Marco Ruiz','20-01-2016',null,null);

INSERT INTO CLASE VALUES(1,'normal');
INSERT INTO CLASE VALUES(2,'evento');

INSERT INTO CATEGORIA VALUES(1,'Futbol','Es un deporte cuyo objetivo es ingresar un balon con los pies dentro de una meta.','https://roams.es/c/wp-content/uploads/2016/07/futbol-2000x1218.jpg',1);
INSERT INTO CATEGORIA VALUES(2,'Basketball','Es un deporte cuyo objetivo es encestar un balon','http://game.orangebowl.org/assets/1/15/GalleryMainDimensionId/IMG_5094.jpg',1);
INSERT INTO CATEGORIA VALUES(3,'Baseball','Es un deporte cuyo objetivo es hacer mas anotaciones que el equipo rival','http://www.excite.com/events/blog/wp-content/uploads/2014/06/iStock_000000542191XSmall1.jpg',1);
INSERT INTO CATEGORIA VALUES(4,'socccer','Es un deporte cuyo objetivo es llegar al area contraria con un balon','http://ichef-1.bbci.co.uk/news/ws/660/amz/worldservice/live/assets/images/2016/03/16/160316165504_futbol_americano_950x633_getty_nocredit.jpg',1);
INSERT INTO CATEGORIA VALUES(5,'tenis','Es un deporte cuyo objetivo es golpar una pelota hacia el area contraria','http://deportestorrijos.es/wp-content/uploads/2016/03/tenis.jpg',1);
INSERT INTO CATEGORIA VALUES(6,'voleiball','Es un deporte cuyo objetivo es evitar que caiga el balon.','http://concepto.de/wp-content/uploads/2015/01/Voleibol.jpg',1);
INSERT INTO CATEGORIA VALUES(7,'natacion','Es un deporte cuyo objetivo ser mas veloz bajo el agua','http://bp1.blogger.com/__5V2uHRqIxo/SB902kfq7gI/AAAAAAAAADY/58OvSsITqI0/s400/natacion.jpg',1);
INSERT INTO CATEGORIA VALUES(8,'Videoconsolas','Es un sistema electrónico de entretenimiento para el hogar que ejecuta juegos electrónicos','http://img2.meristation.com/files/imagenes/reportajes/chc/2016/otras_consolas_retro_al_estilo_mini_nes/463891f3-3831-42de-8775-82e972ec4e8e.jpg',1);
INSERT INTO CATEGORIA VALUES(9,'Anime','Animacion japonesa','https://s-media-cache-ak0.pinimg.com/564x/4f/33/b0/4f33b0efe86a62f8f2f41bf9faa6ce1d.jpg',1);
INSERT INTO CATEGORIA VALUES(10,'Ciencia','es un sistema ordenado de conocimientos estructurados que busca la interpretación y el porqué de los fenómenos','http://colegiodelalbacoquimbo.cl/wp-content/uploads/2016/10/ciencia.jpg',1);
INSERT INTO CATEGORIA VALUES(11,'Cine','Técnica y arte de proyectar fotogramas de forma rápida y sucesiva para crear la impresión de movimiento, mostrando algún video.','http://img.chilango.com/2016/09/el-cine-independiente-tambien-rifa.jpg',1);
INSERT INTO CATEGORIA VALUES(12,'Torneo YGO Duel link','Crea tu propio Torneo del juego yugioh duel links','http://clumsygames.com/wp-content/uploads/2017/02/Los-mejores-decks-en-yu-gi-oh-duel-links.jpg',2);
INSERT INTO CATEGORIA VALUES(13,'Torneo Clash Royale','Crea tu propio Torneo del Clash Royale','http://www.hobbyconsolas.com/sites/hobbyconsolas.com/public/styles/main_element/public/media/image/2017/03/clash-royale-arena-8-portada.jpg?itok=vuOV3Yje',2);
INSERT INTO CATEGORIA VALUES(14,'Torneo Call of duty','Crea tu propio Torneo del juego CoD','https://www.callofduty.com/content/dam/atvi/callofduty/wwii/home/Stronghold_Metadata_Image.jpg',2);

INSERT INTO RANGO VALUES(1,'normal');
INSERT INTO RANGO VALUES(2,'premium');
INSERT INTO RANGO VALUES(3,'admin');

INSERT INTO VISITA(Id_Visita,Id_Web) VALUES(1,1);

INSERT INTO REGISTRO(Id_Usuario,Nombre_Usuario,Primer_Nombre,Primer_Apellido,Email,Pass,Id_Visita,Id_Rango) 
VALUES(1,'Maruiz','Marco','Ruiz','marcoruizhn@yahoo.com','paladino123',1,1);


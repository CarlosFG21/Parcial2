CREATE TABLE IF NOT EXISTS oferta (
  id int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(200) COLLATE utf8_bin NOT NULL,
  imagen varchar(100) COLLATE utf8_bin NOT NULL,
  descripcion varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;
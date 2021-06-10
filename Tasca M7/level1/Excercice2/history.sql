SELECT p.id FROM ps_cities c LEFT JOIN ps_provinces p ON p.id = e.province_id WHERE e.id IN (SELECT e.city_id FROM ps_employees e);
UPDATE ps_employees e SET e.province_id = (
	SELECT p.id 
	FROM ps_cities c 
	LEFT JOIN ps_provinces p ON p.id = c.province_id 
	WHERE c.id = e.city_id
);
UPDATE ps_employees e SET co.province_id = (
	SELECT p.id 
	FROM ps_cities c 
	LEFT JOIN ps_provinces p ON p.id = c.province_id 
	WHERE c.id = e.city_id
);
UPDATE ps_employes e SET co.province_id = (
	SELECT p.id 
	FROM ps_cities c 
	LEFT JOIN ps_provinces p ON p.id = c.province_id 
	WHERE c.id = e.city_id
);
UPDATE ps_costumers co SET co.province_id = (
	SELECT p.id 
	FROM ps_cities c 
	LEFT JOIN ps_provinces p ON p.id = c.province_id 
	WHERE c.id = co.city_id
);
UPDATE ps_costumers co SET co.province_id = (
	SELECT p.id 
	FROM ps_cities c 
	LEFT JOIN ps_provinces p ON p.id = c.province_id 
	WHERE c.id IN co.city_id
);
UPDATE ps_costumers c SET c.province_id = (SELECT p.id FROM ps_cities c LEFT JOIN ps_provinces p ON p.id = c.province_id WHERE c.id IN (SELECT c.city_id FROM ps_costumers c));
SELECT p.id FROM ps_cities c LEFT JOIN ps_provinces p ON p.id = c.province_id WHERE c.id IN (SELECT c.city_id FROM ps_costumers c);
SELECT c.city_id FROM ps_costumers c;
SELECT c,province_id FROM ps_costumers c;
SELECT c,province_id FROM ps_costumers;
SELECT p.id FROM ps_cities c LEFT JOIN ps_provinces p ON p.id = c.province_id WHERE c.id = 10;
SELECT * FROM ps_cities c LEFT JOIN ps_provinces p ON p.id = c.province_id WHERE c.id = 10;
SELECT * FROM ps_cities WHERE id = 10;
SELECT * FROM  ps_costumers WHERE id = 10;
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('01', 'Araba/Álava');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('02', 'Albacete');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('03', 'Alicante/Alacant');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('04', 'Almería');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('05', 'Ávila');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('06', 'Badajoz');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('07', 'Illes Balears');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('08', 'Barcelona');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('09', 'Burgos');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('10', 'Cáceres');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('11', 'Cádiz');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('12', 'Castellón/Castelló');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('13', 'Ciudad Real');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('14', 'Córdoba');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('15', 'A Coruña');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('16', 'Cuenca');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('17', 'Girona');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('18', 'Granada');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('19', 'Guadalajara');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('20', 'Gipuzkoa');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('21', 'Huelva');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('22', 'Huesca');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('23', 'Jaén');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('24', 'León');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('25', 'Lleida');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('26', 'La Rioja');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('27', 'Lugo');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('28', 'Madrid');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('29', 'Málaga');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('30', 'Murcia');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('31', 'Navarra');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('32', 'Ourense');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('33', 'Asturias');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('34', 'Palencia');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('35', 'Las Palmas');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('36', 'Pontevedra');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('37', 'Salamanca');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('38', 'Santa Cruz de Tenerife');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('39', 'Cantabria');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('40', 'Segovia');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('41', 'Sevilla');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('42', 'Soria');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('43', 'Tarragona');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('44', 'Teruel');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('45', 'Toledo');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('46', 'Valencia/València');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('47', 'Valladolid');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('48', 'Bizkaia');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('49', 'Zamora');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('50', 'Zaragoza');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('51', 'Ceuta');
INSERT INTO ps_provinces (provinciaid, provincia) VALUES('52', 'Melilla');
CREATE TABLE ps_provinces (
  provinciaid decimal(2,0) UNSIGNED ZEROFILL NOT NULL,
  provincia varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE IF NOT EXISTS `providers` (
  `idproviders` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `street` VARCHAR(45) NULL,
  `number` INT(3) NULL,
  `flor` INT(2) NULL,
  `door` INT(2) NULL,
  `city` VARCHAR(45) NULL,
  `postalcode` INT(6) NULL,
  PRIMARY KEY (`idproviders`));
CREATE TABLE IF NOT EXISTS `mydb`.`providers` (
  `idproviders` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `street` VARCHAR(45) NULL,
  `number` INT(3) NULL,
  `flor` INT(2) NULL,
  `door` INT(2) NULL,
  `city` VARCHAR(45) NULL,
  `postalcode` INT(6) NULL,
  PRIMARY KEY (`idproviders`))
ENGINE = InnoDB
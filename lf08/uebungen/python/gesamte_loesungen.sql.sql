/*********************** 5.01 ***********************/

SELECT * FROM fahrraeder WHERE anschaffungswert > 600;

/*********************** 5.02 ***********************/

SELECT * FROM fahrraeder WHERE anschaffungswert < 300;

/*********************** 5.03 ***********************/

SELECT * FROM fahrraeder WHERE kaufdatum < '2008-01-01';

/*********************** 5.04 ***********************/

SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01';

/*********************** 5.05 ***********************/

SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6;

/*********************** 5.06 ***********************/

SELECT AVG(anschaffungswert) AS 'Durchschnittswert:' FROM fahrraeder;

/*********************** 5.07 ***********************/

SELECT MAX(anschaffungswert) AS 'Maximaler Anschaffungswert:' FROM fahrraeder;

/*********************** 5.08 ***********************/

SELECT MIN(anschaffungswert) AS 'Kleinster Anschaffungswert:' FROM fahrraeder;

/*********************** 5.09 ***********************/

SELECT SUM(anschaffungswert) AS 'Gesamtwert:' FROM fahrraeder;

/*********************** 5.10 ***********************/

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) = 2007;

/*********************** 5.11 ***********************/

/* Möglichkeit #1 */

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007;

/* Möglichkeit #2 */

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) <> 2007

/*********************** 5.12 ***********************/

SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;

/*********************** 5.13 ***********************/

SELECT * FROM hersteller WHERE herstellername LIKE 'C%';
 
/*********************** 5.14 ***********************/

SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ORDER BY fahrraeder.fahrradnr ASC;

/*********************** 5.15 ***********************/

SELECT bezeichnung, herstellernr, herstellername FROM `hersteller` JOIN `fahrradarten`; 

/*********************** 5.16 ***********************/

SELECT bezeichnung, herstellernr, herstellername FROM `hersteller` JOIN `fahrradarten` WHERE herstellername LIKE 'Cube';

/*********************** 5.17 ***********************/

SELECT modelle.bezeichnung, hersteller.herstellernr, hersteller.herstellername, tagesmietpreis FROM hersteller JOIN modelle WHERE herstellername LIKE 'Scott' AND tagesmietpreis > '12';

/*********************** 5.18 ***********************/

SELECT MAX(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';

/*********************** 5.19 ***********************/

SELECT MIN(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';

/*********************** 5.20 ***********************/

SELECT COUNT(*) FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';

/*********************** 5.21 ***********************/

SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';

/*********************** 5.22 ***********************/

SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';

/*********************** 5.23 ***********************/

SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad');

/*********************** 5.24 ***********************/

SELECT AVG(modelle.tagesmietpreis) AS durchschnitt_tagesmietpreis FROM modelle JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';

/*********************** 5.25 ***********************/

SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';

/*********************** 5.26 ***********************/

SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;

/*********************** 5.27 ***********************/

SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;

/*********************** 5.28 ***********************/

SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;

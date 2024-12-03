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

SELECT bezeichnung, hersteller.herstellernr, herstellername FROM `hersteller` JOIN `modelle` WHERE herstellername LIKE 'Scott' AND tagesmietpreis > '12';



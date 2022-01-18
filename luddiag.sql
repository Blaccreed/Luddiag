CREATE TABLE user_flip(
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom_user VARCHAR(250),
  prenom_user VARCHAR(250),
  mdp_user VARCHAR(250),
  mail_user VARCHAR(250),
  phone_user VARCHAR(50),
  adresse_user VARCHAR(250),
  cd_postal_user VARCHAR(50)
);
CREATE TABLE joueur(
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nombre_points INT,
  FOREIGN KEY(id_user) REFERENCES user_flip(id_user)
);
CREATE TABLE organisateur(
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  fonction VARCHAR(100),
  FOREIGN KEY(id_user) REFERENCES user_flip(id_user)
);
CREATE TABLE jeu(
  id_jeu INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom_jeu VARCHAR(200),
  categorie_jeu VARCHAR(50)
);
CREATE TABLE animateur(
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  stand VARCHAR(200),
  FOREIGN KEY(id_user) REFERENCES user_flip(id_user)
);
CREATE TABLE Exposant(
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  type_exposant VARCHAR(250),
  FOREIGN KEY(id_user) REFERENCES user_flip(id_user)
);
CREATE TABLE grille(
  id_grille INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  rempli VARCHAR(10),
  type_grille VARCHAR(50),
  date_deb_grille DATETIME,
  date_fin_grille DATETIME,
  id_user INT NOT NULL,
  FOREIGN KEY(id_user) REFERENCES joueur(id_user)
);
CREATE TABLE contenu(
  id_grille INT,
  id_jeu INT,
  PRIMARY KEY(id_grille, id_jeu),
  FOREIGN KEY(id_grille) REFERENCES grille(id_grille),
  FOREIGN KEY(id_jeu) REFERENCES jeu(id_jeu)
);
CREATE TABLE noter(
  id_user INT,
  id_jeu INT,
  id_user_1 INT,
  note REAL,
  validee VARCHAR(10),
  date_note VARCHAR(50),
  PRIMARY KEY(id_user, id_jeu, id_user_1),
  FOREIGN KEY(id_user) REFERENCES joueur(id_user),
  FOREIGN KEY(id_jeu) REFERENCES jeu(id_jeu),
  FOREIGN KEY(id_user_1) REFERENCES animateur(id_user)
);
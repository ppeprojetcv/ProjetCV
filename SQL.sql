CREATE TABLE types (

	typ_id serial,
	typ_nom varchar(50),
	typ_duree varchar(30),
	typ_nbCreer int,
	typ_nbAccepter int,

	CONSTRAINT typ_pk PRIMARY KEY (typ_id)

);

CREATE TABLE niveaux (

	niv_id serial,
	niv_nom varchar(50),

	CONSTRAINT niv_pk PRIMARY KEY (niv_id)

);

CREATE TABLE diplomes (

	dip_id serial,
	dip_nom varchar(50),
	dip_niv_id int,

	CONSTRAINT dip_pk PRIMARY KEY (dip_id),
	CONSTRAINT dip_fk FOREIGN KEY (dip_niv_id) REFERENCES niveaux (niv_id)

);

CREATE TABLE adresses (

	adr_id serial,
	adr_rue varchar(100),
	adr_codePostal int(5),
	adr_ville varchar(50),

	CONSTRAINT adr_pk PRIMARY KEY (adr_id)

);

CREATE TABLE candidats (

	can_id serial,
	can_nom varchar(50),
	can_prenom varchar(50),
	can_dateNaissance date,
	can_numTelephone int(12),
	can_nationalite varchar(50),
	can_permisConduire boolean,
	can_voiturePersonnelle boolean,
	can_photo varchar(100),
	can_adresseMail varchar(100),
	can_sexe boolean,
	can_adr_id int,
	
	CONSTRAINT can_pk PRIMARY KEY (can_id),
	CONSTRAINT can_fk FOREIGN KEY (can_adr_id) REFERENCES adresses (adr_id)

);

CREATE TABLE curiculum (

	cur_can_id int,
	cur_expPofessionnel char,
	cur_formation char,
	cur_competence char,
	cur_langue char,
	cur_centredInteret char,
	
	CONSTRAINT cur_pk PRIMARY KEY (cur_can_id),
	CONSTRAINT cur_fk FOREIGN KEY (cur_can_id) REFERENCES candidats (can_id)

);

CREATE TABLE obt_diplomes_candidats (

	obt_dip_id int,
	obt_can_id int,
	obt_date date,

	CONSTRAINT obt_pk PRIMARY KEY (obt_dip_id, obt_can_id),
	CONSTRAINT obt_dip_fk FOREIGN KEY (obt_dip_id) REFERENCES diplomes (dip_id),
	CONSTRAINT obt_can_fk FOREIGN KEY (obt_can_id) REFERENCES candidats (can_id)

);

CREATE TABLE entreprises (

	ent_id serial,
	ent_nom varchar(50),
	ent_description varchar(300),
	ent_adr_id int,

	CONSTRAINT ent_pk PRIMARY KEY (ent_id),
	CONSTRAINT ent_fk FOREIGN KEY (ent_adr_id) REFERENCES adresses (adr_id)

);

CREATE TABLE postes (

	pos_id serial,
	pos_nomPoste varchar(100),
	pos_duree varchar(30),
	pos_description char,
	pos_typ_id int,
	pos_ent_id int,

	CONSTRAINT pos_pk PRIMARY KEY (pos_id),
	CONSTRAINT pos_typ_fk FOREIGN KEY (pos_typ_id) REFERENCES types (typ_id),
	CONSTRAINT pos_ent_fk FOREIGN KEY (pos_ent_id) REFERENCES entreprises (ent_id)

);

CREATE TABLE dem_postes_curriculum (

	dem_pos_id int,
	dem_cur_can_id int,

	CONSTRAINT dem_pk PRIMARY KEY (dem_pos_id, dem_cur_can_id),
	CONSTRAINT dem_pos_fk FOREIGN KEY (dem_pos_id) REFERENCES postes (pos_id),
	CONSTRAINT dem_cur_can_fk FOREIGN KEY (dem_cur_can_id) REFERENCES curiculum (cur_can_id)
	
);
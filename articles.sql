CREATE TABLE articles (
    id non null AUTO_INCREMENT,
    title varchar (50),
    image non null,
    description text(250) non null,
    prix float non null,
    année date non null,
    kilométrage float non null
);
insert into articles( id, title, image, description, prix, annéé, kilométrage) VALUES( )
-- Nia Survey SQL Creation 

CREATE TABLE people (
    ID INT,
    LastName VARCHAR(20),
    Firstname VARCHAR(20),
    age INT,
    gender ENUM ('F','M'),
)


CREATE TABLE survey (
    ID INT,
    FavColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo' 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink', 'Rainbow'),
    Food VARCHAR(20),
    ProudOf VARCHAR(20),
    Class VARCHAR(20),
    Song VARCHAR(20),
    PizzaTopping ENUM ('Sausage','Pineapple', 'Peppers', 'Onions', 'Tomatoes', 'Pepperoni' 'Ham', 'Cheese', 'Olives', 'Mushrooms',),
    Holiday ENUM ("New Year's Day", 'Groundhogs Day', "Valentine's Day", "St. Patrick's Day", "April Fool's Day", "Easter", "Earth Day", "Juneteenth", "Memorial Day", "Fourth of July", "Halloween", "Thanksgiving", "Christmas"),
    Drink VARCHAR(20),
    TimeOfDay ENUM('Mornings', 'Evenings'),
    LeastColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo' 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink', 'Rainbow'),
)



INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (1, 'Katie', 'Blunck', 20, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (2, 'Ben', 'Painter', 22, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (3, 'Archer', 'Lamb', 20, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (4, 'Nia', 'Goodwill', 19, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (5, 'Hoyt', 'Goodwill', 17, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (6, 'Sanoma', 'Goodwill', 14, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (7, 'Hal', 'Goodwill', 10, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (8, 'Lil', 'Goodwill', 16, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (9, 'Cy', 'Goodwill', 12, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (10, 'Cindy', 'Goodwill', 45, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (11, 'Tim', 'Goodwill', 52, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (12, 'Autumn', 'Blunck', 40, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (13, 'Corinne', 'Blunck', 18, "F");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (14, 'Quinn', 'Ulrich', 24, "M");
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (15, 'Rachel', 'Marin', 18, "F");

INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (1, 'Green', 'Alfredo Pasta', 'PC', 'Yearbook', 'Homesick by the Regrettes', 'Pineapple', 'Christmas', 'Root beer float', 'Evenings', 'Orange');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (2, 'Purple', 'French Fries', 'Painting', 'Programming', "Someone Else's Dream by Absofacto", 'Peppers', 'Christmas', 'Chocolate milk', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (3, 'Red', 'Bread', 'Ability to make friends', 'Woodworking', "Endless Summer by Absofacto", 'Tomatoes', 'Christmas', 'Eggnog', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (4, 'Orange', 'Mashed potatoes', "How far I've come", 'Lord of the Rings', "Never Loved Me by the Downturn", 'Peppers', 'Thanksgiving', 'Hot chocolate', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (5, 'Orange', 'Sushi', "PC", 'Band', "Godzilla by Eminem", 'Pepperoni', 'Halloween', 'Root beer', 'Evenings', 'Green');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (6, 'Red', 'Tuna', "Winning the mancala tournament and battle of the books", 'Orchestra', "Ping by Exyl", 'Ham', 'Christmas', 'Orange v8', 'Evenings', 'Brown');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (7, 'Magenta', 'Crepe cake', "Laserman legos", 'Science', "Resurrections by Lena Raine", 'Sausage', 'Christmas', 'Apple Juice', 'Mornings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (8, 'Green', 'This', "Cool fencing skills", 'Lunch', "Sparkly Abs by CG5", 'Pepperoni', 'Thanksgiving ', 'Hot chocolate', 'Mornings', 'Orange');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (9, 'Cyan', 'This', "Lego creations", 'Science', "Machine by Imagine Dragons", 'Cheese', 'Fourth of July', 'Cucumber Lime Gatorade ', 'Evenings', 'Brown');


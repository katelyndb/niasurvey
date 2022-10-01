-- Nia Survey SQL Creation 

CREATE TABLE people (
    ID INT,
    LastName VARCHAR(20),
    Firstname VARCHAR(20),
    age INT,
    gender ENUM ('F','M')
);


CREATE TABLE survey (
    ID INT,
    FavColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink', 'Rainbow', 'Camo'),
    Food VARCHAR(50),
    ProudOf VARCHAR(100),
    Class VARCHAR(50),
    Song VARCHAR(100),
    PizzaTopping ENUM ('Sausage','Pineapple', 'Peppers', 'Onions', 'Tomatoes', 'Pepperoni', 'Ham', 'Cheese', 'Olives', 'Mushrooms'),
    Holiday ENUM ('New Years Day', 'Groundhogs Day', 'Valentines Day', 'St. Patricks Day', 'April Fools Day', 'Easter', 'Earth Day', 'Juneteenth', 'Memorial Day', 'Fourth of July', 'Halloween', 'Thanksgiving', 'Christmas'),
    Drink VARCHAR(50),
    TimeOfDay ENUM('Mornings', 'Evenings'),
    LeastColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink', 'Rainbow', 'Camo')
);



INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (1, 'Blunck','Katie', 20, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (2, 'Painter','Ben', 22, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (3, 'Lamb','Archer', 20, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (4, 'Goodwill','Nia', 19, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (5, 'Goodwill','Hoyt', 17, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (6, 'Goodwill','Sanoma', 14, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (7, 'Goodwill','Hal', 10, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (8, 'Goodwill','Lil', 16, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (9, 'Goodwill','Cy', 12, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (10, 'Goodwill','Cindy', 47, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (11, 'Goodwill','Tim', 52, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (12, 'Blunck','Autumn', 42, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (13, 'Blunck','Corinne', 18, 'F');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (14, 'Ulrich','Quinn', 24, 'M');
INSERT INTO people (ID, LastName, Firstname, age, gender) VALUES (15, 'Marin','Rachel', 18, 'F');

INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (1, 'Green', 'Alfredo Pasta', 'PC', 'Yearbook', 'Homesick by the Regrettes', 'Pineapple', 'Christmas', 'Root beer float', 'Evenings', 'Orange');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (2, 'Purple', 'French Fries', 'Painting', 'Programming', 'Someone Elses Dream by Absofacto', 'Peppers', 'Christmas', 'Chocolate milk', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (3, 'Red', 'Bread', 'Ability to make friends', 'Woodworking', 'Endless Summer by Absofacto', 'Tomatoes', 'Christmas', 'Eggnog', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (4, 'Orange', 'Mashed potatoes', 'How far I have come', 'Lord of the Rings', 'Never Loved Me by the Downturn', 'Peppers', 'Thanksgiving', 'Hot chocolate', 'Evenings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (5, 'Orange', 'Sushi', 'PC', 'Band', 'Godzilla by Eminem', 'Pepperoni', 'Halloween', 'Root beer', 'Evenings', 'Green');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (6, 'Red', 'Tuna', 'Winning the mancala tournament and battle of the books', 'Orchestra', 'Ping by Exyl', 'Ham', 'Christmas', 'Orange v8', 'Evenings', 'Brown');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (7, 'Magenta', 'Crepe cake', 'Laserman legos', 'Science', 'Resurrections by Lena Raine', 'Sausage', 'Christmas', 'Apple Juice', 'Mornings', 'Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (8, 'Green', 'This', 'Cool fencing skills', 'Lunch', 'Sparkly Abs by CG5', 'Pepperoni', 'Thanksgiving ', 'Hot chocolate', 'Mornings', 'Orange');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (9, 'Cyan', 'This', 'Lego creations', 'Science', 'Machine by Imagine Dragons', 'Cheese', 'Fourth of July', 'Cucumber Lime Gatorade ', 'Evenings', 'Brown');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (10, 'Blue','Salad','Masters degree and having kids','Math','Liar by the Arcadian Wild','Pepperoni','Christmas','Root beer','Mornings','Camo');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (11, 'Thursday', 'Berry pie','Wife and kids','Ones with friends','I Believe In You by Don Wilson','Sausage','Memorial day','Root beer','Mornings','Brown');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (12, 'Green','Korean BBQ','Improved painting skills','Art classes','House of Gold by Twentyone Pilots','Pepperoni','Christmas','Coconut bubble tea', 'Evenings','Red');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (13, 'Pink','Korean BBQ','Soccer','Chemistry','Achilles Come Down by Gang of Youths','Pineapple','Christmas','Pink lemonade','Mornings','Yellow');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (14, 'Orange','Chinese','Accordion','Aerospace engineering','Love Me More by Mitski','Sausage','Christmas','Lime Rickey','Mornings','Red');
INSERT INTO survey (ID, FavColor, Food, ProudOf, Class, Song, PizzaTopping, Holiday, Drink, TimeOfDay, LeastColor) VALUES (15, 'Rainbow','Potatoes','Getting to college','Geology','Nara by alt-J','Pepperoni','Christmas','Pear juice','Evenings','Yellow');





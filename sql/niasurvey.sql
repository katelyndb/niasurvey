-- Nia Survey SQL Creation 

CREATE TABLE people (
    LastName VARCHAR(20),
    Firstname VARCHAR(20),
    age INT,
    gender ENUM ('F','M'),
)


CREATE TABLE survey (
    FavColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo' 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink'),
    Food VARCHAR(20),
    ProudOf VARCHAR(20),
    Class VARCHAR(20),
    Song VARCHAR(20),
    PizzaTopping ENUM ('Sausage','Pineapple', 'Peppers', 'Onions', 'Tomatoes', 'Pepperoni' 'Ham', 'Cheese', 'Olives', 'Mushrooms',),
    Holiday ENUM ("New Year's Day", 'Groundhogs Day', "Valentine's Day", "St. Patrick's Day", "April Fool's Day", "Easter", "Earth Day", "Juneteenth", "Memorial Day", "Fourth of July", "Halloween", "Thanksgiving", "Christmas"),
    Drink VARCHAR(20),
    TimeOfDay ENUM('Morning', 'Evening'),
    LeastColor ENUM ('Red','Orange', 'Yellow', 'Green', 'Blue', 'Indigo' 'Purple', 'Magenta', 'Cyan', 'Thursday', 'White', 'Black', 'Gray', 'Brown', 'Pink'),
)


CREATE SCHEMA IF NOT EXISTS `jaysdb` DEFAULT CHARACTER SET utf8 ;
USE `jaysdb`;

CREATE TABLE IF NOT EXISTS `jaysdb`.`menu` (`itemID` INT NOT NULL AUTO_INCREMENT, `itemName` VARCHAR(45) NOT NULL,`category` VARCHAR(45) NULL, `price` DOUBLE NULL, `description` VARCHAR(200) NULL, `calories` INTEGER NULL, `isAvailable` BOOLEAN NULL DEFAULT 1, PRIMARY KEY(`itemID`));

INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (1, "French Fries","Sides",2.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (2, "Cheese Fries","Sides",3.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (3, "Curly Fries","Sides",2.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (4, "Onion Rings","Sides",4.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (5, "Mozzarella Sticks","Sides",4.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (6, "Pierogies","Sides",3.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (7, "Potato Skins","Sides",5.00,NULL,NULL,1);


INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (8, "Tuna Melt","Hot Sandwiches",4.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (9, "Grilled Cheese","Hot Sandwiches",3.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (10, "Grilled Ham & Cheese","Hot Sandwiches",4.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (11, "BLT","Hot Sandwiches",3.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (12, "Turkey Pretzel Melt","Hot Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (13, "Hamburger Sub","Hot Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (14, "Cheeseburger Sub","Hot Sandwiches",4.50,NULL,NULL,1);


INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (15, "Hamburger","Burgers",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (16, "Cheeseburger","Burgers",5.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (17, "Bacon Cheddar Burger","Burgers",6.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (18, "Beyond Burger","Burgers",6.00,NULL,NULL,1);

INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (19, "Beef & Cheese","Steak Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (20, "Chicken Cheese","Steak Sandwiches",5.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (21, "Chicken Ranch","Steak Sandwiches",5.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (22, "Buffalo Beef","Steak Sandwiches",5.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (23, "Buffalo Chicken","Steak Sandwiches",5.25,NULL,NULL,1);

INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (24, "Crispy Chicken","Chicken Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (25, "Buffalo Chicken","Chicken Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (26, "Chicken Parmesan","Chicken Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (27, "Grilled Chicken","Chicken Sandwiches",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (28, "Chicken Strips","Chicken Sandwiches",5.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (29, "Buffalo Chicken Strips","Chicken Sandwiches",5.50,NULL,NULL,1);

INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (30, "Egg Jay","Breakfast",3.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (31, "Egg Jay on Bagel","Breakfast",4.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (32, "Hash Brown","Breakfast",1.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (33, "Jays Omelet","Breakfast",4.25,NULL,NULL,1);


INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (34, "Banana Pita Pocket","Healthy Options",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (35, "Chicken Caesar Pita Pocket","Healthy Options",5.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (36, "Tuna Bowl","Healthy Options",6.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (37, "Chicken Bowl","Healthy Options",6.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (38, "Chicken Bacon Ranch Bowl","Healthy Options",6.50,NULL,NULL,1);

INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (39, "Cheese Pizza","Pizza",4.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (40, "Pepperoni Pizza","Pizza",5.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (41, "Cheese Flat Bread","Pizza",5.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (42, "South Western Flatbread","Pizza",5.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (43, "Buffalo Chicken Ranch Flatbread","Pizza",5.75,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (44, "BBQ Chicken Flatbread","Pizza",5.50,NULL,NULL,1);


INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (45, "Italian Chicken Wrap","Quesadillas",5.25,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (46, "Cheese Quesadilla","Quesadillas",4.50,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (47, "Chicken Quesadilla","Quesadillas",6.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (48, "Crispy Chicken Quesadilla","Quesadillas",6.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (49, "Buffalo Chicken Quesadilla","Quesadillas",5.00,NULL,NULL,1);
INSERT INTO menu (itemID,itemName,category,price,description,calories,isAvailable)
            values (50, "Chicken Fajita Quesadilla","Quesadillas",6.25,NULL,NULL,1);



    

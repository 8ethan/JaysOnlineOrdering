# JaysOnlineOrdering
Website for Etown Jays Nest online ordering.

Introduction:
This website is desgined to be a place where students or even staff of Elizabethtown College can access and place an order online to be fulfilled at the Etown Jay's Nest for pickup. The current method for online ordering takes way too many steps to complete and is not very good looking. Our goal is to make the ordering process much more convenient, efficient, and better looking.

Importing the SQL database:
The setup.sql file located in the sql folder can be run on a sql server to create the database and tables required for our project.

Local website hosting:
Since we had to configure our database information to work on google cloud, the configurations for local hosting will not work. In order to modify the code to work on a local computer the user must go to the functions/config file and input the information to connect to their own local SQL server. The user will also have to go into functions/database_functions and uncomment line 7, and comment out line 8. After the databases are imported and these configurations are changed, the user can now host the website locally.

API documentation:

https://jays-nest-online-ordering.ue.r.appspot.com/api.php?search=
Request Type: GET
Description: Returns foods from the database with the name containing the search term. and empty search string will return all items.

https://jays-nest-online-ordering.ue.r.appspot.com/api.php?item=
Request Type: GET
Description: Returns a singular food information from the database when given the itemID.

https://jays-nest-online-ordering.ue.r.appspot.com/menuEdit.php
Request Type: POST
Description: Takes in 9 different paramters. The base paramters are itemName, category, price, desc, calories, isAvailable, and dir. If just these paramters are provided then a new item will be created in the database with the given information. If an editID paramater is additionally supplied, then the post will try to edit an existing item using the other given paramters. If just deleteID is provided, then the food with the given ID will be deleted from the database.

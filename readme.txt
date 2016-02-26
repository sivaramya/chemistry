#Organic Conversion
<h4>Scope and Purpose of the Project </h4>

We are developing a project for organic conversion. 
 Its mostly helpful for the advanced level students.
 It will be like putting the organic components as a reactant and our expected product. 
Here we can  click on the components for choosing the reactant and product. 
Here we do the project Only for aliphatic components. 
we used php , mysql, and CSS. 
We are contributing this project for Mozilla Science Lab. 

<h4> Purpose Overview the project </h4>

In our project,  we choose the reactant and product and submit . 
then  the conversion is shown in the plane.  
If we want to add some components with  steps, 
 then the conversion is added in the database 
And also shown in the component chart in the plane.

<h4>Introduction the Structure of Interface </h4>

This application consist organic components, 
buttons (add, delete, ok  and Help). 
Here the organic reactants and products are shown in the left and right of the view plane. 
If you need some information about this conversions, 
that theoretical parts are shown in the Help page, 
there is an icon with question mark. 
And if you need to add the extra organic components, 
there is an option with “+” sign. 

<h4>How to insert, add and delete the organic components in the Experimental Area</h4>

There are many organic components are shown in the left and right side of the view plane, 
reactant and product text boxes, submit button also visible in the center. 
You should click one of  the organic component as an reactant or product. 
Then the reactant and product are inserted.  

 
 If you want to add some organic components in the chart,
 click the add button. 
after this part, a page visible for  adding part. 
Here we put the reactant ,product and  steps. 
Steps option we should give how many steps we need to get the product. 
If you want to delete a conversion from the database,
 click the delete button. 
after submitting part there is a page, 
its for submit the conversion. 
After this part  conversion is stored in the database. 
So we can see the reactant and product in the home page what we add in the add page earlier.


<h3>Developer's Guide </h3>

<h4>Project Directory and Structure </h4>

This project contains images and files. 
The structure of the contents of this folder is outlined below.



1)  a.png, add.png, help.png, url.png
These are the images used by the index.php file, ans.php, check.php
2)  js/
This contains the JavaScript files used.
	Chemis.js-This file use to have a code to display a message that when we move the cursor to a particular place .
3) input.php
This contain all the input organic component which is get from the database that we input.
4) output.php
This contains all the output organic component which is get from the database that we input.
5)config.php
This is the php file which is used for connect to the database
6)organic.sql
This contain all the organic component, and conversion of the organic component
7)Ans.php
This is a home page, this is connect with config.php file, check.php, input.php, output.php file,
Chemis.js file 
8)check.php
Which include the organic.sql file , it will show the conversions for the reactant and product that we given in the file ans.php 
9)add.php
This is to add extra organic component and to delete organic components from the database. This contain chemis.js file.
10) help.php
This file help to get a rough idea about organic chemistry, this include chemis.js file
11)index.php
This is the home page of our project  and it uses the concept of html framework, this page include our input.php, output.php, ans.php file
12)style.css
Style sheet for this project which is used for the design. 



Methods
Methods used in this project is,
•	Post method in add.php for after add the item.
•	Post method used in ans.php that the action is go to check.php
•	Post method used in input.php, output.php that the action is go to ans.php






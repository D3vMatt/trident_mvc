add a home.php view with tail windw/bootstrap

create views/layouts/main.php

renderView inside layout/content

create layoutContent method

pass the roote path to the application constructor
save root path as static property of application


get the layout as a string & replace {{content}} with our view

create a renderOnlyView function that will return the required view as a string
drop database hackathron;
create database hackathron;
use hackathron;
create Table event1(name varchar(50), location varchar(50), time varchar(50));
create Table event2(name varchar(50), location varchar(50), time varchar(50));
create Table event3(name varchar(50), location varchar(50), time varchar(50));
create Table event4(name varchar(50), location varchar(50), time varchar(50));
create Table event5(name varchar(50), location varchar(50), time varchar(50));
create Table event6(name varchar(50), location varchar(50), time varchar(50));
create Table event7(name varchar(50), location varchar(50), time varchar(50));
create Table event8(name varchar(50), location varchar(50), time varchar(50));
create Table event9(name varchar(50), location varchar(50), time varchar(50));
create Table event10(name varchar(50), location varchar(50), time varchar(50));
create Table event11(name varchar(50), location varchar(50), time varchar(50));
create Table event12(name varchar(50), location varchar(50), time varchar(50));
create Table event13(name varchar(50), location varchar(50), time varchar(50));
create Table event14(name varchar(50), location varchar(50), time varchar(50));
create Table event15(name varchar(50), location varchar(50), time varchar(50));
create Table event16(name varchar(50), location varchar(50), time varchar(50));
create Table event17(name varchar(50), location varchar(50), time varchar(50));
create Table event18(name varchar(50), location varchar(50), time varchar(50));
create Table event19(name varchar(50), location varchar(50), time varchar(50));
create Table event20(name varchar(50), location varchar(50), time varchar(50));
create Table event21(name varchar(50), location varchar(50), time varchar(50));
create Table event22(name varchar(50), location varchar(50), time varchar(50));
create Table event23(name varchar(50), location varchar(50), time varchar(50));
create Table event24(name varchar(50), location varchar(50), time varchar(50));
create Table event25(name varchar(50), location varchar(50), time varchar(50));
create Table event26(name varchar(50), location varchar(50), time varchar(50));
create Table event27(name varchar(50), location varchar(50), time varchar(50));
create Table event28(name varchar(50), location varchar(50), time varchar(50));
create Table event29(name varchar(50), location varchar(50), time varchar(50));
create Table event30(name varchar(50), location varchar(50), time varchar(50));

create Table moviesouth(name varchar(50), location varchar(50));
create Table movienorth(name varchar(50), location varchar(50));
create Table movieeast(name varchar(50), location varchar(50));
create Table moviewest(name varchar(50), location varchar(50));
create Table foodsouth(name varchar(50), location varchar(50), phone varchar(50));
create Table foodnorth(name varchar(50), location varchar(50), phone varchar(50));
create Table foodwest(name varchar(50), location varchar(50), phone varchar(50));
create Table foodeast(name varchar(50), location varchar(50), phone varchar(50));
create Table landmarknorth(name varchar(50), price varchar(50), phone varchar(50));
create Table landmarksouth(name varchar(50), price varchar(50), phone varchar(50));
create Table landmarkeast(name varchar(50), price varchar(50), phone varchar(50));
create Table landmarkwest(name varchar(50), price varchar(50), phone varchar(50));
load data local infile './data/event1.csv' into table event1 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event2.csv' into table event2 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event3.csv' into table event3 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event4.csv' into table event4 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event5.csv' into table event5 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event6.csv' into table event6 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event7.csv' into table event7 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event8.csv' into table event8 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event9.csv' into table event9 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event10.csv' into table event10 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event11.csv' into table event11 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event12.csv' into table event12 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event13.csv' into table event13 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event14.csv' into table event14 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event15.csv' into table event15 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event16.csv' into table event16 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event17.csv' into table event17 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event18.csv' into table event18 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event19.csv' into table event19 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event20.csv' into table event20 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event21.csv' into table event21 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event22.csv' into table event22 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event23.csv' into table event23 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event24.csv' into table event24 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event25.csv' into table event25 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event26.csv' into table event26 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event27.csv' into table event27 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event28.csv' into table event28 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event29.csv' into table event29 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/event30.csv' into table event30 fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, time);
load data local infile './data/movieSouth.csv' into table moviesouth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location);
load data local infile './data/movieNorth.csv' into table movienorth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location);
load data local infile './data/movieEast.csv' into table movieeast fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location);
load data local infile './data/movieWest.csv' into table moviewest fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location);
load data local infile './data/foodSouth.csv' into table foodsouth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, phone);
load data local infile './data/foodNorth.csv' into table foodnorth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, phone);
load data local infile './data/foodWest.csv' into table foodwest fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, phone);
load data local infile './data/foodEast.csv' into table foodeast fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, location, phone);
load data local infile './data/travelNorth.csv' into table landmarknorth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, price, phone);
load data local infile './data/travelSouth.csv' into table landmarksouth fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, price, phone);
load data local infile './data/travelWest.csv' into table landmarkwest fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, price, phone);
load data local infile './data/travelEast.csv' into table landmarkeast fields terminated by ',' enclosed by '"' lines terminated by '\n' (name, price, phone);








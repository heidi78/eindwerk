Hallo Tom,

Om mijn eindwerk te downloaden volg je deze puntjes.

- klik op clone or download en kopieer de link
- maak in php myadmin een nieuwe database aan met gekozen naam
- ga naar search en typ in prompt
- typ cd\wamp64\www
- git clone delink naam
- cd gekozennaam
- composer install
- ga in je gemaakt project. save as de .env.example map en geef als nieuwe naam .env pas db_database aan met de aangemaakte database naam,   db_user is root en password niks
- terug naar prompt en php artisan migrate
- php artisan db:seed
- php artisan key:generate
- in verkenner .git map wissen in je project

Groetjes
Heidi

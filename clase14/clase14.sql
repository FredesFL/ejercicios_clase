#1
SELECT m.title as title, g.name as name
FROM genres AS g
JOIN movies AS m ON g.id=m.genre_id
ORDER BY name ASC;

#2 
SELECT m.title, g.name, a.first_name, a.last_name
FROM actor_movie as am
JOIN movies as m on m.id=am.movie_id
JOIN genres as g on m.genre_id=g.id
JOIN actors as a on a.id=am.actor_id;

#3
SELECT first_name, title
FROM actor_movie as am
JOIN movies as m ON m.id=am.movie_id
JOIN actors as a ON a.id=am.actor_id
ORDER BY first_name ASC;

#4
SELECT title, name
FROM movies as m
INNER JOIN genres as g ON g.id=m.genre_id
ORDER BY title, name ASC;

#5




  

 
# Web Service Notes
Deal with json or xml
header('Content-Type: text/xml');
header('Content-Type: application/json');

output data into json
json_encode($data);

#reading
help with send json data to PHP and decoding into array
https://stackoverflow.com/questions/23750661/send-json-object-from-javascript-to-php/23750707#23750707

#read
ngSanitize to santize html entities/tags. i.e <br/>, <a>
http://stackoverflow.com/questions/9381926/insert-html-into-view-using-angularjs

#save and cancel edit form
http://jsfiddle.net/timriley/GVCP2/

#version .8 5/5/2015
Working on:
fix api url, be careful with file naming (api vs API). On some server it is case sensitive.
api/v1/...

test on heroku, may need a MySQL on different server other than heroku
heroku does not support SQLite

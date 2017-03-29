/**
 * Created by marvin_blabla on 24-03-17.
 */

var mysql = require("mysql");
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var fetch = require('node-fetch');
var path = require('path');
var thisDir = path.dirname(require.main.filename);

http.listen(4000, function(){
    console.log('listening on *:4000');
});


var con = mysql.createConnection({
    host: "127.0.0.1",
    port: "8889",
    user: "root",
    password: "root",
    database: "parking-soon"
});

try {
    fetch('http://127.0.0.1:8888/CLE03/map', {
        headers: {
            'Accept': 'application/json',
            "Content-Type": "application/x-www-form-urlencoded"
        },
        method: 'GET'
    })
        .then(function(res) {
            return res.json()
        })
        .then(function(data) {
            console.log(data);
        })
} catch(e) {
    console.log(e);
}

io.on('connection', function (socket) {

    // setInterval(function(){
    //     con.query('SELECT * FROM places',function(err,rows){
    //         if(err) throw err;
    //         console.log('Data received from Db:\n');
    //         console.log(rows);
    //         socket.emit('refresh feed', rows);
    //     });
    // }, 5000);
});
var express = require('express');
var app = express();

var path = require('path');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

app.use( express.static( path.join( './public' ) ) );
app.use( cookieParser() );
app.use( bodyParser.json() );
app.use( bodyParser.urlencoded({ extended: false }) );

app.use(function(err, req, res, next) {

    if ( err ) {

        res.status(500).send('An error occured!', err, req, res);

    }

});

app.set('port', 3000);

exports.app = app;
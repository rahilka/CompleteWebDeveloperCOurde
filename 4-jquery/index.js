var app_config = require('./config/app_config');

var server = require('http').createServer(app_config.app);

server.listen(3002, function (data) {
    console.log('Server listens on port: 3002');
});


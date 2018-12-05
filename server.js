//var app = require('express')();
var server = require('http').createServer();
var io = require('socket.io')(server, {
    origin: 'http://127.0.0.1:8890'
});
var redis = require('redis');

server.listen(8890);
io.on('connection', function (socket) {

  var redisClient = redis.createClient();
  redisClient.subscribe('message');

  redisClient.on("message", function(channel, message) {
    socket.emit(channel, message);
  });

  socket.on('disconnect', function() {
    redisClient.quit();
  });

});

//initialize express setVParticipanteEventoTreinador
var express = require("express");
var cors = require("cors");
var app = express();

//creat http server from express instance
var http = require("http").createServer(app);

//include socket IO
var socketIO = require("socket.io")(http,{
  cors:{
    origin: '*'
  }
});

app.use(function(req, res, next){
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With,Content-Type, Accept');
  next();
})

//start the HTTP server at port 3000
http.listen(process.env.PORT || 3000, function (){
  console.log("Server started running....");

  //an array to save all connected users id_orgao_social
  var users =[];

  //called when the io() is called from client
  socketIO.on("connection", function(socket){
    console.log(`Socket conectado: ${socket.id}`);
    //called manually from client to connect the user with Server
    socket.on("connected", function(id){
      users[id] = socket.id;
      console.log(id);
    });

    //when a new notification is received
    socket.on("newNotification", function(userId){
      //send notification to the selected users
      socketIO.to(users[userId]).emit("newNotification", userId);
    });

    socket.on("newNotificationVailda", function(userId){
      //send notification to the selected users
      socketIO.to(users[userId]).emit("newNotificationVailda", userId);
    });

  });
});

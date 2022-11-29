var socket = require('socket.io');
var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = socket.listen('server');

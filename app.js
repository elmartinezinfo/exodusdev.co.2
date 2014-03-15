var express     = require("express");
var app         = express();
var nodemailer  = require('nodemailer');
var MemoryStore = require('connect').session.MemoryStore;
var dbPath      = 'mongodb://localhost/';
var mongoose    = require('mongoose');
var config      = { mail:    require('./config/mail')};
var models      = { Account: require('./models/Account')(config, mongoose, nodemailer)};


app.listen(8080);
console.log("SocialNet is listening to port 8080.");

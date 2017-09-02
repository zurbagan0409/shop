//const express = require('express')
var express = require('express');
var router = express.Router();

//const app = express()
const ctrls = require('./controllers')
//var session = require('express-session');
router.use(express.static(__dirname + '/dest'));
router.use(express.static(__dirname + '/img'));
router.use(express.static(__dirname + '/dest/images'));

// router.use(express.cookieDecoder());
// app.use(express.session());

//app.engine('ejs', require('ejs-locals'));
//app.use(session(
//    {
//    secret: "eruwehwergjerpgoehrgiu" ,
//    cookie:{
//        expires: 30 * 60 * 1000
//    } 
//}));


//rou.set('view engine', 'ejs');

router.get('/', ctrls.categories);

router.post('/', ctrls.tabb_post);






//app.listen(8080, function(){
  //  console.log('listening to port 8080...')
    
//})


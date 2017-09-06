<<<<<<< HEAD


const express = require('express')
const app = express()
const ctrls = require('./controllers')
const bodyParser = require('body-parser')



app.use(express.static(__dirname + '/dest'));
app.use(express.static(__dirname + '/img'));
app.use(express.static(__dirname + '/dest/images'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
extended: true
}));

app.set('view engine', 'ejs');


app.get('/build', ctrls.categories);


app.get('/category', ctrls.products );
app.post('/category', ctrls.products )


app.listen(3009, function(){
    console.log('listening to port 3009...')
    
})

=======
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

>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741

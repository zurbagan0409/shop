

const express = require('express')
const app = express()
const ctrls = require('./controllers')
var session = require('express-session');
app.use(express.static(__dirname + '/dest'));
app.use(express.static(__dirname + '/img'));
app.use(express.static(__dirname + '/dest/images'));

// app.use(express.cookieDecoder());
// app.use(express.session());

app.engine('ejs', require('ejs-locals'));
app.use(session(
    {
    secret: "eruwehwergjerpgoehrgiu" ,
    cookie:{
        expires: 30 * 60 * 1000
    } 
}));


app.set('view engine', 'ejs');

app.get('/build', ctrls.categories);

app.post('/build', ctrls.tabb_post);






app.listen(8080, function(){
    console.log('listening to port 8080...')
    
})




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


app.listen(8080, function(){
    console.log('listening to port 8080...')
    
})


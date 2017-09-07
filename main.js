

const express = require('express')
const router = express()
const ctrls = require('./controllers')
const bodyParser = require('body-parser')



router.use(express.static(__dirname + '/dest'));
router.use(express.static(__dirname + '/img'));
router.use(express.static(__dirname + '/dest/images'));
router.use(bodyParser.json());
router.use(bodyParser.urlencoded({
extended: true
}));

//router.set('view engine', 'ejs');


router.get('/', ctrls.categories);


router.get('/category', ctrls.categories );
router.get('/product', ctrls.products )

/*
app.listen(8080, function(){
    console.log('listening to port 8080...')
    
})
*/
exports router;

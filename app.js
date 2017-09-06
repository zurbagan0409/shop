var express = require('express');
var Sequelize = require('sequelize');
<<<<<<< HEAD

// var connect = require('connect')
// for express, just call it with 'require('express-session').Store' 
=======
var db = require('./models/dbs.js');
var database = new db();
database.con.sync();

// var connect = require('connect')
    // for express, just call it with 'require('express-session').Store' 
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
// var SequelizeStore = require('connect-session-sequelize')(connect.session.Store);
var cookieParser = require('cookie-parser');
var session = require('express-session');

// initalize sequelize with session store 
var SequelizeStore = require('connect-session-sequelize')(session.Store);

// create database, ensure mysql ('sqlite3') in your package.json 
<<<<<<< HEAD
var connection = new Sequelize(
    'warehouse',
    'root',
    'Mandriva2012', {
        'dialect': 'mysql' //, 
            //   "storage": "./session.sqlite"
    });
require('events').EventEmitter.defaultMaxListeners = 20;
=======


>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
// configure express 
var app = express();
app.use(cookieParser());

app.use(session({
<<<<<<< HEAD
    secret: 'keyboard Alasha2017',
    resave: true,
    saveUninitialized: true,
    store: new SequelizeStore({
            db: connection
        }) //,
        //  proxy: true // if you do SSL outside of node. 
=======
  secret: 'keyboard Alasha2017',
    resave: true,
    saveUninitialized: true,
  store: new SequelizeStore({
    db: database.con
  }) //,
//  proxy: true // if you do SSL outside of node. 
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
}));
// continue as normal  
// initalize sequelize with session store 
// var SequelizeStore = require('connect-session-sequelize')(session.Store);

var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var bodyParser = require('body-parser');
<<<<<<< HEAD
var bcrypt = require('bcrypt');
var index = require('./routes/index');
var users = require('./routes/users');
// var birds = require('./routes/birds');
=======
 var bcrypt = require('bcrypt');
var index = require('./routes/index');
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
var register = require('./routes/register');
var profile = require('./routes/profile');
var users_list = require('./routes/users_list');
var user_details = require('./routes/user_details');
var orders_list = require('./routes/orders_list');
var order_details = require('./routes/order_details');
var create_order = require('./routes/create_order');
var login = require('./routes/login');
var logout = require('./routes/logout');
<<<<<<< HEAD
=======
//var main = require('./main');
const ctrls = require('./controllers')
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
<<<<<<< HEAD

=======
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
// uncomment after placing your favicon in /public
app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use(express.static(path.join(__dirname, 'files')));
app.use(express.static(path.join(__dirname, 'upload')));
<<<<<<< HEAD

app.use('/', index);
// app.use('/users', users);
// app.use('/birds', birds);
=======
app.use(express.static(__dirname + '/dest'));
app.use(express.static(__dirname + '/img'));
app.use(express.static(__dirname + '/dest/images'));


app.use('/', index);
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
app.use('/register', register);
app.use('/profile', profile);
app.use('/users_list', users_list);
app.use('/user_details', user_details);
app.use('/order_details', order_details);
app.use('/orders_list', orders_list);
app.use('/create_order', create_order);
app.use('/login', login);
app.use('/logout', logout);
<<<<<<< HEAD

// catch 404 and forward to error handler
app.use(function(req, res, next) {
    var err = new Error('Not Found');
    err.status = 404;
    next(err);
=======
app.get('/build', ctrls.categories);
app.post('/build', ctrls.tabb_post);
//app.use('/main', main); // de Khan
// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
});

// error handler
app.use(function(err, req, res, next) {
<<<<<<< HEAD
    // set locals, only providing error in development
    res.locals.message = err.message;
    res.locals.error = req.app.get('env') === 'development' ? err : {};

    // render the error page
    res.status(err.status || 500);
    res.render('error');
});

app.listen(3000, function() {
    console.log('Example app listening on port 3000!');
});

module.exports = app;
=======
  // set locals, only providing error in development
  res.locals.message = err.message;
  //res.locals.error = req.app.get('env') === 'development' ? err : {};
  res.locals.error = {};
  console.log(err.message);
  console.log(  console.error(err.stack));
  res.sendStatus(500).send('Something broke!');

  // render the error page
  res.status(err.status || 500);
  res.render('error',{error:err.message});
});

app.listen(3000, function () {
   console.log('Example app listening on port 3000!');
 });

module.exports = app;
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741

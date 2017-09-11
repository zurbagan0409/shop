const config = require('../config/db_wh')
var Sequelize = require('sequelize');
var mysql = require('mysql2');
// var bcrypt = require('bcrypt');
var session = require('express-session');
var async = require('async');
const connection = new Sequelize(`${config.engine}://${config.username}:${config.password}@${config.host}/${config.database}`)

var SequelizeStore = require('connect-session-sequelize')(session.Store);
class DBS {		// database with Sequelize
   constructor (){
       this._host = '{config.host}';
       this._dbusername = '${config.username}';
       this._dbpassword = '${config.password}';
       this._dbname = '${config.database}';
       this._engine = '${config.engine}';
       this.con = connection;
   this.Clients = connection.define('clients', {
	id: {
             type: Sequelize.INTEGER,
             primaryKey: true,
             autoIncrement: false
  	},
	name:Sequelize.STRING,
	title: Sequelize.STRING,
	description: Sequelize.STRING,
	address: Sequelize.STRING,
	bin_iin: Sequelize.STRING,
	bank_data: Sequelize.STRING,
 	status:Sequelize.INTEGER,
	rating:Sequelize.INTEGER
	},{timestamps: false});
	this.Users = connection.define('users', {
	id: {
    	     type: Sequelize.INTEGER,
             primaryKey: true,
             autoIncrement: true
  	},
	lastname:Sequelize.STRING,
	firstname: Sequelize.STRING,
	email: Sequelize.STRING,
	password: Sequelize.STRING,
 	client_id:Sequelize.INTEGER
    },{timestamps: false});
	this.Orders = connection.define('orders', {
        id: {
                 type: Sequelize.INTEGER,
                 primaryKey: true,
                 autoIncrement: true
          },
        document_no:Sequelize.STRING,
        document_date: Sequelize.DATE,
        order_status_id: Sequelize.INTEGER,
        order_types_id: Sequelize.INTEGER,
        contragent_id: Sequelize.INTEGER,
        client_id: Sequelize.INTEGER,
        user_id: Sequelize.INTEGER
    
    },{timestamps: false});
	this.Order_types = connection.define('order_types', {
        id: {
                 type: Sequelize.INTEGER,
                 primaryKey: true,
                 autoIncrement: true
          },
        name:Sequelize.STRING
        
    },{timestamps: false});
        // this.Clients.hasMany(this.Users); // Will add client_id to user
	this.Session = connection.define('Session', {
  sid: {
    type: Sequelize.STRING,
    primaryKey: true
  },
  userId: Sequelize.STRING,
  expires: Sequelize.DATE,
  data: Sequelize.STRING(21845)
},{timestamps: false});
var extendDefaultFields= function(defaults, session){
  return {
    data: defaults.data,
    expires: defaults.expires,
    userId: session.userId
  };
}
 //var store = new SessionStore({
  this.store = new SequelizeStore({
  db: connection,
  table: 'Session',
  extendDefaultFields: extendDefaultFields
});

   } // constructor
 
}
module.exports = DBS;
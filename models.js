const config = require('./config/db')

const Sequelize = require('sequelize')
const sqlize = new Sequelize(`${config.engine}://${config.username}:${config.password}@${config.host}/${config.database}`)

var exports = module.exports ={}
exports.Products = sqlize.define('products' ,{
    name: Sequelize.STRING,
    width: Sequelize.FLOAT,
    height: Sequelize.FLOAT,
    lenght: Sequelize.FLOAT,
    volume: Sequelize.FLOAT,
    weight: Sequelize.FLOAT,
    qty: Sequelize.INTEGER,
    price: Sequelize.INTEGER,
    category_id: Sequelize.INTEGER,
},{timestamps: false})

exports.Category = sqlize.define('category' ,{
    name: Sequelize.STRING,
   
},{timestamps: false})


exports.Subcat = sqlize.define('subcat' ,{
    category_id: Sequelize.INTEGER,
    subcat_id: Sequelize.INTEGER,
   
},{timestamps: false})

// exports.aaaa=sqlize.query('SELECT * FROM subcats WHERE category_id = 9 ',
// { replacements: { status: 'active' }, type: sqlize.QueryTypes.SELECT }
// )
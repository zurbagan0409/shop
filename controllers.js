const models= require('./models')
exports = module.exports = {}
var routes = {};
var tabb = 5;
var session = require('express-session');
 session.tabb=5;

exports.tabb_get = function(req, res) {
   
    if(req.session.tabb){  
          
        res.redirect('./build');
    }else{
        res.render('tabb');}
};
exports.tabb_post = function(req, res) {
    
     if(req.session.tabb){
         res.redirect  
           ('./build');
     }else{};
   
 };


    
exports.categories = function(req, res) {
    models.Category.findAll().then(function(category) { 
        models.Products.findAll().then(function(products) {
            models.Subcat.findAll().then(function(subcat) {
                var tabb = req.query.cat
   	    res.render('./build', { 'category': category,'products': products, 'subcat': subcat, 'tabb':tabb})          
        });
    });
    });
   }



    // .catch(function(error){
    //     res.status(500).send({
    //         error: 'Oooops'
    //     })
    // })




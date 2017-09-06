const models= require('./models')
<<<<<<< HEAD

exports = module.exports = {}



=======
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


    
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
exports.categories = function(req, res) {
    models.Category.findAll().then(function(category) { 
        models.Products.findAll().then(function(products) {
            models.Subcat.findAll().then(function(subcat) {
<<<<<<< HEAD
                
                var tabb = req.query.cat
               
=======
                var tabb = req.query.cat
>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741
   	    res.render('./build', { 'category': category,'products': products, 'subcat': subcat, 'tabb':tabb})          
        });
    });
    });
   }
<<<<<<< HEAD
   
   exports.products = function(req, res) {
       
    models.Category.findAll().then(function(category) { 
        var sabb = req.query.prod
        var priceup =req.body.priceup
        var pricedown=req.body.pricedown  
         console.log(priceup)
         console.log(pricedown)
        if((pricedown!=null)&&(priceup!=null)){
        models.Products.findAll({
            where:{
                price:{
                    between:[pricedown,priceup]
                }

            }
        }         
        ).then(function(products) {
            models.Subcat.findAll().then(function(subcat) {             
               
   	    res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
       console.log(priceup, pricedown)
    });
    });
}else{
    models.Products.findAll().then(function(products) {
        models.Subcat.findAll().then(function(subcat) {           
                  res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
   
});
});


}



    });
   }

    
=======

>>>>>>> ee0c3e1747b651db2b8fe13d3db6e5ce95ea3741


    // .catch(function(error){
    //     res.status(500).send({
    //         error: 'Oooops'
    //     })
    // })




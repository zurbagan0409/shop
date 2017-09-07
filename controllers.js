const models= require('./models')

exports = module.exports = {}

exports.categories = function(req, res) {

    var tabb = req.query.cat   
    models.Subcat.findAll().then(function(subcat) {

        models.Category.findAll().then(function(category) { 

            models.Products.findAll().then(function(products) {
           
                res.render('./build', { 'category': category,'products': products, 'subcat': subcat,'tabb':tabb})          
            });
        });
    });
}

exports.products = function(req, res) {
       
    models.Category.findAll().then(function(category) { 

        var sabb = req.query.prod
        var priceup =req.body.priceup
        var pricedown=req.body.pricedown  
        var filtr=req.query.filtr        
        if(filtr!=null){

            if((pricedown!=null)&&(priceup!=null)){

                models.Products.findAll({

                    where:{

                        price:{

                            between:[pricedown,priceup]
                        },
                        category_id:filtr
                    }
                }).then(function(products) {

                    models.Subcat.findAll().then(function(subcat) { 

                        res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
                   });
                });
            }else{

                models.Products.findAll({

                    where:{

                        category_id:filtr       
                    }
                }).then(function(products) {

                    models.Subcat.findAll().then(function(subcat) { 

                          res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
                    });
                });
        }}else{

            if((pricedown!=null)&&(priceup!=null)){

                models.Products.findAll({

                    where:{

                        price:{

                            between:[pricedown,priceup]
                        }
                    }
                }).then(function(products) {

                    models.Subcat.findAll().then(function(subcat) {

                        res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
                    });
                });
            }else{

                models.Products.findAll().then(function(products) {

                    models.Subcat.findAll().then(function(subcat) {  

                        res.render('./category', { 'category': category,'products': products, 'subcat': subcat, 'sabb':sabb})          
           
                    });
                });
            }
        }
    });
}

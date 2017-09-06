const models= require('./models')

exports = module.exports = {}



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

    


    // .catch(function(error){
    //     res.status(500).send({
    //         error: 'Oooops'
    //     })
    // })




var express = require('express');
var router = express.Router();
var Sequelize = require('sequelize');
var db = require('../models/dbs.js');
var path = require('path');
var bodyParser = require('body-parser');
var multer  = require('multer')
var upload = multer({ dest: 'uploads/' })

var database = new db();
var sess;
database.con.sync();
//var path = require('path'),
fs = require('fs');
// ...

router.get('/', function (req, res){
  //  res.send('test 234');
   res.render('upload_product_picture',{});
});

router.post('/', function (req, res) {
    upload.single('c:\image.png');
 //    console.log(req.body.file);
//var tempPath = req.files.file.path,
/*
var tempPath = req.body.file;
var targetPath = path.resolve('./uploads/image.png');
if (path.extname(req.body.file).toLowerCase() === '.png') {
    fs.rename(tempPath, targetPath, function(err) {
        if (err) throw err;
        console.log("Upload completed!");
    });
} else {
    fs.unlink(tempPath, function () {
        if (err) throw err;
        console.error("Only .png files are allowed!");
    });
}
*/
// ...
});
module.exports = router;
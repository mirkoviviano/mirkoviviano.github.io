var express = require('express');
var router = express.Router();

router.get('/',function(req,resp,next){
    resp.render('about.html');
});

module.exports = router;
var express = require('express');
var router = express.Router();

router.get('/:id', function(req,resp){
    resp.render('project.html', {
    	project : req.project

    });
    
    console.log(req.project)
});

module.exports = router;
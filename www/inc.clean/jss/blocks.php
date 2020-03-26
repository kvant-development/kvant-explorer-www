<?php require_once "init.php"; ?>

var stata = new Array();
//var api_addr = "https://api-test.kvant.io/api/v1/testnet/";
    var x = '';
//var api_addr = "https://api-test.kvant.io/api/v1/testnet/";

function js_log(txt)
{
console.log('DEBUG: '+txt);
}

//------------------------
$(document).ready(function() 
{

setInterval(getstat, 1000);
getstat();
})
//-----------------------------


    function getstat() 
    {
    var page_limit = 20;
    url = api_addr+'block/page/'+block_page+'/'+page_limit;
//    url = api_addr+'block/page/'+block_page;

    var res = '';
    var p = '';
    var v2 = '';
    $.get(url, function(response) 
    {
        if (response) 
        {
//	response2 = JSON.parse(response);
	
//        JSON.parse(response2["result"], function(k, v) 
        JSON.parse(response, function(k, v) 
	{

	    switch(k)
	    {
		default:
	    p = 'p_'+k;
	    stata[p] = v;
	    //console.log(p+' '+v);
	    v += '';
	    if(document.getElementById(p)!==null)
	    {
//	    x 
	    x = document.getElementById(p);
//	    js_log("---------------------");
	    v2 = x.innerHTML;
	    if(v.localeCompare(v2))
	    {
//	    js_log("============= ======="+v);
//	    js_log($('#'+p).html);
//	    $('#'+p).html(v);
//	    alert(v);
	    x.innerHTML = v;
	    }
	    }
	    }
	});
	compare_flag = 0;
        }
    });
    }

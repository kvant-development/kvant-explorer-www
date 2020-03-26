<?php include "init.php"; ?>

stata = new Array();
//api_addr = "https://api-test.kvant.io/api/v1/testnet/";
    var x = '';
//var api_addr = "https://api-test.kvant.io/api/v1/testnet/";


//------------------------
$(document).ready(function() 
{

//setInterval(getstattxid, 1000);
getstattxid();
})
//-----------------------------


    function getstattxid() 
    {
    url = api_addr+'tx/id/'+tx_id;
    console.log(url);

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
	    console.log(p+' '+v);
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

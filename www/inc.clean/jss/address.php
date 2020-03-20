
var table_length = '';
var compare_flag = 1;
var table_nn2 = '';
var stata = new Array();
var api_addr = "https://api-test.kvant.io/api/v1/testnet/";
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

get_tx_by_addr();
setInterval(compare_tbl_len,1000);
})
//-----------------------------

    function getstat() 
    {
    url = api_addr+'address/'+wallet_addr+"/stat";

    var p = '';
    var v2 = '';
    $.get(url, function(response) 
    {
        if (response) 
        {
        JSON.parse(response, function(k, v) 
	{

	    switch(k)
	    {
		default:
	    p = 'p_'+k;
	    stata[p] = v;
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
//---------------------------------
    function get_tx_by_addr() 
    {
    var res = '';
    url = api_addr+'address/'+wallet_addr+"/txs?wallet_table";

    var p = '';
    var v2 = '';
    var tbl = '';
    $.get(url, function(response) 
    {
        if (response) 
        {
//console.log(response);
	res =JSON.parse(response);
console.log(res);
	if(res['result']['length'])
	{
	table_length = res['result']['length'];
	table_nn2 = res['result']['nn2']*1;
	tbl = res['result']['tbl']['wallet_table'];
	x = document.getElementById('wallet_table');
	x.innerHTML = tbl;
	}
        JSON.parse(response, function(k, v) 
	{
/*
	    switch(k)
	    {
		default:
	    p = 'p_'+k;
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
*/
	});
        }
    });
    }
//----------------------
function compare_tbl_len()
{

    if(compare_flag)return false;
//    var l = stata["p_txs"];
    var l = stata["p_nn2"];
    if(l > 0 &&l != table_nn2)
    {
	console.log('compare_tbl_len: "'+l+'" "'+table_nn2+'"');
	get_tx_by_addr();
        compare_flag = 1;
	setTimeout(clean_compare_flag,1000);
    }
}
// ---------------------
function clean_compare_flag()
{
        compare_flag = 0;
}
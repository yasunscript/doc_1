<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Modbus Web Service</title>
<style>
h1 {
    border-bottom: 3px solid #cc9900;
    color: #996600;
    font-size: 30px;
}
table, th , td  {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd)    {
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
<script src="js/jquery-1.7.1.min.js"></script>
</head>

<body>
<h1>Modbus Register</h1>
<table>
  <tr><th>Register Name</th><th>Data Value</td></tr>
  <tr><td>Hour</td><td id="Reg1"></td></tr>
  <tr><td>Minute</td><td id="Reg2"></td></tr>
  <tr><td>Second</td><td id="Reg3"></td></tr>
  <tr><td>Month</td><td id="Reg4"></td></tr>
  <tr><td>Day</td><td id="Reg5"></td></tr>
  <tr><td>Year</td><td id="Reg6"></td></tr>
</table>
</body>
</html>


<script>
$(document).ready(function(){
  ModbusPoll();
});

function ModbusPoll()
{
    $.getJSON('http://127.0.0.1:8082/api?M=16&I=1&F=3&A=1&N=50&T=float32', function(data) {
        var MyRes = '';
        for (var i in data.response){
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A1);
             $("#Reg1").html(MyRes.formatMoney(4, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A3);
             $("#Reg2").html(MyRes.formatMoney(4, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A5);
             $("#Reg3").html(MyRes.formatMoney(4, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A7);
             $("#Reg4").html(MyRes.formatMoney(4, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A9);
             $("#Reg5").html(MyRes.formatMoney(4, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A11);
             $("#Reg6").html(MyRes.formatMoney(4, '.', ','));
           }
        }
    });
    setTimeout('ModbusPoll()',1000);
}

Number.prototype.formatMoney = function(c, d, t)         
{
 var n = this,
     c = isNaN(c = Math.abs(c)) ? 2 : c,
     d = d == undefined ? "." : d,
     t = t == undefined ? "," : t,
     s = n < 0 ? "-" : "",
     i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
     j = (j = i.length) > 3 ? j % 3 : 0;
 return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n -
i).toFixed(c).slice(2) : "");
};
</script>
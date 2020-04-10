$(document).ready(function(){
  ModbusPollUnit7();
});

function ModbusPollUnit7()
{
    $.getJSON('http://192.168.1.80:8082/api?M=16&I=7&F=3&A=0&N=600&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A16)/1000;
             $("#TJB1").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A38)/1000;
             $("#TJB2").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A60)/1000;
             $("#PDL1").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A82)/1000;
             $("#PDL2").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A170)/1000;
             $("#TF401").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A148)/1000;
             $("#TF402").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A250)/1000;
             $("#MHYD1").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A268)/1000;
             $("#MHYD2").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A444)/10000;
             $("#FELG1").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A446)/1000;
             $("#FELG2").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A448)/10000;
             $("#FELG3").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A450)/10000;
             $("#FELG4").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A456)/10000;
             $("#FPSKP").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A460)/1000;
             $("#FTKAY").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A458)/1000;
             $("#INDRM").html(MyRes.formatMoney(2, '.', ','));               
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#TMAWD").html(MyRes.formatMoney(2, '.', ','));     
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#TMATR").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A104)/1000;
             $("#LCRG").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A126)/1000;
             $("#LCGN").html(MyRes.formatMoney(2, '.', ','));                
 
             
           }
        }
    });
    setTimeout('ModbusPollUnit7()',1000)    

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
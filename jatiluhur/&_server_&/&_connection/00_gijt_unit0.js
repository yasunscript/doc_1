$(document).ready(function(){
  ModbusPollCalculate();
});

function ModbusPollCalculate()
{
    $.getJSON('http://202.162.210.219:8082/api?M=16&I=100&F=3&A=0&N=600&T=float', function(data) {
        var Unit1_DAktif   = '';
        var Unit2_DAktif   = '';
        var Unit3_DAktif   = '';
        var Unit4_DAktif   = '';
        var Unit5_DAktif   = '';
        var Unit6_DAktif   = '';
        var Total_DAktif   = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
            Unit1_DAktif     = parseFloat(data.response[i].v.A12); 
            $("#Unit1_DAktif").html(Unit1_DAktif.formatMoney(2, '.', ','));              
            Unit2_DAktif     = parseFloat(data.response[i].v.A112); 
            $("#Unit2_DAktif").html(Unit2_DAktif.formatMoney(2, '.', ','));   
            Unit3_DAktif     = parseFloat(data.response[i].v.A212); 
            $("#Unit3_DAktif").html(Unit3_DAktif.formatMoney(2, '.', ','));
            Unit4_DAktif     = parseFloat(data.response[i].v.A312); 
            $("#Unit4_DAktif").html(Unit4_DAktif.formatMoney(2, '.', ','));
            Unit5_DAktif     = parseFloat(data.response[i].v.A412); 
            $("#Unit5_DAktif").html(Unit5_DAktif.formatMoney(2, '.', ','));
            Unit6_DAktif     = parseFloat(data.response[i].v.A512); 
            $("#Unit6_DAktif").html(Unit6_DAktif.formatMoney(2, '.', ','));              
            Total_DAktif     = Unit1_DAktif + Unit2_DAktif + Unit3_DAktif + Unit4_DAktif + Unit5_DAktif + Unit6_DAktif;
            $("#Total_DAktif").html(Total_DAktif.formatMoney(2, '.', ','));
           }          
        }       
    });
    
    setTimeout('ModbusPollCalculate()',1000);
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
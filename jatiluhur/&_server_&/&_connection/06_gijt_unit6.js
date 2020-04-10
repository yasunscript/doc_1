$(document).ready(function(){
  ModbusPollUnit6();
});

function ModbusPollUnit6()
{
    $.getJSON('http://202.162.210.219:8082/api?M=16&I=6&F=3&A=0&N=70&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#Unit6_IA").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#Unit6_IB").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A4);
             $("#Unit6_IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A24);
             $("#Unit6_IEx").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A6);
             $("#Unit6_VAB").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A8);
             $("#Unit6_VBC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A10);
             $("#Unit6_VCD").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A26);
             $("#Unit6_VEx").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A12);
             $("#Unit6_DAktif").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A14);
             $("#Unit6_DReaktif").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16);
             $("#Unit6_DApparent").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A18);
             $("#Unit6_DAktifKirim").html(MyRes.formatMoney(2, '.', ','));              
             MyRes =    parseFloat(data.response[i].v.A20);
             $("#Unit6_DReaktifTerima").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A22);
             $("#Unit6_DReaktifKirim").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A28);
             $("#Unit6_PowerFactor").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A30);
             $("#Unit6_Freq").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A32);
             $("#Unit6_Wind01").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A34);
             $("#Unit6_Wind02").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A36);
             $("#Unit6_Wind03").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38);
             $("#Unit6_Wind04").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A40);
             $("#Unit6_Wind05").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A42);
             $("#Unit6_Wind06").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A44);
             $("#Unit6_Wind07").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A46);
             $("#Unit6_Wind08").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A48);
             $("#Unit6_ColdAir").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A50);
             $("#Unit6_HotAir").html(MyRes.formatMoney(1, '.', ','));              
              
              
             MyRes =    parseFloat(data.response[i].v.A52);
             $("#Unit6_InMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54);
             $("#Unit6_OutMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56);
             $("#Unit6_TurbineBearing").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58);
             $("#Unit6_ThrustBearingShell").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A60);
             $("#Unit6_ThrustBearingPad").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A62);
             $("#Unit6_HotOil").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64);
             $("#Unit6_StatorCore01").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66);
             $("#Unit6_StatorCore02").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68);
             $("#Unit6_TurbineSpeed").html(MyRes.formatMoney(1, '.', ','));               
             
           }
        }
    });
    setTimeout('ModbusPollUnit6()',1000)    

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
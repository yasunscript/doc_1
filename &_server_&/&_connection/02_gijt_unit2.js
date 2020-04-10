$(document).ready(function(){
  ModbusPollUnit2();
});

function ModbusPollUnit2()
{
    $.getJSON('http://202.162.210.219:8082/api?M=16&I=2&F=3&A=0&N=70&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#Unit2_IA").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#Unit2_IB").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A4);
             $("#Unit2_IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A24);
             $("#Unit2_IEx").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A6);
             $("#Unit2_VAB").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A8);
             $("#Unit2_VBC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A10);
             $("#Unit2_VCD").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A26);
             $("#Unit2_VEx").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A12);
             $("#Unit2_DAktif").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A14);
             $("#Unit2_DReaktif").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16);
             $("#Unit2_DApparent").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A18);
             $("#Unit2_DAktifKirim").html(MyRes.formatMoney(2, '.', ','));              
             MyRes =    parseFloat(data.response[i].v.A20);
             $("#Unit2_DReaktifTerima").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A22);
             $("#Unit2_DReaktifKirim").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A28);
             $("#Unit2_PowerFactor").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A30);
             $("#Unit2_Freq").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A32);
             $("#Unit2_Wind01").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A34);
             $("#Unit2_Wind02").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A36);
             $("#Unit2_Wind03").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38);
             $("#Unit2_Wind04").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A40);
             $("#Unit2_Wind05").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A42);
             $("#Unit2_Wind06").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A44);
             $("#Unit2_Wind07").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A46);
             $("#Unit2_Wind08").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A48);
             $("#Unit2_ColdAir").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A50);
             $("#Unit2_HotAir").html(MyRes.formatMoney(1, '.', ','));              
              
              
             MyRes =    parseFloat(data.response[i].v.A52);
             $("#Unit2_InMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54);
             $("#Unit2_OutMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56);
             $("#Unit2_TurbineBearing").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58);
             $("#Unit2_ThrustBearingShell").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A60);
             $("#Unit2_ThrustBearingPad").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A62);
             $("#Unit2_HotOil").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64);
             $("#Unit2_StatorCore01").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66);
             $("#Unit2_StatorCore02").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68);
             $("#Unit2_TurbineSpeed").html(MyRes.formatMoney(1, '.', ','));               
             
           }
        }
    });
    setTimeout('ModbusPollUnit2()',1000)    

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
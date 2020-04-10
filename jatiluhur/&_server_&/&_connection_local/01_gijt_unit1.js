$(document).ready(function(){
  ModbusPollUnit1();
});

function ModbusPollUnit1()
{
    $.getJSON('http://192.168.1.80:8082/api?M=16&I=1&F=3&A=0&N=70&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#Unit1_IA").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#Unit1_IB").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A4);
             $("#Unit1_IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A24);
             $("#Unit1_IEx").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A6);
             $("#Unit1_VAB").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A8);
             $("#Unit1_VBC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A10);
             $("#Unit1_VCD").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A26);
             $("#Unit1_VEx").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A12);
             $("#Unit1_DAktif").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A14);
             $("#Unit1_DReaktif").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16);
             $("#Unit1_DApparent").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A18);
             $("#Unit1_DAktifKirim").html(MyRes.formatMoney(2, '.', ','));              
             MyRes =    parseFloat(data.response[i].v.A20);
             $("#Unit1_DReaktifTerima").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A22);
             $("#Unit1_DReaktifKirim").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A28);
             $("#Unit1_PowerFactor").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A30);
             $("#Unit1_Freq").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A32);
             $("#Unit1_Wind01").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A34);
             $("#Unit1_Wind02").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A36);
             $("#Unit1_Wind03").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38);
             $("#Unit1_Wind04").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A40);
             $("#Unit1_Wind05").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A42);
             $("#Unit1_Wind06").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A44);
             $("#Unit1_Wind07").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A46);
             $("#Unit1_Wind08").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A48);
             $("#Unit1_ColdAir").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A50);
             $("#Unit1_HotAir").html(MyRes.formatMoney(1, '.', ','));              
              
              
             MyRes =    parseFloat(data.response[i].v.A52);
             $("#Unit1_InMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54);
             $("#Unit1_OutMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56);
             $("#Unit1_TurbineBearing").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58);
             $("#Unit1_ThrustBearingShell").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A60);
             $("#Unit1_ThrustBearingPad").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A62);
             $("#Unit1_HotOil").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64);
             $("#Unit1_StatorCore01").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66);
             $("#Unit1_StatorCore02").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68);
             $("#Unit1_TurbineSpeed").html(MyRes.formatMoney(1, '.', ','));               
             
           }
        }
    });
    setTimeout('ModbusPollUnit1()',1000)    

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
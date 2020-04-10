$(document).ready(function(){
  ModbusPollUnit3();
});

function ModbusPollUnit3()
{
    $.getJSON('http://192.168.1.80:8082/api?M=16&I=3&F=3&A=0&N=70&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#Unit3_IA").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#Unit3_IB").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A4);
             $("#Unit3_IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A24);
             $("#Unit3_IEx").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A6);
             $("#Unit3_VAB").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A8);
             $("#Unit3_VBC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A10);
             $("#Unit3_VCD").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A26);
             $("#Unit3_VEx").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A12);
             $("#Unit3_DAktif").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A14);
             $("#Unit3_DReaktif").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16);
             $("#Unit3_DApparent").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A18);
             $("#Unit3_DAktifKirim").html(MyRes.formatMoney(2, '.', ','));              
             MyRes =    parseFloat(data.response[i].v.A20);
             $("#Unit3_DReaktifTerima").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A22);
             $("#Unit3_DReaktifKirim").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A28);
             $("#Unit3_PowerFactor").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A30);
             $("#Unit3_Freq").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A32);
             $("#Unit3_Wind01").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A34);
             $("#Unit3_Wind02").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A36);
             $("#Unit3_Wind03").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38);
             $("#Unit3_Wind04").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A40);
             $("#Unit3_Wind05").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A42);
             $("#Unit3_Wind06").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A44);
             $("#Unit3_Wind07").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A46);
             $("#Unit3_Wind08").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A48);
             $("#Unit3_ColdAir").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A50);
             $("#Unit3_HotAir").html(MyRes.formatMoney(1, '.', ','));              
              
              
             MyRes =    parseFloat(data.response[i].v.A52);
             $("#Unit3_InMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54);
             $("#Unit3_OutMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56);
             $("#Unit3_TurbineBearing").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58);
             $("#Unit3_ThrustBearingShell").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A60);
             $("#Unit3_ThrustBearingPad").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A62);
             $("#Unit3_HotOil").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64);
             $("#Unit3_StatorCore01").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66);
             $("#Unit3_StatorCore02").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68);
             $("#Unit3_TurbineSpeed").html(MyRes.formatMoney(1, '.', ','));               
             
           }
        }
    });
    setTimeout('ModbusPollUnit3()',1000)    

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
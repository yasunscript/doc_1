$(document).ready(function(){
  ModbusPollUnit5();
});

function ModbusPollUnit5()
{
    $.getJSON('http://202.162.210.219:8082/api?M=16&I=5&F=3&A=0&N=70&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
             MyRes =    parseFloat(data.response[i].v.A0);
             $("#Unit5_IA").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A2);
             $("#Unit5_IB").html(MyRes.formatMoney(2, '.', ','));             
             MyRes =    parseFloat(data.response[i].v.A4);
             $("#Unit5_IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A24);
             $("#Unit5_IEx").html(MyRes.formatMoney(2, '.', ','));                
             MyRes =    parseFloat(data.response[i].v.A6);
             $("#Unit5_VAB").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A8);
             $("#Unit5_VBC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A10);
             $("#Unit5_VCD").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A26);
             $("#Unit5_VEx").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A12);
             $("#Unit5_DAktif").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A14);
             $("#Unit5_DReaktif").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16);
             $("#Unit5_DApparent").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A18);
             $("#Unit5_DAktifKirim").html(MyRes.formatMoney(2, '.', ','));              
             MyRes =    parseFloat(data.response[i].v.A20);
             $("#Unit5_DReaktifTerima").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A22);
             $("#Unit5_DReaktifKirim").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A28);
             $("#Unit5_PowerFactor").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A30);
             $("#Unit5_Freq").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A32);
             $("#Unit5_Wind01").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A34);
             $("#Unit5_Wind02").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A36);
             $("#Unit5_Wind03").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38);
             $("#Unit5_Wind04").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A40);
             $("#Unit5_Wind05").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A42);
             $("#Unit5_Wind06").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A44);
             $("#Unit5_Wind07").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A46);
             $("#Unit5_Wind08").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A48);
             $("#Unit5_ColdAir").html(MyRes.formatMoney(1, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A50);
             $("#Unit5_HotAir").html(MyRes.formatMoney(1, '.', ','));              
              
              
             MyRes =    parseFloat(data.response[i].v.A52);
             $("#Unit5_InMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54);
             $("#Unit5_OutMainCool").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56);
             $("#Unit5_TurbineBearing").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58);
             $("#Unit5_ThrustBearingShell").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A60);
             $("#Unit5_ThrustBearingPad").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A62);
             $("#Unit5_HotOil").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64);
             $("#Unit5_StatorCore01").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66);
             $("#Unit5_StatorCore02").html(MyRes.formatMoney(1, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68);
             $("#Unit5_TurbineSpeed").html(MyRes.formatMoney(1, '.', ','));               
             
           }
        }
    });
    setTimeout('ModbusPollUnit5()',1000)    

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
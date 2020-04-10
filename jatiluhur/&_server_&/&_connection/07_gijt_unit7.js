$(document).ready(function(){
  ModbusPollUnit7();
});

function ModbusPollUnit7()
{
    $.getJSON('http://202.162.210.219:8082/api?M=16&I=7&F=3&A=0&N=600&T=float', function(data) {
        var MyRes = '';
        for (var i in data.response){  
          if (data.response[i].s == 1) {
               
             MyRes =    parseFloat(data.response[i].v.A4)/1000;
             $("#TJB1VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A6)/1000;
             $("#TJB1VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A8)/1000;
             $("#TJB1VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A10)/1;
             $("#TJB1IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A12)/1;
             $("#TJB1IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A14)/1;
             $("#TJB1IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A16)/1000;
             $("#TJB1MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A18)/1000;
             $("#TJB1MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A20)/100;
             $("#TJB1PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A22)/10;
             $("#TJB1HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A24)/1;
             $("#TJB1KWH").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A26)/1000;
             $("#TJB2VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A28)/1000;
             $("#TJB2VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A30)/1000;
             $("#TJB2VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A32)/1;
             $("#TJB2IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A34)/1;
             $("#TJB2IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A36)/1;
             $("#TJB2IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A38)/1000;
             $("#TJB2MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A40)/1000;
             $("#TJB2MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A42)/100;
             $("#TJB2PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A44)/10;
             $("#TJB2HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A46)/1000;
             $("#TJB2KWH").html(MyRes.formatMoney(2, '.', ','));
              
              
             MyRes =    parseFloat(data.response[i].v.A48)/1000;
             $("#PDL1VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A50)/1000;
             $("#PDL1VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A52)/1000;
             $("#PDL1VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A54)/1;
             $("#PDL1IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A56)/1;
             $("#PDL1IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A58)/1;
             $("#PDL1IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A60)/1000;
             $("#PDL1MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A62)/1000;
             $("#PDL1MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A64)/100;
             $("#PDL1PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A66)/10;
             $("#PDL1HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A68)/1;
             $("#PDL1KWH").html(MyRes.formatMoney(2, '.', ','));
              
             MyRes =    parseFloat(data.response[i].v.A70)/1000;
             $("#PDL2VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A72)/1000;
             $("#PDL2VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A74)/1000;
             $("#PDL2VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A76)/1;
             $("#PDL2IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A78)/1;
             $("#PDL2IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A80)/1;
             $("#PDL2IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A82)/1000;
             $("#PDL2MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A84)/1000;
             $("#PDL2MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A86)/-100;
             $("#PDL2PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A88)/10;
             $("#PDL2HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A90)/1;
             $("#PDL2KWH").html(MyRes.formatMoney(2, '.', ','));
              
                            
             MyRes =    parseFloat(data.response[i].v.A158)/1000;
             $("#TF40MVA1VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A160)/1000;
             $("#TF40MVA1VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A162)/1000;
             $("#TF40MVA1VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A164)/1;
             $("#TF40MVA1IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A166)/1;
             $("#TF40MVA1IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A168)/1;
             $("#TF40MVA1IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A170)/1000;
             $("#TF40MVA1MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A172)/1000;
             $("#TF40MVA1MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A174)/-100;
             $("#TF40MVA1PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A176)/10;
             $("#TF40MVA1HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A178)/1;
             $("#TF40MVA1KWH").html(MyRes.formatMoney(2, '.', ','));
              
              
             MyRes =    parseFloat(data.response[i].v.A136)/1000;
             $("#TF40MVA2VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A138)/1000;
             $("#TF40MVA2VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A140)/1000;
             $("#TF40MVA2VT").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A142)/1;
             $("#TF40MVA2IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A144)/1;
             $("#TF40MVA2IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A146)/1;
             $("#TF40MVA2IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A148)/1000;
             $("#TF40MVA2MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A150)/1000;
             $("#TF40MVA2MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A152)/-100;
             $("#TF40MVA2PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A154)/10;
             $("#TF40MVA2HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A156)/1;
             $("#TF40MVA2KWH").html(MyRes.formatMoney(2, '.', ','));
              
              
             
             MyRes =    parseFloat(data.response[i].v.A462)/10;
             $("#TF40MVA3VRS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A464)/10;
             $("#TF40MVA3VST").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A466)/10;
             $("#TF40MVA3VTR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A468)/10;
             $("#TF40MVA3IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A470)/10;
             $("#TF40MVA3IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A472)/10;
             $("#TF40MVA3IC").html(MyRes.formatMoney(2, '.', ','));
             MyRes =    parseFloat(data.response[i].v.A474)/10;
             $("#TF40MVA3MW").html(MyRes.formatMoney(2, '.', ','));  
             MyRes =    parseFloat(data.response[i].v.A476)/10;
             $("#TF40MVA3MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A478)/100;
             $("#TF40MVA3PHI").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A480)/100;
             $("#TF40MVA3HZ").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A482)/1;
             $("#TF40MVA3KWH").html(MyRes.formatMoney(2, '.', ','));
            
              
              
              
              
             
             MyRes =    parseFloat(data.response[i].v.A240)/1000;
             $("#MHYD1IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A242)/1000;
             $("#MHYD1IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A244)/1000;
             $("#MHYD1IC").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A246)/1000;
             $("#MHYD1VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A248)/1000;
             $("#MHYD1VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A250)/1000;
             $("#MHYD1MW").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A252)/1000;
             $("#MHYD1MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A254)/1000;
             $("#MHYD1MVA").html(MyRes.formatMoney(2, '.', ','));               
             MyRes =    parseFloat(data.response[i].v.A256)/1000;
             $("#MHYD1HZ").html(MyRes.formatMoney(2, '.', ','));
              
             MyRes =    parseFloat(data.response[i].v.A258)/1000;
             $("#MHYD2IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A260)/1000;
             $("#MHYD2IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A262)/1000;
             $("#MHYD2IC").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A264)/1000;
             $("#MHYD2VR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A266)/1000;
             $("#MHYD2VS").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A268)/1000;
             $("#MHYD2MW").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A270)/1000;
             $("#MHYD2MVAR").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A272)/1000;
             $("#MHYD2MVA").html(MyRes.formatMoney(2, '.', ','));               
             MyRes =    parseFloat(data.response[i].v.A274)/1000;
             $("#MHYD2HZ").html(MyRes.formatMoney(2, '.', ','));
              
              
              
             MyRes =    parseFloat(data.response[i].v.A180)/10;
             $("#FELG1IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A182)/10;
             $("#FELG1IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A184)/10;
             $("#FELG1IC").html(MyRes.formatMoney(2, '.', ',')); 
              
              
             MyRes =    parseFloat(data.response[i].v.A186)/1;
             $("#FELG2IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A188)/1;
             $("#FELG2IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A190)/1;
             $("#FELG2IC").html(MyRes.formatMoney(2, '.', ','));  
              
             MyRes =    parseFloat(data.response[i].v.A192)/10;
             $("#FELG3IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A194)/10;
             $("#FELG3IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A196)/10;
             $("#FELG3IC").html(MyRes.formatMoney(2, '.', ','));   
              
             MyRes =    parseFloat(data.response[i].v.A198)/10;
             $("#FELG4IA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A200)/10;
             $("#FELG4IB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A202)/10;
             $("#FELG4IC").html(MyRes.formatMoney(2, '.', ',')); 
              
             MyRes =    parseFloat(data.response[i].v.A204)/1;
             $("#FINDIA").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A206)/1;
             $("#FINDIB").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A208)/1;
             $("#FINDIC").html(MyRes.formatMoney(2, '.', ',')); 
             MyRes =    parseFloat(data.response[i].v.A458)/1;
             $("#FINDMVA").html(MyRes.formatMoney(2, '.', ','));  
              
             MyRes =    parseFloat(data.response[i].v.A444)/10000;
             $("#FELG1MVA").html(MyRes.formatMoney(2, '.', ','));  
              
              
              
              
              
              
             MyRes =    parseFloat(data.response[i].v.A446)/1000;
             $("#FELG2MVA").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A448)/10000;
             $("#FELG3MVA").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A450)/10000;
             $("#FELG4MVA").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A456)/1000;
             $("#FKPUSATMVA").html(MyRes.formatMoney(2, '.', ','));   
             MyRes =    parseFloat(data.response[i].v.A458)/1000;
             $("#FINDMVA").html(MyRes.formatMoney(2, '.', ','));    
             MyRes =    parseFloat(data.response[i].v.A460)/10000;
             $("#FTKAYATMVA").html(MyRes.formatMoney(2, '.', ','));  
              
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
             MyRes =    parseFloat(data.response[i].v.A444)/1000;
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
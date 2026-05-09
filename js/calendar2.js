console.log('Calendar2 is loaded');
export function initCalendar2(onSelectS)
{  

   console.log('initCalendar2 is loaded');
    //////////////////calendar//////////////////////////////////////////
    const warekiSObj=document.getElementById('warekiS');
    const seirekiSObj=document.getElementById('seirekiS');
    const nengoArrayS=['w','s','h','r',];
    
    
    
    const warekiS=document.querySelectorAll('.warekiS');
    const seirekiS=document.querySelectorAll('.seirekiS');
    
    let yS=0;
    let mS=0;
    var dS=0;
    var nBS=0;
    
    //console.log(nengoObj);
    warekiSObj.hidden=false;
    seirekiSObj.hidden=true;
    //console.log(nengoSObj);
    const nengoArray = ['wS', 'sS', 'hS', 'rS'];
    
    nengoArray.forEach((era,index) =>{
       // console.log('event added', era);
      
        let nengoSObj=document.getElementById(era);
        
        nengoSObj.onclick = function() {   
           console.count('clicked');
           
            if(nengoSObj.style.background==="orange")
            {
                nengoSObj.style.background="transparent";
            }else{
                 nengoSObj.style.background="orange";
            }
           
            let nengoS=nengoSObj.textContent;
            console.log(nengoS)
       
            switch (nengoS) 
            {
                case "西暦":
                     warekiSObj.hidden=true;
                     seirekiSObj.hidden=false;
                     nB=0;
                  break;
                case "昭和":
                    console.log('syouwa');
                     warekiSObj.hidden=false;
                     seirekiSObj.hidden=true;
                     nBS=1925;
                 break;
                case "平成":
                     warekiSObj.hidden=false;
                     seirekiSObj.hidden=true;
                     nBS=1988;
                      
                 break;
                case "令和":
                     warekiSObj.hidden=false;
                     seirekiSObj.hidden=true;
                    nBS=2018;
                 break;
            }
                 console.log('nBS='+nBS);
        }
    });      
        
        
        
        let wYSObj=[];
        let sYSObj=[];
        
        for(let i=0;i<200;i++)
        {
         	sYSObj[i]=document.getElementById('sYS'+i);
            if(!sYSObj[i]) continue;
           
            sYSObj[i].onclick= function() {
                sYSObj[i].style.background="orange";
                let sYS=sYSObj[i].innerText;
                yS=Number(sYS)+nBS;
                console.log('yS='+yS);
            }
           
        } 
        
        for(let i=0;i<100;i++)
        {
            wYSObj[i]=document.getElementById('wYS'+i);
            //console.log('wYObj['+i+']='+wYObj[i]);
          
             wYSObj[i].onclick= function(){
                wYSObj[i].style.background="orange";
                let wYS=wYSObj[i].innerText;
                //console.log(wY);
                yS=Number(wYS)+nBS;
                //console.log('y='+y);
            }
        }
      

        let mSObj=[];
        for(let i=1;i<13;i++){
         //  console.log('i='+i);
           mSObj[i]=document.getElementById('mS'+String(i));
           //console.log('mObj['+i+']='+mObj[i]);
           
            mSObj[i].onclick= function() {
                mSObj[i].style.background="orange";
                mS=mSObj[i].textContent;
                mS=String(mS).padStart(2,'0');
                console.log('yS='+yS+'mS='+mS);
                let yM = yS+'-'+mS;
               
                 onSelectS(yM);
           }
           

            
         }  


} 
export function clear2(){
    let sYSObj = document.querySelectorAll('.sYearS');
    for(let i=0;i<200;i++)
    {
        if(!sYSObj[i]) continue;
        sYSObj[i].style.background="transparent";
                
    } 
   let wYSObj = document.querySelectorAll('.wYearS');     
    for(let i=0;i<100;i++)
    {
          
        wYSObj[i].style.background="transparent";
               
    }
    
    let  mSObj=document.querySelectorAll('.monthS');
    mSObj.forEach((elem )=>{
          elem.style.background="transparent";
    })
    let nengoSObj = document.querySelectorAll('.nengoS');
    nengoSObj.forEach((elem)=>{
        console.log('nengoS extinguish');
        elem.style.background="transparent";
    })
       
   
   
}

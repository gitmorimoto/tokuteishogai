
export function initCalendar(output)
{  

    function makeCalendar(year,month)
    {
               
                //console.log('year='+year+'month='+month);
                let monthDetail=getMonthDetails(year,month);
                let firstDayofWeek=monthDetail.firstDayOfWeek;
                let lastDay=monthDetail.lastDay;
     
                lastDay=lastDay.getDate();
                //console.log('firstDayofWeek[i]='+firstDayofWeek);
                //console.log('lastDay[i]='+lastDay);

                completeCalendar(firstDayofWeek,lastDay);
        }


        function getMonthDetails(year, month) {
        // 月の最初の日

            const firstDay = new Date(year, month - 1, 1); // 月は 0-indexed（1月が 0、2月が 1、…）
            const firstDayOfWeek = firstDay.getDay(); // 曜日を取得
            
            const lastDay = new Date(year, month, 0); // 翌月の0日目 = 指定月の最終日
            const lastDayOfWeek = lastDay.getDay(); // 曜日を取得
            console.log('firstDay='+firstDay);
            console.log('firstDayOfWeek='+firstDayOfWeek);
            console.log('lastDay='+lastDay);
            console.log('lastDayOfWeek='+lastDayOfWeek);
            return {
                firstDay: firstDay,
                firstDayOfWeek,
                lastDay: lastDay,
                lastDayOfWeek,
            };
        }

        function completeCalendar(firstDayofWeek,lastDay)
        {
                let cellObj=[];
                let d=1;
                console.log('firstDayofWeek='+firstDayofWeek);
                console.log('lastDay='+lastDay);
                for(let i=0;i<42;i++)
                {
                    cellObj[i]=document.getElementById('cell'+i);
                    //cellObj[i].style.color='white';
                    cellObj[i].style.color = "black";
                    cellObj[i].style.background = "yellow";
                    cellObj[i].style.border = "1px solid red";
                }
                
              
                for(let j=firstDayofWeek;j<lastDay+firstDayofWeek;j++)
                {
                    //cell1Obj[i].style.background="orange";
                        console.log('d='+d);
                        console.log(cellObj[j]);
                        console.log(cellObj[j].offsetHeight); 
                        console.log(cellObj[j].offsetWidth);
                        cellObj[j].textContent=d;
                        console.log("after set:", cellObj[j].textContent);
                        console.log(cellObj[j].getBoundingClientRect());
                        d++;
                 
                }
    }//end of calendar frame
    //makeCalendar(2026,4)


    //////////////////calendar//////////////////////////////////////////
    const warekiObj=document.getElementById('wareki');
    const seirekiObj=document.getElementById('seireki');
    const nengoArray=['w','s','h','r',];
    const nengoObj=[];
    
    for(let i=0;i<4;i++)
    {
        nengoObj[i]=document.getElementById(nengoArray[i]);
    }
    const wareki=document.querySelectorAll('.wareki');
    const seireki=document.querySelectorAll('.seireki');
    //warekiObj.style.display="none";
    let y=0;
    let m=0;
    var d=0;
    var nB=0;
    warekiObj.hidden=false;
    seirekiObj.hidden=true;

    //console.log(nengoObj);

    for(let i=0;i<4;i++)
    {
        nengoObj[i].addEventListener('click',function(){
            nengoObj[i].style.background="orange";
            let nengo=nengoObj[i].innerHTML;
            console.log(nengo)
       
            switch (nengo) 
            {
                case "西暦":
                     warekiObj.hidden=true;
                     seirekiObj.hidden=false;
                     nB=0;
                  break;
                case "昭和":
                    console.log('syouwa');
                     warekiObj.hidden=false;
                     seirekiObj.hidden=true;
                     nB=1925;
                 break;
                case "平成":
                     warekiObj.hidden=false;
                     seirekiObj.hidden=true;
                     nB=1988;
                 break;
                case "令和":
                     warekiObj.hidden=false;
                     seirekiObj.hidden=true;
                    nB=2018;
                 break;
            }
        })
    }      
        
        //let y;
        //let m;
        let wYObj=[];
        let sYObj=[];
        
        for(let i=0;i<200;i++)
        {
         	sYObj[i]=document.getElementById('sY'+i);
            sYObj[i].addEventListener('click',function(){
                sYObj[i].style.background="orange";
                let sY=sYObj[i].innerText;
                y=Number(sY)+nB;
                console.log('y='+y);
            })
           
        } 

        for(let i=0;i<100;i++)
        {
            wYObj[i]=document.getElementById('wY'+i);
            //console.log('wYObj['+i+']='+wYObj[i]);
            wYObj[i].addEventListener('click',function(){
                wYObj[i].style.background="orange";
                let wY=wYObj[i].innerText;
                //console.log(wY);
                y=Number(wY)+nB;
                //console.log('y='+y);
            })
        }
      

        let mObj=[];
        for(let i=1;i<13;i++){
         //  console.log('i='+i);
           mObj[i]=document.getElementById('m'+String(i));
           //console.log('mObj['+i+']='+mObj[i]);
           mObj[i].addEventListener('click',function(){
                mObj[i].style.background="orange";
                m=mObj[i].innerText;
                console.log('y='+y+'m='+m);
                makeCalendar(y,m);
           })
           

            
         }  

      //    console.log('mObj.length='+mObj.length);

        

            let dObj=[];
            let sD="";
            let inpObj = document.getElementById(output);
            
            for(let i=0;i<42;i++)
            {
         	    dObj[i]= document.getElementById('cell'+i);
                dObj[i].addEventListener('click',function(){
                    dObj[i].style.background="orange";
                    let d=dObj[i].textContent;
                    m=('00'+String(m)).slice(-2);
                    d=('00'+String(d)).slice(-2);
                    sD=y+'-'+m+'-'+d;
                    //console.log('sD='+sD);
                    //console.log('dateBoxFlag='+dateBoxFlag);

                    inpObj.value = sD;
                    
                    
                    
                })
           
            }
        
     
       
        // console.log('dObj[22]='+dObj[22].innerText);



} 



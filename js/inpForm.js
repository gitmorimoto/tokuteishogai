import {initCalendar} from './calendar.js';
import {getAddress} from './zipCode.js';
document.addEventListener('DOMContentLoaded',function(){

const container0Obj = document.getElementById('container0');
const row0 = document.createElement('div');
const row1 = document.createElement('div');
const row2 = document.createElement('div');
const row3 = document.createElement('div');
const instObj = document.getElementById('instruction');
row0.style.width='100%';
row0.style.height='50px';
row0.style.borderBottom='1px solid white';
row0.style.display = 'flex';
container0Obj.appendChild(row0);
row1.style.width='100%';
row1.style.height='50px';
row1.style.borderBottom='1px solid white';
row1.style.display = 'flex';
container0Obj.appendChild(row1);
row2.style.width='100%';
row2.style.height='50px';
row2.style.borderBottom='1px solid white';
row2.style.display = 'flex';
container0Obj.appendChild(row2);
row3.style.width='100%';
row3.style.height='50px';
row3.style.borderBottom='1px solid white';
row3.style.display = 'flex';
container0Obj.appendChild(row3);
const cellObj = [];
const itemList = [
    'ID','ふりがな','名前','生年月日','郵便番号','住所','傷病名','主な傷病の発症日','合併精神障害の発症日','身体障害の発症日',
    '合併精神障害','合併身体障害','④のため初めて医師の診断を受けた日','将来再判定までの期間','発病以来の経過','陳述者の氏名','本人との関係','病院名','治療開始時期','治療終了時期',
    '','','','','','','','','','',
    '','','','','','','','','','',
    '','','','','','','','','','',
    '','','','','','','','','','',
    '','','','','','','','','','',
]
for(let i=0;i<20;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    cellObj[i].textContent=itemList[i];
    cellObj[i].style.fontSize='9px';
    cellObj[i].style.color='white';
    row0.appendChild(cellObj[i]);
}

for(let i=20;i<40;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    cellObj[i].style.color='white';
    row1.appendChild(cellObj[i]);
}
for(let i=40;i<60;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    cellObj[i].style.color='white';
    row2.appendChild(cellObj[i]);
}
for(let i=60;i<80;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    cellObj[i].style.color='white';
    row3.appendChild(cellObj[i]);
}
//-----------------------------------------------------------------
const container1 = document.getElementById('container1');
container1.style.overflowY='scroll';
const frameObj = [];
const inpObj = [];
for(let i=0;i<69;i++)
{
    frameObj[i] = document.createElement('div');
    frameObj[i].style.width='100%';
    frameObj[i].style.height='99%';
    frameObj[i].style.border = '1px solid white';
    frameObj[i].id='frame'+i;
    inpObj[i]=document.createElement('textarea');
    inpObj[i].style.width='100%';
    inpObj[i].style.height='100%';
    inpObj[i].style.background='darkgreen';
    inpObj[i].style.color='white';
    inpObj[i].id = 'inp'+i;
    inpObj[i].value = i;

    container1.appendChild(frameObj[i]);
    frameObj[i].appendChild(inpObj[i]);

   
    

}
//--------------------------------------------------------------------
function selectFrame(num){
    for(let i=0;i<69;i++){
        if(i==num){
            frameObj[i].style.display='block';
            //frameObj[i].style.backgroundColor='darkgreen';
        }else{ 
            frameObj[i].style.display='none';
        }   
    }
}
function init(onSelect){
    let calendarObj = document.getElementById('calendar');
    calendarObj.style.display = "none";
    for(let i=0;i<69;i++){
        cellObj[i].addEventListener('click',function(){
            
            if(cellObj[i].style.backgroundColor==="orange"){
                console.log('transparent');
                cellObj[i].style.backgroundColor="transparent";
            }else{
                console.log('orange');
                cellObj[i].style.backgroundColor="orange";
            }
            selectFrame(i);
            let dateBoxNum=i;
            //instObj = document.getElementById('instruction');
            console.log('itemList'+i+'='+itemList[i]);
            instObj.textContent = itemList[i]+'を入力してください。';
            instObj.style.color = 'white';
            instObj.style.fontSize = '30px';
            onSelect(i);
        });
    }
}
function searchAddress(){
    inpObj[4] = document.getElementById('inp4');
    inpObj[4].addEventListener('mouseleave',function(){
        let zipCode = document.getElementById('inp4').value;
        //getAddress(zipCode);
        getAddress(zipCode,function(address){
            console.log(address);
            inpObj[5] = document.getElementById('inp5');
            inpObj[5].value = address;

        })
    })
    
}
init(function(num){
    console.log('num='+num);
    let calendarObj = document.getElementById('calendar');
    
    switch(num)
    {
        case 3:
        case 7:
        case 8:
        case 9:
            calendarObj.style.display = "block";
            initCalendar(function(date){
                console.log('received data is'+date);
                
                inpObj[num] = document.getElementById('inp' + num);
                inpObj[num].style.fontSize = '61px';
                
                inpObj[num].value = date;
                
            })
            break;
        case 4:
            searchAddress()
            break;
        
        default:
            console.log('default');
            calendarObj.style.display = "none";
            break;
    }
})

})
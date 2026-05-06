import {initCalendar} from './calendar.js';
import {getAddress} from './zipCode.js';
import {makeList} from './selList.js';
import {getRefData} from './refData.js';
import {forward} from './forward.js';
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
    '合併精神障害','合併身体障害','④のため初めて医師の診断を受けた日','将来再判定までの期間','発病以来の経過','陳述者の氏名','本人との関係',
    '病院名','治療開始時期','治療終了時期','病名','治療','転機','病院名','治療開始時期','治療終了時期','病名','治療','転機','病院名','治療開始時期','治療終了時期','病名','治療','転機'
    ,'病院名','治療開始時期','治療終了時期','病名','治療','転機','発育・教育歴','障害の状態','知能指数又は発達指数','テスト方式','判定年月日',
    ' 学習障害:その他','知能障害等:その他','知能障害等の症状・処方','発達障害関連症状：その他','発達障害関連症状の症状・処方',
    '意識障害・てんかん：その他','てんかん発作のタイプ','意識障害・てんかんの症状・処方','精神症状・その他','精神症状・その他の症状・処方',
    '問題行動・習癖：その他','問題行動・習癖の症状・処方','性格特徴','日常生活能力の程度を記載','備考','記載日',
    '病院又は診療所の名称','所　在　地','診療担当科名','医　師　氏　名'
];
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
    cellObj[i].textContent=itemList[i];
    cellObj[i].style.fontSize='9px';
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
    cellObj[i].textContent=itemList[i];
    cellObj[i].style.fontSize='9px';
    cellObj[i].style.color='white';
    row2.appendChild(cellObj[i]);
}
for(let i=60;i<79;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    cellObj[i].textContent=itemList[i];
    cellObj[i].style.fontSize='9px';
    cellObj[i].style.color='white';
    row3.appendChild(cellObj[i]);
}
cellObj[79]=document.createElement('div');
cellObj[79].style.width='9%';
cellObj[79].style.height='100%';
cellObj[79].style.borderRight='1px solid white';
cellObj[79].id='cell79';
cellObj[79].style.color='white';
cellObj[79].textContent='帳票';
cellObj[79].style.background='red';
row3.appendChild(cellObj[79]);  
//-----------------------------------------------------------------
const container1 = document.getElementById('container1');
container1.style.overflowY='scroll';
const frameObj = [];
const inpObj = [];
const fragment = document.createDocumentFragment();
for(let i=0;i<69;i++)
{
    let frame = document.createElement('div');
    frame.style.width = '100%'; 
    frame.style.height = '100%';
    frame.style.border = '1px solid white';
    frame.id = 'frame' + i;
    frame.classList.add('frame');

    const inp = document.createElement('textarea');
    inp.style.width = '100%';
    inp.style.height = '100%';
    inp.style.background = 'darkgreen';
    inp.style.color = 'white';
    inp.id = 'inp' + i;
    inp.classList.add('inp');
    inp.value = 'test'+i;

    frame.appendChild(inp);
    fragment.appendChild(frame);

}
container1.appendChild(fragment);
//--------------------------------------------------------------------
function selectFrame(num){
    let frameObj = [];
    frameObj = document.querySelectorAll('.frame');
    console.log(frameObj);
    console.log(typeof frameObj);
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
    //let calendarObj = document.getElementById('calendar');
    //calendarObj.style.display = "none";
    for(let i=0;i<69;i++){
        cellObj[i].addEventListener('click',function(){
            
            if(cellObj[i].style.backgroundColor==="orange"){
                console.log('transparent');
                cellObj[i].style.backgroundColor="transparent";
            }else{
                console.log('orange');
                cellObj[i].style.backgroundColor="orange";
            }
            
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
        console.log('mouseleave');
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
    let itemListObj = document.getElementById('itemList');
    
    selectFrame(num);
    switch(num)
    {
        case 3:
        case 7:
        case 8:
        case 9:
        case 12:
        case 18:
        case 19:

            itemListObj.style.display = "none";
            calendarObj.style.display = "block";
            initCalendar(function(date){
                console.log('received data is'+date);
                
                inpObj[num] = document.getElementById('inp' + num);
                inpObj[num].style.fontSize = '61px';
                
                inpObj[num].value = date;
                
            })
            break;
        case 4:
            calendarObj.style.display = "none";
            itemListObj.style.display = "none";
            searchAddress();
            break;
        case 6:
        case 10:
        case 11:
        case 16:
        case 17:
        case 20:
        case 21:
        case 22:
        case 23:
        case 26:
        case 27:
        case 28:
        case 29:
        case 33:
        case 34:
        case 35:
        case 38:
        case 39:
        case 40:
        case 44:
        case 51:
        case 58:
        case 59:
        case 62:
        case 63:
        case 64:
        case 65:
            calendarObj.style.display = "none";
            itemListObj.style.display = "block";
            console.log(getRefData);
              getRefData(num)
                .then(dataArray => {
                    if (!dataArray) {
                        console.error('dataArray is undefined or null');
                        return;
                    }

                    console.log('外で使える:', dataArray);
                    makeList(dataArray);
                })
                .catch(error => {
                    console.error('getRefData error:', error);
                    throw error; 
                });
            
            break;
        default:
            console.log('default');
            calendarObj.style.display = "none";
            itemListObj.style.display = "none";
            break;
    }
})
//-------------------------------------------------------------------
forward();
})
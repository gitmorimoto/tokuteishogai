import {backward} from './backward.js';
import {confirm} from './confirm.js';
import {hide} from './testParam.js';
import {display} from './testParam.js';
import {dispId} from './testParam.js';
import {getForwardData} from './getForwardData.js';
import {storeData} from './storeData.js';
import {recover} from './recoverData.js';
import {clear} from './clearData.js';
import {markCheck} from './mark.js';
import {searchAll} from './search.js';
document.addEventListener('DOMContentLoaded',function(){
    let output='frame3';//selected date is set in output element.
    
    console.log('js loaded');
    const inpFormBtnObj = document.getElementById('inpFormBtn');
   // const inpObj = document.querySelectorAll('.inp');
   // console.log(inpObj.length);
   // const noOfInpData = inpObj.length;
    //for(let i=0;i<noOfInpData;i++){
    //    inpObj[i].value = i;
   // }
   
    const markObj = document.querySelectorAll('.mark');
    const noOfMarkData = markObj.length;
    console.log(noOfMarkData);
    for(let i=0;i<noOfMarkData;i++)
    {
        markObj[i].style.borderRadius='10px';
        markObj[i].style.border='2px solid transparent';
    }

    backward();
   // hide();
    display();
    getForwardData();
   // dispId();
    confirm();
    storeData();
    clear();
    recover();
    markCheck();
    searchAll();

})
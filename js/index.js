document.addEventListener('DOMContentLoaded',function(){
    console.log('js loaded');
    const inpObj = document.querySelectorAll('.inp');
    console.log(inpObj.length);
    const noOfInpData = inpObj.length;
    for(let i=0;i<noOfInpData;i++){
        inpObj[i].value = i;
    }
    const markObj = document.querySelectorAll('.mark');
    const noOfMarkData = markObj.length;
    console.log(noOfMarkData);
    for(let i=0;i<noOfMarkData;i++)
    {
        markObj[i].style.borderRadius='10px';
        markObj[i].style.border='2px solid yellow';
    }
})
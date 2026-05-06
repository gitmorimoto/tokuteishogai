export function confirm(){
    console.log('confirm loaded');
    let inpObj = document.querySelectorAll('.inp');
    let dispObj = document.querySelectorAll('.disp');
    console.log(inpObj.length);
    
    if(inpObj.forEach(function(inp,index){
        console.log('inp.value: ' + inp.value);
        dispObj[index].textContent = inp.value;
        dispObj[index].style.fontSize ='10px';
    }));
   
}
const confirmBtn = document.getElementById('confirm');
confirmBtn.addEventListener('click',function(){
        console.log('confirm button clicked');
        confirm();
 })
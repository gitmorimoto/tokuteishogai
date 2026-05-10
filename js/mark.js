export function markCheck(){
    const markObj = document.querySelectorAll('.mark');
    markObj.forEach((elem,index)=>{
        console.log(elem);
        elem.addEventListener('click',function(){
            if(elem.style.borderColor==='transparent'){
                console.log('transparent');
                elem.style.borderColor = "red";
            }else{
                console.log('Not transparent');
                elem.style.borderColor = "transparent";
            }
        })
    })
}
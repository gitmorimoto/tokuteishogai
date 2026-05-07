export function clear(){
    console.log('clear module loaded');
    const clearBtn = document.getElementById('clear');
    const inpObj = document.querySelectorAll('.inp');
    clearBtn.addEventListener('click',function(){
        clearBtn.style.backgroundColor = "orange";
        inpObj.forEach((inp,index)=>{
        inp.value = "";
    })
    })
    
}
export function hide()
{
    let inpObj = document.querySelectorAll('.inp');
    for(let i=0;i<66;i++){
         inpObj[i].style.display = 'none';
    }
   
    inpObj[24].style.display = 'none';  
    inpObj[25].style.display = 'none';
}

export function display()
{
    let inpObj = document.querySelectorAll('.inp');
    for(let i=0;i<66;i++){
        if(inpObj[i]){
            inpObj[i].style.display = 'block';
        }
         
    }
   
    inpObj[24].style.display = 'block';  
    inpObj[25].style.display = 'block';
}

export function dispId()
{
    let inpObj = document.querySelectorAll('.inp');
    for(let i=0;i<67;i++){
         inpObj[i].value = 't'+i;
    }
   
}
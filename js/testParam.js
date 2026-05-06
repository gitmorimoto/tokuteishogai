export function hide()
{
    let inpObj = document.querySelectorAll('.inp');
    for(let i=0;i<40;i++){
         inpObj[i].style.display = 'none';
    }
   
    inpObj[24].style.display = 'none';  
    inpObj[25].style.display = 'none';
}
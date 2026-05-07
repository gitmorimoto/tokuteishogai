export function recover(){
    console.log('recover file loaded.');
    const recoverBtn = document.getElementById('recover');
    console.log(recoverBtn);
    recoverBtn.addEventListener('click',function(){
        recoverBtn.style.backgroundColor="orange";
        fetch('recover.php')
         .then(res=>{
            if(!res.ok){
                throw new error('net work failure.')
            }
            return res.json()
         })
         .then(data=>{
            console.log(data[0]);
            const inpObj = document.querySelectorAll('.inp');
            const markObj = document.querySelectorAll('.mark');
            inpObj.forEach((inp,index) => {
                inp.value = data[0][index];
            })
            markObj.forEach((Element,index)=>{
                if(data[1][index]===1){
                    Element.style.borderColor="red";
                }else{
                    Element.borderColor = "transparent";
                }
            })
         })
         .catch(error =>{
            console.error('Error fetching data:', error);
            throw error;
        })
    })
}
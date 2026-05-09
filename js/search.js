export function searchAll(){
    console.log('search.js loaded');
    fetch('searchAll.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data=>{
        console.log('Response from server:',data);
        const refListObj = document.getElementById('refList');
        data.forEach((elem)=>{
        console.log(elem);
        Object.entries(elem).forEach(([index,v])=>{
            console.log(index);
             const li = document.createElement('li');
            li.textContent = index;
       
            refListObj.appendChild(li);
            li.onclick=function (){
                li.style.background = "orange";
                console.log(v[0]);
                let tData = v[0];
                console.log(tData);
                console.log(typeof tData);
                let inpObj = document.querySelectorAll('.inp');
               
                Object.entries(tData).forEach((item,index)=>{
                    console.log(tData[index]);
                    inpObj[index].value = tData[index];
                })
                    
                
            }
        })
    })
/*
        const li = document.createElement('li');
        li.textContent = index;
       
        refListObj.appendChild(li);
        })
        */
    })
    .catch(error => {
            console.error('Error:',error);
    });



}
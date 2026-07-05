export function searchById(){
    const searchObj = document.getElementById('search');
    searchObj.addEventListener('click',function(){
        const selId = document.getElementById('t0').value;
        console.log('selId='+selId);
        fetch('getCaseSelectedById.php',{
            method:'POST',
            headers:{
                'Content-Type':'application/json'  
                },
            body:JSON.stringify({'selId':selId})
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('result of selCase');
            
            console.log(data);
            return data;
            
        })  
        .catch(error =>{
            console.error('Error fetching data:', error);
            throw error;
        })
     
    })
}
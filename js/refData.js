export function getRefData(num){
    return fetch('getRefData.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'  
        },
        body:JSON.stringify({num:num})
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('result of getRefData');
        
       
        return data;
            
    })  
    .catch(error =>{
        console.error('Error fetching data:', error);
        throw error;
    })
     



}
export function getForwardData(){
    console.log('getForwardData is loaded');
    getData();
    function deleteForwardData(){
        fetch('deleteForwardData.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Delete forward.json:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
    function getData(){
        fetch('getForwardData.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('data=', data);
                console.log(data);
                console.log(typeof data);
                const inpObj = document.querySelectorAll('.inp');
                if(data.length !== 0){
                    inpObj.forEach((inp,index)=>{
                        if(data[index]){
                            inp.value = data[index];
                        }
                        
                    })
                }
                deleteForwardData();
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
}
    
        
   
   
        

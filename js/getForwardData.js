export function getForwardData(){
    console.log('getForwardData is loaded');
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

    fetch('./temp/forward.json')
    .then(res=>{
        if(res.ok){
            console.log('The file exists.');
            return res.json();
        }else{
                console.log('No file.')
        }
    })
    .then(data=>{
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
    .catch(()=>{
            console.log('error');
    })

    
        
}
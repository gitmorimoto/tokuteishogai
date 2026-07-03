export function backward(){
    fetch('temp/backward.json')
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
       // console.log(typeof data);
       function deleteBackData(){
            console.log('deleteBackData function called');
            fetch('deleteBackData.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Delete backward.json:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        const inpObj = document.querySelectorAll('.inp');
        inpObj.forEach((inp,index)=>{
            if(data[index])
            {
                inp.value = data[index];
            }
            
        })
        deleteBackData();
    })
    .catch(()=>{
            console.log('error');
    })

}
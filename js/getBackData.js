export function backward(){
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
    fetch('temp/backward.json')
     .then(res=>{
        if(res.ok){
            console.log('The file exists.');
            console.log('res='+res);
           
            return res.json();
        }else{
                console.log('No file.')
            return null;
        }
    })
    .then(data=>{
        console.log(data);
        if(data === null) return;
        console.log(data);
       // console.log(typeof data);
      

        const inpObj = document.querySelectorAll('.inp');
        console.log(inpObj);
        inpObj.forEach((inp,index)=>{
            if(data[index])
            {
                inp.value = data[index];
            }
            
        })
        deleteBackData();
    })
    .catch(error => {
        console.log("catch called");
        console.log(error);
        console.error(error);
    })

}
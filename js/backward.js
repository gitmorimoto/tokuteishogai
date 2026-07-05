export function backward(){
    console.log('backward function called');
    const backwardBtn = document.getElementById('backwardBtn');
    if (!backwardBtn) {
        console.error('backwardBtn not found');
        return;
    }
    backwardBtn.addEventListener('click',function(){
        console.log('backward button clicked');
        const inpObj = document.querySelectorAll('.inp');
        let backDataArray = [];
        inpObj.forEach((element,index)=>{
            backDataArray[index] = element.value;
           
        })
        console.log('backDataArray=', backDataArray);
        fetch('backward.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(backDataArray)
        })
        .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
        })
        .then(data=>{
                console.log('Response from server:',data);
        })
        .catch(error => {
                console.error('Error:',error);
            
            

        })
        window.location.href = 'inpForm.php';
        
    })
}
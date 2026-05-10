export function forward(){
    console.log('forward function called');
    
    
    const forwardBtn = document.getElementById('cell79');
    
    if (!forwardBtn) {
        console.error('cell79 not found');
        return;
    }

    forwardBtn.addEventListener('click',function(){
        console.log('forward button clicked');
        //const inpObj = document.querySelectorAll('.inp');
        const inpObj = document.querySelectorAll('input.inp, textarea.inp');
        console.log('inpObj: ', inpObj);
        console.log(inpObj.length);
        const inpData = [];
        
        inpObj.forEach(function(inp){
             console.log(inp);
            console.log(inp.tagName);
            console.log(inp.id);
            let item = '';
            console.log('inp.value: ' + inp.value);
            if(
                inp.value !== undefined &&
                inp.value !== null &&
                inp.value.trim() !== '' &&
                inp.value !== 'null'
            ) {

                console.log('inp.value is not empty');

                item = inp.value;

            } else {

                item = '';

            }
            console.log('item: ' + item);
            inpData.push(item);
        });
            console.log('inpData: ', inpData);
        fetch('makeRefData.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(inpData)
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
        });
        //window.location.href = 'index.php';
    });
    
}
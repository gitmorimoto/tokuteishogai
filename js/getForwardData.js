export function getForwardData(){
    console.log('getForwardData is loaded');
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
    })
    .catch(()=>{
            console.log('error');
    })

    
        
}
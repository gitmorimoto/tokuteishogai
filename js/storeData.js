export function storeData(){
    const storeBtn = document.getElementById('store');
    storeBtn.addEventListener('click',function(){
        storeBtn.style.backgroundColor='orange';
        fetch('storeData.php')
        .then(res=>{
            if(!res.ok){
                throw new error('net work failure.')
            }
            return res.json()
        })
        .then(data=>{
            console.log(data);
        })
        .catch(error =>{
            console.error('Error fetching data:', error);
            throw error;
        })
    })
}
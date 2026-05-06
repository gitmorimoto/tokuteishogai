export function makeList(dataArray){
    const listContainer = document.getElementById('itemList');
    const liObj = document.createElement('li');
    console.log(dataArray[1]);
    liObj.textContent = '';
    listContainer.innerHTML = '';
    Object.entries(dataArray[1]).forEach(([k, v]) => {
        const liObj = document.createElement('li'); // ← ここ重要（毎回作る）
        const span0Obj = document.createElement('span');
        span0Obj.textContent = k ;
        const span1Obj = document.createElement('span');
        span1Obj.textContent = ':'+v;
        liObj.appendChild(span0Obj);
        liObj.appendChild(span1Obj); 
        listContainer.appendChild(liObj);
        liObj.addEventListener('click', () => {
            span0Obj.style.color = 'orange';
            console.log(span0Obj.textContent);
            let inpObj=document.getElementById('inp'+dataArray[0]);
            span0Obj.textContent = k ;
            inpObj.value = span0Obj.textContent;
        })
        
    })
    
}
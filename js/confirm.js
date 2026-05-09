export function confirm(){
    console.log('confirm loaded');
    const confirmBtn = document.getElementById('confirm');
    confirmBtn.addEventListener('click',function(){
        console.log('confirm button clicked');
        function westWareki(seireki){
            
            const [y, m, d] = seireki.split('-').map(Number);

            const date = new Date(y, m - 1, d);


            const wareki = new Intl.DateTimeFormat('ja-JP-u-ca-japanese', {
                era: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            }).format(date);

            console.log(wareki); 
            return wareki;
        }
        function westWarekiS(seireki){
            
            const [y, m] = seireki.split('-').map(Number);
           

            const dateS = new Date(y, m - 1);


            const warekiS = new Intl.DateTimeFormat('ja-JP-u-ca-japanese', {
                era: 'long',
                year: 'numeric',
                month: 'long',
               
            }).format(dateS);

            console.log(warekiS); 
            return warekiS;
        }

        let inpObj = document.querySelectorAll('.inp');
        let dispObj = document.querySelectorAll('.disp');
        let dataArray = [];
        if(dispObj.forEach(function(disp,index){
            console.log('index='+index);
            //console.log('dispObj['+index+']='+dispObj[index]);
            //console.log(inpObj[index].value);
            
            dataArray.push(inpObj[index].value);
            
            dispObj[index].style.fontSize ='10px';
            switch(index){
                case 3:
                case 7:
                case 8:
                case 9:
                case 12:
                case 42:
                case 45:
                case 62:
                    console.log(inpObj[index].value);
                    console.log(/^\d{4}-\d{2}-\d{2}$/.test(inpObj[index].value));
                    if(/^\d{4}-\d{2}-\d{2}$/.test(inpObj[index].value)){
                        console.log('seireki match');
                        let wareki = westWareki(inpObj[index].value);
                        console.log('wareki='+ wareki);
                        dispObj[index].textContent = wareki;
                    }else{  
                        dispObj[index].textContent = inpObj[index].value;
                       // dispObj[index].style.backgroundColor='red';

                    }
                    
                    
                    break;
                case 18:
                case 19:
                case 24:
                case 25:
                case 30:
                case 31:
                case 36:
                case 37:
                    console.log(inpObj[index].value);
                    let seirekiS = inpObj[index].value;
                    if(/^\d{4}-(0[1-9]|1[0-2])$/.test(inpObj[index].value)){
                        console.log('seireki match');
                        let warekiS = westWarekiS(inpObj[index].value);
                        if(typeof warekiS === 'string'){
                            warekiS=warekiS.replace('-','年');
                            warekiS = warekiS+'月';
                            console.log('warekiS='+ warekiS);
                            dispObj[index].textContent = warekiS;
                            dispObj[index].style.fontSize ='7px';
                        }
                    }else{  
                        dispObj[index].textContent = inpObj[index].value;
                       // dispObj[index].style.backgroundColor='red';

                    }
                    break;

                default:
                    dispObj[index].textContent = inpObj[index].value;
                    break;

            }
            
            
            
        }));
        console.log(dataArray);
        fetch('tempStore.php',{
            method:'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dataArray)
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


        const markObj = document.querySelectorAll('.mark');
        console.log(markObj);
        let markDataArray = [];
        markObj.forEach((elem,index)=>{
            if(elem.style.borderColor === 'transparent'){
                markDataArray[index]=0;
            }else{
                markDataArray[index]=1;
            }
        })
        console.log(markDataArray);
        fetch('markData.php',{
            method:'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(markDataArray)
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
 
        })
    
        
   
}

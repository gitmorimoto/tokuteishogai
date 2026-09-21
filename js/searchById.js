export function searchById(){
    console.log('searchById()');
    const searchObj = document.getElementById('search');
    searchObj.addEventListener('click',function(){
        const selId = document.getElementById('t0').value;
        console.log('selId='+selId);
        fetch('getCaseSelectedById.php',{
            method:'POST',
            headers:{
                'Content-Type':'application/json'  
                },
            body:JSON.stringify({'selId':selId})
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data[0]);
            console.log(data[1]);
            if(data[0]==0){
                const refListObj = document.getElementById('refList');
                refListObj.innerText = "";
                data[1].forEach(element => {
                    console.log(element);
                    let fileName = element.split('/').pop();
                    console.log(fileName);
                    fileName = fileName.split('.')[0];
                    let ts = fileName.split('_')[0];
                    let name = fileName.split('_')[1];
                    if(name==undefined){
                            name = ts;
                    }
                    //console.log(ts);
                
                    ts = ts + '000';
                    const date = new Date(Number(ts));
                    console.log(ts);
                
                    const formattedDate =
                        date.getFullYear() + "-" +
                        String(date.getMonth() + 1).padStart(2, "0") + "-" +
                        String(date.getDate()).padStart(2, "0");

                    console.log(formattedDate);
                    console.log(name); 
                    
                    
                    const child = document.createElement("div");
                    console.log(child);
                    child.className = 'caseLi';
                    child.textContent = name+'/'+formattedDate;
                    //alert(child.textContent);
                    console.log(child);
                    refListObj.appendChild(child);
                    child.addEventListener('click',function(){
                        child.style.backgroundColor= "orange";
                        console.log(element);
                        getCaseData(element);
                    })
                })
            }else if(data[0]==1){
                console.log(data[1]);
                const refListObj = document.getElementById('refList');
                refListObj.innerHTML = "";
                data[1].forEach((p,index)=>{
                    console.log(p);
                    console.log(index);
                    const listItem = document.createElement('div');
                    let str = p.split('/').pop();
                    str = str.split('.')[0];
                    listItem.textContent=str;
                    refListObj.appendChild(listItem);
                    listItem.addEventListener('click',function(){
                        listItem.style.backgroundColor="orange";
                        console.log(p);
                        fetch('getCaseData.php',{
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({'filePath':p})
                        })
                        .then(response =>response.json())
                        .then(data => {
                            console.log(data);
                            let inpObj = document.querySelectorAll('.inp');
                            console.log(inpObj[0]);
                            inpObj[0].value=data[1];
                            console.log(inpObj[0]);
                            inpObj[1].value = data[2]+data[4];
                            inpObj[2].value = data[3]+data[5];
                            inpObj[3].value=data[7];
                            inpObj[4].value=data[8];
                            inpObj[5].value=data[9];
        
          
                        })
                        .catch((reason) => {
                            console.log(reason);
                        })
                        
                    })
                })

            }else if(data[0]==2){
                alert('stop');
                location.href="../clientManager-Prototype/index.php";
            }
                function getCaseData(filePath){
                    fetch('getCaseData.php',{
                         method:'POST',
                    headers:{
                        'Content-Type':'application/json'  
                        },
                    body:JSON.stringify({'filePath':filePath})
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log(data);
                        if(data.length<12){
                            data.forEach((d,index)=>{
                                 let tdObj = document.querySelectorAll('.inp');
                                 let hName = "";
                                 let kName = "";
                                 let m1Obj = document.getElementById('m1');
                                 let m2Obj = document.getElementById('m2');
                                 switch(index){
                                    case 0:
                                        break;
                                    case 1:
                                        console.log(d);
                                        tdObj[0].value = d;
                                        break;
                                    case 2:
                                        console.log(d);
                                        tdObj[1].value = d;
                                        break;
                                    case 3:
                                        console.log(d);
                                        tdObj[2].value = d;
                                        break;
                                    case 4:
                                        console.log(d);
                                        hName = tdObj[1].value;
                                        hName = hName + d;
                                        console.log(hName);
                                        tdObj[1].value = hName;
                                        break;
                                    case 5:
                                        console.log(d);
                                        kName = tdObj[2].value;
                                        tdObj[2].value = kName+d;
                                        break;
                                    case 6:
                                        console.log(d);
                                        if(d=="男"){
                                            
                                            m1Obj.borderColor="red";

                                        }else{
                                            
                                            m2Obj.borderColor="red";
                                        }
                                        break;
                                    case 7:
                                        console.log(d);
                                        tdObj[3].value = d;
                                        break;
                                    case 8:
                                        console.log(d);
                                        tdObj[4].value = d;
                                        break;
                                    case 9:
                                        console.log(d);
                                        tdObj[5].value = d;
                                        break;
                                    default:
                                        break;

                                 }
                            })
                        }else{

                       
                            let tdObj = document.querySelectorAll('.inp');
                            let mdObj = document.querySelectorAll('.mark');
                            data[0].forEach((d,index)=>{
                                tdObj[index].value = d;
                            })
                            data[1].forEach((m,index)=>{
                                if(m==1){
                                    mdObj[index].style.border="2px solid red";
                                }else{
                                mdObj[index].style.border="";
                                }
                            
                            })
                        }
                    })  
                    .catch(error =>{
                        console.error('Error fetching data:', error);
                        throw error;
                    })
                }   
                
            });
            
        })  
        .catch(error =>{
            console.error('Error fetching data:', error);
            throw error;
        })
     
}


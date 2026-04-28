document.addEventListener('DOMContentLoaded',function(){
const container0Obj = document.getElementById('container0');
const row0 = document.createElement('div');
const row1 = document.createElement('div');
const row2 = document.createElement('div');
const row3 = document.createElement('div');
row0.style.width='100%';
row0.style.height='20px';
row0.style.borderBottom='1px solid white';
row0.style.display = 'flex';
container0Obj.appendChild(row0);
row1.style.width='100%';
row1.style.height='20px';
row1.style.borderBottom='1px solid white';
row1.style.display = 'flex';
container0Obj.appendChild(row1);
row2.style.width='100%';
row2.style.height='20px';
row2.style.borderBottom='1px solid white';
row2.style.display = 'flex';
container0Obj.appendChild(row2);
row3.style.width='100%';
row3.style.height='20px';
row3.style.borderBottom='1px solid white';
row3.style.display = 'flex';
container0Obj.appendChild(row3);
const cellObj = [];
for(let i=0;i<20;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    row0.appendChild(cellObj[i]);
}

for(let i=20;i<40;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    row1.appendChild(cellObj[i]);
}
for(let i=40;i<60;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    row2.appendChild(cellObj[i]);
}
for(let i=60;i<80;i++)
{
    cellObj[i]=document.createElement('div');
    cellObj[i].style.width='9%';
    cellObj[i].style.height='100%';
    cellObj[i].style.borderRight='1px solid white';
    cellObj[i].id='cell'+i;
    row3.appendChild(cellObj[i]);
}
//-----------------------------------------------------------------
const container1 = document.getElementById('container1');
container1.style.overflowY='scroll';
const frameObj = [];
for(let i=0;i<69;i++)
{
    frameObj[i] = document.createElement('div');
    frameObj[i].style.width='100%';
    frameObj[i].style.height='99%';
    frameObj[i].style.border = '1px solid white';
    frameObj[i].id='frame'+i;
    container1.appendChild(frameObj[i]);

}


})
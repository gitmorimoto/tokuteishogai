export function backward(){
    console.log('backward function called');
    const backwardBtn = document.getElementById('backwardBtn');
    if (!backwardBtn) {
        console.error('backwardBtn not found');
        return;
    }
    backwardBtn.addEventListener('click',function(){
        console.log('backward button clicked');
        window.location.href = 'inpForm.php';
    })
}
//Modal popup
const modal = document.getElementById('bg-modal');
const close = document.getElementById('close');
const trigger = document.getElementById('trigger');
trigger.onclick = function open(){
    modal.style.display="block";
}
close.onclick = function close(){
    modal.style.display="none";
}

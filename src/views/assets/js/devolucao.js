let equipamento = document.getElementById("selectEquipamento");
window.addEventListener('load', ()=>{
    loadSerial(equipamento.value);
});
equipamento.addEventListener('change',()=>{
    let id_equipamento = equipamento.value;
    loadSerial(id_equipamento);
});
const loadSerial = (id_equipamento)=>{
    let url = '/allure-rent/public/busca/serialEquip/'+id_equipamento;
    let req = new XMLHttpRequest();
    req.onreadystatechange = ()=>{
        document.getElementById('serialEquip').value = req.responseText;
    }
    req.open("GET",url);
    req.send();
};

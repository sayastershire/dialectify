// Variables and Examples
var IndonesianSample1 = "Andi bermain ke pasar minggu bersama dengan mama. Ia menginginkan untuk membeli 50 buah epal merah dan satu boks mainan terkenal pada jaman papa dulu, sedangkan mamanya menginginkan 13 buah baju baru. Pamannya berpesan kepada mamanya Andi untuk mengingatkannya mengenai janjian pada pukul lima nanti."

function filler1(){
    document.getElementById("input_text").innerText = IndonesianSample1;
    return 0;
}

function showLanguagePane(){
    document.getElementById("language-dialog").style.display = "";
    return 0;
}

function hideLanguagePane(){
    document.getElementById("language-dialog").style.display = "none";
}
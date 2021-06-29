//document.getElementById("javascript")

var variable_de_test = 666;
function addition_verification(numberA,numberB,suggestion)
{
    var suggestion_corrected = parseInt(suggestion);
    var result = numberA + numberB;
    if (suggestion == result){
        alert("champion");
    }
    document.getElementById("input_val").value = numberB + numberA;
    //alert("ça fonctionne pas trop mal : " + variable_de_test);
}
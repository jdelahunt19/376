function getValue(id){
    return parseFloat(document.getElementById(id).value);
}
function pythagorean() {
    var aValue = parseInt(document.getElementById("aValue").value)
    var bValue = parseInt(document.getElementById("bValue").value)

    var result= Math.pow(Math.pow(aValue,2) + Math.pow(bValue,2),1/2);
    document.getElementById("result1").innerHTML = result;
}

function Volume() {
    var cValue = parseInt(document.getElementById("cValue").value)
    var dValue = parseInt(document.getElementById("dValue").value)
    var eValue = parseInt(document.getElementById("eValue").value)

    var result= cValue * dValue * eValue;
    document.getElementById("result2").innerHTML = result;
}

function VolumeOfPyramid(){
    var fValue = parseInt(document.getElementById("fValue").value)
    var gValue = parseInt(document.getElementById("gValue").value)
    var hValue = parseInt(document.getElementById("hValue").value)
    
    var result= ((fValue * gValue * hValue) / 3);
    document.getElementById("result3").innerHTML = result;
}


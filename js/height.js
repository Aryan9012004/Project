function convert(){
    let ft = document.getElementById("ft").value;
    let inch = document.getElementById("inc").value;
    let temp=0;
    if(inch>11){
        let div=inch/12;
        ft=parseInt(ft)+parseInt(div);
        inch=inch%12;
    }
    temp=temp+ft*30.48;
    temp=parseInt(temp)+parseInt( (inch*2.58).toFixed(2));
    document.getElementById("cm").value=temp;
    
}

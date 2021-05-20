var x=prompt("Введите число");
var n=prompt("Введите степень");

function power(x,n) {
    let res=(x**n);
    if (isNaN(res)==true) {
        console.log("Вы ввели некорректные значения.");
    }
    else {
        console.log(res);
    }
}

power(x,n);




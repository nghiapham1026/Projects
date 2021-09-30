let calculate = document.getElementById('calculate');

    calculate.addEventListener('click', () => {
    event.preventDefault();
    calc();
        });

    function calc() {
    var radius = document.forms.circleForm.elements.namedItem("radius").value;
    var area = (radius ** 2) * Math.PI;
    document.getElementById("result").innerHTML = area;
}
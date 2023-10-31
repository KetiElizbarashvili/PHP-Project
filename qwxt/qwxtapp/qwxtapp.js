var txtsend = document.getElementById('txtsend');

var app = document.getElementById('responses');
app.addEventListener('click', function (e) {

    var clickedItem = e.target;

    var clickclass = clickedItem.getAttribute("class");

    if (clickclass == "btn") {
        txtsend.innerHTML = clickedItem.innerHTML;
        txtsend.setAttribute("class", "pstyle bluemessage");
    }
});
//=================================================================

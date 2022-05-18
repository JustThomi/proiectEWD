let logo = document.querySelector("#logo")

logo.addEventListener('click', function(event){
    event.stopPropagation();
    open("index.html", "_self");
})
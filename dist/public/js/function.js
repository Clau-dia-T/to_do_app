function setTheme(){
    if(theme == "dark"){
        themetoggle.src = "http://localhost/to_do/dist/public/css/img/icon-sun.svg";
        let dark = document.createElement("link");
        dark.rel = "stylesheet";
        dark.href = "http://localhost/to_do/dist/public/css/dark.css";
        document.getElementById("head").appendChild(dark);
    }
    else{
        themetoggle.src = "http://localhost/to_do/dist/public/css/img/icon-moon.svg";
    }
}

function showCompleted(){
    for(let i = 0; i < item.length; i++){
        if(item[i].classList.contains("active") || item[i].classList.contains("last")){
            item[i].style.display = "flex";
        }
        else{
            item[i].style.display = "none";
        }
    }
    for(let i = 0; i < filter.length; i++){
        if(i==2 || i==5){
            filter[i].classList.add("active");
        }
        else{
            filter[i].classList.remove("active");
        }
    }
}

function showIncompleted(){
    for(let i = 0; i < item.length; i++){
        if(item[i].classList.contains("active")){
            item[i].style.display = "none";
        }
        else{
            item[i].style.display = "flex";
        }
    }
    for(let i = 0; i < filter.length; i++){
        if(i==1 || i==4){
            filter[i].classList.add("active");
        }
        else{
            filter[i].classList.remove("active");
        }
    }
}

function showAll(){
    for(let i = 0; i < item.length; i++){
        item[i].style.display = "flex";
    }
    for(let i = 0; i < filter.length; i++){
        if(i==0 || i==3){
            filter[i].classList.add("active");
        }
        else{
            filter[i].classList.remove("active");
        }
    }
}
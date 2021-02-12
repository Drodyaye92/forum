let tabWindow = document.getElementsByClassName("tab-tete")[0].getElementsByTagName("div");


for (let i = 0; i < tabWindow.length; i++) {
    tabWindow[i].addEventListener("click", function() {

        document.getElementsByClassName("tab-tete")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabWindow[i].classList.add("active");
        document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("active")[0].classList.remove("active");
        document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("tab-corp")[i].classList.add("active");
    });
}

window.onscroll = function() {
    console.log(window.pageYOffset);
    var nav = document.getElementById('menu-header');
    if (window.pageYOffset > 100) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
}
function changeImage(id){
    let imagePath= document.getElementById(id).getAttribute("src");
    document.getElementById('mainImage').setAttribute('src',imagePath);
}
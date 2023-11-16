var img = [];
for (var i = 0; i < 4; i++ ){
    img[i] = new Image();
    img[i].src = "./img/anh" + i + ".JPG";
}
var interval = setInterval(slideshow, 2000);
index = 0;
function slideshow() {
    index++;
    if (index > 5) {
        index = 0;
    }
    document.getElementById("banner").src = img[index].src;


}
function next() {
    index++;
    if (index > 4) {
        index = 0;
    }
    document.getElementById("banner").src = img[index].src;

}
function pre() {
    index--;
    if (index < 0) {
        index = 3;
    }
    document.getElementById("banner").src = img[index].src;

}

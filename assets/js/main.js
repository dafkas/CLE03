window.addEventListener("load", init);
var numberOfLikes = 0;
var numberOfDislikes = 0;
var likeButton;
var dislikeButton;

function init() {
    likeButton = document.getElementById('like');
    likeButton.addEventListener('click', clickLike);
    dislikeButton = document.getElementById('dislike');
    dislikeButton.addEventListener('click', clickDislike);
}
function clickLike() {
    numberOfLikes += 1;
    document.getElementById("likes").innerHTML = numberOfLikes;
}
function clickDislike() {
    numberOfDislikes += 1;
    document.getElementById("dislikes").innerHTML = numberOfDislikes;
}

// Pastor Modal Data
var pastor_modal = document.getElementById("pastor-modal");
var pastor_btn = document.getElementById("pastor-btn");

pastor_btn.onclick = function() {
    pastor_modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == pastor_modal) {
      pastor_modal.style.display = "none";
    }
}
  
  
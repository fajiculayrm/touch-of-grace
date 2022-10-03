// Academy Modal Data
var ministry_modal = document.getElementById("ministry-modal");
var ministry_btn = document.getElementById("ministry-btn");
var close_min = document.getElementsByClassName("close-min")[0];

ministry_btn.onclick = function() {
    ministry_modal.style.display = "block";
}

close_min.onclick = function() {
  ministry_modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == ministry_modal) {
      ministry_modal.style.display = "none";
    }
}
  
  
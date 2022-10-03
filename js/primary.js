// Pastor Modal Data
var primary_modal = document.getElementById("primary-modal");
var primary_btn = document.getElementById("primary-btn");
var close_prim = document.getElementsByClassName("close-prim")[0];
primary_btn.onclick = function() {
    primary_modal.style.display = "block";
}

close_prim.onclick = function() {
  primary_modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == primary_modal) {
      primary_modal.style.display = "none";
    }
}
  
  
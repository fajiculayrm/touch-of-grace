// Profile Modal Data
var profile_modal = document.getElementById("profile-modal");
var profile_btn = document.getElementById("edit-profile");
var close_profile = document.getElementsByClassName("close")[0];

// Cell Report Modal Data
var cell_modal = document.getElementById("cell-modal");
var cell_btn = document.getElementById("cell-report");
var close_cell = document.getElementsByClassName("close")[1];

// Ministry Report Modal Data
var ministry_modal = document.getElementById("ministry-modal");
var ministry_btn = document.getElementById("ministry-report");
var close_ministry = document.getElementsByClassName("close")[2];

// Add Modal Data
var add_modal = document.getElementById("add-modal");
var add_btn = document.getElementById("add-disc");
var close_add = document.getElementsByClassName("close")[3];


// Open modal
profile_btn.onclick = function() {
    profile_modal.style.display = "block";
}
cell_btn.onclick = function() {
    cell_modal.style.display = "block";
}
ministry_btn.onclick = function() {
    ministry_modal.style.display = "block";
}
add_btn.onclick = function() {
    add_modal.style.display = "block";
}


// Close the modal with X
close_profile.onclick = function() {
    profile_modal.style.display = "none";
}
close_cell.onclick = function() {
    cell_modal.style.display = "none";
}
close_ministry.onclick = function() {
    ministry_modal.style.display = "none";
}
close_add.onclick = function() {
    add_modal.style.display = "none";
}


// Close the modal with window touch
window.onclick = function(event) {
    if (event.target == profile_modal) {
        profile_modal.style.display = "none";
    }
    if (event.target == cell_modal) {
        cell_modal.style.display = "none";
    }
    if (event.target == ministry_modal) {
        ministry_modal.style.display = "none";
    }
    if (event.target == add_modal) {
      add_modal.style.display = "none";
    }
}


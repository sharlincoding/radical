// Script

// Sidebar Toggle JS
const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
})

// Sidebar Page Aciveness
document.addEventListener("DOMContentLoaded", function () {
    // Get the current page path
    var currentPagePath = window.location.pathname;

    // Get all sidebar links
    var sidebarLinks = document.querySelectorAll('.sidebar-link');

    // Remove "active" class from all sidebar links
    sidebarLinks.forEach(function(link) {
        link.classList.remove('active');
        link.closest('.sidebar-item').classList.remove('active');
    });

    // Loop through each sidebar link
    for (var i = 0; i < sidebarLinks.length; i++) {
        // Check if the current page path contains the link's href
        if (currentPagePath.includes(sidebarLinks[i].getAttribute('href'))) {
            // Add the "active" class to the link and its parent (sidebar-item)
            sidebarLinks[i].classList.add('active');
            sidebarLinks[i].closest('.sidebar-item').classList.add('active');
            // Break out of the loop since we found a match
            break;
        }
    }
});

// Sidebar Toggle JS Ends



// Text and Url Box Toggle JS in Add News Page

document.addEventListener('DOMContentLoaded', function () {
    var imgtextButton = document.getElementById('image-text-box-layer');
    var imgurlButton = document.getElementById('image-url-box-layer');
    var imgLinkCol = document.getElementById('img-link-col');

    imgtextButton.addEventListener('click', function () {
        toggleVisibility(imgtextButton, imgLinkCol);
    });

    imgurlButton.addEventListener('click', function () {
        toggleVisibility(imgtextButton, imgLinkCol);
    });

    var videotextButton = document.getElementById('video-text-box-layer');
    var videourlButton = document.getElementById('video-url-box-layer');
    var videoLinkCol = document.getElementById('video-link-col');

    videotextButton.addEventListener('click', function () {
        toggleVisibility(videotextButton, videoLinkCol);
    });

    videourlButton.addEventListener('click', function () {
        toggleVisibility(videotextButton, videoLinkCol);
    });

    function toggleVisibility(button, linkCol) {
        // Check if the button has the 'active' class
        if (button.classList.contains('active')) {
            linkCol.style.display = 'none';
        } else {
            linkCol.style.display = 'block';
        }
    }
});

// Text and Url Box Toggle JS in Add News Page Ends
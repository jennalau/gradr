$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    // API link (endpoint) to get advice based on user's input
    let endpoint = "https://api.adviceslip.com/advice";
    
    ajax(endpoint, displayResults);
    
});


// make API call
function ajax(endpoint, func) {

    let xhr = new XMLHttpRequest();

    xhr.open("GET", endpoint, true);
    xhr.send();

    xhr.onreadystatechange = function() {
        // console.log(this);

        if(this.readyState == this.DONE) {
            // successful response
            if(this.status == 200) {
                //JSON.parse() converts JSON string into JS objects
                console.log(JSON.parse(xhr.responseText));

                let result = JSON.parse(xhr.responseText);
                let advice = result['slip'].advice;

                func(advice);

            } else { // error
                console.log("AJAX ERROR!");
                console.log(xhr.status);
            }
        }
    }
}


function displayResults(text) {
    let card = document.querySelector("#quote");
    card.innerHTML = text;
}
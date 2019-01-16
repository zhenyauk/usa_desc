$(document).ready(function() {

    //Autocompleat in first step
    $("#autoc").easyAutocomplete(options);

    //Trigger for form
    $("#clickme").click(function(){
        $("#submit-button").trigger('click');
    });
});
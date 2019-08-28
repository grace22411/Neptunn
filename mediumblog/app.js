$(document).ready(function() {
    var $content = $("#jsonContent");
    var data = {
        rss_url: "https://medium.com/feed/@studioneptunn"
    };
    $.get("https://api.rss2json.com/v1/api.json", data, function(response) {
        if (response.status == "ok") {
            var output = "";
            $.each(response.items, function(k, item) {
                // var visibleSm;
                // if (k < 3) {
                //     visibleSm = "";
                // } else {
                //     visibleSm = " visible-sm";
                // }
                // output += '<div class="col-sm-6 col-md-4' + visibleSm + '">';
                output += '<div class=" fist col s12 m4 l4">';
                output += '<div class="card transparent"><div class="card-content black-text">';
                output += '<h2><a href="'+ item.link +'" target="_blank" class="black-text">' + item.title + '</a></h2>';

                var yourString = item.description.replace(/<img[^>]*>/g, ""); //replace with your string.
                var maxLength = 100; // maximum number of characters to extract
                //trim the string to the maximum length
                var trimmedString = yourString.substr(0, maxLength);
                //re-trim if we are in the middle of a word
                trimmedString = trimmedString.substr(
                    0,
                    Math.min(trimmedString.length, trimmedString.lastIndexOf(" "))
                );
                output += "<p>" + trimmedString + "...</p>";
                output += "</div></div></div>";
                return k < 3;
            });
            $content.html(output);
        }
    });

});
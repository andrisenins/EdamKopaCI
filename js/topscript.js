$(document).ready(function () {
$('#go-to-top').click(function() {
   $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
});
});
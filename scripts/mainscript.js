
$(document).ready(function () {
    var windowPath = window.location.pathname;
    if (windowPath === "/DadConsulting/index.php" || windowPath === "" || windowPath === "index.php") {
        $(document).ready(function () {
            $("nav").attr("data-spy", "affix");
            $("nav").attr("data-offset-top", "200");
        });
    } else if (windowPath === "/DadConsulting/contact_us.php" || windowPath === "contact_us.php") {
        $(".navbar-nav").prepend("<li><a href='index.php'>Home</a></li>");
        $("#contact-nav").css("text-decoration", "underline");
    } else if (windowPath === "/DadConsulting/about.php" || windowPath === "/about.php") {
        $(".navbar-nav").prepend("<li><a href='index.php'>Home</a></li>");
        $("#about-nav").css("text-decoration", "underline");
    }
    $('.scrollspy_navbar').hide();
});


jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .saddClass("active");
        }
    });

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });
});

function GetSelectedValue1() {
    const f = document.getElementById("value1");
    const result = f.options[f.selectedIndex].value;

    const e = document.getElementById("value2");
    const result2 = e.options[e.selectedIndex].value;

    var h = "Total amount: ";

    const g = h + (+result + +result2)*50;
    document.getElementById("result3").innerHTML = g;
}

function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}

function removeData(chart) {
    chart.data.labels.pop();
    chart.data.datasets.forEach((dataset) => {
        dataset.data.pop();
    });
    chart.update();
}

$(function () {
    $('[data-toggle="popover"]').popover()
})

$(function () {
    $('.popover').popover({
        container: 'body'
    })
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
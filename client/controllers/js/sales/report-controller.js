const createReport = () =>{
    $.ajax({
        type: "POST",
        url: "./controllers/php/sales/report-controller.php",
        data: {

        },
        dataType: "json",
        success: function (pdf) {
            console.log("url->",pdf);
            window.open(pdf, '_blank');
        }
    });
};
function printDiv(divId) {
    var content = document.getElementById(divId).innerHTML;
    var myWindow = window.open('', '', 'width=800,height=600');
    myWindow.document.write('<html><head><title>Impression</title>');
    myWindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">');
    myWindow.document.write('</head><body>');
    myWindow.document.write(content);
    myWindow.document.write('</body></html>');
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
}

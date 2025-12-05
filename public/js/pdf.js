async function generatePDF(divId) {
    const element = document.getElementById(divId);

    // Capture l'élément en image
    const canvas = await html2canvas(element, { scale: 2 });

    const imgData = canvas.toDataURL("image/png");

    const { jsPDF } = window.jspdf;

    // Format PDF portrait A4
    const pdf = new jsPDF("p", "mm", "a4");

    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

    pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);

    pdf.save("article_details.pdf");
}

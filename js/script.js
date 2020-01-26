var base64Img = null
margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
}

function generatePDF () {
  var pdf = new jsPDF()
  pdf.fromHTML(
    //Content
    document.getElementById('pdf-wrapper'),
    //X margin
    margins.left,
    //Y Margin
    margins.top,
    //Settings
    {
      width: margins.width 
    },
    //callBack
    function (dispose) {
      
    },
    //Margins
    margins
  )
  pdf.save("PartyMania-Report.pdf");

}

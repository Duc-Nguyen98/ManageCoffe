<footer class=" text-muted">
    <!-- Copyright -->
    <div class="p-3 d-flex flex-row justify-content-between ">
        <div class="text-lef"></div>
        <div class="text-right"><b>HNMU-Version Beta:</b> 1.0.0</div>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://unpkg.com/filepond@4.31.1/dist/filepond.min.js"></script>
<script src='https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js'></script>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.umd.min.js"></script>

<!--Daterange-->
<script src="js/daterange.js"></script>

<!--PDF-->
<script src="js/html2pdf.bundle.min.js"></script>
<script type="text/javascript">
    document.getElementById('dl-pdf').onclick = function(){
        var element =document.getElementById('table');
        var opt = {
            margin: 0.5,
            filename: 'PDF.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
        }
        html2pdf(element, opt);
    };
</script>

<!--Excel-->
<script src="js/table2excel.js"></script>

<script>
  document.getElementById('downloadexcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("table"));
    });
</script>

<!--Search-->
<script src="js/search.js"></script>

<!--In-->
<script>
document.getElementById('printBtn').addEventListener('click', function() {
    printData();
});

function printData() {
    window.print();
}

</script>
</body>
</html>
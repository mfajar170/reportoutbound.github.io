</main>
<script src="script.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    /* javascript */

    let copybox = document.getElementById("copybox");
    let tombolcpy = document.getElementById("tombolcpy");
    tombolcpy.onclick = function() {
        copybox.select();
        document.execCommand("copy");
        tombolcpy.innerText = "Tersalin !!!"
    }
</script>
</body>

</html>
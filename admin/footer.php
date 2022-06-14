

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


<script>
    dauChamSo();

    function dauChamSo() {
        let arr = Array.from(document.getElementsByClassName("priceX"));
        const hashText = (str) => {
            let strReverse = str.trim().split("").reverse();
            let result = "";
            strReverse.forEach((char, index) => {
                if (index % 3 == 0) {
                    result += ".";
                }
                result += char;
            });
            let strResult = result
                .split("")
                .reverse()
                .join("")
                .slice(0, result.length - 1);
            return strResult.toString();
        };

        arr.forEach((element) => {
            element.textContent = hashText(element.textContent);
        });
    }
</script>

</body>

</html>
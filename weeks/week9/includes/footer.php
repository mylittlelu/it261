<footer>
   <div id="inner-footer">
    <ul>
        <li>Copyright &copy; 2023</li>
        <li>All Rights Reserved</li>
        <li> || </li>
        <li><a href="index.php">Web Design by AVANV</a></li>
        <li> || </li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li> || </li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
   </div>   <!--end inner footer -->
</footer>
    <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
    
    <!-- <?php 
    //release web server resources
    @mysqli_free_result($result);

    //close connection to mysql
    @mysqli_close($iConn);
    ?> -->

</body>
</html>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="template/dist/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>


<script>
    var aktif = 0;
    $(document).ready(function() {
        $("#toogle").click(function() {
            if(aktif == 0){
                $("#maximini").addClass("side-nav--simple");
                $("#side-profil").hide();
                $("#font-lasik").hide();
                aktif = 1;
            }else{
                $("#maximini").removeClass("side-nav--simple");
                $("#side-profil").show();
                $("#font-lasik").show();
                aktif = 0;
            }
        });
   
    });
</script>
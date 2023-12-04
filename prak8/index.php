<form id="data_mhs">
<label for="prodi">
Program Studi
</label>

<select name="prodi" id="prodi">
    <option value="" disabled="" selected=""> Pilih Program Studi </option>
    <option value="IF"> Teknik Informatika </option>
    <option value="EL"> Teknik Elektro </option>
    <option value="DKV"> Desain Komunikasi Visual </option>
    <option value="TP"> Teknik Perkeretaapian </option>
    <option value="TK"> Teknik Kimia </option>
    <option value="AR"> Arsitektur </option>
    <option value="PWK"> Perencanaan Wilayah dan Kota </option>
</select>
</form>
<br>
<div id="show_data"><table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
$(document).ready(function(){
    $("#prodi").change(function(){
        var value=$(this).val();
    $.ajax({
        url:"show.php",
        type:"POST",
        data:"request=" + value,
        success:function(data){
            $("#tampil_data").html(data);
        }
    }) 
});
});
</script>

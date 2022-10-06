<html>
<form> 

<input type="text" id="nome"/>

<input type="submit" value="Preencher campo" onclick="preencherCampo()"> 

<script>
    function preencherCampo(){
        var nome = document.getElementbyId("nome").value;
        alert(nome);
        document.getElementbyId("nome").setAttribute("value", "TESTETESTE");
    }

</script>
</form>
</html>
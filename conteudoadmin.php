<?php

require_once 'Database.php';


    $sql = "select mensagem from conteudo where rota = :rota";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("rota", $rota); //A variável $rota é definida no header.php
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    
?>


<form method='POST' action='update' >
<textarea id="editor1" name="editor1"><p><?php printf($res['mensagem']); ?></p></textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
<input type="hidden" name="rota" value='<?php echo $rota; ?>'>
<input type="submit" />
</form>
</div>
</body>
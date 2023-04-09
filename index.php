<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    








    <section class="contato">
        <div class="container-contato">

            <form action="./add_mensagem.php" method="post">
                <div class="input-group">
                    <label for="nome" >Nome</label>
                    <input type="text" id="nome" name="nome">
                </div>

                <div class="input-group">
                    <label for="nome" >Telefone</label>
                    <input type="text" id="telefone" name="telefone">
                </div>
                
                <div class="input-group">
                    <label for="nome" >Email</label>
                    <input type="text" id="email" name="email">
                </div>
                
                <div class="input-group">
                    <label for="nome" >Mensagem</label>
                    <textarea id="mensagem" name="mensagem"></textarea>
                </div>
                
                <button >Enviar</button>


            </form>

        </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <section id="global">
        <header>
            <h4>Cadastro de Clientes</h4>
        </header>
        <main>
            <form id="" method="POST" action="forms.php">
                <label for="nome"><br>Seu nome aqui:<br></label>
                <input id="nome" type="text" name="nome" placeholder="Seu nome aqui" required/>

                <label for="email"><br>Seu email:<br></label>
                <input id="email" name="email" type="email" placeholder="Seu email aqui" required/>

                <label for="estado"><br>Seu Estado:<br></label>
                <select name="estado" id="estado">//serve para dar nome ao grupo a baixo como um titulo não clicavel
                    <option><br>Selecione aqui:</option>//serve para agrupar ações
                    <optground>
                        <option value="SP">São Paulo</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PR">Paraná</option>
                    </optground>
                </select>
                
                <label for="cidade"><br>Digite sua Cidade:<br></label>
                <input id="cidade" name="cidade" type="text" placeholder="Sua cidade" required/><br>
                
                <button type="submit">Enviar<br></button>
            </form>
        </main>
    </section>
</body>
</html>
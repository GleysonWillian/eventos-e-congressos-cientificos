<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Inscrições</title>

    <style>
        .navbar .nav-link {
            color: white !important;
        }

        .navbar .nav-link:hover {
            color: #08121a9e !important;
            /* cor ao passar o mouse, opcional */
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler:focus {
            outline: none !important;
            box-shadow: none !important;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg custom-navbar fixed-top glass-navbar"
        style="top: 0px; z-index: 10; padding-left: 40px; padding-right: 40px; height: auto; position: fixed; background-color: #165082; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; font-size: large;">
        <div class="container">
            <!-- Você pode adicionar um logo à esquerda se quiser -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:white;"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" style="color: white !important;">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html#Top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#PrincipaisPalestrantes">Principais Palestrantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Datas">Datas e Local</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="programacao.html">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="local.html">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscricoes.php#inscricoes">Inscrições</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <form class="row g-3 col-md-8 mx-auto" action="config.php" method="POST">
            <div class="col-md-12">
                <fieldset class="border p-3">
                    <legend class="float-none w-auto p-2">Dados Pessoais</legend>
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" required>
                    </div>
                </fieldset>
            </div>

            <div class="col-md-12">
                <fieldset class="border p-3">
                    <legend class="float-none w-auto p-2">Endereço</legend>
                    <div class="col-md-6">
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" class="form-control" name="logradouro" id="logradouro" required>
                    </div>
                    <div class="col-md-6">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" required>
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" required>
                    </div>
                    <div class="col-md-4">
                        <label for="pais" class="form-label">País</label>
                        <input type="text" class="form-control" name="pais" id="pais" required>
                    </div>
                </fieldset>
            </div>

            <div class="col-md-12">
                <fieldset class="border p-3">
                    <legend class="float-none w-auto p-2">Dados de Graduação</legend>
                    <div class="col-md-6">
                        <label for="titulacao" class="form-label">Titulação</label>
                        <select class="form-select" name="titulacao" id="titulacao" required>
                            <option value="">-- Selecione --</option>
                            <option value="Tecnico">Técnico</option>
                            <option value="Tecnologo">Tecnólogo</option>
                            <option value="Licenciado">Licenciado</option>
                            <option value="Bacharel">Bacharel</option>
                            <option value="MBA">MBA</option>
                            <option value="Mestre">Mestre</option>
                            <option value="Doutor">Doutor</option>
                            <option value="Pos-Doc">Pós-Doc</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="instituicao" class="form-label">Instituição / Universidade</label>
                        <input type="text" class="form-control" name="instituicao" id="instituicao" required>
                    </div>
                </fieldset>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Enviar</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>
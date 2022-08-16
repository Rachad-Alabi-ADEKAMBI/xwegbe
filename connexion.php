<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Xwegbe - Connexion</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="connexion"> <br><br>
        <form action='model.php?action=login' class='' method='POST'>

            <h1 class='subtitle'>
                Connexion
            </h1> <br>

            <div class='row'>
                <div class='col'>Nom d'utilisateur ou email:
                    <input type='text' class='form-control' v-model='username' name='email'
                        placeholder='Email' required>
                </div>
            </div> <br>

            <div class='row'>
                <div class='col'>Mot de passe:
                    <input type='pass' class='form-control' v-model='fullname' name='pass'
                        placeholder='Mot de passe' required>
                </div>
            </div> <br>

            <label for="">
                <button type='submit'>
                    Connexion
                </button>
            </label>

        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <!--
    Bobby Kingsada
    1/19/18
    personal-info.php
    The view for the index page of my dating site
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>dating 101</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../dating101/">dating 101</a>
</nav>

<div class="container">
    <div class="card mx-auto" id="main">
        <div class="card-block">
            <h2>Personal Information</h2>
            <hr>
            <form action="profile" method="POST">
                <div class="row h-100">
                    <div class="col-md-8 justify-content-start" id="formInfo">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" name="inputFirstName" id="inputFirstName" value="<?= ($firstName) ?>">
                            <?php if ($errors['firstName']): ?>
                                <p class="error"><?= ($errors['firstName']) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="inputLastName" id="inputLastName" value="<?= ($lastName) ?>">
                            <?php if ($errors['lastName']): ?>
                                <p class="error"><?= ($errors['lastName']) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="inputAge">Age</label>
                            <input type="text" class="form-control" name="inputAge" id="inputAge" value="<?= ($age) ?>">
                            <?php if ($errors['age']): ?>
                                <p class="error"><?= ($errors['age']) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <br>
                            <div class="container" id="genderGroup">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inputGender" id="male" value="Male" <?= ($genderMale) ?>>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline" id="femaleGroup">
                                    <input class="form-check-input" type="radio" name="inputGender" id="female" value="Female" <?= ($genderFemale) ?>>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone Number</label>
                            <input type="text" class="form-control" name="inputPhone" id="inputPhone" value="<?= ($phone) ?>">
                            <?php if ($errors['phone']): ?>
                                <p class="error"><?= ($errors['phone']) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-check">
                            <label>Premium Membership</label><br>
                            <input type="checkbox" class="form-check-input" name="inputPremium" id="inputPremium" <?= ($premium) ?>>
                            <label class="form-check-label" for="inputPremium">Sign me up for a Premium Account!</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-secondary text-center" role="alert">
                            <strong>Note: </strong>All information entered is protected by our <a href="">privacy policy</a>. Profile information can only be viewed by others with your permission.
                        </div>
                        <div class="d-flex align-items-end justify-content-end w-100" id="buttonArea">
                            <button class="btn btn-primary" name="submit" id="submit">Next ></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
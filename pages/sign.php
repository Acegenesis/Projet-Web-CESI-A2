<?php include('../components/header.php');
if (isset($_GET['type']) && $_GET['type'] === 'up') $c = 1;
else $c = 0;
?>
<form id="form">

    <h1><?php echo ($c === 0) ? 'SIGN IN' : 'SIGN UP' ?></h1>
    <div>
        <input type=text class="formInput" placeholder="Write your username" pattern="^[a-zA-Z]+\.[a-zA-Z]+$" onkeydown="return /[a-z.]/i.test(event.key)" required>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
        </svg>
    </div>
    <div>
        <input type=password id=password class="formInput" placeholder="Write your password" minlength="8" required>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
        </svg>
    </div>
    <?php if ($c != 0) : ?>
        <div>
            <input type=password id=confirm_password class="formInput" placeholder="Confirm your password" minlength="8" required>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
            </svg>
        </div>
    <?php endif; ?>
    <a href="<?php echo ($c === 0) ? 'sign.php?type=up' : 'sign.php?type=in' ?>" id="help"><?php echo ($c === 0) ? 'Don\'t have an account ?' : 'Already have an account ?' ?></a>
    <button id="connectBtn" type=submit onclick="checkPasswordMatch()">
        <?php echo ($c === 0) ? 'Connect' : 'Confirm' ?></button>
</form>

<script  type="text/javascript" src="../assets/JS/sign.js"></script>
<?php include('../components/footer.php'); ?>
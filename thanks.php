
<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['lastName']) || (empty($_POST['lastName'])) || (trim($_POST['lastName']) === '')) {
        $errors[] = 'The lastname is required';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is required';
    }
    if (!isset($_POST['firstName']) || (empty($_POST['firstName'])) || (trim($_POST['firstName']) === '')) {
        $errors[] = 'The firstname is required';
    }
    if (!isset($_POST['number']) || (empty($_POST['number'])) || (trim($_POST['number']) === '')) {
        $errors[] = 'The telephone number is required';
    }
    if (!isset($_POST['subject']) || (empty($_POST['subject'])) || (trim($_POST['subject']) === '')) {
        $errors[] = 'The subject is required';
    }
    if (!isset($_POST['message']) || (empty($_POST['message'])) || (trim($_POST['message']) === '')) {
        $errors[] = 'The message is required';
    }
}
?>

<?php
if ($errors):
    foreach ($errors as $error):
        ?>
        <ul>
            <li><?php echo $error; ?></li>
        </ul>
    <?php
    endforeach;
    else:
    ?>
        <p>Merci <?php echo ($_POST['lastName']);?> <?php echo ($_POST['firstName'])?> de nous avoir contacté à propos de <?php echo ($_POST['subject']) ?> </p>
       <p>Un de nos conseillers vous contactera soit à l’adresse <?php echo ($_POST['email']);?> ou par téléphone au <?php echo ($_POST['number']);?> dans les plus brefs délais pour traiter votre demande :</p>
    <?php echo ($_POST['message'])?>
    <?php
endif;
?>

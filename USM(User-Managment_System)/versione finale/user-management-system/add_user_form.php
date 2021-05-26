<?php 
use sarassoroberto\usm\entity\User;
use sarassoroberto\usm\model\InteresseModel;
use sarassoroberto\usm\model\UserInteresseModel;
use sarassoroberto\usm\model\UserModel;
use sarassoroberto\usm\service\UserSession;
use sarassoroberto\usm\validator\bootstrap\ValidationFormHelper;
use sarassoroberto\usm\validator\UserValidation;

//ini_set('memory_limit','16');
require "./__autoload.php";
(new UserSession())->redirect();

/** $action rappresentà l'indirizzo a cui verranno inviati i dati del form */
$action = './add_user_form.php';
$submit = 'aggiungi nuovo utente';
$aggiungiInteresse = "./new_user_interesse_form.php";
$eliminaInteresse = "./delete_interesse_from_form.php";


$Interessi = new InteresseModel();
$listInteressi = $Interessi->readAll();

if($_SERVER['REQUEST_METHOD'] ==='GET'){
    
    /** Il form viene compilato "vuoto" */
    list($firstName,$firstNameClass,$firstNameClassMessage,$firstNameMessage) = ValidationFormHelper::getDefault();
    list($lastName,$lastNameClass,$lastNameClassMessage,$lastNameMessage) = ValidationFormHelper::getDefault();
    list($email,$emailClass,$emailClassMessage,$emailMessage) = ValidationFormHelper::getDefault();
    list($birthday,$birthdayClass,$birthdayClassMessage,$birthdayMessage) = ValidationFormHelper::getDefault(); 
    list($password, $passwordClass, $passwordClassMessage, $passwordMessage) = ValidationFormHelper::getDefault();
    
}

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $idInteresse = $_POST["idInteresse"];
    $user = new User($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['birthday'] , $_POST['password']);
    $val = new UserValidation($user);
    $firstNameValidation = $val->getError('firstName');
    $lastNameValidation = $val->getError('lastName');
    $emailValidation = $val->getError('email');
    $birthdayValidation = $val->getError('birthday');
    $passwordValidation = $val->getError('password');

    list($firstName, $firstNameClass, $firstNameClassMessage, $firstNameMessage) = ValidationFormHelper::getValidationClass($firstNameValidation);
    list($lastName, $lastNameClass, $lastNameClassMessage, $lastNameMessage) = ValidationFormHelper::getValidationClass($lastNameValidation);
    list($email, $emailClass, $emailClassMessage, $emailMessage) = ValidationFormHelper::getValidationClass($emailValidation);
    list($birthday, $birthdayClass, $birthdayClassMessage, $birthdayMessage) = ValidationFormHelper::getValidationClass($birthdayValidation);
    list($password, $passwordClass, $passwordClassMessage, $passwordMessage) = ValidationFormHelper::getValidationClass($passwordValidation);

    $user->setBirthday($birthday);

    if ($val->getIsValid()) {
        // TODO
        
        $userModel = new UserModel();
        $userModel->create($user);
        $userJustCreated = $userModel->readByEmail($user->getEmail());
        $UserInteresseModel = new UserInteresseModel($userJustCreated->getUserId() ,$idInteresse);
        $UserInteresseModel->associateUserToHobbies();
        header('location: ./list_users.php');
    }
}

include 'src/view/add_user_view.php';
?>

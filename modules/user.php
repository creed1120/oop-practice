<?php

require_once('classes/Transaction.php');
require_once('classes/Administrator.php');
require_once('classes/User.php');
require_once('functions/custom_functions.php');

    // $transaction = new Transaction(100, 'Transaction 1');

    // $transaction->addTax(8);

    // $transaction->applyDiscount(15);

    // // dump_var($transaction->amount);

    // echo "<h3>Discounted Price: $". $transaction->amount ."</h3>";

    // die();


    $user = new User('Ceddy Reed', 'ceddy@maildoor.com');
    $user2 = new User('Reggie Valentine', 'reggiev@truevibes.com');
    $user3 = new Administrator('Super Admin', 'sp@email.com', 'Executive');

    // echo $user->name . "<br>";
    // echo $user2->name . "<br>";
    // echo $user->addFriend();

    // echo "<p>". $user->getEmail() ."</p>";
    // echo $user2->name . " " . $user2->getEmail() . " " . $user2->role . "<br>";
    // echo $user->getEmail() . "<br>";
    // echo $user->setEmail('newemail@mail.com') . "<br>";
    // echo $user3->name . " " . $user3->getEmail() . " " . $user3->adminLevel , " " . $user3->role . "<br>";

    // echo "<p>". $user3->getEmail() ."</p>";
    
?>

<div style="display: block; border: 1px solid #333333; padding: 30px; width: 500px; margin: 50px;">
    <h3>This is the "User Module Block"</h3>
    <p>User Name: <?php echo $user->name ?></p>
    <p>User Email: <?php echo $user->getEmail() ?></p>
</div>
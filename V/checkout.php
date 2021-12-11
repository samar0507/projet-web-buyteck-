

<?php
require_once  '../vendor/autoload.php';

  \Stripe\Stripe::setApiKey('sk_test_51JzmtLGYaoU1KBWWzsxIIzjbBd3Ah9PnFb7IQ5z31DBhb3SzeoQlHixjmBeOViVycl6xq51hVThA8RAgTG6XIdNP00DYiDNmVF');
  include_once "../config.php";
  include "../C/commandesController.php";
  $i=new CommandesController();
  $c=$i->getCommande(1);

  
 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];
 $num_commande=$_GET["num_commande"];
 $prixTotal=$_GET["prixTotal"];


// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer


$charge = \Stripe\Charge::create(array(

  "amount" =>  $prixTotal*100,
  "currency" => "eur",
  "description" => $num_commande,
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
];

/*// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);*/

// Redirect to success
header('Location: suc.php?tid='.$charge->id.'&product='.$charge->description);
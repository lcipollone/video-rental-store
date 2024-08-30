<?php

$codedir = '../src';

require_once("$codedir/PricingStrategy/PricingStrategy.php");
require_once("$codedir/PricingStrategy/ChildrenPricingStrategy.php");
require_once("$codedir/PricingStrategy/NewReleasePricingStrategy.php");
require_once("$codedir/PricingStrategy/RegularPricingStrategy.php");
require_once("$codedir/StatementFormat/StatementFormat.php");
require_once("$codedir/StatementFormat/TextStatementFormat.php");
require_once("$codedir/StatementFormat/HTMLStatementFormat.php");
require_once("$codedir/Classification/Classification.php");
require_once("$codedir/Classification/RegularClassification.php");
require_once("$codedir/Classification/NewReleaseClassification.php");
require_once("$codedir/Classification/ChildrenClassification.php");

require_once("$codedir/Movie.php");
require_once("$codedir/Rental.php");
require_once("$codedir/Customer.php");


$prognosisNegative = new Movie("Prognosis Negative", new NewReleaseClassification());
$sackLunch = new Movie("Sack Lunch", new ChildrenClassification());
$painAndYearning = new Movie("The Pain and the Yearning", new RegularClassification());

$customer = new Customer("Susan Ross");
$customer->addRental(new Rental($prognosisNegative, 3));
$customer->addRental(new Rental($painAndYearning, 1));
$customer->addRental(new Rental($sackLunch, 1));

$textFormat = new TextStatementFormat();
$htmlFormat = new HTMLStatementFormat();

$textStatement = $customer->statement($textFormat);
$htmlStatement = $customer->statement($htmlFormat);

echo '<h2>Text Statement:</h2>';
echo '<pre>';
echo $textStatement;
echo '</pre>';

echo '<h2>HTML Statement:</h2>';
echo $htmlStatement;

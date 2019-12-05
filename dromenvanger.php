<?php
$personen = array();
echo "\n Hoeveel vrienden zal ik vragen om hun droom? ";
$aantal_vrienden = readline();
for ($i=0; $i < $aantal_vrienden; $i++)
{
  $naam;
  $dromen = array();
  $aantal_dromen;
  echo "Wat is jouw naam? "; $naam = readline();
  echo "Hoeveel dromen ga je opgeven? "; $aantal_dromen = readline();
  for ($j=0; $j < $aantal_dromen; $j++)
  {
    echo "Wat is jouw droom? " . ($j + 1) . "? "; array_push($dromen, readline());
  }
  $persoon = array('Naam' => $naam, 'Dromen' => $dromen);
  array_push($personen, $persoon);
}
for ($i=0; $i < $aantal_vrienden; $i++)
{
  echo ' ' . $personen[$i]['Naam'] . ' zijn dromen zijn: ' . "\n";
  for ($j=0; $j < count($personen[$i]['Dromen']); $j++)
  {
    	echo ' ' . $personen[$i]['Dromen'][$j] . "\n";
  }
}
 ?>

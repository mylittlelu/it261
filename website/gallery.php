<?php
include('config.php');
include('./includes/header.inc');

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hillary_Clinton'] = 'clint_Former secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
// variable key                value
// $name                       $image

?>
<div id="wrapper">



<main>
<h1>Gallery</h1>
<table>
    <?php foreach($people as $name => $image)         :?>
    <tr>
        <td><img src="images/<?php echo substr($image,0,5)   ;?>.jpg" alt="<?php echo str_replace('_',' ', $name)  ;?>"></td>
        <td><?php echo str_replace('_',' ', $name)  ;?></td>
        <td><?php echo substr($image,6)  ;?></td>
        <td class="resize"><img src="images/<?php echo substr($image,0,4)   ;?>.jpg" alt="<?php echo str_replace('_',' ', $name)  ;?>"></td>
    </tr>
    <?php endforeach; ?>
    </table>

</main>


</div>
<!--end wrapper-->

<?php
include('./includes/footer.inc');

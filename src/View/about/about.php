<?php
ob_start();
?>
<div id="about">
    <div id="description">
     <figure>
         <img src="../../../../Projet3/images/portrait.jpg" alt="Jean">
        <figcaption>
            Cras sit amet nulla condimentum, commodo diam sed, euismod erat. Cras non mi ipsum. Etiam sit amet diam
            hendrerit, accumsan ipsum vel, luctus augue. Cras vitae rhoncus ipsum. Pellentesque habitant morbi tristique
            senectus et netus et malesuada fames ac turpis egestas.  Maecenas urna urna, luctus quis varius in, convallis ac
            quam. Aliquam pellentesque, tellus vitae  gravida  vehicula, est turpis laoreet turpis, ultricies lobortis orci
            sapien ac eros. Nam hendrerit eros eget  dapibus iaculis. Ut sodales eros in ante vulputate, sed interdum nibh condimentum.
        </figcaption>
     </figure>
    </div>
    <h3>Bibliographie</h3>
    <div id="allbooks">
        <table>
            <tr>
                <td>1999 - Le bruit de l'eau</td>
                <td>Maecenas sit amet metus enim. Phasellus commodo egestas egestas. Curabitur sit amet tempus lectus, ut bibendum ante. Aenean et ornare tortor, nec pretium purus. Aenean orci lorem, commodo ac interdum vel, viverra non nisi. Aliquam erat volutpat. Morbi pulvinar mauris sit amet nisl aliquet hendrerit. Donec neque nunc, tempor nec nisi eget, iaculis imperdiet augue.</td>
            </tr>
            <tr>
                <td>2005 - La femme qui ne savais pas</td>
                <td>Aenean cursus nunc a urna pretium imperdiet. Aliquam risus odio, varius a elit vel, fermentum pretium urna. Nulla pellentesque nunc non tellus ultrices scelerisque. Integer fermentum, ante vitae scelerisque gravida, nulla lacus feugiat lacus, ac viverra massa leo luctus erat.</td>
            </tr>
            <tr>
                <td>2008 - 46ème rue</td>
                <td>Ut efficitur commodo nibh quis dapibus. Sed consectetur, nulla sit amet feugiat iaculis, nulla lacus finibus ipsum, eget pellentesque elit eros et justo. Aliquam blandit condimentum iaculis. Mauris iaculis, elit sed malesuada mattis, ex tellus gravida ante, at mollis tellus mi sed sapien. Aenean at lorem at orci elementum ultricies sit amet sed nibh. Suspendisse nec rutrum purus, in sodales erat.</td>
            </tr>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();
?>
<?php
include("src/View/base.php");
?>

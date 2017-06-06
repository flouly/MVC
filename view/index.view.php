
    <h1>Utilisateurs</h1>
    <table class = table>
        
        <tr >
            <td>Id</td>  
            <td>Nom</td>
            <td>Prenom</td>
            <td>Email</td>
            <td>Adresse</td>
        </tr> 
        <?php
        foreach ($users as $user) :
            ?>
        
        <tr >
            <td><?= $user->getId(); ?></td>  
            <td><?= $user->getLastname() ; ?></td>
            <td><?= $user->getFirstname() ; ?></td>
            <td><?= $user->getEmail() ; ?></td>
            <td><?= $user->getAddress() ; ?></td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





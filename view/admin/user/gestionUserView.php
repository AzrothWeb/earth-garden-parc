<div class="container text-center">
    <h1>Gestionnaire des utilisateurs</h1>
    <table class="bg-light">
        <thead>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Pseudo</td>
            <td>Role</td>
            <td>Éditer</td>
            <td>Supprimer</td>
        </thead>
        <tbody>

            <?php
            foreach ($resultat as $result) {
                echo '<tr>';
                echo '<td>' . $result->name_user . '</td>';
                echo '<td>' . $result->firstname_user . '</td>';
                echo '<td>' . $result->pseudo_user . '</td>';
                echo '<td>' . $result->name_role . '</td>';
                echo "<td>" . "
                    <form action='index' method='get'>
                        <input type='hidden' value='edit-user' name='page'>
                        <input type='hidden' value='" . $result->id_user . "' name='id_user'>
                        <button type='submit' class='btn btn-success'><i class='fas fa-edit'></i></button>
                    </form>
                    " . "</td>";
                echo "<td>" . "
                    <form action='index' method='get'>
                        <input type='hidden' value='resultat-user' name='page'>
                        <input type='hidden' value='" . $result->id_user . "' name='id_user'>
                        <input type='hidden' value='delete' name='mode'>
                        <button type='submit' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button>
                    </form>
                    " . "</td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <a href="index?page=ajout-user" class="btn btn-primary">Ajouter un utilisateur</a>

</div>

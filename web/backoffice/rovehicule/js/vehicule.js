/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function chargerModele(idMarque)
{
    var url = Routing.generate('ro_vehicule_remplir_modele');
    var modele = 'ro_vehicule_vehiculetype_modele';
    alert(url);

    $.ajax({type: "POST",
        url: url,
        data: {'idMarque': idMarque},
        dataType: 'JSON',
        timeout: 30000,
        success: function (data) {
alert(data);
            //réinitialise la liste des joueurs
            /*$(playerElement).html('<option value> -- Tous -- </option>');

            //met à jour la liste des joueurs
            $.each(data, function (index) {
                var id = data[index].id;
                var name = data[index].name;
                $(playerElement).append('<option value="' + id + '">' + name + '</option>');
            });*/
        },
        error: function () {
            alert('Erreur, la connexion au serveur a été interrompue');
        }
    });
}


